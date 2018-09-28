<?php
class WareProductAllQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.product.all.query";
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
                                    	                   			private $skuStatus;
    	                                                            
	public function setSkuStatus($skuStatus){
		$this->skuStatus = $skuStatus;
         $this->apiParas["sku_status"] = $skuStatus;
	}

	public function getSkuStatus(){
	  return $this->skuStatus;
	}

                        	                   			private $thirdCid;
    	                        
	public function setThirdCid($thirdCid){
		$this->thirdCid = $thirdCid;
         $this->apiParas["thirdCid"] = $thirdCid;
	}

	public function getThirdCid(){
	  return $this->thirdCid;
	}

                        	                   			private $scrollId;
    	                        
	public function setScrollId($scrollId){
		$this->scrollId = $scrollId;
         $this->apiParas["scrollId"] = $scrollId;
	}

	public function getScrollId(){
	  return $this->scrollId;
	}

}





        
 

