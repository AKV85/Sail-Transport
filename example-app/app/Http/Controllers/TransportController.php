<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransportRequest;
use App\Http\Requests\UpdateTransportRequest;
use Illuminate\Http\Request;
use App\Models\Transport;
use App\Models\Manufacturer;
use App\Models\CarModel;
use Inertia\Inertia;

class TransportController extends Controller
{
    public function index()
    {
        $transports = Transport::with('carModel.manufacturer')->get();

        return Inertia::render('transports/Index', ['transports' => $transports]);
    }

    public function show($id)
    {
        $transport = Transport::with('carModel.manufacturer')->findOrFail($id);

        return Inertia::render('transports/Show', ['transport' => $transport]);
    }

    public function create()
    {
        $manufacturers = Manufacturer::all();
        $carModels = CarModel::all();

        return Inertia::render('transports/Create', [
            'manufacturers' => $manufacturers,
            'carModels' => $carModels,
        ]);
    }

    public function store(StoreTransportRequest $request)
    {
        $manufacturerName = $request->input('manufacturer_name');
        $carModelName = $request->input('car_model');

        $manufacturer = Manufacturer::firstOrCreate(['name' => $manufacturerName]);

        $carModel = CarModel::firstOrCreate(['name' => $carModelName, 'manufacturer_id' => $manufacturer->id]);

        $transport = Transport::create(array_merge(
            $request->validated(),
            ['car_model_id' => $carModel->id]
        ));

        return to_route('transports.index')->with('success', 'Transport created successfully!');
    }

    public function edit($id)
    {
        $transport = Transport::with('carModel.manufacturer')->findOrFail($id);

        return Inertia::render('transports/Edit', ['transport' => $transport]);
    }

    public function update(UpdateTransportRequest $request, $id)
    {
        $transport = Transport::with('carModel.manufacturer')->findOrFail($id);
        $transport->update($request->all());

        $manufacturerName = $request->input('manufacturer_name');
        if ($manufacturerName) {
            $transport->carModel->manufacturer->update(['name' => $manufacturerName]);
        }

        $carModel = $request->input('car_model');
        if ($carModel) {
            $transport->carModel->update(['name' => $carModel]);
        }

        return to_route('transports.index')->with('success', 'Transport updated successfully!');
    }

    public function destroy($id)
    {
        $transport = Transport::findOrFail($id);
        $transport->delete();

        return redirect()->route('transports.index')->with('success', 'Transport deleted successfully!');
    }
}
