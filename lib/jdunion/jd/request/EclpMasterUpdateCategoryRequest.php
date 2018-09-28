<?php
class EclpMasterUpdateCategoryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.master.updateCategory";
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
                                                        		                                    	                   			private $categoryNo;
    	                        
	public function setCategoryNo($categoryNo){
		$this->categoryNo = $categoryNo;
         $this->apiParas["categoryNo"] = $categoryNo;
	}

	public function getCategoryNo(){
	  return $this->categoryNo;
	}

                        	                   			private $categoryName;
    	                        
	public function setCategoryName($categoryName){
		$this->categoryName = $categoryName;
         $this->apiParas["categoryName"] = $categoryName;
	}

	public function getCategoryName(){
	  return $this->categoryName;
	}

                        	                   			private $superior;
    	                        
	public function setSuperior($superior){
		$this->superior = $superior;
         $this->apiParas["superior"] = $superior;
	}

	public function getSuperior(){
	  return $this->superior;
	}

                        	                   			private $sortNo;
    	                        
	public function setSortNo($sortNo){
		$this->sortNo = $sortNo;
         $this->apiParas["sortNo"] = $sortNo;
	}

	public function getSortNo(){
	  return $this->sortNo;
	}

                        	                   			private $memo;
    	                        
	public function setMemo($memo){
		$this->memo = $memo;
         $this->apiParas["memo"] = $memo;
	}

	public function getMemo(){
	  return $this->memo;
	}

                        	                   			private $operateUser;
    	                        
	public function setOperateUser($operateUser){
		$this->operateUser = $operateUser;
         $this->apiParas["operateUser"] = $operateUser;
	}

	public function getOperateUser(){
	  return $this->operateUser;
	}

                        	                   			private $operateTime;
    	                        
	public function setOperateTime($operateTime){
		$this->operateTime = $operateTime;
         $this->apiParas["operateTime"] = $operateTime;
	}

	public function getOperateTime(){
	  return $this->operateTime;
	}

                                                    	}





        
 

