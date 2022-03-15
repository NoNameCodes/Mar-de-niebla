<?php

namespace App\Http\Controllers;
use App\Models\Resource;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function resource(Resource $resource)
    {
        return view ('resource', compact('resource'));
    }
}
