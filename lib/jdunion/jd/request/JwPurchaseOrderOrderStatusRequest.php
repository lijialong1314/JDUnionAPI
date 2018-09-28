<?php
class JwPurchaseOrderOrderStatusRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jw.purchase.order.orderStatus";
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
                                                        		                                    	                   	                    		private $orderCodes;
    	                        
	public function setOrderCodes($orderCodes){
		$this->orderCodes = $orderCodes;
         $this->apiParas["orderCodes"] = $orderCodes;
	}

	public function getOrderCodes(){
	  return $this->orderCodes;
	}

                        	                        	                            }





        
 

