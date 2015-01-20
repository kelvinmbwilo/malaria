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
	 * Display a listing of Wards for specific district.
	 *
	 * @param int $disid
	 * @return Response
	 */
	public function getwardDistricts($disid)
	{
		return Ward::where('district_id',$disid)->get();
	}

    /**
	 * Display a listing of Villages for specific ward.
	 *
	 * @param int $wardid
	 * @return Response
	 */
	public function getVillageWard($wardid)
	{
		return Village::where('ward_id',$wardid)->get();
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
	 * Store a newly created district in storage.
	 *
     * @param int $regid
	 * @return Response
	 */
	public function storeDistrict($regid)
	{
        return District::create(array(
            "region_id" => $regid,
            "district" => Input::get("val")
        ));
	}

    /**
	 * Store a newly created region in storage.
	 *
	 * @return Response
	 */
	public function storeRegion()
	{
        return Region::create(array(
            "region" => Input::get("val")
        ));
	}

    /**
	 * Store a newly created ward in storage.
	 *
     * @param int $disid
	 * @return Response
	 */
	public function storeWard($disid)
	{
        return Ward::create(array(
            "district_id" => $disid,
            "name" => Input::get("val")
        ));
	}

    /**
	 * Store a newly created village in storage.
	 *
     * @param int $wardId
	 * @return Response
	 */
	public function storeVillage($wardId)
	{
        return Village::create(array(
            "ward_id" => $wardId,
            "name" => Input::get("val")
        ));
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

    /**
	 * return the details of the region.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function RegionDetails($id)
	{
		$region = Region::find($id);
        $arr = array();
        $arr['districts'] = $region->district()->count();
        $wardcount = 0;
        $villagecount = 0;
        foreach(District::where('region_id',$id)->get() as $district){
           $wardcount += $district->ward()->count();
            foreach(Ward::where('district_id',$district->id)->get() as $ward){
                $villagecount += $ward->village()->count();
            }
        }
        $arr['ward'] = $wardcount;
        $arr['village'] = $villagecount;
        $arr['households'] = Kaya::where('region',$id)->count();;
        return json_encode($arr);
	}

    /**
	 * return the details of the districts.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function DistrictDetails($id)
	{
		$region = Region::find($id);
        $arr = array();
        $i=0;
        foreach(District::where('region_id',$id)->get() as $district){
            $villagecount = 0;
            $arr[$i]['id'] = $district->id;
            $arr[$i]['district'] = $district->district;
            $arr[$i]['ward'] = $district->ward()->count();
            foreach(Ward::where('district_id',$district->id)->get() as $ward){
                $villagecount += $ward->village()->count();
            }
            $arr[$i]['village'] = $villagecount;
            $arr[$i]['households'] = Kaya::where('district',$district->id)->count();
            $i++;
        }
        return json_encode($arr);
	}

    /**
	 * return the details of the wards
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function WardDetails($id)
	{
        $arr = array();
        $i=0;
        foreach(Ward::where('district_id',$id)->get() as $ward){
            $arr[$i]['id'] = $ward->id;
            $arr[$i]['ward'] = $ward->name;
            $arr[$i]['village'] = $ward->village()->count();
            $arr[$i]['households'] = Kaya::where('ward',$ward->id)->count();
            $i++;
        }
        return json_encode($arr);
	}

    /**
	 * return the details of the villages.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function VillageDetails($id)
	{
        $arr = array();
        $i=0;
        foreach(Village::where('ward_id',$id)->get() as $village){
            $arr[$i]['id'] = $village->id;
            $arr[$i]['village'] = $village->name;
            $arr[$i]['households'] = Kaya::where('village',$village->id)->count();
            $i++;
        }
        return json_encode($arr);
	}

    /**
	 * return the details of the region.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function DistributionList($id)
	{
        return Kaya::where('village',$id)->get();
	}


    /////////////////////////////////////////////////////////////////
    ///////////editing resources ///////////////////////////////////
    ////////////////////////////////////////////////////////////////

    /**
     * edit region details.
     *
     * @param  int  $id
     * @return Response
     */
    public function updateRegion($id)
    {
        $region = Region::find($id);
        $region->region = Input::get('val');
        $region->save();
        return $region->region;
    }

    /**
     * edit region details.
     *
     * @param  int  $id
     * @return Response
     */
    public function updateDistrict($id)
    {
        $district = Region::find($id);
        $district->district = Input::get('val');
        $district->save();
        return $district->district;
    }

    /**
     * edit region details.
     *
     * @param  int  $id
     * @return Response
     */
    public function updateWard($id)
    {
        $ward = Region::find($id);
        $ward->name = Input::get('val');
        $ward->save();
        return $ward->name;
    }

    /**
     * edit region details.
     *
     * @param  int  $id
     * @return Response
     */
    public function updateVillage($id)
    {
        $village = Village::find($id);
        $village->name = Input::get('val');
        $village->save();
        return $village->name;
    }



}
