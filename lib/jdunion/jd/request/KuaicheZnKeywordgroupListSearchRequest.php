<?php
class KuaicheZnKeywordgroupListSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.kuaiche.zn.keywordgroup.list.search";
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
                                    	                        	                                            		                                    	                   			private $thirdCategoryId;
    	                                                                        
	public function setThirdCategoryId($thirdCategoryId){
		$this->thirdCategoryId = $thirdCategoryId;
         $this->apiParas["third_category_id"] = $thirdCategoryId;
	}

	public function getThirdCategoryId(){
	  return $this->thirdCategoryId;
	}

                        	                   			private $sortField;
    	                                                            
	public function setSortField($sortField){
		$this->sortField = $sortField;
         $this->apiParas["sort_field"] = $sortField;
	}

	public function getSortField(){
	  return $this->sortField;
	}

                        	                   			private $sortType;
    	                                                            
	public function setSortType($sortType){
		$this->sortType = $sortType;
         $this->apiParas["sort_type"] = $sortType;
	}

	public function getSortType(){
	  return $this->sortType;
	}

                        	                   			private $pageSize;
    	                                                            
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $pageIndex;
    	                                                            
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["page_index"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                            }





        
 

