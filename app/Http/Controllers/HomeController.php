<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index(){
        $allCampaign = DB::table('campaign')->get();
        // dd($allCampaign);
        return view('home',[
            'allCampaign' => $allCampaign
        ]);
    }
}
