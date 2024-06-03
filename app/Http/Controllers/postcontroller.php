<?php

namespace App\Http\Controllers;

use app\Models\post;
use illuminate\View/View;
use illuminate\Http\Request;

class postcontroller extends Controller
{
    /**
     * Display a listing of the resouce.
     *
     * @return view
     */
     public Fuction index(): view
     {
        // Kirim data post ke view
        return view ('post.index');
     }
}