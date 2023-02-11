{{ Form::open(array('url' => 'title/save','method'=>'post','enctype'=>'multipart/form-data')) }}
{{ Form::text('nombre') }} 
{{ Form::file('file') }}
{{Form::submit('Guardar!')}}
{{ Form::close() }}