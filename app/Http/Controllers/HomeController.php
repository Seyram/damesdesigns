<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreContactRequest;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use Illuminate\Support\Facades\Session;
use App\Contact;
use App\Sample;
class HomeController
{
    public function index()
    {
        $samples = Sample::orderBy('id', 'desc')->take(1)->get();
        return view('home.home', compact('samples'));
    }

    public function about()
    {
        return view('home.about');
    }

    public function portfolio()
    {
        return view('home.portfolio');
    }
    public function projectDetail()
    {
        return view('home.project-detail');
    }
    public function projectItem()
    {
        return view('home.project-item');
    }
    /*
     public function contact()
    {
        return view('home.contact');
    }
    */



    public function contactUs()
    {
        $data['page_title'] = "Contact Us";
        return view('home.contact', $data);
    }



    public function postContact(StoreContactRequest $request)
    {
        try{
            $contact = Contact::create($request->all());
            session()->flash('message', 'Your message has been sent successfully.');
            Session::flash('title', 'success');
            Session::flash('type', 'success');

            return redirect()->route('contact-us');

        }
        catch(\PDOException $e){

            session()->flash('message', 'Some Problems Occurred, Please Try Again!');
            Session::flash('type', 'danger');
            return redirect()->back();
        }



    }
}
