<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;


class EmployeeController extends Controller
{
    public function employeelist()
    {
        $employees = Registration::all();
        // dd($employees);
        return view('admin.layouts.employeelist',compact('employees'));
    }  

    public function Registration()
    {
        return view('admin.layouts.registration');
    }


    public function store(Request $request)
    {

        //dd($request->all());
       Registration::create([
            'name'=>$request->name,
            'contact'=>$request->contact,
            'address'=>$request->address,
            'gender'=>$request->gender,
           'machineid'=>$request->machineid,
            




        ]);
        return redirect()->back()->with('success','Employee Registrate Successfully.');

    }


    public function Edit($id)
    
    {
        $employees=Employee::find($id);
        //        $employee=employee::where('user_id',$id)->first();
        
        //        dd($employee);
                
        
                return view('admin.layouts.edit-employee',compact('employees'));
          
    }
    public function Update(Request $request,$id)
    
    {
        // dd($request->all());
        $employees=Employee::find($id);
        //        $employee=employee::where('user_id',$id)->first();
        
        //        dd($section);
            $employees->update([

                'name'=>$request->name,
                'contact'=>$request->contact,
                'address'=>$request->address,
                'gender'=>$request->gender,
               'machineid'=>$request->machineid,
        





            ]);
        
                return redirect()->route('employee');
          
    }
        

}

