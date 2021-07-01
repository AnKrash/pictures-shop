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
use phpDocumentor\Reflection\Types\This;
use PHPMailer\PHPMailer\PHPMailer;

class BasketController extends Controller
{
    public function index()
    {
        return view('basketindex');
    }



    public function checkout()
    {
        return view('basketcheckout');
    }


    public function add($id)
    {
        dd(1);
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
            dd ( $cart[$id]['quantity']);
//            if ($cart[$id]['quantity']>$id["quantity"]){
//                echo "Not quantity!";
//            }
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

        // return response()->json(['success' => 'true']);
        // return response()->json(['success' => 'false', 'message' => 'not enough items available']);
        // https://api.jquery.com/jquery.getjson/
        //return json instead of redirects
    }

    public function update(Request $request)
    {
        // remove, use add

        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');

//            if ($cart[$request->id]["quantity"] > DB::table('pictures')->
//                find('$product->id',['quantity'])) {
//                echo "Not quantity!";
//           }
//            else
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        // remove
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

        //todo start transaction
        $order = new Order();
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->comment = $request->input('comment');
        $order->save();

        $ids = array_column($request->session()->get('cart'), 'id');
        $items = picture::whereIn('id', $ids)->get();
        $itemsByIds = [];
        foreach ($items as $item) {
            $itemsByIds[$item->id] = $item;
        }

        foreach ($request->session()->get('cart') as $item) {
            $op = new Order_picture();
            $op->picture_id = $item["id"];
            $op->quantity = $item["quantity"];
            $op->order_id = $order->id;
            $op->save();

            //todo check item exists
            $curPic = $itemsByIds[$op->picture_id];
            //todo check quantity
            dump($curPic);
            if ($curPic->quantity < 1) {
                echo "It is not this picture on DataBase";
            } // dd($item["quantity"]);
            elseif ($curPic->quantity < $item["quantity"] & $curPic->quantity > 1) {
                echo "This pictures in base less than order.Make order less quantity";
            }

            $curPic->quantity = $curPic->quantity - $item["quantity"];
            if ($curPic->quantity > 0) {
                $curPic->save();
            }


//            DB::table('pictures')->where('id', '=', $item["id"])->decrement('quantity', 100);
        }

        $mailSets = config('mail.mailers.smtp');

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";
        // $mail->SMTPDebug  = 1;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->IsHTML(true);


        env("MAIL_PORT");
        $mail->Host = $mailSets["host"];

        $mail->Username = $mailSets["username"];

        $mail->Password = $mailSets["password"];


        $mail->SetFrom("from-email@gmail.com", "from-name");
        $mail->AddAddress("{$order->email}", 'admin');

        $mail->Subject = "Order from picture-shop";
        $content = "<b>Thank you for your order on picture-shop!</b>";

        $mail->MsgHTML($content);
        if (!$mail->Send()) {
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
