<?php

namespace App\Http\Controllers;

use App\Models\Pilot;
use Illuminate\Http\Request;

/**
 * Class PilotController
 * @package App\Http\Controllers
 */
class PilotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilots = Pilot::paginate();

        return view('pilot.index', compact('pilots'))
            ->with('i', (request()->input('page', 1) - 1) * $pilots->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pilot = new Pilot();
        return view('pilot.create', compact('pilot'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pilot::$rules);

        $pilot = Pilot::create($request->all());

        return redirect()->route('pilots.index')
            ->with('success', 'Pilot created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pilot = Pilot::find($id);

        return view('pilot.show', compact('pilot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pilot = Pilot::find($id);

        return view('pilot.edit', compact('pilot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pilot $pilot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pilot $pilot)
    {
        request()->validate(Pilot::$rules);

        $pilot->update($request->all());

        return redirect()->route('pilots.index')
            ->with('success', 'Pilot updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pilot = Pilot::find($id)->delete();

        return redirect()->route('pilots.index')
            ->with('success', 'Pilot deleted successfully');
    }
}
