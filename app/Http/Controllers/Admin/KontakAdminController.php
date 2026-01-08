<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kontak;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KontakAdminController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::all();

        return view('admin.kontak.index', compact('kontaks'));
    }
}
