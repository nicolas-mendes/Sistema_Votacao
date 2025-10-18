<?php

namespace App\Http\Controllers;

use App\Models\Pool;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pools.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required','string','max:255'], 
            'question' => ['required','string','max:255'], 
            'date_start' => ['required','date_format:Y-m-d\TH:i','after_or_equal:today'], 
            'date_end' => ['required','date_format:Y-m-d\TH:i','after:date_start'], 
            'options' => ['required','array','min:1'],
            'options.*' => ['required','string','max:255']
        ]);


        $attributes['date_start'] = Carbon::parse($attributes['date_start']);
        $attributes['date_end'] = Carbon::parse($attributes['date_end']);

        // 3. Agora a sua lógica 'if' funciona corretamente,
        // pois 'date_start' JÁ É um objeto Carbon.
        if ($attributes['date_start']->isAfter(now())) {
            $attributes['status'] = 'not started';
        } else {
            $attributes['status'] = 'in progress';
        }

        $pool = Pool::create(Arr::except($attributes, ['options']));

        foreach ($attributes['options'] as $optionText) {
            $pool->options()->create([
                'text' => $optionText,
                'votes' => 0
            ]);
        }

        return redirect("/vote/$pool->id");
    }

    /**
     * Display the specified resource.
     */
    public function show(Pool $pool)
{
        $now = now(); 

        if ($now->isAfter($pool->date_end) && $pool->status !== 'finished') {
            $pool->status = 'finished';
            $pool->save();
        }
        
        if ($now->isAfter($pool->date_start) && $pool->status === 'not started') {
            $pool->status = 'in progress';
            $pool->save();
        }

        return view('vote.show', [ // Supondo que sua view seja 'vote.show'
            'pool' => $pool->load('options') // Carrega a enquete com suas opções
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
