<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Job\JobSaved;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Job\Application;
class UsersController extends Controller
{
    //
    use HasFactory;
    public function profile()
    {
        $profile=User::find(Auth::user()->id);
        return view('users.profile',compact('profile'));
    }
    public function applications()
    {
        $applications = Application::where('user_id', '=', Auth::user()->id)->get();
        return view('users.applications', compact('applications'));
    }
    public function savedJobs()
    {
        $savedJobs = JobSaved::where('user_id', '=', Auth::user()->id)->get();
        return view('users.savedjobs', compact('savedJobs'));
    }
    public function editDetails()
    {
        $userDetails = User::find(Auth::user()->id);
        return view('users.editdetails', compact('userDetails'));
    }
    public function updateDetails(Request $request)
    {
        $userDetailsUpdate = User::find(Auth::user()->id);
        $userDetailsUpdate->update([
            "name" => $request->name,
            "email" => $request->email,
            "job_title" => $request->job_title,
            "bio" => $request->bio,
            "facebook" => $request->facebook,
            "github" => $request->github,
            "linkedin" => $request->linkedin,
        ]);
        if($userDetailsUpdate){
            return redirect('/users/edit-details')->with('update', 'Details updated successfully');
        }

    }
}
