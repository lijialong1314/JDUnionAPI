<?php
class LdopAlphaProviderQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.provider.query";
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
                                    	                   			private $providerState;
    	                        
	public function setProviderState($providerState){
		$this->providerState = $providerState;
         $this->apiParas["providerState"] = $providerState;
	}

	public function getProviderState(){
	  return $this->providerState;
	}

}





        
 

