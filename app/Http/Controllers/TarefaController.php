<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Http\Requests\StoreTarefaRequest;
use App\Http\Requests\UpdateTarefaRequest;
use App\Models\Tipo;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefa::all();
        // $tarefas = Tarefa::paginate(25);
        //return response->json(['data'=>$tarefas])
        return view('tarefas.index',compact(['tarefas']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipos = Tipo::all();

        return view('tarefas.create',compact(['tipos']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTarefaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTarefaRequest $request)
    {
        $data = $request->all();
        $tarefa = Tarefa::create($data);
        // dd($tarefa);
        return redirect()->route('tarefas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarefa $tarefa)
    {
        //$tarefa = Tarefa::find($id)
        $tipos = Tipo::all();
        return view('tarefas.show',compact(['tipos']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarefa $tarefa)
    {
        $tipos = Tipo::all();
        return view('tarefas.edit',compact(['tipos']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTarefaRequest  $request
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTarefaRequest $request, Tarefa $tarefa)
    {
        $data = $request->all();
        $tarefa->update($data);
        return redirect()->route('tarefas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();
        return redirect()->route('tarefas.index');
    }
}
