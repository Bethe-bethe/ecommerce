<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

class BooksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       
        $this->middleware('permission:create', ['only' => ['create','store']]);
    }
    public function index()
    {
        $book=Books::all();
        return view('pages.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function books(){
        $book=Books::all();
        return view('pages.books',compact('book'));
    }
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

       
        if ($image = $request->file('image')) {
            $destinationPath = 'imagecollection/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
            
             
        Books::create($data);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Books $id)
    {
        $book=Books::find($id);
        return view('pages.details',compact('book'));
    }

    

    
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $books)
    {
        //
    }

    public function add_to_cart(Request $request){
       
            $cart= new Cart();
            $cart->books_id=$request->books_id;
            $cart->users_id=Auth::user()->id;
            
            $cart->save();
            return redirect()->route('index');
        
       
      

     
    }
    static function cartitem(){
        $userId = Auth::user()->id;  
        return cart::where('users_id',$userId)->count();
    }
    public function cartList(){
        $userId=Auth::user()->id;
        $bookcart=Cart::leftjoin('books','carts.books_id','=','books.id')->
        where('carts.users_id',$userId)->select('books.*')->get();

        return view('pages.cartlist',compact('bookcart'));
    }
    // public function removelist(cart $id){
    // $cart=cart::find($id);
    //   $cart->delete();
    //   return redirect()->route('cartlist');
    // }
}
