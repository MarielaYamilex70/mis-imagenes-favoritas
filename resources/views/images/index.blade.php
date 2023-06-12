@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">
                    <h4 class="text-center">Listado de Imágenes Favoritas del Usuario</h4>
                
                    <a href="image/create" class="btn btn-primary">Crear</a>
                </div>
                <div class="card-body opacitBackground">
                    <table class="table table-ls table-grey">
                        <thead>
                            <tr>
                                <th scope="col" class="fs-5">#</th>
                                <th scope="col" class="fs-5">Imágen</th>
                                <th scope="col" class="fs-5">Título</th>
                                <th scope="col" class="fs-5"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($images as $image)
                                <tr>
                                    <th scope="row">{{ $image->id }}</th>
                                    <td> <a class="img-responsive"  href="{{$image->url }}" target="_blank"><img src="{{$image->url }}" alt="Image " height="100"  ></a></td>
                                    <td>{{ $image->title }}</td>
                                    <td>
                                        <form action="{{ url('/image/'. $image->id) }}" class='form' method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            
                                            <a href="/image/{{$image->id}}/edit" class="btn btn-primary"><i class="bi bi-gear-fill"></i></a>  
                                                            
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Está segur@ de borrar la imagen ????') "  data-bs-toggle="modal" data-bs-target="#modal-content"><i class="bi bi-trash3-fill"></i></button>
                                            
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    {{$images->links('vendor.pagination.bootstrap-5')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection