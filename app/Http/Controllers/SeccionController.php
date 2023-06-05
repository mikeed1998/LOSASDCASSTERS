<?php

namespace App\Http\Controllers;

use App\Seccion;
use App\Elemento;
use App\SliderPrincipal;
use App\SliderVideo;
use App\Proyecto;
use App\Cliente;
use App\ProcesoPerlitaMineral;
use App\Certificacion;
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
        $elements = Elemento::all();
        $slidersp = SliderPrincipal::all();
        $slidervd = SliderVideo::all();
        $proyectos = Proyecto::all();
        $clientes = Cliente::all();
        $procesos_perlita = ProcesoPerlitaMineral::all();
        $certificaciones = Certificacion::all();
 
        $ruta = 'configs.secciones.'.$seccion;

        foreach($slidervd as $s) {
            if($s->tipo == 0) {
		        $s->link = str_replace('https://www.youtube.com/watch?v=', '', $s->link);
            }
        }

        return view($ruta, compact('slidersp', 'slidervd', 'proyectos', 'clientes', 'procesos_perlita', 'certificaciones', 'elements'));
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


    public function imgStatic(Request $request) {
        $elem = Elemento::find($request->id_static);
        // dd($elem->imagen);
        if ($request->hasFile('archivo_s')) {
            $oldFile = $elem->imagen;
            $file = $request->file('archivo_s');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30).'.'.$extension;

            \Storage::disk('local')->put("/img2/photos/imagenes_estaticas/".$namefile , \File::get($file));
            \Storage::disk('local')->delete("/img2/photos/imagenes_estaticas/".$oldFile);

            $elem->imagen = $namefile;
        }

        $elem->save();
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

    public function proyectosSlider(Request $request) {
        $slider = new Proyecto;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30).'.'.$extension;

            \Storage::disk('local')->put("/img2/photos/proyectos/".$namefile , \File::get($file));

            $slider->nombre = $request->nombre;
            $slider->descripcion = $request->descripcion;
            $slider->foto = $namefile;
        }

        $slider->save();
        \Toastr::success('Guardado');
        return redirect()->back();
    }

    public function clientesSlider(Request $request) {
        $slider = new Cliente;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30).'.'.$extension;

            \Storage::disk('local')->put("/img2/photos/clientes/".$namefile , \File::get($file));

            $slider->logo = $namefile;
        }

        $slider->save();
        \Toastr::success('Guardado');
        return redirect()->back();
    }

    public function perlitaMineralSlider(Request $request) {
        $slider = new ProcesoPerlitaMineral;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30).'.'.$extension;

            \Storage::disk('local')->put("/img2/photos/perlita_mineral/".$namefile , \File::get($file));
            
            $slider->nombre = $request->nombre;
            $slider->foto = $namefile;
        }

        $slider->save();
        \Toastr::success('Guardado');
        return redirect()->back();
    }

    public function certificacionesSlider(Request $request) {
        $slider = new Certificacion;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30).'.'.$extension;

            \Storage::disk('local')->put("/img2/photos/certificaciones/".$namefile , \File::get($file));
            
            $slider->logo = $namefile;
        }

        $slider->save();
        \Toastr::success('Guardado');
        return redirect()->back();
    }

    public function delSide(SliderPrincipal $side) {
        $imgDel = 'img2/photos/slider_principal/'.$side->imagen;
        unlink($imgDel);

        $side->delete();

        return redirect()->back();
    }

    
    public function delVideoSide(SliderVideo $videoside) {

        if($videoside->tipo == 1) {
            $ividDel = 'img2/photos/slider_videos/'.$videoside->archivo;
            unlink($ividDel);
        }

        $videoside->delete();

        return redirect()->back();
    }

    public function delProceso(ProcesoPerlitaMineral $proceso) {
        $imgDel = 'img2/photos/perlita_mineral/'.$proceso->foto;
        unlink($imgDel);

        $proceso->delete();

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
