<?php
class ServicePromotionGoodsInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.service.promotion.goodsInfo";
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
                                    	                   			private $skuIds;
    	                        
	public function setSkuIds($skuIds){
		$this->skuIds = $skuIds;
         $this->apiParas["skuIds"] = $skuIds;
	}

	public function getSkuIds(){
	  return $this->skuIds;
	}

                        	}





        
 

