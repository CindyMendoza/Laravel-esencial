@extends('layouts.master')

@section('content')
<div class="row">
 
      <div class="large-9 columns">
        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1">Hola {{ $name or 'Invitado' }}</a></h5>
            <div class="content" data-slug="panel1">
              <table width="100%">
          <thead>
            <tr>
              <th width="200">Imagen</th>
              <th>Nombre del archivo</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><img src="{{URL::asset('assets/img/calatrava_400x300.jpg')}}" width="100" /></td>
              <td>calatrava_400x300.jpg</td>
            </tr>
          </tbody>
        </table>
            </div>
          </section>
        </div>
      </div>
</div>
@stop