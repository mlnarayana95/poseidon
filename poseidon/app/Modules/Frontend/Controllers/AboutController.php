<?php

namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Frontend::about");
    }
}
