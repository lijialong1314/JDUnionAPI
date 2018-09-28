<?php
class SmartOpenGetQRCodeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.smart.open.getQRCode";
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

                        	}





        
 

