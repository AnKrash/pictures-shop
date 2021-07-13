<?php

namespace App\Http\Controllers;

use App\Http\Requests\BDRequest;
use App\Models\Contact;
use App\Models\Order_picture;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

//use  App\Models\lamps;
use  App\Models\picture;
use Illuminate\Support\Facades\DB;

//use  App\Models\vases;

class BDController extends Controller
{

    public function submitPictures(BDRequest $req)//  картины!
    {

        $vase = new picture();
        $vase->name = $req->input('name');//записываем новые значения в БД
        $vase->code = $req->input('code');
        $vase->description = $req->input('description');
        $vase->image = $req->input('image');
        $vase->price = $req->input('price');
        $vase->quantity = $req->input('quantity');
        $vase->save();//сохраняем запись в БД

        return redirect()->route('admin')->with('success', 'Запись в базу сделана!');
        //возвращаем на страницу 'admin' и выводим сообщение
    }


    public function allDataVase()//выводит все сообщения
    {
        $contact = new picture();

        return view('messagesVasas',
            ['data' => $contact->where('code', '=', '1')->paginate(15)]);

    }


    public function allDataPictures()//выводит все сообщения
    {
        $contact = new picture();

        return view('messagesPictures',
            ['data' => $contact->where('code', '=', '2')->paginate(15)]);
    }

    public function allDataLamps()//выводит все сообщения
    {
        $contact = new picture();

        return view('messagesLamps',
            ['data' => $contact->where('code', '=', '3')->paginate(15)]);
    }


    public function showOneMessagePicture($id)//выводит одно сообщение
    {

        $contact = new picture();
        return view('one-message-picture', ['product' => $contact->find($id)]);

    }


}



