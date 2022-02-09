<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\MachineController;
use App\Http\Controllers\Backend\SectionController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('admin.dashboard');
});


Route::get('/registration/operatorRegistration',[EmployeeController::class,'registration'])->name('registration');
Route::post('/registration/operatorRegistration',[EmployeeController::class,'store'])->name('registration.store');
Route::get('/machineregistration',[MachineController::class,'machineregistration'])->name('machineregistration');
Route::post('/machineregistration',[MachineController::class,'store'])->name('machineregistration.store');
Route::get('/sectionregistration',[SectionController::class,'sectionregistration'])->name('sectionregistration');
Route::post('/sectionregistration',[SectionController::class,'store'])->name('sectionregistration.store');
Route::get('/placementregistration',[MachineController::class,'placementregistration'])->name('placementregistration');
Route::post('/placementregistration',[MachineController::class,'add'])->name('placementregistration.add');




//Machine Route
Route::get('/lists/machinelist',[MachineController::class,'machine'])->name('machine');
Route::get('/Store/Componentslist',[MachineController::class,'componentslist'])->name('componentslist');
Route::get('/Store/Repairmachinelist',[MachineController::class,'repairmachinelist'])->name('repairmachinelist');
Route::get('/Newpurchagemachinelist',[MachineController::class,'newpurchagemachinelist'])->name('newpurchagemachinelist');
Route::get('/Repairingcentre',[MachineController::class,'repairingcentre'])->name('repairingcentre');
Route::get('/Invalidmachine',[MachineController::class,'invalidmachine'])->name('invalidmachine');
Route::get('/lists/placements',[MachineController::class,'placements'])->name('placements');
Route::get('/lists/machinelist/update/{id}',[MachineController::class,'machine_edit'])->name('admin.machine.edit');
Route::put('/lists/machinelist/update/{id}',[MachineController::class,'machine_update'])->name('admin.machine.update');



//Operator Route
Route::get('/lists/operatorlist',[EmployeeController::class,'employeelist'])->name('employeelist');
Route::get('/lists/operatorlist/update/{id}',[EmployeeController::class,'Edit'])->name('layouts.edit');
Route::put('/lists/operatorlist/update/{id}',[EmployeeController::class,'update'])->name('layouts.update');



//Section Route
Route::get('/lists/sections',[SectionController::class,'section'])->name('section');
Route::get('/lists/sections/update/{id}',[SectionController::class,'Edit'])->name('admin.edit');
Route::put('/lists/sections/update/{id}',[SectionController::class,'update'])->name('admin.update');

//Placements Route

Route::get('/lists/placements/update/{id}',[MachineController::class,'Edit'])->name('machine.edit');
Route::put('/lists/placements/update/{id}',[MachineController::class,'update'])->name('machine.update');

