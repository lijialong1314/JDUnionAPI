<?php
class VcQueryshippackagepagelistRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.queryshippackagepagelist";
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
                                                        		                                    	                        	                   			private $brandId;
    	                                                            
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
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

                        	                   			private $createTimeBegin;
    	                                                                        
	public function setCreateTimeBegin($createTimeBegin){
		$this->createTimeBegin = $createTimeBegin;
         $this->apiParas["create_time_begin"] = $createTimeBegin;
	}

	public function getCreateTimeBegin(){
	  return $this->createTimeBegin;
	}

                        	                   			private $createTimeEnd;
    	                                                                        
	public function setCreateTimeEnd($createTimeEnd){
		$this->createTimeEnd = $createTimeEnd;
         $this->apiParas["create_time_end"] = $createTimeEnd;
	}

	public function getCreateTimeEnd(){
	  return $this->createTimeEnd;
	}

                            }





        
 

