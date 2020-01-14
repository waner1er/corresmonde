<?php

namespace App\Http\Controllers;

use App\Periple;
use Illuminate\Http\Request;
use Redirect;
use PDF;

class PublicPeripleController extends Controller
{
    public function index()
    {
        $data['periples'] = Periple::orderBy('peripleTitle','asc')->paginate(10);

        return view('periple.publicList',$data);
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['periple_info'] = Periple::where($where)->first();
        $data['periples'] = Periple::orderBy('id','asc')->paginate(10);


        return view('periple.articleperiple', $data);
    }

}
