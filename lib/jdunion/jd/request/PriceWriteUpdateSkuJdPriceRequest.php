<?php
class PriceWriteUpdateSkuJdPriceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.price.write.updateSkuJdPrice";
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
                                                        		                                    	                        	                        	                                                                        		                                    	                   			private $jdPrice;
    	                        
	public function setJdPrice($jdPrice){
		$this->jdPrice = $jdPrice;
         $this->apiParas["jdPrice"] = $jdPrice;
	}

	public function getJdPrice(){
	  return $this->jdPrice;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                            }





        
 

