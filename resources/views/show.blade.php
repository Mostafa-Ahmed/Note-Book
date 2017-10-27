@extends ('layout')

@section ('content')


<div class="container">
<br><br>
	<h1>Edit : 	
		<button style="margin-left:80%;" class="btn btn-danger" onclick="window.location ='{{url("/")}}'">Cansel</button></h1>
	<h3 style="margin-left: 7%">Note ID: {{$note->title}} </h3>
    <br><br>
	{!! Form::model($note, ['url' => ['update', $note->id], 'class' => 'form-horizontal row-fluid']) !!}
		<div class="form-group">
		    {!! Form::label('Your Note Title') !!}
		    {!! Form::text('title', null, array('required', 'class'=>'form-control')) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('Your Note') !!}
		    {!! Form::text('body', null, array('required', 'class'=>'form-control')) !!}
		</div>

		<div class="form-group">
			{!! Form::token() !!}
		    {!! Form::submit('Edit Note', array('class'=>'btn btn-primary')) !!}
		</div>
	{!! Form::close() !!}

</div>



@endsection