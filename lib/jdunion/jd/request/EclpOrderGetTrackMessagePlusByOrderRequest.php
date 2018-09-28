<?php
class EclpOrderGetTrackMessagePlusByOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.order.getTrackMessagePlusByOrder";
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
                                    	                   			private $customerCode;
    	                        
	public function setCustomerCode($customerCode){
		$this->customerCode = $customerCode;
         $this->apiParas["customerCode"] = $customerCode;
	}

	public function getCustomerCode(){
	  return $this->customerCode;
	}

                        	                   			private $bizCode;
    	                        
	public function setBizCode($bizCode){
		$this->bizCode = $bizCode;
         $this->apiParas["bizCode"] = $bizCode;
	}

	public function getBizCode(){
	  return $this->bizCode;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

}





        
 

