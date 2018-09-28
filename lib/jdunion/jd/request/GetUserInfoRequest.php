<?php
class GetUserInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.getUserInfo";
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

                        	                   			private $fields;
    	                        
	public function setFields($fields){
		$this->fields = $fields;
         $this->apiParas["fields"] = $fields;
	}

	public function getFields(){
	  return $this->fields;
	}

}





        
 

