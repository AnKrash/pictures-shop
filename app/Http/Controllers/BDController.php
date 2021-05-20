<?php

namespace App\Http\Controllers;
use App\Http\Requests\BDRequest;
use Illuminate\Http\Request;
use  App\Models\lamps;
use  App\Models\pictures;
use  App\Models\vases;

class BDController extends Controller
{
    public function submitVase(BDRequest $req)//  вазы!!
    {
        // dd($req->input('subject'));
        //$validation=$req->validate(
        // ['subject'=>'required|min:5|max:50',
        //'message'=>'required']

        // );
        $vase = new vases();
        $vase->name = $req->input('name');//записываем новые значения в БД
        $vase->code = $req->input('code');
        $vase->description = $req->input('description');
        $vase->image = $req->input('image');
        $vase->price = $req->input('price');

        $vase->save();//сохраняем запись в БД

        return redirect()->route('admin')->with('success', 'Запись в базу сделана!');
        //возвращаем на страницу 'admin' и выводим сообщение
    }

    public function submitPictures(BDRequest $req)//  картины!
    {
        // dd($req->input('subject'));
        //$validation=$req->validate(
        // ['subject'=>'required|min:5|max:50',
        //'message'=>'required']

        // );
        $vase = new pictures();
        $vase->name = $req->input('name');//записываем новые значения в БД
        $vase->code = $req->input('code');
        $vase->description = $req->input('description');
        $vase->image = $req->input('image');
        $vase->price = $req->input('price');

        $vase->save();//сохраняем запись в БД

        return redirect()->route('admin')->with('success', 'Запись в базу сделана!');
        //возвращаем на страницу 'admin' и выводим сообщение
    }

    public function submitAccess(BDRequest $req)//  картины!
    {
        // dd($req->input('subject'));
        //$validation=$req->validate(
        // ['subject'=>'required|min:5|max:50',
        //'message'=>'required']

        // );
        $vase = new lamps();
        $vase->name = $req->input('name');//записываем новые значения в БД
        $vase->code = $req->input('code');
        $vase->description = $req->input('description');
        $vase->image = $req->input('image');
        $vase->price = $req->input('price');

        $vase->save();//сохраняем запись в БД

        return redirect()->route('admin')->with('success', 'Запись в базу сделана!');
        //возвращаем на страницу 'admin' и выводим сообщение
    }
    public function allDataVase()//выводит все сообщения
    {

        //$contact = new vases;
        //dd(vases::all());
        return view('messagesVasas',['dataV'=>vases::all()] );

    }
    public function messagesVasas(){
        return view('inc/messagesVasas');
    }
    public function allDataPictures()//выводит все сообщения
    {

        //$contact = new pictures();
        //dd(pictures::all());
       //return view('messagesPictures',['dataP'=>'HHEELLOO']);
       return view('messagesPictures',['dataP'=>pictures::all()] );
    }
    public function allDataLamps()//выводит все сообщения
    {

        //$contact = new pictures();
        //dd(pictures::all());
        //return view('messagesPictures',['dataP'=>'HHEELLOO']);
        return view('messagesLamps',['dataL'=>lamps::all()] );
    }
    public function showOneMessageLamp($id)//выводит одно сообщение
    {

        $contact = new lamps;
        return view('one-message-lamp', ['dataL' => $contact->find ($id) ]);

    }
    public function showOneMessagePicture($id)//выводит одно сообщение
    {

        $contact = new pictures();
        return view('one-message-picture', ['dataP' => $contact->find ($id) ]);

    }
    public function showOneMessageVase($id)//выводит одно сообщение
    {

        $contact = new vases();
        return view('one-message-vase', ['dataV' => $contact->find ($id) ]);

    }

}


