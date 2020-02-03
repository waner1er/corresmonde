<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;


class publicProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['projects'] = Project::orderBy('projectTitle','asc')->paginate(10);


        return view('project.projet',$data);
    }




}
