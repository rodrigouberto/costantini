<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{

  public function propiedadesDestacadas(){
    $url='http://xintelapi.com.ar/';
    $data = array(
    'json' => 'fichas.destacadas',
    'inm' => 'HHH',
    'apiK' => 'U4FHGGTAIT2MSKOUB9CZ5LRDC',
    'barrios1' => '',
    'tipo_inmueble' => '',
    'tipo_operacion' => '',
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    $result = json_decode(curl_exec($ch),true);
    curl_close($ch);

    $fichas = $result['resultado']['fichas'];
    foreach ($fichas as $key1=>$ficha) {
      echo $key1;
      echo "<br>";
      foreach ($ficha as $key => $value) {
        echo $key . " = " . $value;
        echo "<br>";
      }
    }


  }
  public function traerApiCompleta(){
    $url='http://xintelapi.com.ar/';
    $data = array(
    'json' => 'resultados.fichas',
    'inm' => 'HHH',
    'apiK' => 'U4FHGGTAIT2MSKOUB9CZ5LRDC',
    'barrios1' => '',
    'tipo_inmueble' => '',
    'rppagina' => '10',
    'page'=>'',
    'tipo_operacion' => 'Alquiler',
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    $result = json_decode(curl_exec($ch),true);
    curl_close($ch);

    // echo $_SERVER["PHP_SELF"] ;
    // echo $_SERVER['HTTP_HOST'];
    echo $_SERVER['REQUEST_URI'];
    $fichas = $result['resultado']['fichas'];
    foreach ($fichas as $key1=>$ficha) {
      echo $key1;
      echo "<br>";
      foreach ($ficha as $key => $value) {
        echo $key . " = " . $value;
        echo "<br>";
      }
    }
  }
  public function propiedadesIndex(){
   $url='http://xintelapi.com.ar/';
   $data = array(
     'json' => 'fichas.destacadas',
     'inm' => 'HHH',
     'apiK' => 'U4FHGGTAIT2MSKOUB9CZ5LRDC',
   );
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_HEADER, 0);
   curl_setopt($ch, CURLOPT_TIMEOUT, 15);
   $result = json_decode(curl_exec($ch),true);
   curl_close($ch);
   $propiedades = $result['resultado']['fichas'];
   $filtros = $this->filtros();
   $operaciones = array_unique($filtros['operaciones']);
   $tiposDePropiedad = array_unique($filtros['tiposDePropiedad']);
   $barrios = array_unique($filtros['barrios']);
   return view('index', ['propiedades' => $propiedades,
                         'barrios'=>$barrios,
                         'operaciones' => $operaciones,
                         'tiposDePropiedad' =>$tiposDePropiedad
                        ]);
  }
  public function filtros(){
   $url='http://xintelapi.com.ar/';
   $data = array(
   'json' => 'resultados.fichas',
   'inm' => 'HHH',
   'apiK' => 'U4FHGGTAIT2MSKOUB9CZ5LRDC',
   );
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_HEADER, 0);
   curl_setopt($ch, CURLOPT_TIMEOUT, 15);
   $result = json_decode(curl_exec($ch),true);
   curl_close($ch);
   $filtros = [];
   $propiedades = $result['resultado']['fichas'];
   foreach ($propiedades as $propiedad) {
     if($propiedad['in_bar']!=""){$filtros['barrios'][] = $propiedad['in_bar'];};
     if($propiedad['tipo']!=""){$filtros['tiposDePropiedad'][] = $propiedad['tipo'];};
     if($propiedad['in_loc']!=""){$filtros['zonas'][] = $propiedad['in_loc'];};
     if($propiedad['operacion']!=""){$filtros['operaciones'][] = $propiedad['operacion'];};
     if($propiedad['in_val']!=""){$filtros['valorPropiedad'][] = $propiedad['in_val'];};
     if($propiedad['in_val']!=""){$filtros['valorPropiedad'][] = $propiedad['in_val'];};
   }
   return $filtros;
  }
  public function filtrarPropiedades($pagina = 0){
   $barrio = $_GET['barrio'];
   $tipo = $_GET['tipo'];
   $tipoOperacion = $_GET['operacion'];
   $localidad = $_GET['zona'];
   $moneda = $_GET['moneda'];
   $valorMinimo = $_GET['valorMinimo'];
   $valorMaximo = $_GET['valorMaximo'];
   $url='http://xintelapi.com.ar/';
   $data = array(
     'json' => 'resultados.fichas',
     'inm' => 'HHH',
     'apiK' => 'U4FHGGTAIT2MSKOUB9CZ5LRDC',
     'tipo_operacion' => $tipoOperacion,
     'tipo_inmueble' => $tipo,
     'sellocalidades' => $localidad,
     'barrios1' => $barrio,
     'valor_minimo' => $valorMinimo,
     'valor_maximo' => $valorMaximo,
     'moneda' => $moneda,
     'page' => $pagina
     //'habitaciones' => $habitaciones No existe filtro de habitaciones
   );
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_HEADER, 0);
   curl_setopt($ch, CURLOPT_TIMEOUT, 15);
   $result = json_decode(curl_exec($ch),true);
   curl_close($ch);

   $errores = [];
   $filtros = $this->filtros();
   $barrios = array_unique($filtros['barrios']);
   $zonas = array_unique($filtros['zonas']);
   $operaciones = array_unique($filtros['operaciones']);
   $tiposDePropiedad = array_unique($filtros['tiposDePropiedad']);
   if($result['fichas'] == NULL){
     $errores['propiedades'][] = 1;
     return view('result',['operaciones' => $operaciones,
                          'tiposDePropiedad' => $tiposDePropiedad,
                          'zonas' => $zonas,
                          'barrios' => $barrios,
                          'errores' => $errores]);
   } else {
     $propiedades = $result['resultado']['fichas'];
     $arrayKeys = array_keys($propiedades);
     $propiedadesFiltradas = [];
     if (in_array("error", $arrayKeys, true)){
       $errores['propiedades'][] = 1;
     }
     else {
      foreach ($propiedades as $propiedad) {
        $propiedadesFiltradas[] = $propiedad;
      }
     }
     $cantidadDePropiedades = $this->contarTotalPropiedades($barrio, $tipo,$tipoOperacion,$localidad,$moneda,$valorMinimo,$valorMaximo);
     return view('result', ['propiedadesFiltradas' => $propiedadesFiltradas,
                             'cantidadDePropiedades' => $cantidadDePropiedades,
                             'zonas' => $zonas,
                             'operaciones' => $operaciones,
                             'tiposDePropiedad' =>$tiposDePropiedad,
                             'barrios' => $barrios,
                             'errores' => $errores]);
    }
  }
  public function contarTotalPropiedades($barrio,
                                        $tipo,$tipoOperacion,$localidad,$moneda,$valorMinimo,$valorMaximo){
    $url='http://xintelapi.com.ar/';
    $data = array(
      'json' => 'resultados.fichas',
      'inm' => 'HHH',
      'apiK' => 'U4FHGGTAIT2MSKOUB9CZ5LRDC',
      'tipo_operacion' => $tipoOperacion,
      'tipo_inmueble' => $tipo,
      'sellocalidades' => $localidad,
      'barrios1' => $barrio,
      'valor_minimo' => $valorMinimo,
      'valor_maximo' => $valorMaximo,
      'moneda' => $moneda,
      'rppagina' => '10000'
      //'habitaciones' => $habitaciones No existe filtro de habitaciones
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    $result = json_decode(curl_exec($ch),true);
    curl_close($ch);
    $propiedades = $result['resultado']['fichas'];
    $cantidad = count($propiedades);
    return $cantidad;
  }
  public function propiedades($pagina){
   $url='http://xintelapi.com.ar/';
   $data = array(
     'json' => 'resultados.fichas',
     'inm' => 'HHH',
     'apiK' => 'U4FHGGTAIT2MSKOUB9CZ5LRDC',
     'page' => $pagina,
   );
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_HEADER, 0);
   curl_setopt($ch, CURLOPT_TIMEOUT, 15);
   $result = json_decode(curl_exec($ch),true);
   curl_close($ch);
   $errores = [];
   $filtros = $this->filtros();
   $barrios = array_unique($filtros['barrios']);
   $zonas = array_unique($filtros['zonas']);
   $operaciones = array_unique($filtros['operaciones']);
   $tiposDePropiedad = array_unique($filtros['tiposDePropiedad']);
   $cantidadDePropiedades = $this->contarTotalPropiedades($barrio="",$tipo="",$tipoOperacion="",$localidad="",$moneda="",$valorMinimo="",$valorMaximo="");

   if($result['fichas'] == NULL){
     $errores['propiedades'][] = 1;
     return view('result',['operaciones' => $operaciones,
                          'tiposDePropiedad' => $tiposDePropiedad,
                          'zonas' => $zonas,
                          'barrios' => $barrios,
                          'errores' => $errores]);
   } else {
   $propiedades = $result['resultado']['fichas'];
   $propiedadesFiltradas = $propiedades;
   return view('result', ['propiedadesFiltradas' => $propiedadesFiltradas,
                          'cantidadDePropiedades' => $cantidadDePropiedades,
                          'operaciones' => $operaciones,
                          'tiposDePropiedad' =>$tiposDePropiedad,
                          'zonas' => $zonas,
                          'barrios' => $barrios]);
    }
  }
  public function singleProperty($indice){
   $url='http://xintelapi.com.ar/';
   $data = array(
     'json' => 'resultados.fichas',
     'inm' => 'HHH',
     'apiK' => 'U4FHGGTAIT2MSKOUB9CZ5LRDC',
     'codigo_ficha' =>$indice
   );
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_HEADER, 0);
   curl_setopt($ch, CURLOPT_TIMEOUT, 15);
   $result = json_decode(curl_exec($ch),true);
   curl_close($ch);

   $propiedad = $result['resultado']['fichas'][0];

   return view('property-single',['propiedad'=>$propiedad]);
  }


}
