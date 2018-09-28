<?php
class EptOrderDeliveryorderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ept.order.deliveryorder";
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

                        	                   			private $expressNo;
    	                        
	public function setExpressNo($expressNo){
		$this->expressNo = $expressNo;
         $this->apiParas["expressNo"] = $expressNo;
	}

	public function getExpressNo(){
	  return $this->expressNo;
	}

                            }





        
 

