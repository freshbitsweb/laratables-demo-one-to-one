<?php

namespace App\Http\Controllers;

use App\User;
use Freshbitsweb\Laratables\Laratables;

class OneToOneLaratableController extends Controller
{
    /**
     * Display the Home Page.
     *
     * @return Illuminate\Http\Response
     **/
    public function index()
    {
        return view('one_to_one');
    }

    /**
     * return data of the One To One Relationship datatables.
     *
     * @return Illuminate\Http\JsonResponse
     **/
    public function oneToOneData()
    {
        return Laratables::recordsOf(User::class);
    }
}
