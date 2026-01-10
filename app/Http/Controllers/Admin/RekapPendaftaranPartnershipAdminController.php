<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RekapPendaftaranPartnershipAdminController extends Controller
{
    public function index()
    {
        return view('admin.rekap-pendaftaran-partnership.index');
    }
}
