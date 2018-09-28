<?php
class SendFactoryAbutmentAssignInfoReturnRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.sendFactoryAbutmentAssignInfoReturn";
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

                        	                   			private $assignTime;
    	                        
	public function setAssignTime($assignTime){
		$this->assignTime = $assignTime;
         $this->apiParas["assignTime"] = $assignTime;
	}

	public function getAssignTime(){
	  return $this->assignTime;
	}

                        	                   			private $atHomeTime;
    	                        
	public function setAtHomeTime($atHomeTime){
		$this->atHomeTime = $atHomeTime;
         $this->apiParas["atHomeTime"] = $atHomeTime;
	}

	public function getAtHomeTime(){
	  return $this->atHomeTime;
	}

                        	                   			private $assignerName;
    	                        
	public function setAssignerName($assignerName){
		$this->assignerName = $assignerName;
         $this->apiParas["assignerName"] = $assignerName;
	}

	public function getAssignerName(){
	  return $this->assignerName;
	}

                        	                   			private $assignerTel;
    	                        
	public function setAssignerTel($assignerTel){
		$this->assignerTel = $assignerTel;
         $this->apiParas["assignerTel"] = $assignerTel;
	}

	public function getAssignerTel(){
	  return $this->assignerTel;
	}

                            }





        
 

