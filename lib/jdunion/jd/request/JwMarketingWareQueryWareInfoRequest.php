<?php
class JwMarketingWareQueryWareInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jw.marketing.ware.queryWareInfo";
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

                        	                   	                    		private $skus;
    	                        
	public function setSkus($skus){
		$this->skus = $skus;
         $this->apiParas["skus"] = $skus;
	}

	public function getSkus(){
	  return $this->skus;
	}

                        	                   	                    		private $fieldNames;
    	                        
	public function setFieldNames($fieldNames){
		$this->fieldNames = $fieldNames;
         $this->apiParas["fieldNames"] = $fieldNames;
	}

	public function getFieldNames(){
	  return $this->fieldNames;
	}

                        	                        	                            }





        
 

