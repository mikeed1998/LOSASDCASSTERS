<?php

namespace App\Http\Controllers;

use App\Seccion;
use App\Elemento;
use App\SliderPrincipal;
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
        // $seccion_nom = $seccion;
        // $seccion = Seccion::where('slug',$seccion)->first();
        // $sucursales = services::all();
        
        // $elements = $seccion->elementos()->get();

        $ruta = 'configs.secciones.'.$seccion;
        
        // if($seccion_nom == 'products'){
        //     $productos = Producto::all();
           
        //     foreach($productos as $p){
        //         $prod_photos = ProductosPhoto::where('producto',$p->id)->get()->first();
        //         if(!empty($prod_photos)){
        //             $p->photo = $prod_photos->image;
        //         }
                
        //     }
        //     return view($ruta,compact('elements','seccion','productos'));
        // }
        

        return view($ruta, compact('slidersp'));
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
