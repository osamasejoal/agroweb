<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class ProfileController extends Controller
{
    




    /*
    |--------------------------------------------------------------------------
    |                             __CONSTRUCT METHOD
    |--------------------------------------------------------------------------
    */
    public function __construct(){
        $this->middleware('auth');
    }
    




    /*
    |--------------------------------------------------------------------------
    |                             INDEX METHOD
    |--------------------------------------------------------------------------
    */
    public function index(){
        return view('backend.profile.view');
    }





    /*
    |--------------------------------------------------------------------------
    |                              UPDATE METHOD
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id)
    {
        // Validation Portion
        $request->validate([
            'name'      => 'required|max:255|string',
            'email'     => 'required|email|max:255|string',
            'image'     => 'image|mimes:jpg,jpeg,JPG,JPEG',
        ], [
            '*.required'    => 'This field is required',
            '*.string'      => 'Please input a string data',
            '*.email'       => 'Please input a valid email',
            '*.max'         => 'This field should not be greater than 255',
            '*.integer'     => 'Please input an integer value',
            '*.image'       => 'Please select a image file',
            '*.mimes'       => 'You can choose jpg & jpeg files only',
        ]);

        $auth   = auth()->user();

        // Image Portion
        if ($request->hasFile('image')) {
            $pic    = auth()->user()->image;

            if ($pic != 'default.png') {
                unlink(base_path('public/backend/assets/images/profile/' . $pic));
            }

            $img        = Image::make($request->image);
            $img_name   = auth()->id() . $auth->name . "." . $request->image->getClientOriginalExtension();

            $img->save(base_path('public/backend/assets/images/profile/' . $img_name));

            User::find(auth()->id())->update([
                'image' => $img_name,
                'updated_at'    => Carbon::now(),
            ]);
        }

        // Update Portion
        User::find($auth->id)->update([
            'name'      => $request->name,
            'email'     => $request->email,
        ]);

        return back()->with('success', 'Successfully updated your Profile');
    }





    /*
    |--------------------------------------------------------------------------
    |                              EDIT PASSWORD METHOD
    |--------------------------------------------------------------------------
    */
    public function editPass()
    {
        return view('backend.profile.edit-password');
    }





    /*
    |--------------------------------------------------------------------------
    |                              UPDATE PASSWORD METHOD
    |--------------------------------------------------------------------------
    */
    public function updatePass(Request $request)
    {

        // Validation Portion
        $request->validate([
            'old_pass'              => 'required',
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required',
        ], [
            '*.required'    => 'This field is required.',
            '*.confirmed'   => "Confirm Password doesn't match.",
        ]);

        // Match the old password
        if (!Hash::check($request->old_pass, auth()->user()->password)) {
            return back()->with('error', "Old Password doesn't match");
        }

        // Update the new Password
        User::whereId(auth()->id())->update([
            'password'      => Hash::make($request->password),
            'updated_at'    => Carbon::now(),
        ]);

        return back()->with('success', "Successfully updated your password");
    }

}
