<?php
class TeamArealistGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.team.arealist.get";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                                        		                                    	                   			private $districtId;
    	                                                            
	public function setDistrictId($districtId){
		$this->districtId = $districtId;
         $this->apiParas["district_id"] = $districtId;
	}

	public function getDistrictId(){
	  return $this->districtId;
	}

                            }





        
 

