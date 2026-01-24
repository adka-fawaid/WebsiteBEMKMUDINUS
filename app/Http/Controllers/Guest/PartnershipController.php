<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Partnership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnershipController extends Controller
{
    public function index()
    {
        $partnerships = Partnership::all();

        return view('guest.partnership.index', compact(
            'partnerships'
        ));
    }

    public function mediaPartner()
    {
        return view('guest.partnership.media-partner.index');
    }

    public function prosedurMediaPartner()
    {
        return view('guest.partnership.media-partner.prosedur.index');
    }

    public function prosedur()
    {
        return view('guest.partnership.prosedur.index');
    }
}
