<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;
use Session;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profile()
    {
        return view('profile');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit()
    {
        return view('profile_update');
    }


    // information update part
    public function update(Request $request, $std_id){
        $data=array();
        $data['name'] = $request->name;
        $data['std_id'] = $request->std_id;
        $data['std_regn'] = $request->std_regn;
        $data['std_session'] = $request->std_session;
        $data['std_department'] = $request->std_department;
        $data['std_faculty'] = $request->std_faculty;
        $data['std_hall'] = $request->std_hall;
        $data['std_fathersname'] = $request->std_fathersname;
        $data['std_mothersname'] = $request->std_mothersname;
        $data['std_dob'] = $request->std_dob;
        $data['std_blood'] = $request->std_blood;
        $data['std_nationality'] = $request->std_nationality;
        $data['std_religion'] = $request->std_religion;
        $data['std_contact'] = $request->std_contact;
        $data['ssc_board'] = $request->ssc_board;
        $data['school'] = $request->school;
        $data['ssc_roll'] = $request->ssc_roll;
        $data['ssc_year'] = $request->ssc_year;
        $data['ssc_gpa'] = $request->ssc_gpa;
        $data['ssc_sub'] = $request->ssc_sub;
        $data['hsc_board'] = $request->hsc_board;
        $data['college'] = $request->college;
        $data['hsc_roll'] = $request->hsc_roll;
        $data['hsc_year'] = $request->hsc_year;
        $data['hsc_gpa'] = $request->hsc_gpa;
        $data['hsc_sub'] = $request->hsc_sub;


        DB::table('users')
                    ->where('std_id',$std_id)
                    ->update($data);

        Session::put('exception','Profile updated successfully!!');
        return Redirect::to('profile');

    }


    // image update part
    public function image_update(Request $request, $std_id){
        
        // Form validation
        $request->validate([
            // 'name'              =>  'required',
            'std_photo'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        // Set user name
        // $user->name = $request->input('name');

        // Check if a profile image has been uploaded
        if ($request->has('std_photo')) {
            // Get image file
            $image = $request->file('std_photo');
            // Make a image name based on user name and current timestamp
            $name = str_slug($request->input('name')).'_'.time();
            // Define folder path
            $folder = '/images/student_images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            $user->std_photo = $filePath;
        }
        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        return Redirect::to('profile')->with(['exception' => 'Image uploaded successfully.']);

        // Session::put('exception','Profile updated successfully!!');
        // return Redirect::to('profile');

    }

    public function sign_update(Request $request, $std_id){
        
        // Form validation
        $request->validate([
            // 'name'              =>  'required',
            'std_sign'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        // Set user name
        // $user->name = $request->input('name');

        // Check if a profile image has been uploaded
        if ($request->has('std_sign')) {
            // Get image file
            $image = $request->file('std_sign');
            // Make a image name based on user name and current timestamp
            $name = str_slug($request->input('name')).'_'.time();
            // Define folder path
            $folder = '/images/student_signatures/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            $user->std_sign = $filePath;
        }
        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        return Redirect::to('profile')->with(['exception' => 'Signature uploaded successfully.']);

        // Session::put('exception','Profile updated successfully!!');
        // return Redirect::to('profile');

    }


    public function uploadOne($uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : str_random(25);

        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }


    // password update part
    public function password_update(Request $request, $std_id){

        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        Session::put('exception','Password changed successfully!!');
        return Redirect::to('profile');

    }



}