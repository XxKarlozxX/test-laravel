<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index () {
        return view('pages.index');
    }

    public function about () {
        return view('pages.about');
    }
    public function service () {
        $data = [
            'title' => 'Service',
            'services' => ['Web Design', 'Programming', 'SEO']
        ];
        return view('pages.service')->with($data);
    }
}