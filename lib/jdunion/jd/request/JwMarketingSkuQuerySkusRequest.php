<?php
class JwMarketingSkuQuerySkusRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jw.marketing.sku.querySkus";
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
                                                        		                                    	                   			private $storeCode;
    	                        
	public function setStoreCode($storeCode){
		$this->storeCode = $storeCode;
         $this->apiParas["storeCode"] = $storeCode;
	}

	public function getStoreCode(){
	  return $this->storeCode;
	}

                        	                        	                            }





        
 

