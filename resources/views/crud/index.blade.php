@extends('layouts/main')
@section('contenido')
    <p class="fs-2 text-center mt-4"><img src="{{ asset('img/tec.ico') }}" alt="Icono" style="width: 55px; height: auto;"></td> Beneficiarios </p>
    <a href="/crud/create" class=" btn btn-primary"><i class="icocod">&#10133;</i> Agregar Beneficiarios </a>
    <div class="card mt-4">
        <div class="card-body">
            <table id="tabla" class="display nowrap border border-dark mt-2" style="width:100%" >
                <thead>
                    <tr>
                        <th>Folio</th>
                        <th>Nombre</th>
                        <th>Telefono Celular</th>
                        <th>Telefono Local</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>
                            {{ $item->folio }} <!-- Mostrar solo el nombre de la carrera -->
                        </td>
                        <td>{{ $item->nombre_productor }}</td>
                        <td>{{ $item->telefono_celular }}</td>            
                        <td>{{ $item->telefono }}</td>
                        <td>
                            <a href="{{ route('edit', $item->id) }}" class="btn btn-warning"><i class="icocod">&#128221;</i> Editar</a>
                        </td>
                        <td> 
                            <a href="{{ route('show', $item->id) }}" class="btn btn-danger"><i class="icocod">&#9940;</i> Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
    
    <script>
        $(document).ready(function() {
            var table = $('#tabla').DataTable({
                scrollY: 450,
                deferRender: false,
                scroller: true,
                responsive: true,
                
            });
        });
    </script>
    
@endsection
