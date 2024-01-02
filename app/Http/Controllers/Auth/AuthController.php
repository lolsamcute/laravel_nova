<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class AuthController extends Controller
{
    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        // Check if the user is already authenticated
        // if (Auth::check()) {
            // dd('User is authenticated'); // Debugging statement
            return redirect()->route('dashboard');
        // }

        // If the user is not authenticated, show the login form
        // dd('User is not authenticated'); // Debugging statement
        return view('auth.login'); // Replace 'auth.login' with the actual view name for your login form
    }




public function login(Request $request)
{
    try {
        $response = Http::post('https://kreatesell.io/api/auth/superadmin/signin', [
            'username' => $request->username,
            'password' => $request->password,
        ]);


        // Check for HTTP status code in the response headers
        $statusCode = $response->status();

        if ($statusCode === 200) {
            $responseData = $response->json();

            // Retrieve user data from the response (adjust this based on the actual structure of your response)
            // $userData = [
            //     'id' => $responseData['user']['id'],
            //     'email' => $responseData['user']['email'],
            //     // Add other user data fields as needed
            // ];

           // Create a user instance or retrieve it based on the user data
            // $user = User::where(['Email' => $userData['email']])->first();

            // Authenticate the user
            // Auth::login($user);

            if (isset($responseData['role']) && $responseData['role'] === 'SuperAdmin') {
                return redirect()->route('dashboard')->with('success', 'Login Successfully');
            } else {
                return back()->with('error', 'You are not authorized to access this dashboard.');
            }
        } else {
            return back()->with('error', 'Invalid Email or password');
        }
    } catch (\Exception $exception) {
        return response()->json(['error' => true, 'message' => $exception->getMessage()], 500);
    }
}






    /**
     * Log the user out and redirect to the login page.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect()->route('login');
    }
}
