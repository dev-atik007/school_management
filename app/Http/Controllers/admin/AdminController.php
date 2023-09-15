<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function list()
    {
        $data['getRecord'] = User::getAdmin();
        $data['header_title'] = "Admin List";
        return view('pages.admin.list', $data);
    }

    public function add()
    {
        $data['header_title'] = "Add New Admin";
        return view('pages.admin.add', $data);
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        $user = new User();
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->user_type = 1;
        $user->save();
        // $user=User::create([
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'password'=>Hash::make($request->password),
        //     'user_type'=> 1,
        
        // ]);

        return redirect()->route('admin.list')->with('success', "Admin successfully created");

    }

    public function edit($id)
    {
        $data['getRecord'] = User::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = "Admin Edit";
            return view('pages.admin.edit', $data);
        }
        else
        {
            abort(404);
        }
        
    }

    public function update(Request $request,$id)
    {
        $user = User::getSingle($id);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        if(!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('admin.list')->with('success', "Admin successfully updated");

    }

    public function delete($id)
    {
        $user = User::getSingle($id)->delete();
        // User::find($id)->delete();

        return redirect()->route('admin.list')->with('success', "Admin successfully deleted");
    }


}
