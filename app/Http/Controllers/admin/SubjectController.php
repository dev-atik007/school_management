<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\abc;
use App\Models\SubjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function list()
    {
       

        $data['header_title'] = "Subject List";
        return view('pages.subject.list', $data);
    }

    public function add()
    {
        $data['header_title'] = "Add New Subject";
        return view('pages.subject.add', $data);
    }

    public function insert(Request $request)
    {   
        // Validation
        $request->validate([
            'name'   => 'required|max:40',
            'type'   => 'required|in:1,0',
            'status' => 'required|max:40',
        ]);
        
        // Inset Data to Table

        $abc = new abc();
        $abc->name  = $request->name;
        $abc->type  = $request->type;
        $abc->status= $request->status;
        $abc->save();

        return redirect()->route('subject.list')->with('success', "Subject Successfully created");
    }

    
}
