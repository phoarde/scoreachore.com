<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contractors;

class selectedToJason extends Controller
{
    /** * Write code on Method * * @return response() */
    $response
    public function index()
    {
        $input = ['title' => 'Demo Title', 'data' => ['1' => 'One', '2' => 'Two', '3' => 'Three']];
        $skills = Item::create($input);
        dd($item->data);
    }
}
