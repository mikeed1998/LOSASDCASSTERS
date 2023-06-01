<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
	// NOTE: cambiar rutas y quitar los usuarios del index
		/**
		 * Create a new controller instance.
		 *
		 * @return void
		 */
		public function __construct()
		{
				$this->middleware('auth:admin');
		}

		/**
		 * Show the application dashboard.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index()
		{
			$cards = array(
				array('icon' => 'fa-solid fa-gears', 'route' => 'config.general', 'text' => 'Config. general'),
				
				// array('icon' => 'fas fa-palette', 'route' => 'config.color.index', 'text' => 'Colores'),
				// array('icon' => 'fas fa-ticket-alt', 'route' => 'config.cupons.index', 'text' => 'Cupones'),
				// array('icon' => 'fas fa-arrows-alt', 'route' => 'config.size.index', 'text' => 'Tamaños'),
				array('icon' => 'fa-solid fa-question', 'route' => 'config.faq.index', 'text' => 'FAQ'),
				// array('icon' => 'fas fa-images', 'route' => 'config.slider.index', 'text' => 'Sliders'),
				// array('icon' => 'far fa-images', 'route' => 'config.subastagal', 'text' => 'Sliders Subasta'),
				// array('icon' => 'fas fa-user-tie', 'route' => 'config.about', 'text' => 'Nosotros'),
				array('icon' => 'fa-solid fa-shield-halved', 'route' => 'config.politica.index', 'text' => 'Politicas'),
				// array('icon' => 'fas fa-couch', 'route' => 'config.space.index', 'text' => 'Espacios'),
				array('icon' => 'fab fa-buromobelexperte', 'route' => 'config.seccion.index', 'text' => 'Secciones'),
				// array('icon' => 'fas fa-home', 'route' => 'config.seccion_home.index', 'text' => 'Administrar la sección "Home"'),
				// array('icon' => 'fa-solid fa-person-digging', 'route' => 'config.seccion_losas.index', 'text' => 'Administrar la sección "Losas D´Casster´s"'),
				// array('icon' => 'fa-solid fa-mound', 'route' => 'config.seccion_perlita_mineral.index', 'text' => 'Administrar la sección "Perlita Mineral"'),
				// array('icon' => 'fa-solid fa-diagram-project', 'route' => 'config.seccion_proyectos.index', 'text' => 'Administrar la sección "Proyectos"'),
				// array('icon' => 'fa-solid fa-address-card', 'route' => 'config.seccion_nosotros.index', 'text' => 'Administrar la sección "Nosotros"'),
				array('icon' => 'fas fa-paper-plane', 'route' => 'config.contact', 'text' => 'Administrar la sección "Contacto"'),
				// array('icon' => 'fas fa-quote-right', 'route' => 'config.textos', 'text' => 'Textos'),
				// array('icon' => 'fas fa-city', 'route' => 'config.sucursal.index', 'text' => 'Sucursal'),

			);
			//	return view('admin.home',compact('navegation'));
			$usuario = Admin::where('menu_display',1)->get();
				return view('configs.index',compact('cards'));
		}


		public function create(){

			return view('configs.usuarios.create');
		}
		
		public function show(){
			$usuario = Admin::where('menu_display',1)->get();
			return view('configs.usuarios.index',compact('usuario'));
		}

		public function store(Request $request){

			 /* if (empty($request->nombre)||empty($request->email)||empty($request->pass)||empty($request->pass1)) {
                \Toastr::error('Error, los campos no pueden estar vacios');
                return redirect()->back();
            }
            	if ($request->pass != $request->pass1) {
            		\Toastr::error('Error, las contraseñas no coinciden');
                	return redirect()->back();
            }*/

            $validate = Validator::make($request->all(),[
					'nombre' => ['required','unique:admins,user'],
					'email' => ['required','unique:admins,email'],
					'pass' => ['required'],
					'pass1' => ['same:pass'],
				],[],[
					'nombre' => 'usuario',
					'email' =>	'correo',
					'pass' =>	'contraseña',
					'pass1' =>	'contraseña',
				])->validate();



            $Admin = new Admin;
            $Admin->user  		= $request->nombre;
            $Admin->email      	= $request->email;
            $Admin->password    = bcrypt($request->pass);
            $Admin->role      	= 0 ;
            $Admin->menu_display = 1;

            $Admin->save();

            \Toastr::success('Guardado Exitosamente');
            return redirect()->route('admin.home');

		}

		public function destroy(Request $request){
	        if (empty($request->iudel)) {
	                \Toastr::error('Error, no se puedo borrar el usuario, intentelo de nuevo');
	                return redirect()->back();
	        }

	        $delete = Admin::find($request->iudel);
	        $delete->delete();

	        \Toastr::success('Eliminado exitosamente');
	        return redirect()->back();

	        //NOTE: validar que el usuario no se elimine a si mismo
	        //return Auth::user();
        }
}
