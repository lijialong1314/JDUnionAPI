<?php
class CreatePromotionSiteJosSaveAppPromtionSiteInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.CreatePromotionSiteJos.saveAppPromtionSiteInfo";
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
                                    	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $adName;
    	                        
	public function setAdName($adName){
		$this->adName = $adName;
         $this->apiParas["adName"] = $adName;
	}

	public function getAdName(){
	  return $this->adName;
	}

                        	                   			private $adType;
    	                        
	public function setAdType($adType){
		$this->adType = $adType;
         $this->apiParas["adType"] = $adType;
	}

	public function getAdType(){
	  return $this->adType;
	}

                        	                   			private $adSize;
    	                        
	public function setAdSize($adSize){
		$this->adSize = $adSize;
         $this->apiParas["adSize"] = $adSize;
	}

	public function getAdSize(){
	  return $this->adSize;
	}

}





        
 

