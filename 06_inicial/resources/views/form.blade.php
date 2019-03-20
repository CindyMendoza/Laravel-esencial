@extends('layouts.master')
@section('content')
    <div class="row">
 
      <div class="large-6 columns">
        <form method="post"	>
        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="row">
		    <div class="large-12 columns">
		      <label>Nombre
		        <input type="text" name="name" value="{{$user}}" placeholder="" />
		      </label>
		    </div>
		  </div>
		    
		  <div class="row">
		    <div class="large-12 columns">
		    	<input type="submit" class="button small secondary" value="ENVIAR" />
		    </div>
		  </div>
		</form>
      </div>
@stop