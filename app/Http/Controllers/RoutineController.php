<?php

namespace App\Http\Controllers;

use App\Models\Routine;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class RoutineController extends Controller
{
    public function show(){
        $routine = Routine::all();
        return view('index',compact(['routine']));
    }
    public function add(){
        return view('add');
    }
   public function store(Request $request){
        // dd($request);
        $routine = Routine::create([
            'routine'=>$request->input('routine'),
            'place'=>$request->input('place'),
            'date'=>$request->input('date')
        ]);
        return redirect('/');
   }
   public function edit($id){
    $routine = Routine::find($id);
    return view('edit.edit',compact(['routine']));
   }
   public function update($id, Request $request){
    $routine = Routine::find($id);
    $routine -> update($request->all());
    return redirect('/');
   }
   public function destroy($id){
    $routine = Routine::find($id);
    $routine -> delete();
    return redirect('/');
   }
}
