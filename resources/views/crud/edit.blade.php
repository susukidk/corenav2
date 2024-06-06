@extends('layouts/main')
@section('contenido')
<br>
    <p class="fs-2 text-center">Editar Datos Beneficiarios</p>
    
    <form class="row g-3 fs-4" action="{{ route ('update', $items->id)}}" method="post">
        <a href="/" class="btn btn-info mt-3"><td class="icocod">&#9194;</td>Regresar </a>
        @csrf
        @method('PUT')
                <div class="col-6 mt-4">
            <label for="folio">Folio <td class="icocod">&#128119;</td></label>
            <input type="text" name="folio" id="folio" class="form-control" value="{{ $items->folio }}" required>
        </div>
        <div class="col-6 mt-4">
            <label for="folioAltetl">Folio Altetl<td class="icocod">&#128119;</td></label>
            <input type="text" name="folioAltetl" id="folioAltetl" class="form-control" value="{{ $items->folioAltetl }}" required>
        </div>
        <div class="col-6 mt-4">
            <label for="nemeroCAC">numero CAC<td class="icocod">&#128119;</td></label>
            <input type="text" name="nemeroCAC" id="nemeroCAC" class="form-control" value="{{ $items->nemeroCAC }}" required>
        </div>
        <div class="col-6 mt-4">
            <label for="fecha_ingreso">Fecha<td class="icocod">&#128198;</td></label>
            <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" value="{{ $items->fecha_ingreso }}" required>
        </div>
        <div class="col-md-6 mt-4">
            <label for="nombre_productor" class="form-label">Nombre del Productor <td class="icocod">&#128221;</td></label>
            <input type="text" name="nombre_productor" id="nombre_productor" class="form-control" value="{{ $items->nombre_productor }}" required>
        </div>
        <div class="col-md-6 mt-4">
            <label for="telefono_celular" class="form-label">Telefono Celular <td class="icocod">&#9997;</td></label>
            <input type="number" name="telefono_celular" id="telefono_celular" class="form-control" value="{{ $items->telefono_celular }}" required>
        </div>
        <div class="col-6 mt-4">
            <label for="telefono">Telefono fijo <td class="icocod">&#128222;</td></label>
            <input type="number" name="telefono" id="telefono" class="form-control" value="{{ $items->telefono }}" required>
        </div>
        <div class="col-6 mt-4">
            <label for="fecha_nacimiento"> Fecha de nacimiento <td class="icocod">&#128198;</td></label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ $items->fecha_nacimiento }}" required>
        </div>
        <div class="col-6 mt-4">
            <label for="sexo">Sexo<td class="icocod">&#127745;</td></label>
            <input type="text" name="sexo" id="sexo" class="form-control" value="{{ $items->sexo }}" required>
        </div>
        <div class="col-6 mt-4">
            <label for="seccionElectoral">Sección Electoral <td class="icocod">&#127745;</td></label>
            <input type="text" name="seccionElectoral" id="seccionElectoral" class="form-control" value="{{ $items->seccionElectoral }}" required>
        </div>
        <div class="col-6 mt-4">
            <label for="alcaldia">Alcaldia <td class="icocod">&#127745;</td></label>
            <input type="text" name="alcaldia" id="alcaldia" class="form-control" value="{{ $items->alcaldia }}" required>
        </div>
        <div class="col-6 mt-4">
            <label for="pueblo">Pueblo <td class="icocod">&#127745;</td></label>
            <input type="text" name="pueblo" id="pueblo" class="form-control" value="{{ $items->pueblo }}" required>
        </div>
        <div class="col-6 mt-4">
            <label for="coloniaBarrio">Colonia o Barrio<td class="icocod">&#127745;</td></label>
            <input type="text" name="coloniaBarrio" id="coloniaBarrio" class="form-control" value="{{ $items->coloniaBarrio }}" required>
        </div>
        <div class="col-6 mt-4">
            <label for="codigoPostal">Codigo Postal <td class="icocod">&#127745;</td></label>
            <input type="number" name="codigoPostal" id="codigoPostal" class="form-control" value="{{ $items->codigoPostal }}" required>
        </div>
        <div class="col-6 mt-4">
            <label for="calle">Calle y número<td class="icocod">&#127745;</td></label>
            <input type="text" name="calle" id="calle" class="form-control" value="{{ $items->calle }}" required>
        </div>
        <div class="col-12">
            <button class="btn btn-primary mt-3"><td class="icocod">&#128221;</td>
                Actualizar 
            </button>
        </div>
        
    </form>
    
@endsection
