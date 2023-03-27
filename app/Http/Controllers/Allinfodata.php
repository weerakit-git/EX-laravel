<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chatdata;

class Allinfodata extends Controller
{
    //Create index
    public function index() {
        $data['datachats'] = Chatdata::orderBy('id', 'asc')->paginate(5);
        return view('page.index' , $data);
    }

    //Create resource
    public function create() {
        return view('page.create');
    }

    //store data
    public function store(Request $request) {
        $request->validate([
            'toppic' => 'required',
            'text' => 'required',
           
        ]);
        $Datainfo = new Chatdata;
        $Datainfo->toppic = $request->toppic;
        $Datainfo->text = $request->text;
        $Datainfo->save();
        return redirect()->route('page.index')->with('success','Data post successfully.');
        
     }

      //edit
     public function edit(Chatdata $datachats) {
           return view('page.edit', compact('datachats'));
         }


         //update
         public function update(Request $request , $id) {
            $request->validate([
                'toppic' => 'required',
                'text' => 'required',
             
            ]);
            $Data_info =  Chatdata::find($id);
            $Data_info->toppic = $request->toppic;
            $Data_info->text = $request->text;
            $Data_info->save();
            return redirect()->route('page.index')->with('success','Data update successfully.');
            
         }



           //delete
     public function delete(Chatdata $indata) {
        $indata -> delete();
        return redirect()->route('page.index')->with('success','Data deleted successfully.');
            
       
      }
     

}
