<?php
class PmxPricesMgetsRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pmx.prices.mgets";
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
                                    	                   			private $skuids;
    	                        
	public function setSkuids($skuids){
		$this->skuids = $skuids;
         $this->apiParas["skuids"] = $skuids;
	}

	public function getSkuids(){
	  return $this->skuids;
	}

                        	                   			private $source;
    	                        
	public function setSource($source){
		$this->source = $source;
         $this->apiParas["source"] = $source;
	}

	public function getSource(){
	  return $this->source;
	}

                        	                   			private $area;
    	                        
	public function setArea($area){
		$this->area = $area;
         $this->apiParas["area"] = $area;
	}

	public function getArea(){
	  return $this->area;
	}

                        	}





        
 

