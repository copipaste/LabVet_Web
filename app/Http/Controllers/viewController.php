<?php

namespace App\Http\Controllers;

use App\Models\View;
use Illuminate\Http\Request;

class viewController extends Controller
{
    //Función que crea una vista en la tabla views
    public function contadorVisitas(String $nombre): int
    {
        View::create([
            'viewName' => $nombre,
        ]);
        $totalVisitas = View::where('viewName', $nombre)->count();
        return $totalVisitas;
    }
    /*
    DE ESTA MANERA SE USA:
    1. Nos ubicaos en el controlador donde queremos usar la función.
    2. En cada función que queramos usar la función contadorVisitas, la llamamos de la siguiente manera:
        $numeroVisita = new viewController();
        $totalVisitas = $numeroVisita->contadorVisitas('nombreDeLaVista');      //añaadir el nombre de la vista
        return view('nombreDeLaVista', compact('totalVisitas'));                //enviar la variable a la vista
    3. En la vista tenemos que usar el footer, así:
        @section('footer')
            <h3>Esta pagina ha sido visitada: {{ $totalVisitas }} veces</h3>
        @endsection
*/
}
