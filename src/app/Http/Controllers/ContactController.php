<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Select;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categorys = Category::all();
        $selects = Select::all();
        return view('index',compact('categorys','selects'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel','address', 'building', 'category_id', 'detail',]);
    
        $data = $request->only(['select_id']);
    //    dd($request->all());
        $contact['image'] =  $request->image->store('contact_image','public');

        $category = Category::find($contact['category_id']);
        // dump($data);
        $selects = Select::whereIn('id',$data)->get();
        // dd($select);
        return view('confirm',compact('contact','category','selects'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel','address', 'building', 'detail','category_id','image']);
        $select = $request->only(['select_id']);
        Contact::create($contact);
        Contact_Select::create($select);
        return view('thanks');
    }
}


