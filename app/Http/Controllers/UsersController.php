<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index()
    {
    	$users = [
			'0' => [
				'first_name' => 'Galang',
				'last_name' => 'Arbi',
				'location' => 'Sidoarjo'
			],
			'1' => [
				'first_name' => 'Rafika',
				'last_name' => 'Fauzia',
				'location' => 'Malang'
			]
		];
		return view('admin.users.index', compact('users'));
    }
}
