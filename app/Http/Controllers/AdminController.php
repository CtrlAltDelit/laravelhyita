<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Models\Contact;

class AdminController extends Controller
{
    public function allData() {
        $contact = new Contact;
        return view('admin', ['data' =>$contact -> orderBy('created_at', 'desc') -> get()]);
    }

    public function showOneMessage($id) {
        $contact = new Contact;
        return view('admin-one-message', ['data' => $contact -> find($id)]);
    }

    public function updateMessage($id) {
        $contact = new Contact;
        return view('admin-update', ['data' => $contact -> find($id)]);
    }



    public function updateMessageSubmit($id, AdminRequest $req){
        $contact = Contact:: find($id);
        $contact -> name_otprav = $req->input('name_otprav');
        $contact -> address_otprav = $req->input('address_otprav');
        $contact -> number_otprav = $req->input('number_otprav');
        $contact -> name_polych = $req->input('name_polych');
        $contact -> address_polych = $req->input('address_polych');
        $contact -> number_polych = $req->input('number_polych');
        $contact -> status = $req->input('status');
        if ($req->file('naklad') != null) {
        $path = $contact -> naklad =  $req->file('naklad')->store('uploads', 'public');
        }    
        $contact -> save();

        //return view('default', ['path' => $path]);

        return redirect() -> route('admin-data-one', $id)-> with('success','Заказ был обновлен');
    }
}
