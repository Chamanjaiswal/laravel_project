<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $data = array();

    public function index(Request $req, $name) {
        $this->data['student'] = array('name' => 'Chaman', 'age' => '20');
        return view('home', $this->data);
    }
}
