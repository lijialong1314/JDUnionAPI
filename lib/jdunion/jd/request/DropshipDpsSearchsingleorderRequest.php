<?php
class DropshipDpsSearchsingleorderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dropship.dps.searchsingleorder";
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
                                                        		                                    	                        	                   			private $customOrderId;
    	                        
	public function setCustomOrderId($customOrderId){
		$this->customOrderId = $customOrderId;
         $this->apiParas["customOrderId"] = $customOrderId;
	}

	public function getCustomOrderId(){
	  return $this->customOrderId;
	}

                            }





        
 

