<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnotherPage extends Controller
{
    public function p1(Request $request)
    {
        $data = [
            [
                "link" => "page2",
                "name" => "Page Two",
            ],
            [
                "link" => "page3",
                "name" => "Page Three",
            ],
        ];
        return view("pages", ["links" => $data]);
    }

    public function p2(Request $request)
    {
        $data = [
            [
                "link" => "page1",
                "name" => "Page One",
            ],
            [
                "link" => "page3",
                "name" => "Page Three",
            ],
        ];
        return view("pages", ["links" => $data]);
    }

    public function p3(Request $request)
    {
        $data = [
            [
                "link" => "page2",
                "name" => "Page Two",
            ],
            [
                "link" => "page1",
                "name" => "Page One",
            ],
        ];
        return view("pages", ["links" => $data]);
    }
}
