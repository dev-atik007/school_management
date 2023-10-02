<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassSubjectController extends Controller
{
    public function list()
    {
        
        $data['header_title'] = "Assign Subject List";
        return view('pages.assign_subject.list', $data);
    }

    public function add()
    {
        $data['header_title'] = "Assign Subject add";
        return view('pages.assign_subject.add', $data);

    }
}
