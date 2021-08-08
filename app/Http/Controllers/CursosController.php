<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    //Inicio
    public function inicio(){


        //array de listado de especialidades
        $especialidades = [
            'pespecialidades' => [
                '0' => ['nombre'=>'Cursos de Programacion', 'url'=>"lista/programacion", 'imagen'=>'https://appdesign.dev/wp-content/uploads/2018/02/c%C3%B3digo-en-laravel.jpg'],
                '1' => ['nombre'=>'Cursos de Informatica', 'url'=>"lista/informatica", 'imagen'=>'https://www.unsa.edu.pe/infounsa/wp-content/uploads/2016/11/EHFCh2uXYAAX7ki.jpg'],
                '2' => ['nombre'=>'Cursos de Diseño', 'url'=>"lista/diseno", 'imagen'=>'https://educaperu.org/wp-content/uploads/2021/01/portada-disenador-2.jpg'],
            ],
            'pbanners' => [
                '0' => ['nombre' => 'Especializaciones Online', 'status'=> 'active', 'imagen' => 'https://www.tecsup.edu.pe/sites/default/files/academic_program/image_detail/BANNER-WEB-TV2.png'],
                '1' => ['nombre' => 'Cursos de Informatica', 'status'=> '', 'imagen' => 'https://www.tecsup.edu.pe/sites/default/files/training_areas/image/tecnologia-digital.png'],
                '2' => ['nombre' => 'Inicio de Especializaciones', 'status'=> '', 'imagen' => 'https://www.tecsup.edu.pe/sites/default/files/training_areas/image/mecatronica_0.png'],
            ]
        ];

        return view('index', $especialidades);
    }

   //Quienes Somos
   public function quienes(){
        return view('quienes');
   }

   //Listado de categoria
   public function listado($especialidad){
        //array de listado de especialidades
        $cursosespe = [
            'programacion' => [
                '0' => ['nombre'=>'Curso de Android', 'url'=>"/programacion/android", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
                '1' => ['nombre'=>'Curso de Laravel', 'url'=>"/programacion/laravel",'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
                '2' => ['nombre'=>'Curso de PHP', 'url'=>"/programacion/php", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
                '3' => ['nombre'=>'Curso de Java', 'url'=>"/programacion/java", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
                '4' => ['nombre'=>'Curso de Python', 'url'=>"/programacion/python", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
                '5' => ['nombre'=>'Curso de C++', 'url'=>"/programacion/cplusplus", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
            ],
            'informatica' => [
                '0' => ['nombre'=>'Curso de Excel Básico', 'url'=>"/informatica/excel-basico", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
                '1' => ['nombre'=>'Curso de Excel Intermedio', 'url'=>"/informatica/excel-intermedio", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
                '2' => ['nombre'=>'Curso de Excel Avanzado', 'url'=>"/informatica/excel-avanzado", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
                '3' => ['nombre'=>'Curso de AutoCAD', 'url'=>"/informatica/autocad", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
                '4' => ['nombre'=>'Curso de Windows 10', 'url'=>"/informatica/windows", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
                '5' => ['nombre'=>'Curso de PowerBi', 'url'=>"/informatica/powerbi", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
            ],
            'diseno' => [
                '0' => ['nombre'=>'Curso de Illustrator', 'url'=>"/diseno/illustrator", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
                '1' => ['nombre'=>'Curso de Photoshop', 'url'=>"/diseno/photoshop", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
                '2' => ['nombre'=>'Curso de CorelDraw', 'url'=>"/diseno/coreldraw", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
                '3' => ['nombre'=>'Curso de Adobre Premier', 'url'=>"/diseno/premier", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
                '4' => ['nombre'=>'Curso de Animation', 'url'=>"/diseno/animation", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
                '5' => ['nombre'=>'Curso de Indesign', 'url'=>"/diseno/indesign", 'imagen'=>'https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg'],
            ]
        ];
        
        return view('listado', ['especial' => $cursosespe[$especialidad] ]);
   }

   //Detalle de curso
   public function detalle($especialidad, $curso){
       //array detalle de cursos

       $cursosdet = [
            'programacion' => [
                'android' => ['nombre'=>'Android', 'imagen'=>'...', 'inicio' => '15 de Junio del 2021', 'Precio' => 250, 'Docente'=> 'Hans Rosas'],
                'laravel' => ['nombre'=>'Laravel', 'imagen'=>'...', 'inicio' => '05 de Junio del 2021', 'Precio' => 800, 'Docente'=> 'Jonathan Hernandez'],
                'php' => ['nombre'=>'PHP', 'imagen'=>'...', 'inicio' => '01 de Julio del 2021', 'Precio' => 500, 'Docente'=> 'Tito Chavez'],
                'java' => ['nombre'=>'Java', 'imagen'=>'...', 'inicio' => '11 de Julio del 2021', 'Precio' => 900, 'Docente'=> 'Oscar Muñoz'],
                'python' => ['nombre'=>'Python', 'imagen'=>'...', 'inicio' => '20 de Junio del 2021', 'Precio' => 450, 'Docente'=> 'Martin Sanchez'],
                'cplusplus' => ['nombre'=>'C++', 'imagen'=>'...', 'inicio' => '30 de Junio del 2021', 'Precio' => 280, 'Docente'=> 'Luz Lopez'],
            ],
            'informatica' => [
                'excel-basico' => ['nombre'=>'Excel Básico', 'imagen'=>'...', 'inicio' => '01 de Junio del 2021', 'Precio' => 350, 'Docente'=> 'Caroline Matta'],
                'excel-intermedio' => ['nombre'=>'Excel Intermedio', 'imagen'=>'...', 'inicio' => '20 de Junio del 2021', 'Precio' => 200, 'Docente'=> 'Miguel LLanos'],
                'excel-avanzado' => ['nombre'=>'Excel Avanzado', 'imagen'=>'...', 'inicio' => '07 de Junio del 2021', 'Precio' => 400, 'Docente'=> 'Caroline Matta'],
                'autocad' => ['nombre'=>'AutoCAD', 'imagen'=>'...', 'inicio' => '07 de Junio del 2021', 'Precio' => 650, 'Docente'=> 'Erick Donicio'],
                'windows' => ['nombre'=>'Windows 10', 'imagen'=>'...', 'inicio' => '17 de Junio del 2021', 'Precio' => 150, 'Docente'=> 'Lia Sotelo'],
                'powerbi' => ['nombre'=>'Power Bi', 'imagen'=>'...', 'inicio' => '01 de Julio del 2021', 'Precio' => 300, 'Docente'=> 'Dante Oliverti'],
            ],
            'diseno' => [
                'illustrator' => ['nombre'=>'Illustrator', 'imagen'=>'...', 'inicio' => '17 de Julio del 2021', 'Precio' => 300, 'Docente'=> 'Paolo Delta'],
                'photoshop' => ['nombre'=>'Photoshop', 'imagen'=>'...', 'inicio' => '10 de Julio del 2021', 'Precio' => 350, 'Docente'=> 'Pepe Flores'],
                'coreldraw' => ['nombre'=>'CorelDraw', 'imagen'=>'...', 'inicio' => '20 de Julio del 2021', 'Precio' => 350, 'Docente'=> 'Zulith Muñoz'],
                'premier' => ['nombre'=>'Adobe Premier', 'imagen'=>'...', 'inicio' => '24 de Julio del 2021', 'Precio' => 750, 'Docente'=> 'Paolo Delta'],
                'animation' => [],
                'indesign' => [],
            ]
        ];

        if($cursosdet[$especialidad][$curso] == NULL){
            echo view('errors.404');
        }else{
            return view('detalle', [ 'detalle' => $cursosdet[$especialidad][$curso] ]);
        }


        // var_dump(['detalle' => $cursosdet[$especialidad][$curso] ]);
        
   }

   //Contacto
   public function contacto(Request $request){
    
    //formulario
       $nombres     = null;
       $telefono    = null;
       $correo      = null;
       $mensaje     = null;
       $saludo      = null;


       if($request->isMethod('post')){
        //obtengo datos de los inputs
          $nombres  = $request->nombres; 
          $telefono = $request->telefono;
          $correo   = $request->email;
          $mensaje  = $request->mensaje;

          $saludo = "Hola! $nombres tu mensaje ha sido enviado satisfactoriamente. A continuación se muestra los datos enviados";
       }

       $datos = [
           'nombres'    => $nombres,
           'telefono'   => $telefono,
           'correo'     => $correo,
           'mensaje'    => $mensaje,
           'saludo'     => $saludo,
       ];

       return view('contacto', $datos);
   }
}
