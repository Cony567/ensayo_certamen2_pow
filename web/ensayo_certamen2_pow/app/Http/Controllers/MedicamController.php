<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamento;

class MedicamController extends Controller
{
    public function getEstado(){
        $estados = ["En etapa Temprana","En etapa Intermedia","En Lista Negra","Previo a Producción"];

        return $estados;
    }

    public function getMedicamentos(){
        //SELECT * FROM MEDICAMENTOS
        $medicamentos = Medicamento::all();
        return $medicamentos;
    }

    public function crearMedicamento(){
        $medicm = new Medicamento();
        $medicm->nombre = "Paracetamol";
        $medicm->comp_activos = 6;
        $medicm->estado = "En etapa Temprana";
        $medicm->restrincciones = "Pastilla para el peso apropiado";
        $medicm->sujetos_de_prueba= "Humanos";
        $medicm->efectos_adv = "muerte espontanea o calvicie";

        $medicm->save();
        //return $medicm;
    }
    

}
