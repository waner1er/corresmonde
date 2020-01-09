<?php

namespace App\Http\Controllers;

use App\Deroule;
use Illuminate\Http\Request;
use Redirect;
use PDF;
class DerouleController extends Controller
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
        $data['deroules'] = Deroule::orderBy('derouleTitle','desc')->paginate(10);

        return view('deroule.list',$data);
    }

 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deroule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'deroueTitle' => 'required',
            'deroueContent' => 'required',
        ]);

        Deroule::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deroule  $deroule
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deroule  $deroule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['deroule_info'] = Deroule::where($where)->first();

        return view('deroule.edit', $data);
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
        $request->validate([
            'derouleTitle' => 'required',
            'derouleContent' => 'required',
        ]);

        $update = ['derouleTitle' => $request->derouleTitle,'derouleContent' => $request->derouleContent];
        Deroule::where('id',$id)->update($update);

        return Redirect::to('deroules');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deroule  $deroule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Deroule::where('id',$id)->delete();

        return Redirect::to('deroules')->with('success','Deroule deleted successfully');
    }
}
