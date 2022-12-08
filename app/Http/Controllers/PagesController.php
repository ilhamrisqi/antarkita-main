<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome')->with([
            'carousel_top' => [
                'images/prewed/prewed1_sm.jpg',
                'images/prewed/prewed3_SM.jpg',
                'images/prewed/prewed5_sm.JPG',
            ],

            'carousel_bottom' => [
                'images/prewed/prewed6_sm.JPG',
                'images/singles/single3_SM.jpg',
                'images/singles/single2_SM.jpg',
            ]
        ]);
    }

    public function contact_us()
    {
        return view('contact');
    }

    public function about_us()
    {
        return view('aboutus');
    }

    public function admin()
    {
        return view('admin');
    }

    public function pricelist()
    {
        return view('pricelist');
    }


    public function detail()
    {
        return view('detail');
    }
}
