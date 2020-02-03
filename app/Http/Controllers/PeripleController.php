<?php

namespace App\Http\Controllers;

use App\Periple;
use Illuminate\Http\Request;
use Redirect;
use PDF;

class PeripleController extends Controller
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
        $data['periples'] = Periple::orderBy('peripleTitle','asc')->paginate(10);

        return view('periple.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('periple.create');
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
            'peripleTitle' => 'required',
            'peripleContent' => 'required',
        ]);

        Periple::create($request->all());

        return Redirect::to('periples')->with('success','Greate! periple created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Periple  $periple
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Periple  $periple
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['periple_info'] = Periple::where($where)->first();

        return view('periple.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Periple  $periple
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'peripleTitle' => 'required',
            'peripleContent' => 'required',
        ]);

        $update = ['peripleTitle' => $request->peripleTitle,'peripleContent' => $request->peripleContent];
        Periple::where('id',$id)->update($update);

        return Redirect::to('periples')
       ->with('success','Great! periple updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Periple  $periple
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Periple::where('id',$id)->delete();

        return Redirect::to('periples')->with('success','periple deleted successfully');
    }

}
