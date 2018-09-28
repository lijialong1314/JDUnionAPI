<?php
class SearchWareRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.search.ware";
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
                                    	                   			private $key;
    	                        
	public function setKey($key){
		$this->key = $key;
         $this->apiParas["key"] = $key;
	}

	public function getKey(){
	  return $this->key;
	}

                        	                   			private $filtType;
    	                                                            
	public function setFiltType($filtType){
		$this->filtType = $filtType;
         $this->apiParas["filt_type"] = $filtType;
	}

	public function getFiltType(){
	  return $this->filtType;
	}

                        	                   			private $areaIds;
    	                                                            
	public function setAreaIds($areaIds){
		$this->areaIds = $areaIds;
         $this->apiParas["area_ids"] = $areaIds;
	}

	public function getAreaIds(){
	  return $this->areaIds;
	}

                        	                   			private $sortType;
    	                                                            
	public function setSortType($sortType){
		$this->sortType = $sortType;
         $this->apiParas["sort_type"] = $sortType;
	}

	public function getSortType(){
	  return $this->sortType;
	}

                        	                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                        	                        	                        	                        	                        	                        	                        	                        	                        	                        	                        	                        	                        	                        	}





        
 

