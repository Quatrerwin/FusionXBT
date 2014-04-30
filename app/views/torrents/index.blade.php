@extends('layouts.application')

@section('content')
	<h1>Torrents List</h1>
	@if (count($torrents) > 0)
		<div class="torrents-table row-fluid">
			<div class="span2">Name</div>
			<div class="span2">Size</div>
			<div class="span2">Date Added</div>
			<div class="span2">Seeders</div>
			<div class="span2">Leechers</div>
			<div class="span2">Completed D/Ls</div>
		</div>
		@foreach ($torrents as $torrent)
			<div class="torrents-table row-fluid">
				<div class="span2">{{ link_to_route('torrents.show',$torrent->name, ['id' => $torrent->id]) }}</div>
				<div class="span2">{{ $torrent->size }}</div>
				<div class="span2">{{ $torrent->created_at }}</div>
				<div class="span2">{{ $torrent->seeders }}</div>
				<div class="span2">{{ $torrent->leechers }}</div>
				<div class="span2">{{ $torrent->times_completed }}</div>
			</div>
		@endforeach
		{{ $torrents->links() }}
	@else
		No torrents to display!
	@endif
@stop