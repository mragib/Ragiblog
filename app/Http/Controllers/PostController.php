<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\carbon;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }


    //index show all the post
    public function index() {

        // $posts = Post::latest()
        // ->filter(request(['month','year']))
        // ->get();

        $posts = Post::latest();


        if($month = request('month')){
            $posts->whereMonth('created_at',Carbon::parse($month)->month);
        }
        if($year = request('year')){
            $posts->whereYear('created_at',$year);
        }

        $posts = $posts->get();



         return view('posts.index',compact('posts'));
    }



    //Create a post
    public function create() {
    	return view('posts.create');
    }

    //show only one post

    public function show(Post $post){

    return view('posts.show',compact("post"));

    }
//Store post data
    public function store(){

    	//Post::request(['title'],['body']);

        // //request data
        // $post= new Post;

        // $post->title = request('title');
        // $post->body = request('body');
        // //save to database
        // $post->save();

        // // redirect to home page
        $this->validate(request(),[

            'title'=> 'required',
            'body'=> 'required'


        ]);


        Post::create([

            'title' => request('title'),
            'body' => request('body'),
            'user_id'=> auth()->id()

        ]);

        return redirect('/');


    }
}
