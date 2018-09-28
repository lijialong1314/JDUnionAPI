<?php
class VcItemAdvertiseAppliesFindRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.advertise.applies.find";
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
    	                                                            
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["ware_id"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $category;
    	                        
	public function setCategory($category){
		$this->category = $category;
         $this->apiParas["category"] = $category;
	}

	public function getCategory(){
	  return $this->category;
	}

                        	                   			private $productName;
    	                                                            
	public function setProductName($productName){
		$this->productName = $productName;
         $this->apiParas["product_name"] = $productName;
	}

	public function getProductName(){
	  return $this->productName;
	}

                        	                   			private $brandId;
    	                                                            
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $beginApplyTime;
    	                                                                        
	public function setBeginApplyTime($beginApplyTime){
		$this->beginApplyTime = $beginApplyTime;
         $this->apiParas["begin_apply_time"] = $beginApplyTime;
	}

	public function getBeginApplyTime(){
	  return $this->beginApplyTime;
	}

                        	                   			private $endApplyTime;
    	                                                                        
	public function setEndApplyTime($endApplyTime){
		$this->endApplyTime = $endApplyTime;
         $this->apiParas["end_apply_time"] = $endApplyTime;
	}

	public function getEndApplyTime(){
	  return $this->endApplyTime;
	}

                        	                   			private $state;
    	                        
	public function setState($state){
		$this->state = $state;
         $this->apiParas["state"] = $state;
	}

	public function getState(){
	  return $this->state;
	}

                        	                   			private $offset;
    	                        
	public function setOffset($offset){
		$this->offset = $offset;
         $this->apiParas["offset"] = $offset;
	}

	public function getOffset(){
	  return $this->offset;
	}

                        	                   			private $pageSize;
    	                                                            
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                            }





        
 

