@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">
                    <h2>Editar </h2>
                </div>     
                <div class="card-body ">
                    <form action="{{ url('/image/'. $image->id) }}" class='form' method="post" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}
                        @include('images.form')
                    </form>
                </div>
            </div>    
        </div>
    </div>
</div>    
@endsection