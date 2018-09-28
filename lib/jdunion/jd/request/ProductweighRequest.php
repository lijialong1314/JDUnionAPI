<?php
class ProductweighRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.productweigh";
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

                        	                   			private $actualWeight;
    	                        
	public function setActualWeight($actualWeight){
		$this->actualWeight = $actualWeight;
         $this->apiParas["actualWeight"] = $actualWeight;
	}

	public function getActualWeight(){
	  return $this->actualWeight;
	}

                        	                   			private $billingWeight;
    	                        
	public function setBillingWeight($billingWeight){
		$this->billingWeight = $billingWeight;
         $this->apiParas["billingWeight"] = $billingWeight;
	}

	public function getBillingWeight(){
	  return $this->billingWeight;
	}

                        	                   			private $jysSkuLength;
    	                        
	public function setJysSkuLength($jysSkuLength){
		$this->jysSkuLength = $jysSkuLength;
         $this->apiParas["jysSkuLength"] = $jysSkuLength;
	}

	public function getJysSkuLength(){
	  return $this->jysSkuLength;
	}

                        	                   			private $jysSkuWidth;
    	                        
	public function setJysSkuWidth($jysSkuWidth){
		$this->jysSkuWidth = $jysSkuWidth;
         $this->apiParas["jysSkuWidth"] = $jysSkuWidth;
	}

	public function getJysSkuWidth(){
	  return $this->jysSkuWidth;
	}

                        	                   			private $jysSkuHeight;
    	                        
	public function setJysSkuHeight($jysSkuHeight){
		$this->jysSkuHeight = $jysSkuHeight;
         $this->apiParas["jysSkuHeight"] = $jysSkuHeight;
	}

	public function getJysSkuHeight(){
	  return $this->jysSkuHeight;
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





        
 

