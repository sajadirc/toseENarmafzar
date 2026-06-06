<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    #home Screen Of Panel
    public function index(){
        return view('panel.panel');
    }
}
