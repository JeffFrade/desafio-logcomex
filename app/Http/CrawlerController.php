<?php

namespace App\Http;

use App\Core\Support\Controller;

class CrawlerController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'works']);
    }
}
