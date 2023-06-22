<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

class ApiAdminController extends Controller
{
    public function create() {
        return view('admin');
    }

}
