<?php
class NewhouseSynHouseCustomerProtectInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.newhouse.synHouseCustomerProtectInfo";
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
                                                        		                                    	                   			private $userPhone;
    	                        
	public function setUserPhone($userPhone){
		$this->userPhone = $userPhone;
         $this->apiParas["userPhone"] = $userPhone;
	}

	public function getUserPhone(){
	  return $this->userPhone;
	}

                        	                   			private $channelId;
    	                        
	public function setChannelId($channelId){
		$this->channelId = $channelId;
         $this->apiParas["channelId"] = $channelId;
	}

	public function getChannelId(){
	  return $this->channelId;
	}

                        	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                            }





        
 

