<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ibec\Media\Gallery;
use Ibec\Content\Post;
use Ibec\Content\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::with('images')->find(1);
        $galleryBrands = Gallery::with('images')->find(2);
        $projectsPosts = Post::whereHas('contentRoot', function($q){
    			$q->where('slug', 'main_projects');
    		})->get();

        return view('home', compact('gallery', 'galleryBrands', 'projectsPosts'));
    }

    public function about($slug = 'istoriya')
    {
      $about = Post::whereHas('contentRoot', function($q){
        $q->where('slug', 'about');
      })->get();

      $post = Post::whereHas('nodes', function($q) use ($slug){
        $q->where('slug', $slug);
      })->first();

      return view('pages.about', compact('about', 'post'));
    }

    public function infoPages($slug = '')
    {
      $post = Post::whereHas('nodes', function($q) use ($slug){
        $q->where('slug', $slug);
      })->first();

      return view('pages.' . $slug, compact('post'));
    }

    public function technics($category)
    {
      $catTechnics = Category::whereHas('nodes', function($q) use ($category){
    		$q->where('slug', 'technics');
    	})->with('children')->first();

      $cat = Category::whereHas('nodes', function($q) use ($category){
    		$q->where('slug', $category);
    	})->first();

      $technics = Post::whereHas('contentRoot', function($q) use ($cat){
        $q->where('category_id', $cat->id);
      })->get();

      return view('pages.technics', compact('cat', 'technics', 'catTechnics'));
    }

    public function certificates()
    {
      $certificates = Post::whereHas('contentRoot', function($q){
        $q->where('slug', 'certificates');
      })->get();

      return view('pages.certificates', compact('certificates'));
    }
}
