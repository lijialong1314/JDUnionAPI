<?php
class DspAdkcunitDmpGetBindCrowdRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adkcunit.dmp.getBindCrowd";
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
                                    	                        	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                        	                   			private $displayType;
    	                        
	public function setDisplayType($displayType){
		$this->displayType = $displayType;
         $this->apiParas["displayType"] = $displayType;
	}

	public function getDisplayType(){
	  return $this->displayType;
	}

                        	}





        
 

