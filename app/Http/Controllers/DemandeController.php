<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Demande;
use phpDocumentor\Reflection\Types\Null_;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dossiers= DB::table('dossiers')->get();
        $data = Demande::latest()->paginate(100);
       // $ds=Null;
    
        return view('demandes.index',compact('data' ,'dossiers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dossiersList= DB::table('dossiers')->get();
        $typesList= DB::table('types')->get();
        return view ('demandes.create', compact('dossiersList','typesList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate ([
            'dossier_id' => 'required',
            'types_id' => 'required',
            'date_demande' => 'required',
            'motif_demande' => 'required',
        ]);
        $demande = new Demande;
        $demande->dossier_id = $request->dossier_id;
        $demande->types_id = $request->types_id;
        $demande->date_demande = $request->date_demande;
        $demande->motif_demande = $request->motif_demande;
        $demande->save();
        return redirect()
        ->route('demandes.index')
        ->with('success', 'Demande Creer avec succes');

}

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $demande = Demande::find($id);
        return view ('demandes.show' , compact('demande'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $demande = Demande::find($id);
        return view ('demandes.edit' , compact('demande'));

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
       
         $request->validate ([
            'date_demande' => 'required',
            'motif_demande' => 'required',
            'avis_commission' => 'required',
            'date_commission' => 'required',
            'motif_commission' => 'required',

        ]);
        $demande = Demande::find($id);
        $demande->date_demande = $request->date_demande;
        $demande->motif_demande = $request->motif_demande;
        $demande->avis_commission = $request->avis_commission;
        $demande->date_commission = $request->date_commission;
        $demande->motif_commission = $request->motif_commission;
        $demande->save();
        return redirect()
        ->route('demandes.index')
        ->with('success', 'Demande modifié avec succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demande $demande)
    {
        $demande->delete();
    
        return redirect()->route('demandes.index')
                        ->with('success','Dossier deleted successfully');
    }
}
