<?php

namespace App\Http\Controllers;

use App\Group;

class IndexController extends Controller
{
    public function index()
    {
        $groups = Group::where([
            ['parent_group_id', null],
            ['enable', 1],
        ])->get();

        $allGroups = Group::pluck('name', 'parent_group_id', 'id')->all();

        return view('index', compact('groups', 'allGroups'));
    }
}
