<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class XmlController extends Controller
{
    public function getAll() {
        $xml = XmlParser::load('safe.xml');
        
        $tip = $xml->parse([
            'name' => ['uses' => 'tip.name']    
        ]);
        
        return view('graph', compact('tip'));
    }
}
