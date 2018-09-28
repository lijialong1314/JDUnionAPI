<?php
class SmartOpenBindDeviceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.smart.open.bindDevice";
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
                                    	                   			private $feedId;
    	                                                            
	public function setFeedId($feedId){
		$this->feedId = $feedId;
         $this->apiParas["feed_id"] = $feedId;
	}

	public function getFeedId(){
	  return $this->feedId;
	}

                        	                   			private $accessKey;
    	                                                            
	public function setAccessKey($accessKey){
		$this->accessKey = $accessKey;
         $this->apiParas["access_key"] = $accessKey;
	}

	public function getAccessKey(){
	  return $this->accessKey;
	}

                        	                   			private $deviceName;
    	                                                            
	public function setDeviceName($deviceName){
		$this->deviceName = $deviceName;
         $this->apiParas["device_name"] = $deviceName;
	}

	public function getDeviceName(){
	  return $this->deviceName;
	}

                        	                        	                   			private $privateUserId;
    	                                                                        
	public function setPrivateUserId($privateUserId){
		$this->privateUserId = $privateUserId;
         $this->apiParas["private_user_id"] = $privateUserId;
	}

	public function getPrivateUserId(){
	  return $this->privateUserId;
	}

                        	                        	}





        
 

