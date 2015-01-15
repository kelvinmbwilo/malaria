<?php

class kayaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Kaya::all();
	}

    /**
	 * Display a listing of Regions.
	 *
	 * @return Response
	 */
	public function getRegions()
	{
		return Region::all();
	}

    /**
	 * Display a listing of Districts.
	 *
	 * @return Response
	 */
	public function getDistricts()
	{
		return District::all();
	}

    /**
	 * Display a listing of Districts for specific region.
	 *
	 * @param int $regid
	 * @return Response
	 */
	public function getregDistricts($regid)
	{
		return District::where('region_id',$regid)->get();
	}

    /**
	 * Display a listing of kaya for specific region.
	 *
	 * @param int $regid
	 * @return Response
	 */
	public function getregKaya($regid)
	{
		return Kaya::where('region',$regid)->get();
	}

    /**
	 * Display a listing of kaya for specific district.
	 *
	 * @param int $disid
	 * @return Response
	 */
	public function getdisKaya($disid)
	{
		return Kaya::where('district',$disid)->get();
	}

    /**
	 * Display a listing of kaya for specific district.
	 *
	 * @param int $disid
	 * @return Response
	 */
	public function getpeopleInkaya($disid)
	{
        $array = array();
		$array['male'] =  Kaya::where('district',$disid)->sum('male');
        $array['female'] =  Kaya::where('district',$disid)->sum('female');
        $array['total'] = $array['male'] + $array['female'];
        return json_encode($array);
	}

/**
	 * Display a listing of kaya for specific district.
	 *
	 * @param int $regid
	 * @return Response
	 */
	public function getpeopleInRegion($regid)
	{
        $array = array();
		$array['male'] =  Kaya::where('region',$regid)->sum('male');
        $array['female'] =  Kaya::where('region',$regid)->sum('female');
        $array['total'] = $array['male'] + $array['female'];
        return json_encode($array);
	}




	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        return Kaya::create(Input::all());
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
        $kaya = Kaya::find($id)->update(Input::all());
        return $kaya;
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$kaya = Kaya::find($id);
        $kaya->delete();
	}


}
