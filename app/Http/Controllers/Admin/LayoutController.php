<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Layout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layouts = Layout::all();
        return view('admin.layout.index', compact('layouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layout.create');
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
            'h1' => 'required|string',
            'paragraph' => 'required|string',
            'excerpt' => 'required|string',
            'description' => 'required',
        ]);
        $data = $request->except('_token');
        $archivo = $request->file('file');
        if($archivo){
            $nombre_imagen = $archivo->getClientOriginalName();
            Storage::disk('public')->put($nombre_imagen,file_get_contents($archivo));
            $data['file'] = $nombre_imagen;
        }
        $layout = Layout::create($data);

        if($archivo){
            ImageHelper::createImage($layout, $data['file']);
        }
        return redirect()->route('admin.layouts.index')->with('info', 'layout creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Layout $layout)
    {
        return view('admin.layout.show', compact('layout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Layout $layout)
    {
        return view('admin.layout.edit', compact('layout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layout $layout)
    {
        $request->validate([
            'h1' => 'required|string',
            'paragraph' => 'required|string',
            'excerpt' => 'required|string',
            'description' => 'required|string',
        ]);
        $entrada = $request->all();
        //IMAGE
        $archivo = $request->file('file');
        if($archivo){
            $nombre_imagen = $archivo->getClientOriginalName();
        Storage::disk('public')->put($nombre_imagen,file_get_contents($archivo));
        $entrada['file'] =  $nombre_imagen;
        }

        $layout->fill($entrada)->save();
        if($archivo){
        ImageHelper::updateImage($layout, $entrada['file']);
        }
        return redirect()->route('admin.layouts.edit', compact('layout'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layout $layout)
    {
        $layout->delete();
        return redirect()->route('admin.layouts.index')->with('info','Layout eliminado correctamente');
    }
}
