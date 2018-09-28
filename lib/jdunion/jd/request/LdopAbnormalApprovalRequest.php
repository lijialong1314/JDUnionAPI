<?php
class LdopAbnormalApprovalRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.abnormal.approval";
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

                        	                   			private $deliveryId;
    	                        
	public function setDeliveryId($deliveryId){
		$this->deliveryId = $deliveryId;
         $this->apiParas["deliveryId"] = $deliveryId;
	}

	public function getDeliveryId(){
	  return $this->deliveryId;
	}

                        	                   			private $responseComment;
    	                        
	public function setResponseComment($responseComment){
		$this->responseComment = $responseComment;
         $this->apiParas["responseComment"] = $responseComment;
	}

	public function getResponseComment(){
	  return $this->responseComment;
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





        
 

