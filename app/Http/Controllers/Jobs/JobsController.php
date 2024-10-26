<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use App\Models\Job\Job;
use App\Models\Job\JobSaved;
use App\Models\Job\Application;
use App\Models\Category\Category;
use Auth;

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

        // save job
        $savedJob= Jobsaved::where('job_id',$id)->where('user_id',Auth::user()->id)->count();
        //verifying job application
        $appliedJob= Application::where('user_id',operator: Auth::user()->id)->where('job_id',$id)->count();
        //categories
        $categories=Category::all()->take(7);

        // $applications=Application::where('user_id',Auth::user()->id)->get();
        return view('jobs.single',compact('job','relatedJobs','relatedJobsCount','savedJob','appliedJob','categories'));
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
        if($request->cv =='No CV'){
            return redirect('/jobs/single/'.$request->job_id)->with('apply','Please upload your CV first at your profile.');
        }
        else{
        $applyJob = Application::create([
            'cv' =>Auth::user()->cv,
            'job_id' =>$request->job_id,
            'user_id' =>Auth::user()->id,
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
}
