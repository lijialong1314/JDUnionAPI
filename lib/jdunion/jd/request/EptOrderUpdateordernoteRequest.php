<?php
class EptOrderUpdateordernoteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ept.order.updateordernote";
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

                        	                   			private $note;
    	                        
	public function setNote($note){
		$this->note = $note;
         $this->apiParas["note"] = $note;
	}

	public function getNote(){
	  return $this->note;
	}

                            }





        
 

