<?php
class ProcurementOrderConfirmRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.procurement.order.confirm";
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

                        	                   			private $deliveryTime;
    	                        
	public function setDeliveryTime($deliveryTime){
		$this->deliveryTime = $deliveryTime;
         $this->apiParas["deliveryTime"] = $deliveryTime;
	}

	public function getDeliveryTime(){
	  return $this->deliveryTime;
	}

                        	                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $wareId;
                              public function setWareId($wareId ){
                 $this->wareId=$wareId;
                 $this->apiParas["wareId"] = $wareId;
              }

              public function getWareId(){
              	return $this->wareId;
              }
                                                                                                                                                                                                                                                                                                                                              private $deliverCenterId;
                              public function setDeliverCenterId($deliverCenterId ){
                 $this->deliverCenterId=$deliverCenterId;
                 $this->apiParas["deliverCenterId"] = $deliverCenterId;
              }

              public function getDeliverCenterId(){
              	return $this->deliverCenterId;
              }
                                                                                                                                                                                                                                                                                                                                              private $backExplanationType;
                              public function setBackExplanationType($backExplanationType ){
                 $this->backExplanationType=$backExplanationType;
                 $this->apiParas["backExplanationType"] = $backExplanationType;
              }

              public function getBackExplanationType(){
              	return $this->backExplanationType;
              }
                                                                                                                                                                                                                                                                                                                                              private $confirmNum;
                              public function setConfirmNum($confirmNum ){
                 $this->confirmNum=$confirmNum;
                 $this->apiParas["confirmNum"] = $confirmNum;
              }

              public function getConfirmNum(){
              	return $this->confirmNum;
              }
                                                                                                                }





        
 

