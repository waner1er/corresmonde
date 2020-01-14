<?php

namespace App\Http\Controllers;

use App\UnderstandingMigrations;
use Illuminate\Http\Request;
use Redirect;
use PDF;

class UnderstandingMigrationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['understandings'] = UnderstandingMigrations::orderBy('understandingTitle','asc')->paginate(10);

        return view('understanding.list',$data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('understanding.create');
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
            'understandingTitle' => 'required',
            'understandingContent' => 'required',
        ]);

        UnderstandingMigrations::create($request->all());

        return Redirect::to('understandings')->with('success','Greate! understanding created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UnderstandingMigrations  $understanding
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UnderstandingMigrations  $understanding
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['understanding_info'] = UnderstandingMigrations::where($where)->first();

        return view('understanding.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UnderstandingMigrations  $understanding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'understandingTitle' => 'required',
            'understandingContent' => 'required',
        ]);

        $update = ['understandingTitle' => $request->understandingTitle,'understandingContent' => $request->understandingContent];
        UnderstandingMigrations::where('id',$id)->update($update);

        return Redirect::to('understandings')
       ->with('success','Great! understanding updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UnderstandingMigrations  $understanding
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UnderstandingMigrations::where('id',$id)->delete();

        return Redirect::to('understandings')->with('success','understanding deleted successfully');
    }

}
