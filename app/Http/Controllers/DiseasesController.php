<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disease;

class DiseasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['diseases'] = Disease::paginate(3);
        return view('diseases.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('diseases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'diseasename' => 'required',
            'infected' => 'required'
        ]);
        Disease::create($request->all());
        return redirect(route('diseases.index'));
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
        $disease = Disease::find($id);
        return view('diseases.show')->with('disease', $disease);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $disease = Disease::find($id);
        return view('diseases.edit')->with('disease', $disease);
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
        //
        //
        $this->validate($request, [
            'diseasename' => 'required',
            'infected' => 'required'
        ]);

        $disease = Disease::find($id);
        $disease->diseasename = $request->input('diseasename');
        $disease->infected = $request->input('infected');
        $disease->save();

        return redirect('/diseases')->with('success', 'Diseases Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $disease = Disease::find($id);
        $disease->delete();

        return redirect('/diseases')->with('success', 'Diseases Deleted.');
    }
}
