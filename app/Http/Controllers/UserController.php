<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Use User Model
use App\Models\User;

//Use Resource to convert into json
use App\Http\Resources\UserResource as UserResource;

class UserController extends Controller
{
    public function getusers()
	{
		$users = User::get();
		return UserResource::collection($users);
	}
}
