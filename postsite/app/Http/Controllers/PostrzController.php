<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use phpDocumentor\Reflection\DocBlock\Tags\Uses;

// use function GuzzleHttp\Promise\all;

class PostrzController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();
        return view('post.index')->with(compact('posts'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post_detail(Request $request, $post_id)
    {
        $post_row = Post::with('category')->findOrFail($post_id);
        return view('post.post_detail')->with(compact('post_row'));
    }

    public function category_detail(Request $request, $cat_id)
    {
        $posts = Category::with('posts')->findOrFail($cat_id)->posts;
        return view('post.category_detail',compact('posts'));
    }

    public function search(Request $request)
    {
        $query = "%$request->query_custom%";
        $posts = Post::with('category')->where('post_title', 'LIKE',$query)->get();
        return view('post.search', compact('posts'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function register(Request $request)
    {
        return view('post.register');
    }

    public function register_user(Request $request)
    {
        User::create([
            "username" => $request->username, 
            "user_firstname" => $request->user_firstname, 
            "user_lastname" => $request->user_lastname, 
            "email" => $request->email, 
            "password" =>Hash::make($request->password),
            "password_confirmation" => $request->password_confirmation,
        ]);

        return redirect()->route('home');
    }
    public function login(Request $request)
    {
        return view('post.login');
    }
    public function login_user(Request $request)
    {
        $request->validate([
            "email" => 'required|email',
            "password" => "required",
        ]);

        $credentials = $request->only('email','password');
        $login = Auth::attempt($credentials); 

        if($login){
            return redirect()->route('home');
        }else{
            return redirect()->back()->with(['error' => 'credentails not match!']);
        }
        //  dd($request->all('error'));
    }
    public function logout()
    {
        Auth::logout();
        return back();
    }
}
