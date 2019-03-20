@extends('layouts.master')


@section('content')
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Hola {{ $user or 'Invitado' }}</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1">Listado</a></h5>
            <div class="content" data-slug="panel1">
            	<table width="100%">
				  <thead>
				    <tr>
				      <th width="200">Imagen</th>
				      <th>Nombre del archivo</th>
				    </tr>
				    <tr>
				      <th width="200">Imagen</th>
				      <th>Nombre del archivo</th>
				    </tr>
				    <tr>
				      <th width="200">Imagen</th>
				      <th>Nombre del archivo</th>
				    </tr>
				    <tr>
				      <th width="200">Imagen</th>
				      <th>Nombre del archivo</th>
				    </tr>
				    <tr>
				      <th width="200">Imagen</th>
				      <th>Nombre del archivo</th>
				    </tr>
				    <tr>
				      <th width="200">Imagen</th>
				      <th>Nombre del archivo</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td><img src="{{ URL::asset('assets/img/calatrava_400x300.jpg') }}" width="100" /></td>
				      <td></td>
				    </tr>
				  </tbody>
				</table>
            </div>
          </section>
        </div>
      </div>
@stop