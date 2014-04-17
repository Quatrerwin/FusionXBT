@extends('layouts.application')

@section('content')
	<h1>Upload Torrent</h1>

	{{ Form::open(['route' => 'torrents.store', 'files' => true ]) }}
		<div class="field">
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name') }}
			{{ $errors->first('name', '<span class="error">:message</span>') }}
		</div>

		<div class="field">
			{{ Form::label('description', 'Description:') }}
			{{ Form::text('description') }}
			{{ $errors->first('description', '<span class="error">:message</span>') }}
		</div>

		<div class="field">
			{{ Form::label('torrent', 'Torrent:') }}
			{{ Form::file('torrent') }}
			{{ $errors->first('torrent', '<span class="error">:message</span>') }}
		</div>

		<div class="btn">
			{{ Form::submit('Upload Torrent') }}
		</div>
	{{ Form::close() }}
@stop
