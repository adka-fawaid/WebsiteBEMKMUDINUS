<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnershipAdminController extends Controller
{
    public function index()
    {
        return view('admin.partnership.index');
    }
}
