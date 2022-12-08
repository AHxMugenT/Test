<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;

class DashboardController extends Controller
{
    public function index()
    {
        // $user = User::find();
        return view('dashboard.index');
    }

    public function show()
    {
        $user_data = UserData::all();
        return view('user.index', compact('user_data'));
    }
}
