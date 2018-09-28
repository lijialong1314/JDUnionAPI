<?php
class EdiForecastpoDetailGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.forecastpo.detail.get";
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
                                                        		                                    	                   			private $forecastPurchaseOrderId;
    	                        
	public function setForecastPurchaseOrderId($forecastPurchaseOrderId){
		$this->forecastPurchaseOrderId = $forecastPurchaseOrderId;
         $this->apiParas["forecastPurchaseOrderId"] = $forecastPurchaseOrderId;
	}

	public function getForecastPurchaseOrderId(){
	  return $this->forecastPurchaseOrderId;
	}

                        	                            }





        
 

