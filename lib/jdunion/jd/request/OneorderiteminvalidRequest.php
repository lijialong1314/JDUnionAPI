<?php
class OneorderiteminvalidRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.oneorderiteminvalid";
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
                                    	                        	                        	                   			private $oneOrderId;
    	                        
	public function setOneOrderId($oneOrderId){
		$this->oneOrderId = $oneOrderId;
         $this->apiParas["oneOrderId"] = $oneOrderId;
	}

	public function getOneOrderId(){
	  return $this->oneOrderId;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $refuseType;
    	                        
	public function setRefuseType($refuseType){
		$this->refuseType = $refuseType;
         $this->apiParas["refuseType"] = $refuseType;
	}

	public function getRefuseType(){
	  return $this->refuseType;
	}

                        	                   			private $refuseReason;
    	                        
	public function setRefuseReason($refuseReason){
		$this->refuseReason = $refuseReason;
         $this->apiParas["refuseReason"] = $refuseReason;
	}

	public function getRefuseReason(){
	  return $this->refuseReason;
	}

                        	                   			private $extStr;
    	                        
	public function setExtStr($extStr){
		$this->extStr = $extStr;
         $this->apiParas["extStr"] = $extStr;
	}

	public function getExtStr(){
	  return $this->extStr;
	}

}





        
 

