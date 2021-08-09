@extends('layouts.master')
@section('contenido')
    

        <div class="row">
            <div class="col-12 col-md-8 col-lg-5 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <span>Seleccione una opcion</span>
                    </div>
                    <div class="card-footer d-grid gap-1">
                        <button id="btn1" class="btn btn-primary">Registrar</button>
                    </div>
                    <div class="card-footer d-grid gap-1">
                        <button id="btn2" class="btn btn-primary">Ver tabla de registros</button>   
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <span>Ubicacion de nuestra hostal</span> 
                    </div> 
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d703.1167016397923!2d-71.59228586661843!3d-33.040521413322836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689e132ebe5603f%3A0x71b216789a4289f4!2sHostal!5e0!3m2!1ses-419!2scl!4v1628542512052!5m2!1ses-419!2scl" width="auto" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <span>¿Que ofrecemos?</span>
                    </div>
                    <iframe width="auto" height="315" src="https://www.youtube.com/embed/nTnFoAaLAZM?start=10" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

        </div>

@endsection

@section('javascript')
    <script src="{{asset('js/inicio.js')}}"></script>
@endsection