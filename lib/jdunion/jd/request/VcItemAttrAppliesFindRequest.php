<?php
class VcItemAttrAppliesFindRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.attr.applies.find";
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
                                    	                                            		                                    	                   			private $wareGroupId;
    	                                                                        
	public function setWareGroupId($wareGroupId){
		$this->wareGroupId = $wareGroupId;
         $this->apiParas["ware_group_id"] = $wareGroupId;
	}

	public function getWareGroupId(){
	  return $this->wareGroupId;
	}

                        	                   			private $category;
    	                        
	public function setCategory($category){
		$this->category = $category;
         $this->apiParas["category"] = $category;
	}

	public function getCategory(){
	  return $this->category;
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

                        	                   			private $publicName;
    	                                                            
	public function setPublicName($publicName){
		$this->publicName = $publicName;
         $this->apiParas["public_name"] = $publicName;
	}

	public function getPublicName(){
	  return $this->publicName;
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





        
 

