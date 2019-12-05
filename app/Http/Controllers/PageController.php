<?php

namespace App\Http\Controllers;

$team = [
    ['name' => 'Luke Skywalker', 'position' => "CEO's son"],
    ['name' => 'C-3PO', 'position' => 'protocol droid'],
    ['name' => 'R2-D2', 'position' => 'astromech droid'],
    ['name' => 'Darth Vader', 'position' => 'CEO']
];

class PageController extends Controller
{
    public function home()
    {
        return view('page.welcome');
    }

    public function about()
    {   
        $team = [
            ['name' => 'Luke Skywalker', 'position' => "CEO's son"],
            ['name' => 'C-3PO', 'position' => 'protocol droid'],
            ['name' => 'R2-D2', 'position' => 'astromech droid'],
            ['name' => 'Darth Vader', 'position' => 'CEO']
        ];

        return view('page.about', compact('team'));
    }
    
}