<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelolaPartnershipAdminController extends Controller
{
    public function index()
    {
        return view('admin.kelola-partnership.index');
    }
}
