<?php
class MarketServicePropertyGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.service.property.get";
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
                                    	                   			private $serviceItemCode;
    	                                                                        
	public function setServiceItemCode($serviceItemCode){
		$this->serviceItemCode = $serviceItemCode;
         $this->apiParas["service_item_code"] = $serviceItemCode;
	}

	public function getServiceItemCode(){
	  return $this->serviceItemCode;
	}

                        	}





        
 

