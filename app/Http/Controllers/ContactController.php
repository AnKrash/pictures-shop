<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use  App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        // dd($req->input('subject'));
        //$validation=$req->validate(
        // ['subject'=>'required|min:5|max:50',
        //'message'=>'required']

        // );
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
        //return view ('messages',['data1'=>$contact->orderBy('id','asc')->skip(1)->take(2)->get()]);
        // return view ('messages',['data1'=>$contact->where('subject','==','hello')]);
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
    public function lamps(){
        //dump($this->lamps());//если приходит продукт!

        return view('inc/lamps');
    }
    public function pictures(){
        return view('inc/pictures');
    }
    public function vase(){
        return view('inc/vase');
    }
   // public function vaseProduct($product - null){
  //      return view('product',['product->$product']);
  //  }
    public function admin(){
        return view('admin');
    }
    public function bdvase(){
        return view('bdvase');
    }
    public function bdpictures(){
        return view('bdpictures');
    }
    public function bdaccess(){
        return view('bdaccess');
    }

}

