<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\SubjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Matcher\Subset;

class SubjectController extends Controller
{
    public function list()
    {
       

        $data['header_title'] = "Subject List";
        $subject=Subject::paginate(2);
        return view('pages.subject.list', $data, compact('subject'));
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
        // dd($request->all());
        
        // Inset Data to Table
        $subject = new Subject();
        $subject->name      = $request->name;
        $subject->type      = $request->type;
        $subject->status    = $request->status;
        $subject->create_by= Auth::user()->name;
        $subject->save();

        

        return redirect()->route('subject.list')->with('success', "Subject Successfully created");
    }

    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('pages.subject..edit', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);
        $subject->name      = $request->name;
        $subject->type      = $request->type;
        $subject->status    = $request->status;

        return redirect()->route('subject.list')->with('success', "Subject Successfully Created");

    }

    public function delete($id)
    {
        $delete = Subject::find($id);
        if($delete) {
            $delete->delete();
            return redirect()->back()->with('success', "Subject Successfully Deleted");
        }
        else
        {
            return redirect()->route('subject.list');
        }
    }

    
}
