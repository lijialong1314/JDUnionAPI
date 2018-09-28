<?php
class SendFactoryAbutmentDistributeInfoReturnRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.sendFactoryAbutmentDistributeInfoReturn";
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

                        	                   			private $distributeTime;
    	                        
	public function setDistributeTime($distributeTime){
		$this->distributeTime = $distributeTime;
         $this->apiParas["distributeTime"] = $distributeTime;
	}

	public function getDistributeTime(){
	  return $this->distributeTime;
	}

                        	                   			private $distributeOutletsName;
    	                        
	public function setDistributeOutletsName($distributeOutletsName){
		$this->distributeOutletsName = $distributeOutletsName;
         $this->apiParas["distributeOutletsName"] = $distributeOutletsName;
	}

	public function getDistributeOutletsName(){
	  return $this->distributeOutletsName;
	}

                        	                   			private $distributeOutletsPhone;
    	                        
	public function setDistributeOutletsPhone($distributeOutletsPhone){
		$this->distributeOutletsPhone = $distributeOutletsPhone;
         $this->apiParas["distributeOutletsPhone"] = $distributeOutletsPhone;
	}

	public function getDistributeOutletsPhone(){
	  return $this->distributeOutletsPhone;
	}

                            }





        
 

