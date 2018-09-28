<?php
class MarketServiceGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.service.get";
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
                                    	                   			private $serviceCode;
    	                                                            
	public function setServiceCode($serviceCode){
		$this->serviceCode = $serviceCode;
         $this->apiParas["service_code"] = $serviceCode;
	}

	public function getServiceCode(){
	  return $this->serviceCode;
	}

                        	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

}





        
 

