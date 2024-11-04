<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Job\Application;
use Illuminate\Http\Request;
use App\Models\Admin\Admin;
use App\Models\Job\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Add this line to import the User model
class AdminsController extends Controller
{
    //
    public function viewLogin(){
        return view("admins.view-login");
    }
    public function checkLogin(Request $request){
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {

            return redirect() -> route('admins.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);
    }
    public function index(){

        $jobs=Job::select()->count();

        $categories=Category::select()->count();

        $admins=Admin::select()->count();

        $applications=Application::select()->count();
        return view("admins.index",compact('jobs','categories','admins','applications'));
    }
    public function logout(Request $request)
{
    Auth::guard('admin')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('view.login');
}
public function admins(){
    $admins = Admin::all();
    return view("admins.all-admins",compact(["admins"]));
}
public function createAdmins(){
    return view("admins.create-admins");
}

public function storeAdmins(Request $data){

    Request()->validate([
        "name" => "required | max:50",
        "email" => "required | max:170",
        "password" => "required | max:100",
    ]);
    $createAdmins = Admin::create([
        'name' => $data->name,
        'email' => $data->email,
        'password' => Hash::make($data->password),
    ]);
    if($createAdmins){
        return redirect('admin/all-admins')->with('create', 'Admin created successfully');
    }
    return view('admins.create-admins')->with('error', 'Error creating Admin');
}

public function displayCategories(){
    $categories = Category::all();
    return view("admins.display-categories",compact(["categories"]));
}
public function createCategories(){
    return view("admins.create-categories");
}
public function storeCategories(Request $request){
    Request()->validate([
        "name" => "required | max:100",
    ]);
    $createCategories = Category::create([
        'name' => $request->name,
    ]);
    if($createCategories){
        return redirect('admin/display-categories')->with('create', 'Category created successfully');
    }
    return view('display.categories')->with('error', 'Error creating Category');
}

public function editCategories($id){
    $category=Category::find($id);
    return view("admins.edit-categories",compact('category'));
}

public function updateCategories(Request $request, $id){
    Request()->validate([
        "name" => "required|max:200",
    ]);
    $categoryUpdate = Category::find($id);
    $categoryUpdate->update([
        "name" => $request->name,
    ]);
    if($categoryUpdate){
        return redirect('admin/display-categories/')->with('update', 'Category updated successfully');
    }
    else{
    return view('admins.edit-categories')->with('error', 'Error updating Category');}
}

public function deleteCategories($id){
    $deleteCategory=Category::find($id);
    $deleteCategory->delete();
    if($deleteCategory){
        return redirect('admin/display-categories/')->with('delete', 'Category deleted successfully');
    }
    else{
    return view('admins.display-categories')->with('error', 'Error deleting Category');}
}
public function allJobs(){
    $jobs=Job::all();
    return view('admins.all-jobs',compact('jobs'));
}
public function createJobs(){
    $categories = Category::all();
    return view('admins.create-jobs',compact('categories'));
}
public function storeJobs(Request $data){
    // Request()->validate([
    //     "id" => "required | max:10",
    //     "job_title" => "required | max:200",
    //     "job_region" => "required | max:200",
    //     'company' => "required | max:200",
    //     'job_type' => "required",
    //     'vacancy' => "required",
    //     'experience' => "required",
    //     'salary' => "required",
    //     'Gender' => "required",
    //     'application_deadline' => "required",
    //     'jobdescription' => "required",
    //     'responsibilities' => "required",
    //     'education_experience' => "required",
    //     'otherbenefits' => "required",
    //     'image' => "required",
    //     'category' => "required",
    // ]);

    $createJobs = Job::create([
        'id' => $data->job_id,
        'job_title' => $data->job_title,
        'job_region' => $data->job_region,
        'company' => $data->company,
        'job_type' => $data->job_type,
        'vacancy' => $data->vacancy,
        'experience' => $data->experience,
        'salary' => $data->salary,
        'Gender' => $data->Gender,
        'application_deadline' => $data->application_deadline,
        'jobdescription' => $data->jobdescription,
        'responsibilities' => $data->responsibilities,
        'education_experience' => $data->education_experience,
        'otherbenefits' => $data->otherbenefits,
        'image' => $data->image ?? '',
        'category' => $data->category,
        'url' => $data->url ?? '',
    ]);
    if($createJobs){
        return redirect('admin/display-jobs')->with('create', 'Job created successfully');
    }
    return view('admins.create-admins')->with('error', 'Error creating Admin');
}
public function deleteJobs($id){
    $deleteJobs = Job::find($id);
    $deleteJobs->delete();
    if($deleteJobs){
    return redirect('admin/display-jobs/')->with('delete','Successfully deleted');}
    else{
        return redirect('admin/display-jobs/')->with('error','Error deleting Job');
    }
}

}
