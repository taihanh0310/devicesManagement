<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct() {
        parent::__construct();
        
        $this->middleware('auth');
    }
}
