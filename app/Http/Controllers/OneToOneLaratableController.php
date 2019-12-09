<?php

namespace App\Http\Controllers;

use App\User;
use Freshbitsweb\Laratables\Laratables;

class OneToOneLaratableController extends Controller
{
    /**
     * Show Table Header column
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
     * @return Jason
     **/
    public function oneToOneData()
    {
        return Laratables::recordsOf(User::class);
    }
}