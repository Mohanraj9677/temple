<?php

namespace App\Http\Controllers;

use App\Models\Poosarifamilytree;
use Illuminate\Http\Request;
use App\Models\User;
use Mail;
use App\Mail\MailPage;

class PoosarifamilytreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checking(Request $request)
    {
        $details  = [];
        $details['name'] = 'name';
        $details['email'] = 'email';
        $details['role'] = 'role';
        Mail::to('srikanth240620@gmail.com')->send(new MailPage($details));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poosarifamilytree  $poosarifamilytree
     * @return \Illuminate\Http\Response
     */
    public function show(Poosarifamilytree $poosarifamilytree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poosarifamilytree  $poosarifamilytree
     * @return \Illuminate\Http\Response
     */
    public function edit(Poosarifamilytree $poosarifamilytree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poosarifamilytree  $poosarifamilytree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poosarifamilytree $poosarifamilytree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poosarifamilytree  $poosarifamilytree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poosarifamilytree $poosarifamilytree)
    {
        //
    }
}
