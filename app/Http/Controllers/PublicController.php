<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function __construct(){

    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('public.index');
    }

    public function showPublic(){
        return view('public.index');
    }
    public function showHome(){
        return view('public.index');
    }

    public function showAbout(){
        return view('public.about');
    }


    public function showProjects(){
        return view('public.projects');
    }

    public function showContact(){
        return view('public.contact');
    }

    public function showVideos(){
        return view('public.video');
    }
    public function showGallary(){
        return view('public.galary');
    }

    /**
     * this processes the registration form
     */
    public function postSignup(){
        dd("you did it");
    }

    public function showSignup(){
        return view('public.signup');
    }


}
