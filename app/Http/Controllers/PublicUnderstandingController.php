<?php

namespace App\Http\Controllers;
use App\UnderstandingMigrations;
use Illuminate\Http\Request;
use Redirect;
use PDF;


class PublicUnderstandingController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['understandings'] = UnderstandingMigrations::orderBy('understandingTitle','asc')->paginate(10);


        return view('understanding.publicIndex',$data);
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['understanding_info'] = UnderstandingMigrations::where($where)->first();
        $data['understandings'] = UnderstandingMigrations::orderBy('id','asc')->paginate(10);


        return view('understanding.articleEdit', $data);
    }
}
