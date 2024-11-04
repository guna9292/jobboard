<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Job\JobSaved;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Job\Application;
use Illuminate\Support\Facades\File;
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
        Request()->validate([
            "name" => "required|max:50",
            "email" => "required",
            "job_title" => "required|max:60",
            "bio" => "required|max:999",
            "facebook" => "required|max:399",
            "github" => "required|max:399",
            "linkedin" => "required|max:399",
        ]);
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
    public function editCV(){
        return view('users.editcv');
    }
    public function editImage(){
        return view('users.editimage');
    }
    public function updateCV(Request $request){
        $oldCV = User::find(Auth::user()->id);
        if(File::exists(public_path("assets/cvs/{$oldCV->cv}"))){
            File::delete(public_path("assets/cvs/{$oldCV->cv}"));
        }

        $destinationPath='assets/cvs';
        $mycv = $request->cv->getClientOriginalName();
        $request->cv->move(public_path($destinationPath), $mycv);
        $oldCV->update([
            'cv'=>$mycv
        ]);

        return redirect('/users/profile')->with('update', 'CV updated successfully');

    }
    public function updateImage(Request $request){
        $oldImage = User::find(Auth::user()->id);
        if(File::exists(public_path("assets/images_users/{$oldImage->cv}"))){
            File::delete(public_path("assets/cvs/{$oldImage->cv}"));
        }
        $destinationPath='assets/images_users';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);
        $oldImage->update([
            'image'=>$myimage
        ]);

        return redirect('/users/profile')->with('update', 'Profile Image updated successfully');

    }
}
