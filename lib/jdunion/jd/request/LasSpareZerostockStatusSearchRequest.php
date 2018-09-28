<?php
class LasSpareZerostockStatusSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.spare.zerostock.status.search";
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

                        	                   			private $token;
    	                        
	public function setToken($token){
		$this->token = $token;
         $this->apiParas["token"] = $token;
	}

	public function getToken(){
	  return $this->token;
	}

                        	                   			private $serviceNo;
    	                        
	public function setServiceNo($serviceNo){
		$this->serviceNo = $serviceNo;
         $this->apiParas["serviceNo"] = $serviceNo;
	}

	public function getServiceNo(){
	  return $this->serviceNo;
	}

                        	                   			private $afsServiceTaskNo;
    	                        
	public function setAfsServiceTaskNo($afsServiceTaskNo){
		$this->afsServiceTaskNo = $afsServiceTaskNo;
         $this->apiParas["afsServiceTaskNo"] = $afsServiceTaskNo;
	}

	public function getAfsServiceTaskNo(){
	  return $this->afsServiceTaskNo;
	}

                        	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $requestTime;
    	                        
	public function setRequestTime($requestTime){
		$this->requestTime = $requestTime;
         $this->apiParas["requestTime"] = $requestTime;
	}

	public function getRequestTime(){
	  return $this->requestTime;
	}

                            }





        
 

