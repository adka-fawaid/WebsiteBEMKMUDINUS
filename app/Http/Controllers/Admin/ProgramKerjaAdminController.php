<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramKerjaAdminController extends Controller
{
    public function index()
    {
        return view('admin.program-kerja.index');
    }
}
