<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Machines;
use App\Models\placements;

class MachineController extends Controller
{
    public function machine()
    {
        $machines = Machine::all();
        //dd($machines);
        return view('admin.machines.machine',compact('machines'));
    
    } 

    public function machineregistration()
    {
        return view('admin.layouts.machineregistration');
    }
    public function store(Request $request)
    {
     //dd($request->all());
        
        Machines::create([
            'name'=>$request->name,
            'specification'=>$request->specification,
            'details'=>$request->details,
           'status'=>$request->status,
        ]);
        return redirect()->back()->with('success','Machine Registrate Successfully.');

    }





    public function machine_edit($id)
    
    {
        $machine=machine::find($id);
          //      $machine=machine::where('user_id',$id)->first();
        
        //        dd($machine);
                
        
                return view('admin.machines.edit-machine',compact('machines'));
          
    }
    public function machine_update(Request $request,$id)
    
    {
        // dd($request->all());
        $machines=machine::find($id);
        //        $machine=machine::where('user_id',$id)->first();
        
        //        dd($machine);
            $machines->update([

                'name'=>$request->name,
                'specification'=>$request->specification,
                'details'=>$request->details,
               'status'=>$request->status,
                    
        





            ]);
        
                return redirect()->route('machine');
          
    }
        







   
    public function placementregistration()
    {
        return view('admin.layouts.placementregistration');
    }
     public function add(Request $request)
     {
        // dd($request->all());
        
         Placements::create([
             'machine_id'=>$request->machine_id,
             'section'=>$request->section,
             'operator_id'=>$request->operator_id,
            'status'=>$request->status,
         ]);
         return redirect()->back()->with('success','Employee Registrate Successfully.');

     }

    public function Placements()
    {
        $placements = Placements::all();
       //dd($placements);
        return view('admin.machines.placements',compact('placements'));
   
    } 

    public function Edit($id)
    
    {
        $placements=Placements::find($id);
        //        $placements=placements::where('user_id',$id)->first();
        
        //        dd($placements);
                
        
                return view('admin.machines.edit-placements',compact('placements'));
          
    }
    public function update(Request $request,$id)
    
    {
        // dd($request->all());
        $placements=Placements::find($id);
        //        $placements=placements::where('user_id',$id)->first();
        
        //        dd($section);
            $placements->update([

                'machine_id'=>$request->machine_id,
                'section'=>$request->section,
                'operator_id'=>$request->operator_id,
               'status'=>$request->status,
                    
        





            ]);
        
                return redirect()->route('placement');
          
    }
        








    public function newpurchagemachinelist()
    {
       return view('admin.machines.newpurchagemachinelist');
    }

    public function repairingcentre()
    {
       return view('admin.machines.repairingcentre');
    }

    public function repairmachinelist()
    {
       return view('admin.machines.repairmachinelist');
    }

    public function invalidmachine()
    {
        return view('admin.machines.invalidmachine');
    } 

}
