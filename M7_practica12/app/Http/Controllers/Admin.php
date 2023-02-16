<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function clients() {
        return view("clientes") -> with('msjClientes', 'Estoy en la ruta clientes');
    }

    public function facturacion() {
        return view("facturacion") -> with('msjFacturacion', 'Estoy en la ruta facturación');
    }
    public function contabilidad() {
        return view("contabilidad") -> with('msjContabilidad', 'Estoy en la ruta contabilidad');
    }
    
}
