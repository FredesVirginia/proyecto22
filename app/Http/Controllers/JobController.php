<?php

namespace App\Http\Controllers;
use App\Models\Ability;
use App\Models\Job;
use App\Models\Profession;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function index()
    {
        return view('app.jobs.index');
    }

    public function create()
    {
        $professions = Profession::all();
        $abilities = Ability::all();

        return view('app.jobs.edit' , compact('professions' , 'abilities'));
    }

    public function store(Request $request)
    {
        $newJob = auth()->user()->jobs()->create([
            'place_id' => 1,
            'company_id' => 1,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'cached_profession_ids' => $request->input('profession'),
            'cached_ability_ids' => $request->input('ability'),
            'experience_type_id' => $request->input('experience'),
            'job_type' => $request->input('job_type'),
            'salary_min' => $request->input('salary_min'),
            'salary_max' => $request->input('salary_min'), // Revisar si es correcto
            'payment_periodicity_id' => $request->input('periodicity_payment'),
            'status' => $request->input('status'),
        ]);
       


        auth()->user()->jobs()->save($newJob);
        // validar datos

        // guardar
        // auth()->user()->jobs()->create([ ]);



        // return response()->withError('Anuncio creado correctamente');
        // return response()->withSuccess('Anuncio creado correctamente');

    }


}
