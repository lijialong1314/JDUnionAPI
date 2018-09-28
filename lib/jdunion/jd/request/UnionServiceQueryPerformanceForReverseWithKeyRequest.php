<?php
class UnionServiceQueryPerformanceForReverseWithKeyRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.UnionService.queryPerformanceForReverseWithKey";
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
                                    	                   			private $unionId;
    	                        
	public function setUnionId($unionId){
		$this->unionId = $unionId;
         $this->apiParas["unionId"] = $unionId;
	}

	public function getUnionId(){
	  return $this->unionId;
	}

                        	                        	                   			private $key;
    	                        
	public function setKey($key){
		$this->key = $key;
         $this->apiParas["key"] = $key;
	}

	public function getKey(){
	  return $this->key;
	}

                        	                   			private $time;
    	                        
	public function setTime($time){
		$this->time = $time;
         $this->apiParas["time"] = $time;
	}

	public function getTime(){
	  return $this->time;
	}

                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

}





        
 

