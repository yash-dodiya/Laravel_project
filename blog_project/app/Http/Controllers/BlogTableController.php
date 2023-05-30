<?php

namespace App\Http\Controllers;

use App\Models\blog_table;
use Illuminate\Http\Request;

class BlogTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,register $register)
    {
        $registertdata =array("user_name"=> $request->user_name,"email"=> $request->email,"password" =>$request->Password); 

        // dd($registertdata);

        $regis_user = $register->registeruser($registertdata,$register);

        // dd($regis_user);

        return $regis_user;
    }

    /**
     * Display the specified resource.
     */
    public function Log_in(Request $request,register $register)
    {
        $logindata =array("email"=> $request->email,"Password" =>$request->Password); 
        // dd($logindata);
        $login_user = $register->login_user($logindata,$register);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog_table $blog_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog_table $blog_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog_table $blog_table)
    {
        //
    }
}
