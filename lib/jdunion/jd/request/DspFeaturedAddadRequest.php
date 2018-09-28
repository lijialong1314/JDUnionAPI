<?php
class DspFeaturedAddadRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.featured.addad";
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
                                    	                   			private $materialStr;
    	                        
	public function setMaterialStr($materialStr){
		$this->materialStr = $materialStr;
         $this->apiParas["materialStr"] = $materialStr;
	}

	public function getMaterialStr(){
	  return $this->materialStr;
	}

                        	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                        	}





        
 

