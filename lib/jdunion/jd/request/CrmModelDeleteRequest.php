<?php
class CrmModelDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.crm.model.delete";
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

}





        
 

