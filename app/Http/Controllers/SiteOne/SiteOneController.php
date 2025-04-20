<?php

namespace App\Http\Controllers\SiteOne;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteOneController extends Controller
{
    function home()
    {
        return view('SiteOne.home');
    }
    function viewcontact()
    {
        $contacts = Contact::all();
        return view('SiteOne.view_contact' , compact('contacts'));
    }

    function services()
    {
        return view('SiteOne.services');
    }
    function portfolio()
    {
        return view('SiteOne.portfolio');
    }

    function about()
    {
        return view('SiteOne.about');
    }

    function contact()
    {
        return view('SiteOne.contact');
    }

    function ok()  {
       return view('SiteOne.ok') ;
    }


    function postcontact(Request $request)
    {

        $request->validate([
            'name' => 'required|string|min:3|max:15', // مطلوب
            'phone' => 'required',
            'email' => 'required',
            'msg' => 'required' ,
            'image' => 'required'
        ]);
        //$name =  time() . '_' . rand() . '_' .$request->file('image')->getClientOriginalName() ;

        $name = 'SiteOne_' . time() . '_' . rand() . '.' .$request->file('image') ->getClientOriginalExtension() ;
        $request->file('image')->move(public_path('uploads') , $name );

        // DB::statement('INSERT INTO .... ');
         /*  DB::insert('contacts' , [

           ]);*/

           Contact::create([
            'name' => $request->name,
            'phone' => $request->phone ,
            'email' => $request->email ,
            'msg' => $request->msg ,
            'image' => $name ,
           ]);

        return redirect()->route('site1.ok') ;

    }
}
