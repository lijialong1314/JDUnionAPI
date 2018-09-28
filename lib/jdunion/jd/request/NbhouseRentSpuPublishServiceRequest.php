<?php
class NbhouseRentSpuPublishServiceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.nbhouse.rent.spu.publishService";
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
                                                        		                                    	                   			private $staffId;
    	                        
	public function setStaffId($staffId){
		$this->staffId = $staffId;
         $this->apiParas["staffId"] = $staffId;
	}

	public function getStaffId(){
	  return $this->staffId;
	}

                        	                   			private $plotId;
    	                        
	public function setPlotId($plotId){
		$this->plotId = $plotId;
         $this->apiParas["plotId"] = $plotId;
	}

	public function getPlotId(){
	  return $this->plotId;
	}

                        	                   			private $spuId;
    	                        
	public function setSpuId($spuId){
		$this->spuId = $spuId;
         $this->apiParas["spuId"] = $spuId;
	}

	public function getSpuId(){
	  return $this->spuId;
	}

                        	                   			private $spuName;
    	                        
	public function setSpuName($spuName){
		$this->spuName = $spuName;
         $this->apiParas["spuName"] = $spuName;
	}

	public function getSpuName(){
	  return $this->spuName;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $skuName;
    	                        
	public function setSkuName($skuName){
		$this->skuName = $skuName;
         $this->apiParas["skuName"] = $skuName;
	}

	public function getSkuName(){
	  return $this->skuName;
	}

                        	                            }





        
 

