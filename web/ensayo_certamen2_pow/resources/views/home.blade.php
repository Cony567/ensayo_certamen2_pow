@extends('layouts.master')

@section('main')
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <span>Agregar Medicamento</span>
                </div>
                <div class="card-body">
                    <div class="md-3">
                        <label for="nom-medic-txt" class="form-label">Nombre del Medicamento</label>
                        <input type="text" id="nom-medic-txt" class="form-control">
                    </div>
                    <div class="md-3">
                        <label for="cant-comp-activos-txt" class="form-label">Cantidad de compuestos Activos</label>
                        <input type="number" id="cant-comp-activos-txt" class="form-control">
                    </div>
                    <div class="md-3">
                        <label for="estados-select" class="form-label">Estado</label>
                        <select name="" id="estados-select" class="form-select">
                        </select>
                    </div>
                    <div class="md-3">
                        <label for="restriccion-txt" class="form-label">Restricciones</label>
                        <textarea id="restriccion-txt" class="form-control"></textarea>
                    </div>
                    <div class="md-3">
                        <label for="s-prueba-select" class="form-label">Sujeto de Prueba</label>
                        <select name="" id="s-prueba-select" class="form-select">
                            <option value="ratones">Ratones</option>
                            <option value="humanos">Humanos</option>
                        </select>
                    </div>
                    <div class="md-3">
                        <label for="efectos-txt" class="form-label">Efectos Adversos</label>
                        <textarea id="efectos-txt" class="form-control"></textarea>
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button class="btn btn-info" id="registrar-btn">Registrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javaS')
    <script src="{{asset('js/home.js')}}"></script>
@endsection
