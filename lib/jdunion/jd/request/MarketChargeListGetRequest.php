<?php
class MarketChargeListGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.charge.list.get";
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

                        	                   			private $serviceId;
    	                                                            
	public function setServiceId($serviceId){
		$this->serviceId = $serviceId;
         $this->apiParas["service_id"] = $serviceId;
	}

	public function getServiceId(){
	  return $this->serviceId;
	}

}





        
 

