<?php
class DropshipDpsOutboundRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dropship.dps.outbound";
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
                                                        		                                    	                        	                   			private $customOrderId;
    	                        
	public function setCustomOrderId($customOrderId){
		$this->customOrderId = $customOrderId;
         $this->apiParas["customOrderId"] = $customOrderId;
	}

	public function getCustomOrderId(){
	  return $this->customOrderId;
	}

                        	                   			private $memoByVendor;
    	                        
	public function setMemoByVendor($memoByVendor){
		$this->memoByVendor = $memoByVendor;
         $this->apiParas["memoByVendor"] = $memoByVendor;
	}

	public function getMemoByVendor(){
	  return $this->memoByVendor;
	}

                        	                   			private $isJdexpress;
    	                        
	public function setIsJdexpress($isJdexpress){
		$this->isJdexpress = $isJdexpress;
         $this->apiParas["isJdexpress"] = $isJdexpress;
	}

	public function getIsJdexpress(){
	  return $this->isJdexpress;
	}

                            }





        
 

