@extends('layouts.master')
@section('contenido')
    <div class="row">
        <div class="col-12 col-md-8 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    <span>Registro</span>
                </div>
                <div class="card-boddy">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label"> Nombre</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="numero-txt"> Numero telefonico</label>
                        <input type="number" class="form-control" id="numero-txt">
                    </div>
                    <div class="mb-3">
                        <label for="mail-txt" class="form-label"> Correo electronico</label>
                        <input type="text" id="mail-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="pais-select" class="form-label"> Pais de origen</label>
                        <select id="pais-select" class="form-select"></select>

                    </div>

                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="registrar-btn" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('javascript')
    <script src="{{asset('js/servicios/registrosService.js')}}"></script>
    <script src="{{asset('js/registro.js')}}"></script>
@endsection