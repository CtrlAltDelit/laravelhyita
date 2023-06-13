<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function submit(ContactRequest $req){
        $contact = new Contact();
        $contact -> id_user = Auth::user() -> id;
        $contact -> name_otprav = $req -> input('name_otprav');
        $contact -> address_otprav = $req -> input('address_otprav');
        $contact -> number_otprav = $req -> input('number_otprav');
        $contact -> name_polych = $req -> input('name_polych');
        $contact -> address_polych = $req -> input('address_polych');
        $contact -> number_polych = $req -> input('number_polych');
 
        $contact -> save();

        return redirect() -> route('contact')-> with('success','Сообщение было добавлено');
    }
        public function allData() {
            $contact = new Contact;
            return view('messages', ['data' =>$contact -> orderBy('created_at', 'desc') -> take(5) -> get()]);
        }


        public function showOneMessage($id) {
            $contact = new Contact;
            return view('one-message', ['data' => $contact -> find($id)]);
        }



        public function allDataUser() {
            $contact = new Contact;
            return view('user-data', ['data' =>$contact -> orderBy('created_at', 'desc') -> get()]);
        }


        public function showOneMessageUser($id) {
            $contact = new Contact;
            return view('user-one-message', ['data' => $contact -> find($id)]);
        }

        public function updateMessage($id) {
            $contact = new Contact;
            return view('user-update', ['data' => $contact -> find($id)]);
        }



        public function updateMessageSubmit($id, ContactRequest $req){
            $contact = Contact:: find($id);
            $contact -> name = $req -> input('name');
            $contact -> email = $req -> input('email');
            $contact -> subject = $req -> input('subject');
            $contact -> message = $req -> input('message');

            $contact -> save();

            return redirect() -> route('user-data-one',$id)-> with('success','Сообщение было обновлено');
        }
        public function deleteMessage($id) {
            Contact::find($id)->delete();
            return redirect() -> route('user-data', $id)-> with('success','Сообщение было удалено');
        }






}
