<?php
class ReceiveTaskRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.receiveTask";
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

                        	                   			private $engineerPin;
    	                        
	public function setEngineerPin($engineerPin){
		$this->engineerPin = $engineerPin;
         $this->apiParas["engineerPin"] = $engineerPin;
	}

	public function getEngineerPin(){
	  return $this->engineerPin;
	}

                        	                   			private $engineerName;
    	                        
	public function setEngineerName($engineerName){
		$this->engineerName = $engineerName;
         $this->apiParas["engineerName"] = $engineerName;
	}

	public function getEngineerName(){
	  return $this->engineerName;
	}

                        	                   			private $engineerTel;
    	                        
	public function setEngineerTel($engineerTel){
		$this->engineerTel = $engineerTel;
         $this->apiParas["engineerTel"] = $engineerTel;
	}

	public function getEngineerTel(){
	  return $this->engineerTel;
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





        
 

