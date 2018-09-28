<?php
class EclpCategoryGetSecondLevelCategoriesRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.category.getSecondLevelCategories";
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
                                                        		                                    	                   			private $firstCategoryNo;
    	                        
	public function setFirstCategoryNo($firstCategoryNo){
		$this->firstCategoryNo = $firstCategoryNo;
         $this->apiParas["firstCategoryNo"] = $firstCategoryNo;
	}

	public function getFirstCategoryNo(){
	  return $this->firstCategoryNo;
	}

                        	                   			private $secondCategoryNo;
    	                        
	public function setSecondCategoryNo($secondCategoryNo){
		$this->secondCategoryNo = $secondCategoryNo;
         $this->apiParas["secondCategoryNo"] = $secondCategoryNo;
	}

	public function getSecondCategoryNo(){
	  return $this->secondCategoryNo;
	}

                                                    	}





        
 

