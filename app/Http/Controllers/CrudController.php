<?php

namespace App\Http\Controllers;

use App\Models\optional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = DB::table('student')->get();
        return view('welcome', ['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        

       DB::table('student')->insert([
        'name' => $request->name,
        'class'=> $request->class,
        'marks'=> $request->marks,
       ]); 
       return redirect(route('index'))->with('status','Student added');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(optional $optional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $student =DB::table('student')->find($id);
       return view('edit',['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table('student')->where('id', $request->id)->update([
            'name'=>$request->name,
            'class'=>$request->class,
            'marks'=>$request->marks,

        ]);

        return redirect(route('index'))->with('status', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('student')->where('id', $id)->delete();
        return redirect(route('index'))->with('status', 'Deleted');
    }
}
