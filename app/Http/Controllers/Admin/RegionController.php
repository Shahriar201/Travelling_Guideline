<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Region;


class RegionController extends Controller
{

    public function index()
    {
        $regions = Region::orderBy('id')->get();
        return view('admin.view.region',['regions'=> $regions]);
    }

    public function create()
    {
        return view('admin.add.region');
    }


    public function store(Request $request)
    {
        $region = Region::create($this->validateRequest());
        $this->storeImage($region);
        return redirect()->route('region.create')
            ->with('success', 'Blog created successfully.');
    }


    public function show($id)
    {

    }

    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }

    public function validateRequest()
    {
        return tap(request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]), function () {
            if (request()->hasFile('image')) {
                request()->validate([
                    'image' => 'required|image|max:5000'
                ]);
            }
        });
    }

    public function storeImage($region)
    {

        if (request()->has('image')) {
            $region->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
        }
    }
}
