<?php
class DspAdkckeywordRecommendkeywordGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adkckeyword.recommendkeyword.get";
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
                                    	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                        	                   			private $searchType;
    	                        
	public function setSearchType($searchType){
		$this->searchType = $searchType;
         $this->apiParas["searchType"] = $searchType;
	}

	public function getSearchType(){
	  return $this->searchType;
	}

                        	                   			private $order;
    	                        
	public function setOrder($order){
		$this->order = $order;
         $this->apiParas["order"] = $order;
	}

	public function getOrder(){
	  return $this->order;
	}

                        	                   			private $sortType;
    	                        
	public function setSortType($sortType){
		$this->sortType = $sortType;
         $this->apiParas["sortType"] = $sortType;
	}

	public function getSortType(){
	  return $this->sortType;
	}

                        	                   			private $keyWordType;
    	                        
	public function setKeyWordType($keyWordType){
		$this->keyWordType = $keyWordType;
         $this->apiParas["keyWordType"] = $keyWordType;
	}

	public function getKeyWordType(){
	  return $this->keyWordType;
	}

}





        
 

