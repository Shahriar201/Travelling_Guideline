<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Place;
use Illuminate\Http\Request;
use App\Region;

class PlaceController extends Controller
{
    public function index()
    {
        $data = [
            'places' => Place::all(),
            'regions' => Region::all()
        ];
        return view('admin.view.place')->with($data);
    }

    public function create()
    {
        $data['places'] = Place::orderBy('id')->get();
        $data['regions'] = Region::orderBy('id')->get();

        return view('admin.add.place')->with($data);
    }

    public function store(Request $request)
    {
        $place = Place::create($this->validateRequest());
        $this->storeImage($place);

        return redirect()->route('place.create')
            ->with('success', 'Places created successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function validateRequest()
    {
        return tap(request()->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'region_id' => 'required',
        ]), function () {
            if (request()->hasFile('image')) {
                request()->validate([
                    'image' => 'required|image|max:5000'
                ]);
            }
        });
    }

    public function storeImage($place)
    {

        if (request()->has('image')) {
            $place->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
        }
    }
}
