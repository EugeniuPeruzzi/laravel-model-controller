<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// utilizzo il model del data base con il nome Comics
use App\Models\Comics;


class PageController extends Controller
{
    public function index(){
        return view('home');
    }
}
