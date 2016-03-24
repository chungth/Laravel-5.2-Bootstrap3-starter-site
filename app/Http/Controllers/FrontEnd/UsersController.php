<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    /**
     * Show user profile page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        //TODO create user profile page here
        return view('frontend.users.show');
    }


    /**
     * Edit user information and password
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit ()
    {
        //TODO create user profile & password setting page here
        return view('frontend.users.edit');
    }

    public function update ()
    {

    }

}
