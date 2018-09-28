<?php
class OrderOrderDeleteApplyRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.order.orderDelete.apply";
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
         $this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $delApplyType;
    	                                                                        
	public function setDelApplyType($delApplyType){
		$this->delApplyType = $delApplyType;
         $this->apiParas["del_apply_type"] = $delApplyType;
	}

	public function getDelApplyType(){
	  return $this->delApplyType;
	}

                        	                   			private $delApplyReason;
    	                                                                        
	public function setDelApplyReason($delApplyReason){
		$this->delApplyReason = $delApplyReason;
         $this->apiParas["del_apply_reason"] = $delApplyReason;
	}

	public function getDelApplyReason(){
	  return $this->delApplyReason;
	}

                            }





        
 

