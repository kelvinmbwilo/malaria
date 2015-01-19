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
        $array['kaya'] =  Kaya::where('district',$disid)->count();
        $array['done'] =  Kaya::where('district',$disid)->where('status',1)->count();
        $array['not_done'] =  Kaya::where('district',$disid)->where('status',0)->count();
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
        $array['kaya'] =  Kaya::where('region',$regid)->count();
        $array['done'] =  Kaya::where('region',$regid)->where('status',1)->count();
        $array['not_done'] =  Kaya::where('region',$regid)->where('status',0)->count();
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
		return Kaya::find($id);
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
        $kaya = Kaya::find($id);
        $kaya->region = Input::get("region");
        $kaya->district = Input::get("district");
        $kaya->ward = Input::get("ward");
        $kaya->village = Input::get("village");
        $kaya->leader_name = Input::get("leader_name");
        $kaya->phone = Input::get("phone");
        $kaya->male = Input::get("male");
        $kaya->female = Input::get("female");
        $kaya->station= Input::get("station");
        $kaya->name_of_veo = Input::get("name_of_veo");
        $kaya->writer = Input::get("writer");
        $kaya->save();
        return $kaya;
	}

    /**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updateStatus($id)
	{
        $kaya = Kaya::find($id);
        $kaya->status = 1;
        $kaya->distribution_date = date("d-m-Y");
        $kaya->save();
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
