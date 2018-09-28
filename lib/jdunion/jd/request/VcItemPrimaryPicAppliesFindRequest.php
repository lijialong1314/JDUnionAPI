<?php
class VcItemPrimaryPicAppliesFindRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.primaryPic.applies.find";
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

                        	                   			private $state;
    	                        
	public function setState($state){
		$this->state = $state;
         $this->apiParas["state"] = $state;
	}

	public function getState(){
	  return $this->state;
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

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $length;
    	                        
	public function setLength($length){
		$this->length = $length;
         $this->apiParas["length"] = $length;
	}

	public function getLength(){
	  return $this->length;
	}

                            }





        
 

