<?php
class SkuReadSearchSkuListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.sku.read.searchSkuList";
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
                                                        		                                    	                        	                        	                                                                        		                                    	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $wareId;
                              public function setWareId($wareId ){
                 $this->wareId=$wareId;
                 $this->apiParas["wareId"] = $wareId;
              }

              public function getWareId(){
              	return $this->wareId;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                               private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                               private $skuStatuValue;
                              public function setSkuStatuValue($skuStatuValue ){
                 $this->skuStatuValue=$skuStatuValue;
                 $this->apiParas["skuStatuValue"] = $skuStatuValue;
              }

              public function getSkuStatuValue(){
              	return $this->skuStatuValue;
              }
                                                                                                                                        	                   			private $maxStockNum;
    	                        
	public function setMaxStockNum($maxStockNum){
		$this->maxStockNum = $maxStockNum;
         $this->apiParas["maxStockNum"] = $maxStockNum;
	}

	public function getMaxStockNum(){
	  return $this->maxStockNum;
	}

                        	                   			private $minStockNum;
    	                        
	public function setMinStockNum($minStockNum){
		$this->minStockNum = $minStockNum;
         $this->apiParas["minStockNum"] = $minStockNum;
	}

	public function getMinStockNum(){
	  return $this->minStockNum;
	}

                        	                   			private $endCreatedTime;
    	                        
	public function setEndCreatedTime($endCreatedTime){
		$this->endCreatedTime = $endCreatedTime;
         $this->apiParas["endCreatedTime"] = $endCreatedTime;
	}

	public function getEndCreatedTime(){
	  return $this->endCreatedTime;
	}

                        	                   			private $endModifiedTime;
    	                        
	public function setEndModifiedTime($endModifiedTime){
		$this->endModifiedTime = $endModifiedTime;
         $this->apiParas["endModifiedTime"] = $endModifiedTime;
	}

	public function getEndModifiedTime(){
	  return $this->endModifiedTime;
	}

                        	                   			private $startCreatedTime;
    	                        
	public function setStartCreatedTime($startCreatedTime){
		$this->startCreatedTime = $startCreatedTime;
         $this->apiParas["startCreatedTime"] = $startCreatedTime;
	}

	public function getStartCreatedTime(){
	  return $this->startCreatedTime;
	}

                        	                   			private $startModifiedTime;
    	                        
	public function setStartModifiedTime($startModifiedTime){
		$this->startModifiedTime = $startModifiedTime;
         $this->apiParas["startModifiedTime"] = $startModifiedTime;
	}

	public function getStartModifiedTime(){
	  return $this->startModifiedTime;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $outId;
                              public function setOutId($outId ){
                 $this->outId=$outId;
                 $this->apiParas["outId"] = $outId;
              }

              public function getOutId(){
              	return $this->outId;
              }
                                                                                                                                        	                   			private $colType;
    	                        
	public function setColType($colType){
		$this->colType = $colType;
         $this->apiParas["colType"] = $colType;
	}

	public function getColType(){
	  return $this->colType;
	}

                        	                   			private $itemNum;
    	                        
	public function setItemNum($itemNum){
		$this->itemNum = $itemNum;
         $this->apiParas["itemNum"] = $itemNum;
	}

	public function getItemNum(){
	  return $this->itemNum;
	}

                        	                   			private $wareTitle;
    	                        
	public function setWareTitle($wareTitle){
		$this->wareTitle = $wareTitle;
         $this->apiParas["wareTitle"] = $wareTitle;
	}

	public function getWareTitle(){
	  return $this->wareTitle;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $orderFiled;
                              public function setOrderFiled($orderFiled ){
                 $this->orderFiled=$orderFiled;
                 $this->apiParas["orderFiled"] = $orderFiled;
              }

              public function getOrderFiled(){
              	return $this->orderFiled;
              }
                                                                                                                                                                                                                                                                                                                                              private $orderType;
                              public function setOrderType($orderType ){
                 $this->orderType=$orderType;
                 $this->apiParas["orderType"] = $orderType;
              }

              public function getOrderType(){
              	return $this->orderType;
              }
                                                                                                                                        	                   			private $pageNo;
    	                        
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
	}

                        	                   			private $pageSize;
    	                                                            
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                                                    	                   	                    		private $field;
    	                        
	public function setField($field){
		$this->field = $field;
         $this->apiParas["field"] = $field;
	}

	public function getField(){
	  return $this->field;
	}

}





        
 

