@extends('layouts.master')

@section('content')
<div class="row">

 
      <div class="large-12 columns">

        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1"> 
            </a></h5>
              <div class="large-12 columns">
                <table width="100%">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Acción</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Nombre</td>
                    <td>Correo</td>
                    <td>
                      <a href="{{url('client/99')}}" class="button tiny radius secondary">MODIFICAR</a>
                      <a href="{{url('client/destroy/99')}}" class="button tiny radius alert">ELIMINAR</a>
                    </td>
                  </tr>
                </tbody>
              </table>
              </div>
              
          </section>
        </div>
      </div>
      
</div>
@stop