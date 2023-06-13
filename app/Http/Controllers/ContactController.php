<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function submit(ContactRequest $req){
        $contact = new Contact();
        $contact -> id_user = Auth::user() -> id;
        $contact -> name_otprav = $req->input('name_otprav');
        $contact -> address_otprav = $req->input('address_otprav');
        $contact -> number_otprav = $req->input('number_otprav');
        $contact -> name_polych = $req->input('name_polych');
        $contact -> address_polych = $req->input('address_polych');
        $contact -> number_polych = $req->input('number_polych');
 
        $contact -> save();

        return redirect() -> route('order')-> with('success','Заказ был отправлен. В ближайшее время с вами свяжется специалист.');
    }

    public function allData() {
        $contact = new Contact;
        return view('messages', ['data' =>$contact -> orderBy('created_at', 'desc') -> take(15) -> get()]);
    }

    public function showOneMessage($id) {
        $contact = new Contact;
        return view('one-message', ['data' => $contact -> find($id)]);
    }
}
