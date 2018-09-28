<?php
class EpsEditCheckStatusRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eps.editCheckStatus";
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
                                                        		                                    	                   			private $deliveryNo;
    	                        
	public function setDeliveryNo($deliveryNo){
		$this->deliveryNo = $deliveryNo;
         $this->apiParas["deliveryNo"] = $deliveryNo;
	}

	public function getDeliveryNo(){
	  return $this->deliveryNo;
	}

                        	                   			private $uuid;
    	                        
	public function setUuid($uuid){
		$this->uuid = $uuid;
         $this->apiParas["uuid"] = $uuid;
	}

	public function getUuid(){
	  return $this->uuid;
	}

                        	                        	                   			private $siteNo;
    	                        
	public function setSiteNo($siteNo){
		$this->siteNo = $siteNo;
         $this->apiParas["siteNo"] = $siteNo;
	}

	public function getSiteNo(){
	  return $this->siteNo;
	}

                        	                   			private $checkTime;
    	                        
	public function setCheckTime($checkTime){
		$this->checkTime = $checkTime;
         $this->apiParas["checkTime"] = $checkTime;
	}

	public function getCheckTime(){
	  return $this->checkTime;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                            }





        
 

