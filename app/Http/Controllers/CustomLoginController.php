<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomLoginController extends Controller
{
    public function index(Request $request)
    {

        if(auth()->attempt(['roll'=> $request->roll, 'password'=>$request->password]))
        {

            if (auth()->user()->role_id == 1) {
                    return redirect('/student-dashboard');
              }
            else{
                    return redirect('/')->with('message', 'You dont have permission to view this page.');

                }

        }
        else{
            return redirect('/')->with('message', 'Wrong Credential');

        }

    }
    public function teacher(Request $request)
    {

        if (auth()->attempt(['t_id' => $request->t_id, 'password' => $request->password])  ) {

            if (auth()->user()->role_id == 2) {
                return redirect('/teacher-dashboard');

            }


            else {
                return redirect('/')->with('message', 'You dont have permission to view this page.');

            }
        }
        else {
            return redirect('/')->with('message', 'Wrong Credential');

        }
    }
    public function guest(Request $request)
    {

        if(auth()->attempt(['g_id'=> $request->g_id, 'password'=>$request->password]))
        {

            if (auth()->user()->role_id == 3) {
                return redirect('/guest-teacher-dashboard');
            }
            else{
                return redirect('/')->with('message', 'You dont have permission to view this page.');

            }

        }
        else{
            return redirect('/')->with('message', 'Wrong Credential');

        }

    }


}
 
