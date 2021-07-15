<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use  App\Models\Contact;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        //todo add validation to all forms, check if it works
        //todo delete all commented code
        // pretify everywhere command+option+L

//        $validated = $req->validate([
//            'name' => 'required|min:5|max:50',
//            'email' => 'required',
//            'subject' => 'required',
//            'message' => 'required',
//        ]);

        $contact = new Contact();
        $contact->name = $req->input('name');//записываем новые значения в БД
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();//сохраняем запись в БД

        return redirect()->route('home')->with('success', 'Сообщение было отправлено!');
        //возвращаем на страницу 'home' и выводим сообщение
    }


    public function allData()//выводит все сообщения
    {

        $contact = new Contact();

        return view('messages', ['data1' => $contact->all()]);

    }

    public function showOneMessage($id)//выводит одно сообщение
    {

        $contact = new Contact();

        return view('one-message', ['data1' => $contact->find($id)]);

    }

    public function updateMessage($id)//
    {
        $contact = new Contact();

        return view('update-message', ['data1' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req)//
    {

        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было обновлено!');
    }

    public function deleteMessage($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено!');
    }

    public function lamps()
    {

        return view('inc/lamps');
    }

    public function pictures()
    {
        return view('inc/pictures');
    }

    public function vase()
    {
        return view('inc/vase');
    }

    public function admin()
    {
        return view('admin');
    }

    public function bdvase()
    {
        return view('bdvase');
    }

    public function bdpictures()
    {
        return view('bdpictures');
    }

    public function bdaccess()
    {
        return view('bdaccess');
    }

}

