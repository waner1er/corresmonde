<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Source;
use Redirect;
use PDF;

class PublicSourceController extends Controller
{
    public function index()
    {
        $data['sources'] = Source::orderBy('sourceTitle','asc')->paginate(10);

        return view('source.publicList',$data);
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['source_info'] = Source::where($where)->first();
        $data['sources'] = Source::orderBy('id','asc')->paginate(50);


        return view('source.articlePublicSource', $data);
    }

}
