<?php
class VcItemListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.list";
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

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $brandId;
    	                                                            
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $categoryId;
    	                                                            
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
	}

                        	                   			private $saleState;
    	                                                            
	public function setSaleState($saleState){
		$this->saleState = $saleState;
         $this->apiParas["sale_state"] = $saleState;
	}

	public function getSaleState(){
	  return $this->saleState;
	}

                        	                   			private $beginModifyTime;
    	                                                                        
	public function setBeginModifyTime($beginModifyTime){
		$this->beginModifyTime = $beginModifyTime;
         $this->apiParas["begin_modify_time"] = $beginModifyTime;
	}

	public function getBeginModifyTime(){
	  return $this->beginModifyTime;
	}

                        	                   			private $endModifyTime;
    	                                                                        
	public function setEndModifyTime($endModifyTime){
		$this->endModifyTime = $endModifyTime;
         $this->apiParas["end_modify_time"] = $endModifyTime;
	}

	public function getEndModifyTime(){
	  return $this->endModifyTime;
	}

                        	                   			private $orderType;
    	                                                            
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
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





        
 

