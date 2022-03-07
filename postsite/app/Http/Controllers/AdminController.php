<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('admin.posts.dashboard')->with(compact('posts'));
    }
    public function create(Request $request)
    {
        return view('admin.posts.create');
    }
    public function store(Request $request)
    {
        $imageName = '';
        if ($request->post_image) {
            $imageName = time().'.'.$request->post_image->extension();  
            $request->post_image->move(public_path('/admin/assets/images'), $imageName);
        }
        Post::create([
            'post_title' => $request->post_title, 
            'post_author' => $request->post_author,
            'post_status' => ($request->post_status == 'Published') ? 'Published' : 'Draft', 
            'product_date' => $request->product_date, 
            'post_image' => "/admin/assets/images/" . $imageName, 
            'post_content' => $request->post_content 
        ]);
        return redirect()->route('admin');
    }

}
