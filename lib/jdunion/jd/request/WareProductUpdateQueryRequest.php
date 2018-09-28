<?php
class WareProductUpdateQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.product.update.query";
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

                        	                   			private $startSaleDate;
    	                                                            
	public function setStartSaleDate($startSaleDate){
		$this->startSaleDate = $startSaleDate;
         $this->apiParas["start_SaleDate"] = $startSaleDate;
	}

	public function getStartSaleDate(){
	  return $this->startSaleDate;
	}

                        	                   			private $endSaleDate;
    	                                                            
	public function setEndSaleDate($endSaleDate){
		$this->endSaleDate = $endSaleDate;
         $this->apiParas["end_SaleDate"] = $endSaleDate;
	}

	public function getEndSaleDate(){
	  return $this->endSaleDate;
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





        
 

