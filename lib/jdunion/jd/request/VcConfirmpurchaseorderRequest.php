<?php
class VcConfirmpurchaseorderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.confirmpurchaseorder";
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

                        	                   			private $deliveryTime;
    	                                                            
	public function setDeliveryTime($deliveryTime){
		$this->deliveryTime = $deliveryTime;
         $this->apiParas["delivery_time"] = $deliveryTime;
	}

	public function getDeliveryTime(){
	  return $this->deliveryTime;
	}

                        	                                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $wareId;
                              public function setWareId($wareId ){
                 $this->wareId=$wareId;
                 $this->apiParas["ware_id"] = $wareId;
              }

              public function getWareId(){
              	return $this->wareId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $confirmNum;
                              public function setConfirmNum($confirmNum ){
                 $this->confirmNum=$confirmNum;
                 $this->apiParas["confirm_num"] = $confirmNum;
              }

              public function getConfirmNum(){
              	return $this->confirmNum;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $backExplanation;
                              public function setBackExplanation($backExplanation ){
                 $this->backExplanation=$backExplanation;
                 $this->apiParas["back_explanation"] = $backExplanation;
              }

              public function getBackExplanation(){
              	return $this->backExplanation;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $backExplanationType;
                              public function setBackExplanationType($backExplanationType ){
                 $this->backExplanationType=$backExplanationType;
                 $this->apiParas["back_explanation_type"] = $backExplanationType;
              }

              public function getBackExplanationType(){
              	return $this->backExplanationType;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $deliverCenterId;
                              public function setDeliverCenterId($deliverCenterId ){
                 $this->deliverCenterId=$deliverCenterId;
                 $this->apiParas["deliver_center_id"] = $deliverCenterId;
              }

              public function getDeliverCenterId(){
              	return $this->deliverCenterId;
              }
                                                                                                                }





        
 

