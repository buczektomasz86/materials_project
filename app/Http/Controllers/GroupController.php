<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests\EditGroupRequest;
use App\Http\Requests\StoreGroupRequest;

class GroupController extends Controller
{

    public function index()
    {
        $groups = Group::where("enable", 1)->get();

        return view('groupsMaterials', compact('groups'));
    }

    public function create()
    {
        $groups = Group::where('enable', 1)->get();

        return view('groupMaterialsCreate', compact('groups'));
    }

    public function store(StoreGroupRequest $request)
    {
        $group = new Group($request->all());
        $group->save();

        return redirect('grupy_materialow');
    }

    public function edit($group_id)
    {
        $group = Group::findOrFail($group_id);
        $groups = Group::where([
            ['parent_group_id', '!=', $group_id],
            ['enable', 1],
        ])
            ->orWhere([
                ['parent_group_id', null],
                ['enable', 1],
            ])
            ->get();

        return view('groupMaterialsEdit', compact('group', 'groups'));
    }

    public function update(EditGroupRequest $request, $group_id)
    {
        $group = Group::findOrFail($group_id);
        $group->enable = 1;
        $group->update($request->all());

        return redirect('grupy_materialow');
    }

    public function destory($group_id)
    {
    }
}
