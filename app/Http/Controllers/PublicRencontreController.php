<?php

namespace App\Http\Controllers;

use App\Rencontre;
use Illuminate\Http\Request;
use Redirect;
use PDF;

class PublicRencontreController extends Controller
{
    public function index()
    {
        $data['rencontres'] = Rencontre::orderBy('rencontreTitle','asc')->paginate(10);

        return view('rencontre.publicList',$data);
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['rencontre_info'] = Rencontre::where($where)->first();
        $data['rencontres'] = Rencontre::orderBy('id','asc')->paginate(10);


        return view('rencontre.articlePublicRencontre', $data);
    }

}
