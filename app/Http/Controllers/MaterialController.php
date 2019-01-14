<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests\EditMaterialRequest;
use App\Http\Requests\StoreMaterialRequest;
use App\Material;
use App\Unit;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::where("enable", 1)->get();

        return view('materials', compact('materials'));
    }

    public function create()
    {
        $groups = Group::where('enable', 1)->get();
        $units = Unit::get();

        return view('materialCreate', compact('groups', 'units'));
    }

    public function store(StoreMaterialRequest $request)
    {
        $material = new Material($request->all());
        $material->save();

        return redirect('materialy');
    }

    public function edit($material_id)
    {
        $groups = Group::where('enable', 1)->get();
        $units = Unit::get();
        $material = Material::findOrFail($material_id);

        return view('materialEdit', compact('material', 'groups', 'units'));
    }

    public function update(EditMaterialRequest $request, $material_id)
    {
        $material = Material::findOrFail($material_id);
        $material->enable = 1;
        $material->update($request->all());

        return redirect('materialy');
    }

    public function destory(Request $request)
    {
    }

}
