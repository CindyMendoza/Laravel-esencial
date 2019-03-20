<form method="post">
      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="row">
		    <div class="large-4 columns">
		      <label>Nombre
		        <input type="text" name="name" value="{{ $name or Input::old('name') }}"  />
		      </label>
		    </div>
		  </div>
		  <div class="row">
		    <div class="large-4 columns">
		      <label>Correo
		        <input type="text" name="email" value="{{ $email or Input::old('email') }}"  />
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