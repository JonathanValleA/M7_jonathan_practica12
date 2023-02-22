<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorAdmin extends Controller
{
    // Funcion que se ejecuta cuando se accede a la ruta /clientes donde esta definida una viesta
    // y el mensaje a mostrar y lo mismo para las otras 2 funciones
    public function clientes() {
        return view("Admin.clientes") -> with('msjClientes', 'Bienvenidos a la pagina de clientes');
    }

    public function facturacion() {
        return view("Admin.facturacion") -> with('msjFacturacion', 'Bienvenidos a la pagina de facturación');
    }
    public function contabilidad() {
        return view("Admin.contabilidad") -> with('msjContabilidad', 'Bienvenidos a la pagina de contabilidad');
    }
}
