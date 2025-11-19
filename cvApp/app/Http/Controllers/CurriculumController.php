<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Illuminate\Database\QueryException;
use Illuminate\Database\UniqueConstrainViolationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CurriculumController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $curriculums = Curriculum::all();
        return view('curriculum.curriculums', ['curriculums' => $curriculums]);
    }

    /**
     * Show the form for creating a new resource.
     */
    function create():View {
        return view('curriculum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    function store(Request $request): RedirectResponse {
        if ($request->hasFile('image')) {
            $recogImg = $request->file('image');
            $nmbOrigin = $recogImg->getClientOriginalName();
            $path = $recogImg->storeAs('cv', $nmbOrigin, 'public');
        } else {
            $path = null;
        }

        if ($request->hasFile('pdf')) {
            $recogPDF = $request->file('pdf');
            $exte = $recogPDF->getClientOriginalName();
            $nmbPrede = 'Tu PDF | ' . $exte;
            $path_2 = $recogPDF->storeAs('pdf', $nmbPrede, 'public');
        } else {
            $path_2 = null;
        }

        $curriculum = new Curriculum();
        $curriculum->nombre = $request->nombre;
        $curriculum->apellidos = $request->apellidos;
        $curriculum->teléfono = $request->teléfono;
        $curriculum->correo = $request->correo;
        $curriculum->fecha_nacimiento = $request->fecha_nacimiento;
        $curriculum->nota_media = $request->nota_media;
        $curriculum->experiencia = $request->experiencia;
        $curriculum->formación = $request->formación;
        $curriculum->habilidades = $request->habilidades;
        $curriculum->image = $path;
        $curriculum->pdf = $path_2;
        $curriculum->save();

        return redirect()->route('curriculums')->with('success', 'CV creado y archivo guardado');
    }
    /**
     * Display the specified resource.
     */
    public function show(Curriculum $curriculum):View {
        return view('curriculum.show', ['curriculum' => $curriculum]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curriculum $curriculum):View {
        return view('curriculum.edit', ['curriculum' => $curriculum]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curriculum $curriculum) {
        $result = false;
        $curriculum->fill($request->except(['image', 'pdf']));

        if ($request->hasFile('image')) {
            $recogImg = $request->file('image');
            $nmbOrigin = $recogImg->getClientOriginalName();
            $path = $recogImg->storeAs('cv', $nmbOrigin, 'public');
            $curriculum->image = $path;
        }

        if ($request->hasFile('pdf')) {
            $recogPDF = $request->file('pdf');
            $exte = $recogPDF->getClientOriginalName();
            $nmbPrede = 'Tu PDF | ' . $exte;
            $path_2 = $recogPDF->storeAs('pdf', $nmbPrede, 'public');
            $curriculum->pdf = $path_2;
        }

        try {
            $result = $curriculum->save();
            $txtmessage = 'The curriculum has been edited.';
        } catch(UniqueConstraintViolationException $e) {
            $txtmessage = 'Primary key.';
        } catch(QueryException $e) {
            $txtmessage = 'Null Value.';
        } catch(\Exception $e) {
            $txtmessage = 'Fatal error';
        }
        $message = [
            'mensajeTexto' => $txtmessage,
        ];
        if($result) {
            return redirect() -> route('curriculums') -> with($message);
        } else {
            return back() -> withInput() -> withErrors($message);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curriculum $curriculum) {
        $curriculum->delete();
        return redirect()->route('curriculums');
    }
}
