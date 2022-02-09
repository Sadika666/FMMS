<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;

class SectionController extends Controller
{
    public function section()
    {
        $sections = Section::all();
        // dd($section);
        return view('admin.machines.section',compact('sections'));
    }  

    public function Sectionregistration()
    {
        return view('admin.layouts.sectionregistration');
    }


    public function store(Request $request)
    {

        // dd($request->all());
       Section::create([
            'name'=>$request->name,
            'location'=>$request->location,
            'contact'=>$request->contact,
            'managername'=>$request->managername,
           'managerid'=>$request->id,
           'status'=>$request->status,
            




        ]);
        return redirect()->back()->with('success','Section Registrate Successfully.');

    }

    public function Edit($id)
    
    {
        $section=Section::find($id);
        //        $section=section::where('user_id',$id)->first();
        
        //        dd($section);
                
        
                return view('admin.machines.edit-section',compact('section'));
          
    }
    public function update(Request $request,$id)
    
    {
        // dd($request->all());
        $sections=Section::find($id);
        //        $section=section::where('user_id',$id)->first();
        
        //        dd($section);
            $sections->update([

                    'name'=>$request->name,
                    'location'=>$request->location,
                    'contact'=>$request->contact,
                    'managername'=>$request->managername,
                   'managerid'=>$request->id,
                   'status'=>$request->status,
                    
        





            ]);
        
                return redirect()->route('section');
          
    }
        

    
    
}
    

