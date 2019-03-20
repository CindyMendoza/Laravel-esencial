@extends('layouts.master')

@section('content')
<div class="row">
 
      <div class="large-9 columns">
        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1"></a></h5>
            <div class="content" data-slug="panel1">
              <form method="get">
                <div class="row">
                  <div class="large-12 columns">
                    <label>
                    Tecnología
                    <select name="id">
                    @foreach ($options as $id => $technology)
						<option value="{{$id}}">{{ $technology }}</option>
					@endforeach
					</select>
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <input type="submit" class="button small success radius" />
                    <a href="{{url('/details')}}" class="button small success secondary" >LIMPIAR</a>
                  </div>
                </div>
              </form>
              <div class="row">
              	<div class="large-12 columns">
                    <table width="100%">
					  <thead>
					    <tr>
					      <th>Table Header</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach( $results as $result  )
					    <tr>
					      <td>{{$result}}</td>
					    </tr>
					    @endforeach
					  </tbody>
					</table>
                  </div>
              </div>
            </div>
          </section>
        </div>
      </div>
</div>
@stop