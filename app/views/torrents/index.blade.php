@extends('layouts.application')

@section('content')
	<h1>Torrents List</h1>
	
	@foreach ($torrents as $torrent)
		<div class="row">
			<div class="span2">{{ link_to_route('torrents.show',$torrent->name, ['id' => $torrent->id]) }}</div>
			<div class="span2">{{ $torrent->size }}</div>
			<div class="span2">{{ $torrent->created_at }}</div>
			<div class="span2">{{ $torrent->seeders }}</div>
			<div class="span2">{{ $torrent->leechers }}</div>
			<div class="span2">{{ $torrent->times_completed }}</div>
		</div>
	@endforeach
	{{ $torrents->links() }}
@stop