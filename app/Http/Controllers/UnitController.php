<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditUnitRequest;
use App\Http\Requests\StoreUnitRequest;
use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::get();

        return view('unitsMeasurement', compact('units'));
    }

    public function create()
    {
        return view('unitsMeasurementCreate');
    }

    public function store(StoreUnitRequest $request)
    {
        $unit = new Unit($request->all());
        $unit->save();

        return redirect('jednostki_miary');
    }

    public function edit($unit_id)
    {
        $unit = Unit::findOrFail($unit_id);

        return view('unitsMeasurementEdit', compact('unit'));
    }

    public function update(EditUnitRequest $request, $unit_id)
    {

        $unit = Unit::findOrFail($unit_id);
        $unit->update($request->all());

        return redirect('jednostki_miary');
    }

    public function destory(Request $request)
    {
    }
}
