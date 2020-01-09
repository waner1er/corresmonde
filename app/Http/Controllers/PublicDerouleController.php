<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deroule;


class PublicDerouleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['deroules'] = Deroule::orderBy('derouleTitle','asc')->paginate(10);


        return view('deroule.publicDeroule',$data);
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
     * @param  \App\Deroule  $deroule
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deroule  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['deroule_info'] = Deroule::where($where)->first();
        $data['deroules'] = Deroule::orderBy('id','asc')->paginate(10);


        return view('deroule.articleDeroule', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deroule  $deroule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deroule  $deroule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //
    }
}



