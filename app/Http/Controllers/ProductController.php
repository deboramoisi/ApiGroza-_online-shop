<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Http\Requests;
use Session;

class ProductController extends Controller
{
    // PARTE DE ADMIN
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::orderBy('name', 'ASC')->paginate(7);
        $value = ($request->input('page',1)-1)*7;
        return view('products.list', compact('products'))->with('i', $value);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'category' => 'required', 'quantity' => 'required', 'description' => 'required', 'image' => 'required', 'price' => 'required']);
        // creare Product nou
        Product::create($request->all());
        // redirectionare spre pagina de index
        return redirect()->route('products.index')->with('success', 'Produsul a fost adaugat cu succes!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // gasire produs dupa id
        $product = Product::find($id);
        // afisare produs in pagina prin view
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validare date preluate
        $this->validate($request, [
            'name' => 'required', 
            'category' => 'required', 
            'quantity' => 'required', 
            'description' => 'required', 
            'image' => 'required', 
            'price' => 'required'
        ]);
        // Cautare Product dupa id si update 
        Product::find($id)->update($request->all());

        // redirectare spre index
        return redirect()->route('products.index')->with('success', 'Produs actualizat cu succes!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Cautare Product dupa id si stergere din BD
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('success', 'Produs sters cu success!');
    }
    // PARTE DE ADMIN


    // PRODUSE
    public function product_id($id) {
        $produs = Product::find($id);
        return view('produs', compact('produs'));
    }

    public function categorii() {
        $categorii = Product::all()
            ->groupby('category')
            ->get('category');
        return view('categorii', compact('categorii'));
    }


    // TOATE PRODUSELE
    public function produse() {
        $products = Product::all();
        $title = "Toate produsele";
        return view('produse', compact('products', 'title'));
    }

    // APICOLE
    public function produse_apicole() {
        $products = Product::where('category', '=', 'Produse_apicole')->get();
        $title = "Produse apicole";
        return view('produse', compact('products', 'title'));
    }

    // COSMETICE
    public function produse_cosmetice() {
        $products = Product::where('category', '=', 'Cosmetice')->get();
        $title = "Produse cosmetice";
        return view('produse', compact('products', 'title'));
    }

    // ECHIPAMENTE
    public function produse_echipamente() {
        $products = Product::where('category', '=', 'Echipamente')->get();
        $title = "Echipamente";
        return view('produse', compact('products', 'title'));
    }

    // MATCI
    public function produse_matci() {
        $products = Product::where('category', '=', 'Matci')->get();
        $title = "Matci";
        return view('produse', compact('products', 'title'));
    }

    // FAMILII
    public function produse_familii() {
        $products = Product::where('category', '=', 'Familii')->get();
        $title = "Familii";
        return view('produse', compact('products', 'title'));
    }
    // PRODUSE


    // CART
    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        // Create a cart object in my session
        // retrieve the old cart if exists
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        // Punem cart-ul in session
        $request->session()->put('cart', $cart);
        return redirect()->route('produse');
    }

    public function getRemoveCart(Request $request) {
        // Create a cart object in my session
        // retrieve the old cart if exists
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeCart();

        // Punem cart-ul in session
        $request->session()->put('cart', $cart);
        return redirect()->route('shopping_cart');
    }

    public function getReduceByOne($id) {
        // Create a cart object in my session
        // retrieve the old cart if exists
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        Session::put('cart', $cart);
        return redirect()->route('shopping_cart');
    }

    public function getIncreaseByOne($id) {
        // Create a cart object in my session
        // retrieve the old cart if exists
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->increaseByOne($id);

        Session::put('cart', $cart);
        return redirect()->route('shopping_cart');
    }

    public function getRemoveProduct($id) {
        // Create a cart object in my session
        // retrieve the old cart if exists
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeProduct($id);
        
        if (count($cart->items) > 0) {
            // Punem cart-ul in session
            Session::put('cart', $cart);
        }
        else {
            Session::forget('cart');
        }
        return redirect()->route('shopping_cart');
    }

    public function getCart(Request $request) {
        if (!Session::has('cart')) {
            return view('shopping_cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shopping_cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);

    }

    public function sumarComanda(Request $request) {
        if (!Session::has('cart')) {
            return view('sumar_comanda');
        }

        $oldCart = Session::get(
            'cart');
        $cart = new Cart($oldCart);
        return view('sumar_comanda', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout() {
        if (!Session::has('cart')) {
            return view('shopping_cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        $qty = $cart->totalQty;
        return view('checkout', ['total' => $total, 'qty' => $qty]);
    }
    //CART
}