<?php
class PopOrderGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.order.get";
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
                                                        		                                    	                        	                   			private $orderState;
    	                                                            
	public function setOrderState($orderState){
		$this->orderState = $orderState;
         $this->apiParas["order_state"] = $orderState;
	}

	public function getOrderState(){
	  return $this->orderState;
	}

                        	                   			private $optionalFields;
    	                                                            
	public function setOptionalFields($optionalFields){
		$this->optionalFields = $optionalFields;
         $this->apiParas["optional_fields"] = $optionalFields;
	}

	public function getOptionalFields(){
	  return $this->optionalFields;
	}

                        	                   			private $orderId;
    	                                                            
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                            }





        
 

