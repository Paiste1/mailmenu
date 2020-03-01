<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::where('lft', '!=', '')->get();

        return view('welcome', [
            'menu' => $menu
        ]);
    }

    public function show($path)
    {
        //dd($path);
        $menu = Menu::where('lft', '!=', '')->get();
        $link = Menu::where('path', '=', $path)->get();

       // dd($link);

        return view('show', [
            'link' => $link[0],
            'menu' => $menu
        ]);
    }
}
