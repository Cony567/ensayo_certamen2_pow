@extends('layouts.master')

@section('main')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-dark text-white">
                    <tr>
                        <td>Nombre del Medicamento</td>
                        <td>Nivel de peligrosidad</td>
                        <td>Estado</td>
                        <td>Sujeto de prueba</td>
                        <td>Accion eliminar</td>
                    </tr>
                </thead>
                <tbody class="tbody-medicamentos"></tbody>
            </table>
        </div>
    </div>
@endsection