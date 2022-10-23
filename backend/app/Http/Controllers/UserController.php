<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
 

class UserController extends Controller
{
    public function listUser(Request $request)
    {
        $listUser = User::all();

        return response()->json($listUser);
    }

    public function listUserLine($user)
    {
        $userLine = (new User)->userLine($user);

        return response()->json($userLine);
    }

    public function addUser(Request $request)
    {
        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);
        $newUser->save();
        

        return response()->json('success');
    }

    public function editUser(User $user, Request $request)
    {
        return response()->json($user);
    }

    public function updateUser(User $user, Request $request)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return response()->json('success');
    }

    public function deleteUser(User $user, Request $request)
    {
        $user->delete();

        return response()->json('success');
    }
}
