<?php

namespace App\Http\Controllers;

use App\Contribution;
use App\Topic;
use Illuminate\Http\Request;

class ContributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Topic $topic)
    {
        $topic = Topic::where('id', $topic->id)->first();

        return view('contributions.create', compact('topic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Topic $topic)
    {
        $contribution = Contribution::create([
            'user_id' => auth()->id(),
            'topic_id' => $topic->id,
            'title' => request('title'),
            'text' => request('text'),
        ]);

        return redirect('/textbooks/'.$topic->id.'/contribute/'.$contribution->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contribution  $contribution
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contribution = Contribution::where('id', $id)->first();
        $topic = Topic::where('id', $contribution->topic_id)->first();

        return view('contributions.show', compact('contribution', 'topic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contribution  $contribution
     * @return \Illuminate\Http\Response
     */
    public function edit(Contribution $contribution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contribution  $contribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contribution $contribution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contribution  $contribution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contribution $contribution)
    {
        //
    }
}
