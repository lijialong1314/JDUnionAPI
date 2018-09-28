<?php
class UnionSearchGoodsKeywordQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.union.search.goods.keyword.query";
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
                                    	                                            		                                    	                   			private $cat1Id;
    	                        
	public function setCat1Id($cat1Id){
		$this->cat1Id = $cat1Id;
         $this->apiParas["cat1Id"] = $cat1Id;
	}

	public function getCat1Id(){
	  return $this->cat1Id;
	}

                        	                   			private $cat2Id;
    	                        
	public function setCat2Id($cat2Id){
		$this->cat2Id = $cat2Id;
         $this->apiParas["cat2Id"] = $cat2Id;
	}

	public function getCat2Id(){
	  return $this->cat2Id;
	}

                        	                   			private $cat3Id;
    	                        
	public function setCat3Id($cat3Id){
		$this->cat3Id = $cat3Id;
         $this->apiParas["cat3Id"] = $cat3Id;
	}

	public function getCat3Id(){
	  return $this->cat3Id;
	}

                        	                   			private $keyword;
    	                        
	public function setKeyword($keyword){
		$this->keyword = $keyword;
         $this->apiParas["keyword"] = $keyword;
	}

	public function getKeyword(){
	  return $this->keyword;
	}

                        	                   			private $pageIndex;
    	                                                            
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["page_index"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $pageSize;
    	                                                            
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $sortName;
    	                                                            
	public function setSortName($sortName){
		$this->sortName = $sortName;
         $this->apiParas["sort_name"] = $sortName;
	}

	public function getSortName(){
	  return $this->sortName;
	}

                        	                   			private $sort;
    	                        
	public function setSort($sort){
		$this->sort = $sort;
         $this->apiParas["sort"] = $sort;
	}

	public function getSort(){
	  return $this->sort;
	}

                            }





        
 

