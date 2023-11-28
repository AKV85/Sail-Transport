<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreManufacturerRequest;
use App\Http\Requests\UpdateManufacturerRequest;
use App\Models\Manufacturer;
use Inertia\Inertia;

class ManufacturerController extends Controller
{
    public function index()
    {
        $manufacturers = Manufacturer::all();
        return Inertia::render('manufacturers/Index', ['manufacturers'=>$manufacturers]);
    }

    public function show($id)
    {
        $manufacturer = Manufacturer::findOrFail($id);
        return Inertia::render('manufacturers/Show', ['manufacturer' => $manufacturer]);
    }

    public function create()
    {
        return Inertia::render('manufacturers/Create');
    }

    public function store(StoreManufacturerRequest $request)
    {
        $manufacturer = Manufacturer::create($request->validated());

        return to_route('manufacturers.index')->with('success', 'Manufacturer created successfully!');
    }

    public function edit($id)
    {
        $manufacturer = Manufacturer::findOrFail($id);

        return Inertia::render('manufacturers/Edit', ['manufacturer' => $manufacturer]);
    }

    public function update(UpdateManufacturerRequest $request, $id)
    {
        $manufacturer = Manufacturer::findOrFail($id);
        $manufacturer->update($request->all());

        return to_route('manufacturers.index')->with('success', 'Manufacturer updated successfully!');
    }

    public function destroy($id)
    {
        $manufacturer = Manufacturer::findOrFail($id);
        $manufacturer->delete();
        return redirect()->route('manufacturers.index')->with('success', 'Manufacturer deleted successfully!');
    }
}
