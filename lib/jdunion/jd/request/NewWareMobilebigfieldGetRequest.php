<?php
class NewWareMobilebigfieldGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.new.ware.mobilebigfield.get";
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
                                    	                   			private $skuid;
    	                        
	public function setSkuid($skuid){
		$this->skuid = $skuid;
         $this->apiParas["skuid"] = $skuid;
	}

	public function getSkuid(){
	  return $this->skuid;
	}

}





        
 

