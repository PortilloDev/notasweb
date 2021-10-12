<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Documentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentationController extends Controller
{
         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentations = Documentation::all();
        return view('admin.documentation.index', compact('documentations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.documentation.create');
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
            'description' => 'required',
            'url' => 'required',
        ]);
        $data = $request->except('_token');
        $archivo = $request->file('file');
        if($archivo){
            $nombre_imagen = $archivo->getClientOriginalName();
            Storage::disk('public')->put($nombre_imagen,file_get_contents($archivo));
            $data['image'] = $nombre_imagen;
        }
        $documentation = Documentation::create($data);
        ImageHelper::createImage($documentation, $data['image']);

        return redirect()->route('admin.documentations.index')->with('info', 'Documentación creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Documentation $documentation)
    {
        return view('admin.documentation.show', compact('documentation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Documentation $documentation)
    {
        return view('admin.documentation.edit', compact('documentation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documentation $documentation)
    {
        $request->validate([
            'title' => 'required|string',
            'slug' => 'required|string',
            'description' => 'required',
            'url' => 'required',
        ]);
        $entrada = $request->all();
         //IMAGE
         $archivo = $request->file('file');
         if($archivo){
             $nombre_imagen = $archivo->getClientOriginalName();
            Storage::disk('public')->put($nombre_imagen,file_get_contents($archivo));
            $entrada['image'] =  $nombre_imagen;
         }

         $documentation->fill($entrada)->save();
         if($archivo){
            ImageHelper::updateImage($documentation, $entrada['image']);
         }

        return redirect()->route('admin.documentations.edit', compact('documentation'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documentation $documentation)
    {
        $documentation->delete();
        return redirect()->route('admin.documentations.index')->with('info','Documentación eliminada correctamente');
    }


}
