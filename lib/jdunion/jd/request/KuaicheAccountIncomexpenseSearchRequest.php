<?php
class KuaicheAccountIncomexpenseSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.kuaiche.account.incomexpense.search";
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
                                    	                        	                   			private $inOutType;
    	                                                                        
	public function setInOutType($inOutType){
		$this->inOutType = $inOutType;
         $this->apiParas["in_out_type"] = $inOutType;
	}

	public function getInOutType(){
	  return $this->inOutType;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $checkType;
    	                                                            
	public function setCheckType($checkType){
		$this->checkType = $checkType;
         $this->apiParas["check_type"] = $checkType;
	}

	public function getCheckType(){
	  return $this->checkType;
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

}





        
 

