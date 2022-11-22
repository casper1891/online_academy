<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subjects = Subject::all();
        return view('admin.subjects.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'sub_name'=>'required|max:30|min:3',
            'img'=>'required|image|mimes:png,jpg',
            'active'=>'min:0,max:1',
        ]);

        $newimg=Storage::putFile('img',$data['img']);

        $data['img']=$newimg;
        Subject::create($data);
        return redirect()->route('subjects.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject=Subject::findOrFail($id);
        return view('admin.subjects.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
        $data=$request->validate([
            'sub_name'=>'max:30|min:3',
            'img'=>'image|mimes:png,jpg',
            'active'=>'min:0,max:1',
        ]);

        $subject=Subject::findOrFail($id);
        if($request->has('img')){
            Storage::delete($subject->img);
            $newimg=Storage::putFile('img',$data['img']);

            $data['img']=$newimg;
        }
        $subject->update($data);
        return redirect()->route('subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject=Subject::findOrFail($id);
        Storage::delete($subject->img);
        $subject->delete();

        return redirect()->route('subjects.index');
    }
}
