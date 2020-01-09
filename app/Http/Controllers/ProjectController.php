<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Redirect;
use PDF;

class ProjectController extends Controller
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
        $data['projects'] = Project::orderBy('projectTitle','asc')->paginate(10);

        return view('project.list',$data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
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
            'projectTitle' => 'required',
            'projectContent' => 'required',
        ]);

        Project::create($request->all());

        return Redirect::to('projects')->with('success','Greate! Project created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['project_info'] = Project::where($where)->first();

        return view('project.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'projectTitle' => 'required',
            'projectContent' => 'required',
        ]);

        $update = ['projectTitle' => $request->projectTitle,'projectContent' => $request->projectContent];
        Project::where('id',$id)->update($update);

        return Redirect::to('projects')
       ->with('success','Great! Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::where('id',$id)->delete();

        return Redirect::to('projects')->with('success','Project deleted successfully');
    }

}
