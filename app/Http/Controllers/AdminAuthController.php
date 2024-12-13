<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller {
    public function showLoginForm() {
        // If the admin is already logged in, redirect to the dashboard
        if ( Auth::guard( 'admin' )->check() ) {
            return redirect()->route( 'admin.dashboard' );
        }

        return view( 'admin.login' );

    }

    public function login( Request $request ) {
        // Validate the form data
        $request->validate( [
            'email' => 'required|email',
            'password' => 'required',
        ] );

        // Check if the admin exists
        $admin = Admin::where( 'email', $request->email )->first();

        if ( $admin && Hash::check( $request->password, $admin->password ) ) {
            // Log in the admin
            Auth::guard( 'admin' )->login( $admin );

            // Redirect to the dashboard
            return redirect()->route( 'admin.dashboard' );
        }

        // If authentication fails, redirect back with an error
        return back()->withErrors( [ 'email' => 'Invalid credentials' ] );
    }

    public function dashboard() {
        return view( 'admin.dashboard' );
        // if ( Auth::guard( 'admin' )->check() ) {
        // }
        // return redirect()->route( 'admin.login' );
    }

    public function logout( Request $request ) {
        // Log out the admin
        Auth::guard( 'admin' )->logout();

        // Redirect back to the login page
        return redirect()->route( 'admin.login' );
    }

}
