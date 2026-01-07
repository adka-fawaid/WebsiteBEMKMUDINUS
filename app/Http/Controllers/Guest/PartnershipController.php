<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Partnership;

class PartnershipController extends Controller
{
    public function index()
    {
        return view('guest.partnership.partnership', [
            'partnerships' => Partnership::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail($slug)
    {
        $partnership = Partnership::where('slug', $slug)->first();
        return view('guest.partnership.detail_partnership', [
            'partnership' => $partnership
        ]);
    }
}
