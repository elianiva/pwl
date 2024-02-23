<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;

class PageController extends Controller
{
    public function index(): Application
    {
        return view('welcome');
    }

    public function about(): string
    {
        return "About page";
    }

    public function articles(string $id): string
    {
        return "Article: " . $id;
    }
}
