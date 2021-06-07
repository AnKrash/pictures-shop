<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_picture;

use App\Models\picture;
use Illuminate\Http\Request;
use App\Models\Basket;
use App\Http\Requests\ContactRequest;
use  App\Models\Contact;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;
use PHPMailer\PHPMailer\PHPMailer;

class BasketController extends Controller
{
    public function index()
    {
        var_dump(config('mail.mailers.smtp'));
        return view('basketindex');
    }

    /*  public function index(Request $request)
      {
          $basket_id = $request->cookie('basket_id');
          if (!empty($basket_id)) {
              $products = Basket::findOrFail($basket_id)->products;
              return view('basketindex', compact('products'));
          } else {
              abort(404);
          }
      }
  */

    public function checkout()
    {
        return view('basketcheckout');
    }

    /**
     * Добавляет товар с идентификатором $id в корзину
     */
    /* public function add(Request $request, $id)
     {
         $basket_id = $request->cookie('basket_id');
         $quantity = $request->input('quantity') ?? 1;
         if (empty($basket_id)) {
             // если корзина еще не существует — создаем объект
             $basket = Basket::create();
             // получаем идентификатор, чтобы записать в cookie
             $basket_id = $basket->id;
         } else {
             // корзина уже существует, получаем объект корзины
             $basket = Basket::findOrFail($basket_id);
             // обновляем поле `updated_at` таблицы `baskets`
             $basket->touch();
         }
         if ($basket->products->contains($id)) {
             // если такой товар есть в корзине — изменяем кол-во
             $pivotRow = $basket->products()->where('picture_id', $id)->first()->pivot;
             $quantity = $pivotRow->quantity + $quantity;
             $pivotRow->update(['quantity' => $quantity]);
         } else {
             // если такого товара нет в корзине — добавляем его
             $basket->products()->attach($id, ['quantity' => $quantity]);
         }
 dump($id);
         // выполняем редирект обратно на страницу, где была нажата кнопка «В корзину»
       //  return back()->withCookie(cookie('basket_id', $basket_id, 525600));
     }
 */
    public function add($id)
    {
        $product = picture::find($id);
        if (!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if (!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->image,
                    "id" => $product->id
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->image,
            "id" => $product->id
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }


    public function saveOrder(Request $request)
    {
        // проверяем данные формы оформления
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'address' => 'required|max:255',
        ]);

        $order = new Order();
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->comment = $request->input('comment');
        $order->save();

        //$cart = $request->session()->all();
        // dump($values);
        // $cart=$request->session()->get('cart');
//todo check quantity, return error if not matched
     /*   $ids = array_column($request->session()->get('cart'), 'id');
        $items = picture::whereIn('id', $ids)->get();
        foreach($items as $quantity){
            if ($quantity > DB::table('pictures')->where('id', '=',$ids )->get()){
                echo ("It is not pictures in this quantity!");
            }
        }
        dd($items);
*/
        //   $input = $request->only(['name', 'address']); //information from basket session!!!
        //   dump($input);

        foreach ($request->session()->get('cart') as $item) {
            $op = new Order_picture();
            $op->picture_id = $item["id"];
            $op->quantity = $item["quantity"];
            $op->order_id = $order->id;
            $op->save();
        }

        $mailSets =config('mail.mailers.smtp');

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";
     // $mail->SMTPDebug  = 1;
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->IsHTML(true);

        //todo move to envs
        env("MAIL_PORT");
        $mail->Host       = $mailSets["host"];

        $mail->Username   = $mailSets["username"];

        $mail->Password   = $mailSets["password"];


        $mail->SetFrom("from-email@gmail.com", "from-name");
      $mail->AddAddress ("{$order->email}",'admin');

        $mail->Subject = "Order from picture-shop";
        $content = "<b>Thank you for your order on picture-shop!</b>";

        $mail->MsgHTML($content);
        if(!$mail->Send()) {
            echo "Error while sending Email.";
            var_dump($mail);
        } else {
            echo "Email sent successfully";
        }

        $request->session()->flush();


        return view('saveorder');

        //  $cart=$request->session()->get();
        //   $request->quantity=$cart[$request->id]["quantity"];
        //   dump($cart);

        //     $carts = $request->session()->all();
        //       dump($carts);


        // foreach ($cart as $key){
        /* foreach ($cart as $key=>$value)
           {
   if ($key="name"){

       echo $value;}

   }*/
        //   }

        //;
        //$i=$request->session()->get('picture_id');
        /*  if (isset($cart[$id])) {
              $id= $request->session()->get('id', '');
              dump($id);}
        */
        // dump($values);
        /*foreach ($values as $value){
var_dump($values);
            redirect()->back();
            //return view ('/');
        }
        */
//dump($values);


        //$orderpictures=new Order_picture();
        // $cart [$request->id]->input('picture_id');

        //$cart->quantity = $request->input('quantity');
        // $cart->save();


        /*    $basket = Basket::getBasket();
            $user_id = auth()->check() ? auth()->user()->id : null;
            $order = Orders::create(
                $request->all() + [ 'amount' => $basket->getAmount(),'user_id' => $user_id]
            );

            foreach ($basket->products as $product) {
                $order->items()->create([
                    'product_id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $product->pivot->quantity,
                    'cost' => $product->price * $product->pivot->quantity,
                ]);
            }

            // уничтожаем корзину
            $basket->delete();

            return redirect()
                ->route('basket.success')
                ->with('success', 'Ваш заказ успешно размещен');
        }
        */
    }

}
