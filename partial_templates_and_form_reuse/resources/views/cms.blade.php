@extends('layouts.master')

@section('content')
<div class="row">
	@if( isset( $post ) )
	<div data-alert class="alert-box warning radius">
	  Datos guardados
	  <a href="#" class="close">&times;</a>
	</div>
	@endif
      <form method="post">
      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="row">
		    <div class="large-4 columns">
		      <label>Nombre
		        <input type="text" name="name" value=""  />
		      </label>
		    </div>
		  </div>
		  <div class="row">
		    <div class="large-4 columns">
		      <label>Correo
		        <input type="text" name="email" value=""  />
		      </label>
		    </div>
		  </div>
		  <div class="row">
		    <div class="large-12 columns">
		      <label>
		        <input class="button small success radius" type="submit" value="ENVIAR" />
		      </label>
		    </div>
		  </div>
		</form>
</div>
@stop