<?php

namespace App\Http\Controllers;
use App\Models\Dossier;
use Illuminate\Http\Request;

class DossierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data = Dossier::latest()->paginate(100);
    
        return view('dossiers.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dossiers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
           
            'dossier_type' => 'required',
            'dossier_name' => 'required',
            'dossier_date_of_constitution' => 'required',
            'dossier_adress' => 'required',
            'dossier_country' => 'required',
            'dossier_type_of_activity' => 'required',
            'dossier_activity' => 'required',
            'dossier_branch_addresses' => 'required',
            'dossier_phone_number' => 'required',
            'dossier_fax_number' => 'required',
            'dossier_mobile_number' => 'required',
            'dossier_legal_representative_name' => 'required',
            ## 'dossier_legal_representative_date_of_birth' => 'required',
            ##'dossier_legal_representative_place_of_birth' => 'required',
            ##'dossier_legal_representative_mobile' => 'required',
            ##'dossier_legal_representative_nationality' => 'required'
        ]);
        $dossier = new Dossier();
        $dossier->dossier_type = $request->dossier_type;
        $dossier->dossier_name = $request->dossier_name;
        $dossier->dossier_date_of_constitution = $request->dossier_date_of_constitution;
        $dossier->dossier_adress = $request->dossier_adress;
        $dossier->dossier_country = $request->dossier_country;
        $dossier->dossier_type_of_activity = $request->dossier_type_of_activity;
        $dossier->dossier_activity = $request->dossier_activity;
        $dossier->dossier_branch_addresses = $request->dossier_branch_addresses;
        $dossier->dossier_phone_number = $request->dossier_phone_number;
        $dossier->dossier_fax_number = $request->dossier_fax_number;
        $dossier->dossier_mobile_number = $request->dossier_mobile_number;
        $dossier->dossier_legal_representative_name = $request->dossier_legal_representative_name;
        $dossier->save();

        return redirect()->route('dossiers.index')
                        ->with('success','Dossier Creer avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dossier  $dossier
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        $dossier = Dossier::find($id);
        return view('dossiers.show', compact('dossier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dossier  $dossier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $dossier = Dossier::find($id);
        return view('dossiers.edit',compact('dossier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dossier  $dossier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id )
    {
        
        $request->validate([
            'dossier_type' => 'required',
            'dossier_name' => 'required',
            'dossier_date_of_constitution' => 'required',
            'dossier_adress' => 'required',
            'dossier_country' => 'required',
            'dossier_type_of_activity' => 'required',
            'dossier_activity' => 'required',
            'dossier_branch_addresses' => 'required',
            'dossier_phone_number' => 'required',
            'dossier_fax_number' => 'required',
            'dossier_mobile_number' => 'required',
            'dossier_legal_representative_name' => 'required',
        ]);
        $dossier = Dossier::find($id);
        $dossier->dossier_type = $request->dossier_type;
        $dossier->dossier_name = $request->dossier_name;
        $dossier->dossier_date_of_constitution = $request->dossier_date_of_constitution;
        $dossier->dossier_adress = $request->dossier_adress;
        $dossier->dossier_country = $request->dossier_country;
        $dossier->dossier_type_of_activity = $request->dossier_type_of_activity;
        $dossier->dossier_activity = $request->dossier_activity;
        $dossier->dossier_branch_addresses = $request->dossier_branch_addresses;
        $dossier->dossier_phone_number = $request->dossier_phone_number;
        $dossier->dossier_fax_number = $request->dossier_fax_number;
        $dossier->dossier_mobile_number = $request->dossier_mobile_number;
        $dossier->dossier_legal_representative_name = $request->dossier_legal_representative_name;
        $dossier->save();

    
        return redirect()->route('dossiers.index')
                        ->with('success','Dossier updated successfully');
    }   
    /**
     *
     * @param  \App\Models\Dossier  $dossier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dossier $dossier)
    {
        $dossier->delete();
    
        return redirect()->route('dossiers.index')
                        ->with('success','Dossier deleted successfully');
    }
    public function search(Request $request)
    {
        $key = trim($request->get('q'));
        $dossiers = Dossier::query()
        ->where('title', 'like', "%{$key}%")
        ->orWhere('content', 'like', "%{$key}%")
        ->orderBy('created_at', 'desc')
        ->get();
    }
}
