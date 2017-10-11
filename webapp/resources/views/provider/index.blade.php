@extends('layouts.app')

@section('menu_provider', 'open active')
@section('title', 'Listado de Proveedores')
@section('title-description', 'Administracion de Proveedores ')

@section('content')

    <section class="section">
        <a href="provider/create"><button class="btn btn-success">NUEVO</button> </a>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table id="mainTable">
                        <thead>
                        <tr>
                            <td>Numero</td>
                            <td>Nombre</td>
                            <td>Telefono</td>
                            <td>Direccion</td>
                            <td>Descripcion</td>
                        </tr>
                        </thead>
                        @foreach($providers as $provider)
                            <tr>
                                <td>{{ $provider->id}}</td>
                                <td>{{ $provider->name}}</td>
                                <td>{{ $provider->telefono}}</td>
                                <td>{{ $provider->direccion}}</td>
                                <td>{{ $provider->description}}</td>
                                <td>
                                    <a href="{{URL::action('ProviderController@edit',$provider->id)}}"><button class="btn btn-info">EDITAR</button> </a>
                                    <a href=""><button class="btn btn-danger">Eliminar</button> </a>
                                </td>
                            </tr>
                        @endforeach
                        <tbody>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </section>
@endsection