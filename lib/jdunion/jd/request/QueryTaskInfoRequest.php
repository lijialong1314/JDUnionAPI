<?php
class QueryTaskInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.queryTaskInfo";
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
                                                        		                                    	                   			private $serviceState;
    	                        
	public function setServiceState($serviceState){
		$this->serviceState = $serviceState;
         $this->apiParas["serviceState"] = $serviceState;
	}

	public function getServiceState(){
	  return $this->serviceState;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                        	                   			private $updateTimeStart;
    	                        
	public function setUpdateTimeStart($updateTimeStart){
		$this->updateTimeStart = $updateTimeStart;
         $this->apiParas["updateTimeStart"] = $updateTimeStart;
	}

	public function getUpdateTimeStart(){
	  return $this->updateTimeStart;
	}

                        	                   			private $updateTimeEnd;
    	                        
	public function setUpdateTimeEnd($updateTimeEnd){
		$this->updateTimeEnd = $updateTimeEnd;
         $this->apiParas["updateTimeEnd"] = $updateTimeEnd;
	}

	public function getUpdateTimeEnd(){
	  return $this->updateTimeEnd;
	}

                            }





        
 

