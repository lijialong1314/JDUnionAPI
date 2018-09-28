<?php
class KuaicheZnPlanListSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.kuaiche.zn.plan.list.search";
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
                                    	                                            		                                    	                   			private $planName;
    	                                                            
	public function setPlanName($planName){
		$this->planName = $planName;
         $this->apiParas["plan_name"] = $planName;
	}

	public function getPlanName(){
	  return $this->planName;
	}

                        	                   			private $mode;
    	                        
	public function setMode($mode){
		$this->mode = $mode;
         $this->apiParas["mode"] = $mode;
	}

	public function getMode(){
	  return $this->mode;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   			private $isQueryByStatus;
    	                                                                                    
	public function setIsQueryByStatus($isQueryByStatus){
		$this->isQueryByStatus = $isQueryByStatus;
         $this->apiParas["is_query_by_status"] = $isQueryByStatus;
	}

	public function getIsQueryByStatus(){
	  return $this->isQueryByStatus;
	}

                        	                   			private $begin;
    	                        
	public function setBegin($begin){
		$this->begin = $begin;
         $this->apiParas["begin"] = $begin;
	}

	public function getBegin(){
	  return $this->begin;
	}

                        	                   			private $end;
    	                        
	public function setEnd($end){
		$this->end = $end;
         $this->apiParas["end"] = $end;
	}

	public function getEnd(){
	  return $this->end;
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





        
 

