<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $reg) {
        $contact = new Contact;
        $contact->name = $reg->input('name');
        $contact->email = $reg->input('email');
        $contact->subject = $reg->input('subject');
        $contact->message = $reg->input('message');

        $contact->save();

        return redirect()->route('home')->with('success','Сообщение было отправлено');
    }

    public function allData() {
        $contact = new Contact;
        return view('messages',['data' => $contact->orderBy('id','desc')->get()]);
    }

    public function showOneMessage($id) {
        $contact = new Contact;
        $data = $contact->find($id);
        return view('one-message',['data' => $contact->find($id)]);
    }
    
    public function updateMessage($id) {
        $contact = new Contact;
        return view('update-message',['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id,ContactRequest $reg) {
        $contact = Contact::find($id);
        $contact->name = $reg->input('name');
        $contact->email = $reg->input('email');
        $contact->subject = $reg->input('subject');
        $contact->message = $reg->input('message');

        $contact->save();

        return redirect()->route('contact-data-one',$id)->with('success','Сообщение было обнавлено');
    }

    public function deleteMessage($id) {
    
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success','Сообщение было удалено');
    }

}
