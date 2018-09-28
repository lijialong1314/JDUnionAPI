<?php
class CheckResultRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.checkResult";
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
                                                        		                                    	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $isSuccess;
    	                        
	public function setIsSuccess($isSuccess){
		$this->isSuccess = $isSuccess;
         $this->apiParas["isSuccess"] = $isSuccess;
	}

	public function getIsSuccess(){
	  return $this->isSuccess;
	}

                        	                   			private $failedCode;
    	                        
	public function setFailedCode($failedCode){
		$this->failedCode = $failedCode;
         $this->apiParas["failedCode"] = $failedCode;
	}

	public function getFailedCode(){
	  return $this->failedCode;
	}

                        	                   			private $failedMsg;
    	                        
	public function setFailedMsg($failedMsg){
		$this->failedMsg = $failedMsg;
         $this->apiParas["failedMsg"] = $failedMsg;
	}

	public function getFailedMsg(){
	  return $this->failedMsg;
	}

                            }





        
 

