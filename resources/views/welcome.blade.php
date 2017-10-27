@extends ('layout')

@section ('content')

    <h1><i><font face="Comic Sans MS" color="blue" size="200px">NoteBook</font></h1>
	<br>

	<div class="container">
	{!! Form::open(array('route' => 'add')) !!}

		<div class="form-group">
		    {!! Form::label('New Title') !!}
		    {!! Form::text('title', null, array('required', 'class'=>'form-control', 'placeholder'=>'Title')) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('Your Note') !!}
		    {!! Form::text('body', null, array('required', 'class'=>'form-control', 'placeholder'=>'Your Note')) !!}
		</div>

		<div class="form-group">
			{!! Form::token() !!}
		    {!! Form::submit('Add Note', array('class'=>'btn btn-primary')) !!}
		</div>
	{!! Form::close() !!}
	</div>
	
	<br>

<font face="Comic Sans MS" color="green">
	<p>Notes</p>
	<ul id="list">
		@foreach($notes as $note)
			<li> {{$note->title}}<br>
				 {{$note->body}}
				 <br>
				<button class='btn btn-danger' id='{{$note->id}}'  onclick="window.location ='{{url("/d/{$note->id}")}}'">Remove</button>
				<button class='btn btn-info'  id='{{$note->id}}'  onclick="window.location ='{{url("/e/{$note->id}")}}'">Edit</button>
			</li>
		@endforeach
	</ul>
</font>

	

@endsection