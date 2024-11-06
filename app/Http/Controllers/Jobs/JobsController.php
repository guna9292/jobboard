<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use App\Models\Job\Job;
use App\Models\Job\JobSaved;
use App\Models\Job\Application;
use App\Models\Job\Search;
use App\Models\Category\Category;
use Auth;
use DB;

class JobsController extends Controller
{
    //
    public function single($id){
        $job = Job::find($id);
        if (!$job) {
            // Return an error view or redirect, with an error message
            return redirect()->back()->with('error', 'Job not found.');
        }
        //getting related jobs
        $relatedJobs = Job::where('category',$job->category)
        -> where('id','!=',$id)
        ->take(5)
        ->get();
        $relatedJobsCount= Job::where('category',$job->category)
        ->where('id','!=',$id)
        ->count();
//categories
        $categories=DB::table('categories')->join('jobs','jobs.category','=','categories.name')->
        select('categories.name AS name','categories.id AS id',DB::raw('count(jobs.category) AS total'))
        ->groupBy('categories.name', 'categories.id')
        ->limit(7)->get();

        // save job
        if (isset(Auth::user()->id)) {
            $savedJob = JobSaved::where('job_id', $id)->where('user_id', Auth::user()->id)->count();
            // verifying job application
            $appliedJob = Application::where('user_id', Auth::user()->id)->where('job_id', $id)->count();
        } else {
            $savedJob = 0;
            $appliedJob = 0;
        }
        return view('jobs.single', compact('job', 'relatedJobs', 'relatedJobsCount', 'savedJob', 'appliedJob', 'categories'));
    }
    public function saveJob(Request $request){
       $saveJob = JobSaved::create([
        'job_id' =>$request->job_id,
        'user_id' =>$request->user_id,
        'job_image' =>$request->job_image,
        'job_title' =>$request->job_title,
        'job_region' =>$request->job_region,
        'job_type' =>$request->job_type,
        'company' =>$request->company,
       ]);
       if($saveJob){
        return redirect('/jobs/single/'.$request->job_id)->with('save','Job saved successfully.');
       }
    }
    public function jobApply(Request $request){
        if (Auth::user()->cv === 'No CV') {
            return redirect('/jobs/single/'.$request->job_id)->with('error', 'Please upload your CV first at your profile.');
        }
        else{
        $applyJob = Application::create([
            'job_id' =>$request->job_id,
            'cv' =>Auth::user()->cv,
            'video'=> Auth::user()->video,
            'user_id' =>Auth::user()->id,
            'email' =>Auth::user()->email,
            'job_image' =>$request->job_image,
            'job_title' =>$request->job_title,
            'job_region' =>$request->job_region,
            'company' =>$request->job_type,
            'job_type' =>$request->company,
        ]);
        if($applyJob){
            return redirect('/jobs/single/'.$request->job_id)->with('applied','Applied to Job successfully.');
        }
    }
    }

    public function search(Request $request)
{
    $request->validate([
        "job_title" => "nullable|max:60",
        "job_region" => "nullable|max:60",
        "job_type" => "nullable|max:60",
    ]);

    // Only insert a search record if job_title is provided
    if (!empty($request->job_title)) {
        Search::create([
            "keyword" => $request->job_title,
        ]);
    }

    // Check for at least one search field, ignoring "Anywhere" as a valid entry
    if (empty($request->job_title) && ($request->job_region == "Anywhere" || empty($request->job_region)) && empty($request->job_type)) {
        return redirect()->back()->with('error', 'At least one search field must be filled.');
    }

    $query = Job::query();

    if ($request->filled('job_title')) {
        $jobTitle = strtolower($request->job_title);
        $query->whereRaw('LOWER(job_title) LIKE ?', ['%' . $jobTitle . '%'])
              ->orWhereRaw('LOWER(category) LIKE ?', ['%' . $jobTitle . '%']);
    }

    // Only add region filter if it's not "Anywhere"
    if ($request->filled('job_region') && $request->job_region !== "Anywhere") {
        $query->where('job_region', 'LIKE', "%{$request->job_region}%");
    }

    if ($request->filled('job_type')) {
        $query->where('job_type', 'LIKE', "%{$request->job_type}%");
    }

    $searches = $query->get();

    return view('jobs.search', compact('searches'));
}

}
