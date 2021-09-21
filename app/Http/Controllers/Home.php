<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(Request $request)
    {
        $data = [
            [
                "link" => "page1",
                "name" => "Page One",
            ],
            [
                "link" => "page2",
                "name" => "Page Two",
            ],
            [
                "link" => "page3",
                "name" => "Page Three",
            ],
        ];
        return view("home", ["links" => $data]);
    }
}
