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
    public function editVideo(){
        return view('users.editvideo');
    }
    public function updateCV(Request $request){
        Request()->validate([
            "cv" => "required|mimes:pdf,doc,docx",
        ]);
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
        Request::validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $oldImage = User::find(Auth::user()->id);
        if(File::exists(public_path("assets/images_users/{$oldImage->image}"))){
            File::delete(public_path("assets/images_users/{$oldImage->image}"));
        }
        $destinationPath='assets/images_users';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);
        $oldImage->update([
            'image'=>$myimage
        ]);

        return redirect('/users/profile')->with('update', 'Profile Image updated successfully');

    }
    public function updateVideo(Request $request){

        Request()->validate([
            "video" => "required|mimes:mp4,mov,ogg,qt",
        ]);
        $oldVideo = User::find(Auth::user()->id);
        if(File::exists(public_path("assets/videos_users/{$oldVideo->video}"))){
            File::delete(public_path("assets/videos_users/{$oldVideo->video}"));
        }
        $destinationPath='assets/videos_users';
        $myvideo = $request->video->getClientOriginalName();
        $request->video->move(public_path($destinationPath), $myvideo);
        $oldVideo->update([
            'video'=>$myvideo
        ]);

        return redirect('/users/profile')->with('update', 'Profile Video updated successfully');

    }
}
