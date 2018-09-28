<?php
class VcGetrequisitiondetailbywareidRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.getrequisitiondetailbywareid";
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
                                                        		                                    	                   			private $wareId;
    	                                                            
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["ware_id"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $deliverCenterId;
    	                                                                        
	public function setDeliverCenterId($deliverCenterId){
		$this->deliverCenterId = $deliverCenterId;
         $this->apiParas["deliver_center_id"] = $deliverCenterId;
	}

	public function getDeliverCenterId(){
	  return $this->deliverCenterId;
	}

                        	                            }





        
 

