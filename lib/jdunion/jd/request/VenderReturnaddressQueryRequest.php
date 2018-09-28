<?php
class VenderReturnaddressQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vender.returnaddress.query";
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
                                    	                        	                   			private $addressType;
    	                                                            
	public function setAddressType($addressType){
		$this->addressType = $addressType;
         $this->apiParas["address_type"] = $addressType;
	}

	public function getAddressType(){
	  return $this->addressType;
	}

                        	}





        
 

