<?php
class LdopCenterApiReceivePaymentInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.center.api.receivePaymentInfo";
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
                                                        		                                    	                   			private $deliveryId;
    	                        
	public function setDeliveryId($deliveryId){
		$this->deliveryId = $deliveryId;
         $this->apiParas["deliveryId"] = $deliveryId;
	}

	public function getDeliveryId(){
	  return $this->deliveryId;
	}

                        	                   			private $customerCode;
    	                        
	public function setCustomerCode($customerCode){
		$this->customerCode = $customerCode;
         $this->apiParas["customerCode"] = $customerCode;
	}

	public function getCustomerCode(){
	  return $this->customerCode;
	}

                        	                   			private $recMoney;
    	                        
	public function setRecMoney($recMoney){
		$this->recMoney = $recMoney;
         $this->apiParas["recMoney"] = $recMoney;
	}

	public function getRecMoney(){
	  return $this->recMoney;
	}

                        	                   			private $receivedMoney;
    	                        
	public function setReceivedMoney($receivedMoney){
		$this->receivedMoney = $receivedMoney;
         $this->apiParas["receivedMoney"] = $receivedMoney;
	}

	public function getReceivedMoney(){
	  return $this->receivedMoney;
	}

                        	                   			private $paymentState;
    	                        
	public function setPaymentState($paymentState){
		$this->paymentState = $paymentState;
         $this->apiParas["paymentState"] = $paymentState;
	}

	public function getPaymentState(){
	  return $this->paymentState;
	}

                        	                   			private $paymentTime;
    	                        
	public function setPaymentTime($paymentTime){
		$this->paymentTime = $paymentTime;
         $this->apiParas["paymentTime"] = $paymentTime;
	}

	public function getPaymentTime(){
	  return $this->paymentTime;
	}

                        	                   			private $payer;
    	                        
	public function setPayer($payer){
		$this->payer = $payer;
         $this->apiParas["payer"] = $payer;
	}

	public function getPayer(){
	  return $this->payer;
	}

                            }





        
 

