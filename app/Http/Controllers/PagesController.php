<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex()
    {
    	return view('pages/welcome');
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
