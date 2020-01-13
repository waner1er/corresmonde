<?php

namespace App\Http\Controllers;

use App\Periples;
use Illuminate\Http\Request;

class PeriplesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['periples'] = Periples::orderBy('numArticle','asc')->paginate(10);


        return view('periples.list',$data);

    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('periples.create');
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
     * @param  \App\Periples  $periples
     * @return \Illuminate\Http\Response
     */
    public function show(Periples $periples)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Periples  $periples
     * @return \Illuminate\Http\Response
     */
    public function edit(Periples $periples)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Periples  $periples
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periples $periples)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Periples  $periples
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periples $periples)
    {
        //
    }
}
