<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontakAdminController extends Controller
{
    public function index()
    {
        return view('admin.kontak.index');
    }
}
