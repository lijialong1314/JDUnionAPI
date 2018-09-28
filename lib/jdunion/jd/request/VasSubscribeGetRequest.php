<?php
class VasSubscribeGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vas.subscribe.get";
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
                                    	                   			private $userName;
    	                                                            
	public function setUserName($userName){
		$this->userName = $userName;
         $this->apiParas["user_name"] = $userName;
	}

	public function getUserName(){
	  return $this->userName;
	}

                        	                   			private $itemCode;
    	                                                            
	public function setItemCode($itemCode){
		$this->itemCode = $itemCode;
         $this->apiParas["item_code"] = $itemCode;
	}

	public function getItemCode(){
	  return $this->itemCode;
	}

                        	}





        
 

