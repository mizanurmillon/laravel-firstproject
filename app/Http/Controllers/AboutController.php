<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AboutController extends Controller
{
    public function Contact()
    {
        $contact=DB::table('contacts')->get();
        return view('pages.contact')->with('data',$contact);
    }
    public function Insert()
    {
        return view('pages.insert');
    }
    public function DataAdded(Request $request)
    {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['description']=$request->description;

        $insert=DB::table('contacts')->insert($data);
        return Redirect()->Route('all.contacts');
    }
    public function Delete($id)
    {
        $blt=DB::table('contacts')->where('id',$id)->delete();
        return Redirect()->Route('all.contacts');
    }
    public function Edit($id)
    {
        $edit=DB::table('contacts')->where('id',$id)->first();
        return view('pages.editcontact',compact('edit'));
    }
    public function Update(Request $request,$id)
    {
        $update=array();
        $update['name']=$request->name;
        $update['email']=$request->email;
        $update['phone']=$request->phone;
        $update['description']=$request->description;

        $upd=DB::table('contacts')->where('id',$id)->update($update);
        return Redirect()->Route('all.contacts');
    }
    public function View($id)
    {
        $view=DB::table('contacts')->where('id',$id)->first();
        return view('pages.viewcontact',compact('view'));
    }
}
