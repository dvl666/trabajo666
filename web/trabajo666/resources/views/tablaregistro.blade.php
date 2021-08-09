@extends('layouts.master')
@section('contenido')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-info">
                    <tr>
                        <td>Nombre</td>
                        <td>Numero telefonico</td>
                        <td>Correo electronico</td>
                        <td>Pais de origen</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody id="tbody-registro">

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/servicios/registrosService.js')}}"></script>
    <script src="{{asset('js/tablaregistro.js')}}"></script>
    
@endsection