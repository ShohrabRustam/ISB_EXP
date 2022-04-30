<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserDashboard extends Controller
{
    public function _home()
    {
        if (Session::has('user')) {
            return view('Dashboard.dashboard');
        } else {
            return redirect('/login');
        }
    }

    public function _health()
    {
        if (Session::has('user')) {
            return view('Dashboard.healthPolicy');
        } else {
            return redirect('/login');
        }
    }

    public function _life()
    {
        if (Session::has('user')) {
            return view('Dashboard.lifePolicy');
        } else {
            return redirect('/login');
        }
    }

    public function _bike()
    {
        if (Session::has('user')) {
            return view('Dashboard.BikePolicy');
        } else {
            return redirect('/login');
        }
    }

    public function _car()
    {
        if (Session::has('user')) {

            return view('Dashboard.carPolicy');
        } else {
            return redirect('/login');
        }
    }
}
