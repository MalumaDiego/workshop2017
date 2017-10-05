@extends('layouts.app')

@section('menu_provider', 'open active')
@section('title', 'Listado de Proveedores')
@section('title-description', 'Administracion de Proveedores ')

@section('content')
    <section class="section">
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
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection