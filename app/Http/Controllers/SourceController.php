<?php

namespace App\Http\Controllers;

use App\Source;
use Illuminate\Http\Request;
use Redirect;
use PDF;

class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sources'] = Source::orderBy('sourceTitle','asc')->paginate(2);

        return view('source.list',$data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('source.create');
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
            'sourceTitle' => 'required',
            'sourceContent' => 'required',
        ]);

        Source::create($request->all());

        return Redirect::to('sources')->with('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['source_info'] = Source::where($where)->first();

        return view('source.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'sourceTitle' => 'required',
            'sourceContent' => 'required',
        ]);

        $update = ['sourceTitle' => $request->sourceTitle,'sourceContent' => $request->sourceContent];
        Source::where('id',$id)->update($update);

        return Redirect::to('sources')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Source::where('id',$id)->delete();

        return Redirect::to('sources')->with('success','understanding deleted successfully');
    }

}
