<?php

namespace App\Http\Controllers;

use App\Rencontre;
use Illuminate\Http\Request;
use Redirect;
use PDF;

class RencontreController extends Controller
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
        $data['rencontres'] = Rencontre::orderBy('rencontreTitle','asc')->paginate(10);

        return view('rencontre.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rencontre.create');
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
            'rencontreTitle' => 'required',
            'rencontreContent' => 'required',
        ]);

        Rencontre::create($request->all());

        return Redirect::to('rencontres')->with('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rencontre  $periple
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rencontre  $periple
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('rencontreTitle' => $id);
        $data['rencontre_info'] = Rencontre::where($where)->first();

        return view('rencontre.edit', $data);
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
            'rencontreTitle' => 'required',
            'rencontreContent' => 'required',
        ]);

        $update = ['rencontreTitle' => $request->rencontreTitle,'rencontreContent' => $request->rencontreContent];
        Rencontre::where('id',$id)->update($update);

        return Redirect::to('rencontres')
       ->with('success','Great! periple updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rencontre  $periple
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rencontre::where('id',$id)->delete();

        return Redirect::to('rencontres')->with('success','periple deleted successfully');
    }

}
