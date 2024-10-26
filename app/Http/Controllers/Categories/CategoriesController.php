<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category\Category;
use App\Models\Job\Job;

class CategoriesController extends Controller
{
    //
    public function allCategories(){
        $categories = Category::all()->take(7);
        return view('jobs.single',compact('categories'));
    }
    public function singleCategory($name){
        $jobs = Job::where('category',$name)->take(5)->orderBy('created_at','desc')->get();
        return view('categories.single',compact('jobs','name'));
    }
}
