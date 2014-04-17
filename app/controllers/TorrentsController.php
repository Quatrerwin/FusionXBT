<?php

class TorrentsController extends \BaseController {

	protected $torrent;

	public function __construct(Torrent $torrent)
	{
		$this->torrent = $torrent;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$torrents = Torrent::paginate(10);

		return View::make('torrents.index', ['torrents' => $torrents]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('torrents.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$torrent = new Torrent();
		
		if (Input::hasFile('torrent'))
		{
			$file = Input::file('torrent');

			$torrent->filename = $file->getClientOriginalName();
			$torrent->size = $file->getSize();
		}

		$torrent->name = Input::get('name');
		$torrent->visible = 'yes';

		if ( ! $torrent->save() )
		{
			return Redirect::back()->withInput()->withErrors($torrent->getErrors());
		}

		if (Input::hasFile('torrent'))
		{
			$file = Input::file('torrent');

			$file->move(public_path() . '/files',  $torrent->id . "." . $file->getClientOriginalExtension());

		}

		return Redirect::route('torrents.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
