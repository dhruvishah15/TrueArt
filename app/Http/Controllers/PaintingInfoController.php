<?php

namespace App\Http\Controllers;
use App\Models\PaintingInfo;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\Session\Session;
Use Illuminate\Support\Facades\DB;

class PaintingInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paintingInfo = new paintingInfo;
        $paintingInfo->artist_id = $request->session()->get('login','email');
        $paintingInfo->artist_name = $request->artist_name;
        $paintingInfo->painting_name = $request->painting_name;
        $paintingInfo->category = $request->category;
        $paintingInfo->price = $request->price;
        $paintingInfo->size = $request->size;
        $paintingInfo->orientation = $request->orientation;
        $paintingInfo->description = $request->description;
        if($files = $request->file('artwork')){  
            $name = $files->getClientOriginalName(); 
            $files->move('artwork',$name);  
            $paintingInfo->painting_path = $name;  
        }  
        $paintingInfo->save();
        return back()->with('success','Painting Uploaded successfully');
    }

    function addToCart(Request $request)
    {
        if($request->session()->has('login'))
        {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('login','email');
            $cart->painting_id = $request->painting_id;
            $cart->artist_id = $request->artist_id;
            $cart->save();
            return back();
        }
        else
        {
            return redirect('/login');
        }
    }

    static function CartItem()
    {
        $userId = session()->get('login','email');
        return Cart::where('user_id',$userId)->count();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaintingInfo  $paintingInfo
     * @return \Illuminate\Http\Response
     */
    public function show(PaintingInfo $paintingInfo)
    {
        $paintingInfo = paintingInfo::all();
        // $paintingInfo = paintingInfo::where('painting_name', $paintingInfo->painting_name)->get();
        return view('User/artworkDetail',compact('paintingInfo'));
    }

    function cartList()
    {
        $userId = session()->get('login','email');
        $paintingInfo = DB::table('tblCart')
        ->join('paintingInfo', 'tblCart.painting_id', '=', 'paintingInfo.id')
        ->where('tblCart.user_id', $userId)
        ->select('paintingInfo.*','tblCart.id as cart_id')
        ->get();
        
        return view('User/cart', ['paintingInfo'=> $paintingInfo]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cart');
    }

    function orderNow()
    {
        $userId = session()->get('login','email');
        $total = $paintingInfo = DB::table('tblCart')
        ->join('paintingInfo', 'tblCart.painting_id', '=', 'paintingInfo.id')
        ->where('tblCart.user_id', $userId)
        ->sum('paintingInfo.price');
        
        return view('User/orderNow', ['total'=> $total]);
    }

    function placeOrder(Request $request)
    {
        $userId = session()->get('login','email');
        $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order = new Order;
            $order->painting_id = $cart->painting_id;
            $order->user_id = $cart->user_id;
            $order->artist_id = $cart->artist_id;
            $order->status="Pending";
            $order->payment_method = $request->payment;
            $order->payment_status = "Pending";
            $order->address = $request->address;
            $order->phone = $request->phone;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        $request->input();
        return back();
    }

    function myOrders()
    {
        $userId = session()->get('login','email');
        $orders = DB::table('tblOrder')
        ->join('paintingInfo', 'tblOrder.painting_id', '=', 'paintingInfo.id')
        ->where('tblOrder.user_id', $userId)
        ->get();
        
        return view('User/myOrders', ['orders'=> $orders]);
    }

    function artistOrders(Request $request)
    {
        $userId = session()->get('login','email');
        $orders = DB::table('tblOrder')
        ->join('paintingInfo', 'tblOrder.painting_id', '=', 'paintingInfo.id')
        ->where('tblOrder.artist_id', $userId)
        ->get();
        
        if($userId == 'mark15@gmail.com')
        {
            return view('Artist/Mark Smith/index', ['orders'=> $orders]);
        }
        else if($userId == 'mira20@gmail.com')
        {
            return view('Artist/Mira Rai/index', ['orders'=> $orders]);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaintingInfo  $paintingInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(PaintingInfo $paintingInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaintingInfo  $paintingInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaintingInfo $paintingInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaintingInfo  $paintingInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaintingInfo $paintingInfo)
    {
        //
    }
}
