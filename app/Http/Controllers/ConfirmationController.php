<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ConfirmationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Session::has('success-message')) {
            return redirect()->route('allproducts');
        }
        
        return view('manage.confirmation.index');
    }
}
