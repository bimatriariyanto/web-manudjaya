<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Article\Entities\Post;

class TampilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->with(['category', 'tags', 'comments'])->whereHas('category', function ($query) {
            $query->where('name', 'berita');
        })->limit(5)->get();

        $janjian = Post::whereHas('category', function ($query) {
            $query->where('name', 'janjian');
        })->limit(5)->get();

        // dd($posts);

        // dd( $module_model::latest()->with(['category', 'tags', 'comments'])->paginate())        ;

        return view(
            "tampil.index", compact(['posts','janjian'])
        );
    }

    public function detailBerita($slug)
    {
        $posts = Post::where('slug', $slug)->first();

        // dd($posts);

        // dd( $module_model::latest()->with(['category', 'tags', 'comments'])->paginate())        ;

        return view(
            "tampil.detailberita", compact('posts')
        );
    }


}
