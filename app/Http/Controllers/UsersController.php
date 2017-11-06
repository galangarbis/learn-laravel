<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

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

    public function create()
    {
    	return view('admin.users.create');
    }

    public function store(Request $request)
    {
    	User::create($request->all());
    	return 'success';
    	return $request->all();
    }
}
