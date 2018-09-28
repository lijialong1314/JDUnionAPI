<?php
class WjBrandQuery2CSaleDataRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.wjBrand.query2CSaleData";
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
                                                        		                                    	                   			private $token;
    	                        
	public function setToken($token){
		$this->token = $token;
         $this->apiParas["token"] = $token;
	}

	public function getToken(){
	  return $this->token;
	}

                        	                   			private $brandId;
    	                        
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brandId"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $date;
    	                        
	public function setDate($date){
		$this->date = $date;
         $this->apiParas["date"] = $date;
	}

	public function getDate(){
	  return $this->date;
	}

                        	                   			private $startPage;
    	                        
	public function setStartPage($startPage){
		$this->startPage = $startPage;
         $this->apiParas["startPage"] = $startPage;
	}

	public function getStartPage(){
	  return $this->startPage;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                            }





        
 

