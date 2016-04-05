<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PagesController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
    	return view('pages/welcome')->withPosts($posts);
    }
    public function getAbout()
    {
    	$firstname = 'Rutvij';
    	$lastname = 'Kothari';
    	$full = $firstname . " " . $lastname;
    	return view('pages/about')->with("fullname", $full);
    }
    public function getContact()
    {
    	$firstname = 'Rutvij';
    	$lastname = 'Kothari';
    	$full = $firstname . " " . $lastname;
    	$data = [];
    	$data['email'] = 'rutvijkothari@gmail.com';
    	$data['fullname'] = $full;
    	return view('pages.contact')->withData($data);
    }
}
