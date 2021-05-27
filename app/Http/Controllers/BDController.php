<?php

namespace App\Http\Controllers;
use App\Http\Requests\BDRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
//use  App\Models\lamps;
use  App\Models\picture;
//use  App\Models\vases;

class BDController extends Controller
{
  /*  public function submitVase(BDRequest $req)//  вазы!!
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
   }*/

public function submitPictures(BDRequest $req)//  картины!
    {
        // dd($req->input('subject'));
        //$validation=$req->validate(
        // ['subject'=>'required|min:5|max:50',
        //'message'=>'required']

        // );
        $vase = new picture();
        $vase->name = $req->input('name');//записываем новые значения в БД
        $vase->code = $req->input('code');
        $vase->description = $req->input('description');
        $vase->image = $req->input('image');
        $vase->price = $req->input('price');

        $vase->save();//сохраняем запись в БД

        return redirect()->route('admin')->with('success', 'Запись в базу сделана!');
        //возвращаем на страницу 'admin' и выводим сообщение
    }

  /*  public function submitAccess(BDRequest $req)//  картины!
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
    }*/
    public function allDataVase()//выводит все сообщения
    {
        $contact = new picture();

        return view('messagesVasas',['data'=>$contact->where('code','=','1')->get()] );

    }
   /* public function messagesVasas(){
        return view('inc/messagesVasas');
    }*/
    public function allDataPictures()//выводит все сообщения
    {
        $contact = new picture();

        return view('messagesPictures',['data'=>$contact->where('code','=','2')->get()] );
    }
    public function allDataLamps()//выводит все сообщения
    {
        $contact = new picture();

        return view('messagesLamps',['data'=>$contact->where('code','=','3')->get()] );
    }
  /*  public function showOneMessageLamp($id)//выводит одно сообщение
    {

        $contact = new lamps;
        return view('one-message-lamp', ['data' => $contact->find ($id) ]);
 }
  */
    public function showOneMessagePicture($id)//выводит одно сообщение
    {

        $contact = new picture();
        return view('one-message-picture', ['product' => $contact->find ($id) ]);

    }
}
  /*  public function showOneMessageVase($id)//выводит одно сообщение
    {

        $contact = new vases();
        return view('one-message-vase', ['data' => $contact->find ($id) ]);

    }


}


