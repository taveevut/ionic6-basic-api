<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function store(Request $request)
    {
        $result = Member::create($request->all());

        return response()->json($result);
    }

    public function login(Request $request)
    {
        $result = Member::where("email", $request->input('email'))
            ->where("password", $request->input('password'))
            ->first();

        return response()->json($result);
    }
}
