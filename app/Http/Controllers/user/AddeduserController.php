<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddeduserController extends Controller
{
    public function index()
    {
        return view('user.addedUser.index');
    }
    public function data()
    {
        $userId = auth()->id();
        $addedUsers = AddedUser::select(['id', 'name', 'email', 'phone'])
            ->where('user_id', $userId)
            ->get();

        return Datatables::of($addedUsers)->make(true);
    }
}
