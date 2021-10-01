<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupes=Groupe::all();
        return view('groupes.index')->with('groupes',$groupes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("groupes");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nom=$request->get("nom");
        $groupe=new Groupe();
        $groupe->nom=$nom;
        $groupe->save();
         return redirect()->back()->with("success","تم إضافة الفوج بنجاح ");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function show(Groupe $groupe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( Groupe $groupe)
    {
        return view('groupes.edit',compact('groupe'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Groupe $groupe)
    {
        $nom=$request->get("nom");
        $groupe->nom=$nom;
        $groupe->save();
    
        return redirect()->route("groupes.index")->with('success','لقد تم حفظ التعديلات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Groupe $groupe)
    {
       $groupe->delete();

        return redirect()->route("groupes.index")->with('success',' تمت عملية  الحدف  بنجاح');

}
}