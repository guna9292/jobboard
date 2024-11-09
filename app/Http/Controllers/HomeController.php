<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job\Job;
use App\Mail\ContactUsMail;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $duplicates = DB::table('searches')
        ->select('keyword',DB::raw('COUNT(*) as `count`'))
        ->groupBy('keyword')->havingRaw('COUNT(*) > 1')->take(4)
        ->orderBy('count', 'desc')->get();



        $jobs = Job::select()->take(5)->orderBy('id','desc')->get();
        $totalJobs = Job::all()->count();
        return view('home',compact('jobs','totalJobs','duplicates'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    // public function contactUs(Request $request)
    // {
    //     $request->validate([
    //         'fname' => 'required',
    //         'lname'=> 'required',
    //         'email'=> 'required',
    //         'subject'=> 'required',
    //         'message'=>'required',
    //     ]);
    //     $details = [
    //         'title' => 'Contact Us Form Submission',
    //         'body' => 'First Name: ' . $request->fname . "\n" .
    //               'Last Name: ' . $request->lname . "\n" .
    //               'Email: ' . $request->email . "\n" .
    //               'Subject: ' . $request->subject . "\n" .
    //               'Message: ' . $request->message
    //     ];

    //     \Mail::to('rulerthomas21@gmail.com')->send(new ContactUsMail($details));

    //     return back()->with('success', 'Your message has been sent successfully!');

    // }
}
