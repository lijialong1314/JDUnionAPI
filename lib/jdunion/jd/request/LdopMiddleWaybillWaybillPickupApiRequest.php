<?php
class LdopMiddleWaybillWaybillPickupApiRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.middle.waybill.WaybillPickupApi";
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
                                                        		                                    	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                        	                   			private $pickupCode;
    	                        
	public function setPickupCode($pickupCode){
		$this->pickupCode = $pickupCode;
         $this->apiParas["pickupCode"] = $pickupCode;
	}

	public function getPickupCode(){
	  return $this->pickupCode;
	}

                            }





        
 

