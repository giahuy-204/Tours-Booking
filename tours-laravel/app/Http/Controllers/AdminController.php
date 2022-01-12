<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bills;
use App\Models\Tours;
use App\Models\TypeTours;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin-index');
    }
    
    public function bills()
    {
        $bills = Bills::paginate(8);
        return view('admin.admin-bills', compact('bills'));
    }

    public function tours()
    {
        $tours = Tours::paginate(8);
        return view('admin.admin-tours', compact('tours'));
    }

    public function types()
    {
        $types = TypeTours::paginate(8);
        return view('admin.admin-types', compact('types'));
    }

    public function addTour() {
        $types = TypeTours::all();
        return view('admin.admin-addtour', compact('types'));
    }

    public function postAddTour(Request $request) {
        $tour = new Tours();
        
        $image1 = $request->file('fImg');
        $image1_name = $image1->getClientOriginalName();
        $path1   = public_path('/sources/assets/img/'. $request->tourType .'/'. $image1_name );
        $image1_upload = '/sources/assets/img/'. $request->tourType .'/'. $image1_name;

        $image2 = $request->file('sImg');
        $image2_name = $image2->getClientOriginalName();
        $path2   = public_path('/sources/assets/img/'. $request->tourType .'/'. $image2_name );
        $image2_upload = '/sources/assets/img/'. $request->tourType .'/'. $image2_name;

        // create directory in case type folder isn't exists
        Storage::MakeDirectory(public_path('/sources/assets/img/'.$path1));
        Storage::MakeDirectory(public_path('/sources/assets/img/'.$path2));
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

    public function postAdminEdit($id) {

    }

    public function deleteTour($id)
    {
        $tour = Tours::find($id);
        $tour -> delete();
        echo '
            <script>
                alert("Tour deleted!");
                window.location.assign("/admin-tours");
            </script>
        ';
    }
}
