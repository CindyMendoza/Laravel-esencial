<form method="post">
      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="row">
		    <div class="large-4 columns">
		      <label>Nombre
		        <input type="text" class="error" name="nombre" value="{{ $nombre or Input::old('nombre') }}"  />
		      </label>
		      @if( $errors->first('nombre') )
		      <small class="error">{{ $errors->first('nombre') }}</small>
		      @endif

		    </div>
		  </div>
		  <div class="row">
		    <div class="large-4 columns">
		      <label>Correo
		        <input type="text" class="error" name="correo" value="{{ $correo or Input::old('correo') }}"  />
		      </label>
		      @if( $errors->first('correo') )
		      <small class="error">{{ $errors->first('correo') }}</small>
		      @endif
		    </div>
		  </div>
		  <br/>
		  <div class="row">
		    <div class="large-12 columns">
		      <label>
		        <input class="button small success radius" type="submit" value="ENVIAR" />
		      </label>
		    </div>
		  </div>
		</form>