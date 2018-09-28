<?php
class ZxjCodGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.zxj.cod.get";
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
                                                        		                                    	                   			private $provinceId;
    	                                                            
	public function setProvinceId($provinceId){
		$this->provinceId = $provinceId;
         $this->apiParas["province_id"] = $provinceId;
	}

	public function getProvinceId(){
	  return $this->provinceId;
	}

                        	                   			private $cityId;
    	                                                            
	public function setCityId($cityId){
		$this->cityId = $cityId;
         $this->apiParas["city_id"] = $cityId;
	}

	public function getCityId(){
	  return $this->cityId;
	}

                        	                   			private $countyId;
    	                                                            
	public function setCountyId($countyId){
		$this->countyId = $countyId;
         $this->apiParas["county_id"] = $countyId;
	}

	public function getCountyId(){
	  return $this->countyId;
	}

                        	                   			private $townId;
    	                                                            
	public function setTownId($townId){
		$this->townId = $townId;
         $this->apiParas["town_id"] = $townId;
	}

	public function getTownId(){
	  return $this->townId;
	}

                        	                        	                            }





        
 

