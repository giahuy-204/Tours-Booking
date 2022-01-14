<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bills;
use App\Models\Tours;
use App\Models\TypeTours;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
use File;

class AdminController extends Controller
{
    public function index()
    {
        $income = Bills::sum('total_price');
        $income_month = Bills::where('created_at', '>', now()->subDays(30)->endOfDay())->sum('total_price');
        $tours_booked = Bills::all();
        $tours_available = Tours::all();
        $users = User::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
        return view('admin.admin-index', compact('income', 'income_month', 'tours_booked', 'tours_available', 'users'));
    }

    //functions related to tours table
    
    public function tours() {
        $tours = Tours::paginate(8);
        return view('admin.admin-tours', compact('tours'));
    }

    public function addTour() {
        $types = TypeTours::all();
        return view('admin.admin-addtour', compact('types'));
    }

    public function postAddTour(Request $request) {
        $tour = new Tours();
        
        $image1 = $request->file('fImg');
        $image1_name = $image1->getClientOriginalName();
        $path1 = public_path('/sources/assets/img/'. $request->tourType .'/'. $image1_name);
        $image1_upload = '/sources/assets/img/'. $request->tourType .'/'. $image1_name;

        $image2 = $request->file('sImg');
        $image2_name = $image2->getClientOriginalName();
        $path2 = public_path('/sources/assets/img/'. $request->tourType .'/'. $image2_name);
        $image2_upload = '/sources/assets/img/'. $request->tourType .'/'. $image2_name;

        // create directory in case type folder isn't exists
        $folder_path = public_path('/sources/assets/img/'. $request->tourType);
        if(!File::exists($folder_path)) {
            File::makeDirectory($folder_path);
        }
        
        Image::make($image1->getRealPath())->save($path1);
        Image::make($image2->getRealPath())->save($path2);

        $tour -> name = $request -> tourName;
        $tour -> image1 = $image1_upload;
        $tour -> image2 = $image2_upload;
        $tour -> short_description = $request -> shortDes;
        $tour -> date_start = $request -> startDate;
        $tour -> number_days = $request -> numDays;
        $tour -> seats = $request -> numSeat;
        $tour -> adult_price = $request -> priceAdult;
        $tour -> children_price = $request -> priceChildren;
        $tour -> youngchildren_price = $request -> priceYChildren;
        $tour -> long_description = $request -> longDes;
        $tour -> id_type = $request -> tourType;
        $tour -> save();

        echo '
            <script>
                alert("Tour added!");
                window.location.assign("/admin-tours");
            </script>
        ';
    }

    public function editTour($id) {
        $tour = Tours::find($id);
        $types = TypeTours::all();
        return view('admin.admin-edittour', compact('tour', 'types'));
    }

    public function postEditTour(Request $request) {
        $id = $request->route('id');
        $tour = Tours::find($id);

        if (request()->has('fImg')){
            File::delete(public_path($tour->image1));
            
            $image1 = $request->file('fImg');
            $image1_name = $image1->getClientOriginalName();
            $path1 = public_path('/sources/assets/img/'. $request->tourType .'/'. $image1_name);
            $image1_upload = '/sources/assets/img/'. $request->tourType .'/'. $image1_name;
            // Storage::MakeDirectory(public_path('/sources/assets/img/'.$path1));
            Image::make($image1->getRealPath())->save($path1);
            $tour -> image1 = $image1_upload;
        }

        if (request()->has('sImg')){
            File::delete(public_path($tour->image2));
            
            $image2 = $request->file('sImg');
            $image2_name = $image2->getClientOriginalName();
            $path2 = public_path('/sources/assets/img/'. $request->tourType .'/'. $image2_name);
            $image2_upload = '/sources/assets/img/'. $request->tourType .'/'. $image2_name;
            // Storage::MakeDirectory(public_path('/sources/assets/img/'.$path2));
            Image::make($image2->getRealPath())->save($path2);
            $tour -> image2 = $image2_upload;
        }
        $tour -> name = $request -> tourName;
        $tour -> short_description = $request -> shortDes;
        $tour -> date_start = $request -> startDate;
        $tour -> number_days = $request -> numDays;
        $tour -> seats = $request -> numSeat;
        $tour -> adult_price = $request -> priceAdult;
        $tour -> children_price = $request -> priceChildren;
        $tour -> youngchildren_price = $request -> priceYChildren;
        $tour -> long_description = $request -> longDes;
        $tour -> id_type = $request -> tourType;
        $tour -> save();

        echo '
            <script>
                alert("Tour edited!");
                window.location.assign("/admin-tours");
            </script>
        ';
    }

    public function deleteTour($id) {
        $tour = Tours::find($id);
        $tour -> delete();
        File::delete(public_path($tour->image1));
        File::delete(public_path($tour->image2));
        echo '
            <script>
                alert("Tour deleted!");
                window.location.assign("/admin-tours");
            </script>
        ';
    }

    //functions related to bills table
    public function bills()
    {
        $bills = Bills::orderBy('id', 'DESC')->paginate(8);
        return view('admin.admin-bills', compact('bills'));
    }

    public function deleteBill($id)
    {
        $bill = Bills::find($id);
        $bill -> delete();
        echo '
            <script>
                alert("Bill deleted!");
                window.location.assign("/admin-bills");
            </script>
        ';
    }

    //functions related to types table
    public function types()
    {
        $types = TypeTours::paginate(8);
        return view('admin.admin-types', compact('types'));
    }

    public function addType() {
        $type = TypeTours::latest()->first();
        return view('admin.admin-addtype' , compact('type'));
    }

    public function postAddType(Request $request) {
        $type = new TypeTours();
        $id = $request -> latestID;
        $next_id = $id + 1;
        
        $image = $request->file('typeImage');
        $image_name = $image->getClientOriginalName();
        $path = public_path('/sources/assets/img/'. $next_id .'/'. $image_name);
        $image_upload = '/sources/assets/img/'. $next_id .'/'. $image_name;

        // create directory in case type folder isn't exists
        $folder_path = public_path('/sources/assets/img/'. $next_id);
        if(!File::exists($folder_path)) {
            File::makeDirectory($folder_path);
        }
        // File::MakeDirectory(public_path('/sources/assets/img/'. $next_id));
        Image::make($image->getRealPath())->save($path);

        $type -> name = $request -> typeName;
        $type -> image = $image_upload;
        $type -> description = $request -> typeDes;
        $type -> save();

        echo '
            <script>
                alert("Tour type added!");
                window.location.assign("/admin-types");
            </script>
        ';
    }

    public function editType($id) {
        $type = TypeTours::find($id);
        return view('admin.admin-edittype', compact('type'));
    }

    public function postEditType(Request $request) {
        $id = $request->route('id');
        $type = TypeTours::find($id);

        if (request()->has('typeImage')){
            File::delete(public_path($type->image));
            
            $image = $request->file('typeImage');
            $image_name = $image->getClientOriginalName();
            $path = public_path('/sources/assets/img/'. $type->id .'/'. $image_name);
            $image_upload = '/sources/assets/img/'. $type->id .'/'. $image_name;
            Image::make($image->getRealPath())->save($path);
            $type -> image = $image_upload;
        }
        $type -> name = $request -> typeName;
        $type -> description = $request -> typeDes;
        $type -> save();

        echo '
            <script>
                alert("Type tour edited!");
                window.location.assign("/admin-types");
            </script>
        ';
    }

    public function deleteType($id) {
        $type = TypeTours::find($id);
        $type -> delete();
        File::delete(public_path($type->image));
        echo '
            <script>
                alert("Tour type deleted!");
                window.location.assign("/admin-types");
            </script>
        ';
    }
}
