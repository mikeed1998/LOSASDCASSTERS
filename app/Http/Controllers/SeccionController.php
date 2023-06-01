<?php

namespace App\Http\Controllers;

use App\Seccion;
use App\Elemento;
use App\SliderPrincipal;
use App\SliderVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
			$seccion = Seccion::all();
            
			foreach ($seccion as $sec) {
				$sec->elements = $sec->elementos()->count();
			}

          
			return view('configs.secciones.index',compact('seccion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function show($seccion) {
        $slidersp = SliderPrincipal::all();
        $slidervd = SliderVideo::all();
 
        $ruta = 'configs.secciones.'.$seccion;

        foreach($slidervd as $s) {
            if($s->tipo == 0) {
		        $s->link = str_replace('https://www.youtube.com/watch?v=', '', $s->link);
            }
        }

        return view($ruta, compact('slidersp', 'slidervd'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Seccion $seccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $seccion) {

		if (empty($seccion)) {
			\Toastr::error('Error, intentalo mas tarde');
			return redirect()->back();
		}

		$seccion = Seccion::find($seccion);

		$file = $request->file('portada');
		$oldFile = $seccion->portada;
		$extension = $file->getClientOriginalExtension();
		$namefile = Str::random(30) . '.' . $extension;

		\Storage::disk('local')->put("/img/photos/seccions/" . $namefile, \File::get($file));

		\Storage::disk('local')->delete("/img/photos/seccions/" . $oldFile);

		$seccion->portada = $namefile;

		$seccion->save();
		\Toastr::success('Guardado');
		return redirect()->back();
    }


    public function imgSider(Request $request) {
        $slider = new SliderPrincipal;
        // dd($request->archivo);
        if ($request->hasFile('archivo')) {
            $file = $request->file('archivo');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30).'.'.$extension;

            \Storage::disk('local')->put("/img2/photos/slider_principal/".$namefile , \File::get($file));

            $slider->imagen = $namefile;
        }

        if ($request->video) {
            $slider->video = $request->video;
        }

        $slider->save();
        \Toastr::success('Guardado');
        return redirect()->back();
    }


    public function videoSider(Request $request) {
        $slider = new SliderVideo;

        if($request->tipo == 0) {
            $slider->link = $request->link;
            $slider->archivo = $request->archivo;
            $slider->tipo = $request->tipo;
        } 

        if($request->tipo = 1) {
            if ($request->hasFile('archivo')) {
                $file = $request->file('archivo');
                $extension = $file->getClientOriginalExtension();
                $namefile = Str::random(30).'.'.$extension;
    
                \Storage::disk('local')->put("/img2/photos/slider_videos/".$namefile , \File::get($file));
                
                $slider->link = $request->link;
                $slider->archivo = $namefile;
                $slider->tipo = $request->tipo;
            }
        }

        $slider->save();
        \Toastr::success('Guardado');
        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seccion $seccion)
    {
        //
    }
}
