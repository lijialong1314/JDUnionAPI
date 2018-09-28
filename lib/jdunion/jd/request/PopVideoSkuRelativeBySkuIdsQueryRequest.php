<?php
class PopVideoSkuRelativeBySkuIdsQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.video.sku.relative.by.sku.ids.query";
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
                                    	                        	                   			private $productId;
    	                        
	public function setProductId($productId){
		$this->productId = $productId;
         $this->apiParas["productId"] = $productId;
	}

	public function getProductId(){
	  return $this->productId;
	}

                        	                   	                    		private $skuIds;
    	                                                            
	public function setSkuIds($skuIds){
		$this->skuIds = $skuIds;
         $this->apiParas["sku_ids"] = $skuIds;
	}

	public function getSkuIds(){
	  return $this->skuIds;
	}

                                            		                                    	                        	                        	                        	                            }





        
 

