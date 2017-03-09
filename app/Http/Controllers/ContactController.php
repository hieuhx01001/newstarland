<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Markdown;
use Mail;
use Validator, Input, Redirect;

class ContactController extends Controller
{

	public function index()
	{
		return view('newstarland.contact.contact');
	}

	public function getContact(Request $request)
	{
		dd($request['name']);
	}

}
