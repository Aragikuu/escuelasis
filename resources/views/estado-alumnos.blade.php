@extends('view.master')
@section('titulo','Asistencia')
@section('contenido')
<div class="container">
    <div class="card mt-4" id="estado">
        <div class="card-header" ">
              <h3>Estado</h3>
            </div>
            <div class=" card-body users">
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript" src="js/apis/asis.js"></script>
@endpush