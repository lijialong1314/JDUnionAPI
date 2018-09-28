<?php
class TeamCitylistGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.team.citylist.get";
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
                                                        		                                    	                   			private $feature;
    	                        
	public function setFeature($feature){
		$this->feature = $feature;
         $this->apiParas["feature"] = $feature;
	}

	public function getFeature(){
	  return $this->feature;
	}

                            }





        
 

