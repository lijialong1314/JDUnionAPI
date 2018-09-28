<?php
class RejectTaskRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.rejectTask";
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
                                                        		                                    	                   			private $serviceId;
    	                        
	public function setServiceId($serviceId){
		$this->serviceId = $serviceId;
         $this->apiParas["serviceId"] = $serviceId;
	}

	public function getServiceId(){
	  return $this->serviceId;
	}

                        	                   			private $operatorName;
    	                        
	public function setOperatorName($operatorName){
		$this->operatorName = $operatorName;
         $this->apiParas["operatorName"] = $operatorName;
	}

	public function getOperatorName(){
	  return $this->operatorName;
	}

                        	                   			private $operatorPin;
    	                        
	public function setOperatorPin($operatorPin){
		$this->operatorPin = $operatorPin;
         $this->apiParas["operatorPin"] = $operatorPin;
	}

	public function getOperatorPin(){
	  return $this->operatorPin;
	}

                        	                   			private $rejectReason;
    	                        
	public function setRejectReason($rejectReason){
		$this->rejectReason = $rejectReason;
         $this->apiParas["rejectReason"] = $rejectReason;
	}

	public function getRejectReason(){
	  return $this->rejectReason;
	}

                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                            }





        
 

