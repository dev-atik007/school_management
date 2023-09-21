<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
    public function list()
    {
        $data['getRecord'] = ClassModel::getRecord();
        $data['header_title'] = "Class List";
        return view('pages.class.list', $data);
    }

    public function add()
    {
        $data['header_title'] = "Add New Class";
        return view('pages.class.add', $data);
    }

    public function insert(Request $request)
    {
        $save = new ClassModel();
        $save->name  = $request->name;
        $save->status = $request->status;
        $save->created_by = Auth::user()->id;
        $save->save();

        return redirect()->route('class.list')->with('success', "Class Successfully Created");
    }

    public function edit($id)
    {
        $data['getRecord'] = ClassModel::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = "Admin Edit";
            return view('pages.class.edit', $data);
        }
        else 
        {
            abort(404);
        }  
    }

    public function update($id, Request $request)
    {
        $save = ClassModel::getSingle($id);

        $save = new ClassModel();
        $save->name  = $request->name;
        $save->status = $request->status;
        $save->save();

        return redirect()->route('class.list')->with('success', "Class Successfully Updated");
    }

    public function delete($id)
    {
        $save = ClassModel::getSingle($id)->delete();

        return redirect()->route('class.list')->with('success', "Admin successfully deleted");
    }

    
}
// $user = User::getSingle($id)->delete();