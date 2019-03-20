@extends('layouts.master')

@section('content')
<div class="row">

  {{-- TODO: missing left sidebar --}}
 
      <div class="large-9 columns">

        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1">Hola 
            </a></h5>
              <div class="large-6 columns">
                <table width="100%">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Acción</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- TODO: missing Client cycle --}}
                  <tr>
                    <td>Nombre</td>
                    <td>Correo</td>
                    <td><a href="" class="button tiny radius secondary">MODIFICAR</a></td>
                  </tr>
                </tbody>
              </table>
              </div>
              
              {{-- TODO: missing right sidebar --}}
              
              
          </section>
        </div>
      </div>
      
</div>
@stop