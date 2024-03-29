<?php

namespace App\Http\Controllers;

use App\Quack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Tweet.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('Tweet.create');
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
     * @param  \App\Quack  $quack
     * @return \Illuminate\Http\Response
     */
    public function show(Quack $quack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quack  $quack
     * @return \Illuminate\Http\Response
     */
    public function edit(Quack $quack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quack  $quack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quack $quack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quack  $quack
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quack $quack)
    {
        //
    }

    public function delete(Quack $quack)
    {
        //
    }
}
