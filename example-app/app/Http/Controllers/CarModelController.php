<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarModelRequest;
use App\Http\Requests\UpdateCarModelRequest;
use App\Models\CarModel;
use Inertia\Inertia;

class CarModelController extends Controller
{
    public function index()
    {
        $carModels = CarModel::with('manufacturer')->get();

        return Inertia::render('carModels/Index', ['carModels' => $carModels]);
    }

    public function show($id)
    {
        $carModel = CarModel::with('manufacturer')->findOrFail($id);

        return Inertia::render('carModels/Show', ['carModel' => $carModel]);
    }

    public function create()
    {
        return Inertia::render('carModels/Create');
    }

    public function store(StoreCarModelRequest $request)
    {
        $carModel = CarModel::create($request->validated());

        return to_route('carModels.index')->with('success', 'CarModel created successfully!');
    }

    public function edit($id)
    {
        $carModel = CarModel::findOrFail($id);

        return Inertia::render('carModels/Edit', ['carModel' => $carModel]);
    }

    public function update(UpdateCarModelRequest $request, $id)
    {
        $carModel = CarModel::findOrFail($id);
        $carModel->update($request->all());

        return to_route('carModels.index')->with('success', 'CarModel updated successfully!');
    }

    public function destroy($id)
    {
        $carModel = CarModel::findOrFail($id);
        $carModel->delete();

        return redirect()->route('carModels.index')->with('success', 'CarModel deleted successfully!');
    }
}
