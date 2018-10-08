<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Αρχική Σελίδα';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'Σχετικά με εμάς';
        return view('pages.about');
    }

    public function contact(){
        $title = 'Επικοινωνία';
        return view('pages.contact');
    }

    public function busRoutes(){
        $title = 'Όλα τα δρομολόγια';
        return view('pages.bus-routes');
    }

    public function mapComplete(){
        $title = 'Όλα τα δρομολόγια';
        return view('pages.map-complete');
    }
    
    public function romatzaEglikada(){
        $title = 'ΡΟΜΑΝΤΖΑ - ΕΓΛΥΚΑΔΑ';
        return view('pages.busroutes.romatza-eglikada');
    }

    public function tarabouraNeosdromos(){
        $title = 'ΤΑΡΑΜΠΟΥΡΑ - ΝΕΟΣ ΔΡΟΜΟΣ';
        return view('pages.busroutes.taraboura-neosdromos');
    }
}
