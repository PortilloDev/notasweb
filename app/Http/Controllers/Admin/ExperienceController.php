<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\Tecnology;
use App\Models\Tool;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('admin.experience.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills = Skill::all(['name','id']);
        $tecnologies = Tecnology::all(['name','id']);
        $tools = Tool::all(['id', 'name']);
        return view('admin.experience.create', compact('skills', 'tecnologies', 'tools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'slug' => 'required|string',
            'body' => 'required|string',
        ]);
        $data = $request->except('_token', 'skills', 'tecnologies', 'tools');
        $experience = Experience::create($data);
        $experience->skills()->attach($request->skills);
        $experience->tecnologies()->attach($request->tecnologies);
        $experience->tools()->attach($request->tools);
        return redirect()->route('admin.experiences.index')->with('info', 'Experiencía creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        return view('admin.experience.show', compact('experience'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        $skills = Skill::all(['name','id']);
        $tecnologies = Tecnology::all(['name','id']);
        $tools = Tool::all(['id', 'name']);
        return view('admin.experience.create', compact('skills', 'tecnologies', 'tools', 'experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'title' => 'required|string',
            'slug' => 'required|string',
            'body' => 'required|string',
        ]);
        $data = $request->except('_token', 'skills', 'tecnologies', 'tools');
        $experience->fill($data)->save();;
        $experience->skills()->sync($request->skills);
        $experience->tecnologies()->sync($request->tecnologies);
        $experience->tools()->sync($request->tools);
        return redirect()->route('admin.experiences.edit')->with('info', 'Experiencía actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('admin.experiences.index')->with('info','Experiencía eliminado correctamente');
    }
}
