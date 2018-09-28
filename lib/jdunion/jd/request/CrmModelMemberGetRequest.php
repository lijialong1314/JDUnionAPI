<?php
class CrmModelMemberGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.crm.model.member.get";
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
                                    	                        	                   			private $modelId;
    	                                                            
	public function setModelId($modelId){
		$this->modelId = $modelId;
         $this->apiParas["model_id"] = $modelId;
	}

	public function getModelId(){
	  return $this->modelId;
	}

                        	                   			private $currentPage;
    	                                                            
	public function setCurrentPage($currentPage){
		$this->currentPage = $currentPage;
         $this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage(){
	  return $this->currentPage;
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





        
 

