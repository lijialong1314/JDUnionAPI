<?php
class SmartOpenActivateDeviceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.smart.open.activateDevice";
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
                                    	                   			private $productUuid;
    	                                                            
	public function setProductUuid($productUuid){
		$this->productUuid = $productUuid;
         $this->apiParas["product_uuid"] = $productUuid;
	}

	public function getProductUuid(){
	  return $this->productUuid;
	}

                        	                   			private $productSecret;
    	                                                            
	public function setProductSecret($productSecret){
		$this->productSecret = $productSecret;
         $this->apiParas["product_secret"] = $productSecret;
	}

	public function getProductSecret(){
	  return $this->productSecret;
	}

                        	                   			private $deviceId;
    	                                                            
	public function setDeviceId($deviceId){
		$this->deviceId = $deviceId;
         $this->apiParas["device_id"] = $deviceId;
	}

	public function getDeviceId(){
	  return $this->deviceId;
	}

                        	                   			private $mac;
    	                        
	public function setMac($mac){
		$this->mac = $mac;
         $this->apiParas["mac"] = $mac;
	}

	public function getMac(){
	  return $this->mac;
	}

                        	                        	}





        
 

