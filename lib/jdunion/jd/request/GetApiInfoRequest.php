<?php
class GetApiInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.getApiInfo";
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
                                    	                   			private $apiId;
    	                                                            
	public function setApiId($apiId){
		$this->apiId = $apiId;
         $this->apiParas["api_id"] = $apiId;
	}

	public function getApiId(){
	  return $this->apiId;
	}

}





        
 

