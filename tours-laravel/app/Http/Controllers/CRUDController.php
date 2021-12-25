<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tours;
use App\Models\TypeTours;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CRUDController extends Controller
{
    public function index()
    {
        $tours = Tours::all();
        return response()->json([
            'status' => 200,
            'tours' => $tours,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
//            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'image' => 'required',
            'time' => 'required',
            'price' => 'required',
            'schedule' => 'required',
            'id_type' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'validate_err' => $validator->messages(),
            ]);
        } else {
            $tour = new Tours;
            $tour->name = $request->input('name');
//            $image = $request->file('image');
//            $filename =  $image->getClientOriginalExtension();
//            $image->move('upload/', $filename);
//            $tour->image = $filename;
            $tour->image = $request->input('image');
            $tour->time = $request->input('time');
            $tour->price = $request->input('price');
            $tour->schedule = $request->input('schedule');
            $tour->price = $request->input('id_type');

            $tour->save();

            return response()->json([
                'status' => 200,
                'message' => 'Tour Added Successfully',
            ]);
        }

    }

    public function edit($id)
    {
        //Return edit value view
        $tour = Tours::find($id);
        if ($tour) {
            return response()->json([
                'status' => 200,
                'tour' => $tour,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Tour ID Found',
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'image' => 'required',
            'time' => 'required',
            'price' => 'required',
            'schedule' => 'required',
            'id_type' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'validationErrors' => $validator->messages(),
            ]);
        } else {
            $tour = Tours::find($id);
            if ($tour) {

                $tour->name = $request->input('name');
                $tour->image = $request->input('image');
                $tour->time = $request->input('time');
                $tour->price = $request->input('price');
                $tour->schedule = $request->input('schedule');
                $tour->id_type = $request->input('id_type');
                $tour->update();

                return response()->json([
                    'status' => 200,
                    'message' => 'Tour Updated Successfully',
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'No Tour ID Found',
                ]);
            }
        }
    }

    public function destroy($id)
    {
        $tour = Tours::find($id);
        if ($tour) {
            $tour->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Tour Deleted Successfully',
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Tour ID Found',
            ]);
        }
    }
}
