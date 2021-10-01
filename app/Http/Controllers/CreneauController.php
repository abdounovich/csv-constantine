<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Creneau;
use Illuminate\Http\Request;

class CreneauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupes=Groupe::all();
        $creanaus=Creneau::all();
        return view('creneaus.index')->with('groupes',$groupes)->with('creanaus',$creanaus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $nom=$request->get("nom");
            $debut=$request->get("debut");
            $fin=$request->get("fin");
            $groupe_id=$request->get("groupe");
            $jour=$request->get("jour");
            $creneau=new Creneau();
            $creneau->nom=$nom;
            $creneau->jour=$jour;
            $creneau->debut=$debut;
            $creneau->fin=$fin;
            $creneau->groupe_id=$groupe_id;


            $creneau->save();
             return redirect()->back()->with("success","تم إضافة الحصة بنجاح ");

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Creneau  $creneau
     * @return \Illuminate\Http\Response
     */
    public function show(Creneau $creneau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Creneau  $creneau
     * @return \Illuminate\Http\Response
     */
    public function edit(Creneau $creneau)
    {
        $groupes=Groupe::all();
        return view('creneaus.edit',compact('creneau',"groupes"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Creneau  $creneau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Creneau $creneau)
    {
        $nom=$request->get("nom");
        $debut=$request->get("debut");

        $jour=$request->get("jour");

        $fin=$request->get("fin");
        $groupe_id=$request->get("groupe_id");


        $creneau->nom=$nom;
        $creneau->debut=$debut;

        $creneau->fin=$fin;

        $creneau->jour=$jour;
        $creneau->groupe_id=$groupe_id;
        $creneau->save();
    
        return redirect()->route("creneaus.index")->with('success','لقد تم حفظ التعديلات بنجاح');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Creneau  $creneau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Creneau $creneau)
    {
        $creneau->delete();

        return redirect()->route("creneaus.index")->with('success',' تمت عملية  الحدف  بنجاح');

    }
}
