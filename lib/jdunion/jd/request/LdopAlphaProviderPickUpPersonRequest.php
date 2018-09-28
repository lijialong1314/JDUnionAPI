<?php
class LdopAlphaProviderPickUpPersonRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.provider.pick.up.person";
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
                                                        		                                    	                   			private $pickupCode;
    	                        
	public function setPickupCode($pickupCode){
		$this->pickupCode = $pickupCode;
         $this->apiParas["pickupCode"] = $pickupCode;
	}

	public function getPickupCode(){
	  return $this->pickupCode;
	}

                        	                   			private $providerCode;
    	                        
	public function setProviderCode($providerCode){
		$this->providerCode = $providerCode;
         $this->apiParas["providerCode"] = $providerCode;
	}

	public function getProviderCode(){
	  return $this->providerCode;
	}

                        	                   			private $siteName;
    	                        
	public function setSiteName($siteName){
		$this->siteName = $siteName;
         $this->apiParas["siteName"] = $siteName;
	}

	public function getSiteName(){
	  return $this->siteName;
	}

                        	                   			private $pickPerson;
    	                        
	public function setPickPerson($pickPerson){
		$this->pickPerson = $pickPerson;
         $this->apiParas["pickPerson"] = $pickPerson;
	}

	public function getPickPerson(){
	  return $this->pickPerson;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                        	                   			private $operateTime;
    	                        
	public function setOperateTime($operateTime){
		$this->operateTime = $operateTime;
         $this->apiParas["operateTime"] = $operateTime;
	}

	public function getOperateTime(){
	  return $this->operateTime;
	}

                            }





        
 

