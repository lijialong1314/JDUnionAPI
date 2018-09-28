<?php
class SmartOpenNotifyDeviceOnlineStateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.smart.open.notifyDeviceOnlineState";
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

                        	                   			private $onlineState;
    	                                                            
	public function setOnlineState($onlineState){
		$this->onlineState = $onlineState;
         $this->apiParas["online_state"] = $onlineState;
	}

	public function getOnlineState(){
	  return $this->onlineState;
	}

                        	}





        
 

