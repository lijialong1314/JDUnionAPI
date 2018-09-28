<?php
class SendFactoryAbutmentEndInfoReturnRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.sendFactoryAbutmentEndInfoReturn";
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
                                    	                   			private $authorizedSequence;
    	                        
	public function setAuthorizedSequence($authorizedSequence){
		$this->authorizedSequence = $authorizedSequence;
         $this->apiParas["authorizedSequence"] = $authorizedSequence;
	}

	public function getAuthorizedSequence(){
	  return $this->authorizedSequence;
	}

                                            		                                    	                   			private $orderno;
    	                        
	public function setOrderno($orderno){
		$this->orderno = $orderno;
         $this->apiParas["orderno"] = $orderno;
	}

	public function getOrderno(){
	  return $this->orderno;
	}

                        	                   			private $serviceEndState;
    	                        
	public function setServiceEndState($serviceEndState){
		$this->serviceEndState = $serviceEndState;
         $this->apiParas["serviceEndState"] = $serviceEndState;
	}

	public function getServiceEndState(){
	  return $this->serviceEndState;
	}

                        	                   			private $serviceEndStateLevelTow;
    	                        
	public function setServiceEndStateLevelTow($serviceEndStateLevelTow){
		$this->serviceEndStateLevelTow = $serviceEndStateLevelTow;
         $this->apiParas["serviceEndStateLevelTow"] = $serviceEndStateLevelTow;
	}

	public function getServiceEndStateLevelTow(){
	  return $this->serviceEndStateLevelTow;
	}

                        	                   			private $serviceEndStateLevelTowDescribe;
    	                        
	public function setServiceEndStateLevelTowDescribe($serviceEndStateLevelTowDescribe){
		$this->serviceEndStateLevelTowDescribe = $serviceEndStateLevelTowDescribe;
         $this->apiParas["serviceEndStateLevelTowDescribe"] = $serviceEndStateLevelTowDescribe;
	}

	public function getServiceEndStateLevelTowDescribe(){
	  return $this->serviceEndStateLevelTowDescribe;
	}

                        	                   			private $serviceEndTime;
    	                        
	public function setServiceEndTime($serviceEndTime){
		$this->serviceEndTime = $serviceEndTime;
         $this->apiParas["serviceEndTime"] = $serviceEndTime;
	}

	public function getServiceEndTime(){
	  return $this->serviceEndTime;
	}

                        	                   			private $cancelRemark;
    	                        
	public function setCancelRemark($cancelRemark){
		$this->cancelRemark = $cancelRemark;
         $this->apiParas["cancelRemark"] = $cancelRemark;
	}

	public function getCancelRemark(){
	  return $this->cancelRemark;
	}

                            }





        
 

