<?php
class LasImHfsAssignengineerPushRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.im.hfs.assignengineer.push";
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
                                                        		                                    	                   			private $orderid;
    	                        
	public function setOrderid($orderid){
		$this->orderid = $orderid;
         $this->apiParas["orderid"] = $orderid;
	}

	public function getOrderid(){
	  return $this->orderid;
	}

                        	                   			private $assignstatus;
    	                        
	public function setAssignstatus($assignstatus){
		$this->assignstatus = $assignstatus;
         $this->apiParas["assignstatus"] = $assignstatus;
	}

	public function getAssignstatus(){
	  return $this->assignstatus;
	}

                        	                   			private $engineerpin;
    	                        
	public function setEngineerpin($engineerpin){
		$this->engineerpin = $engineerpin;
         $this->apiParas["engineerpin"] = $engineerpin;
	}

	public function getEngineerpin(){
	  return $this->engineerpin;
	}

                        	                   			private $engineername;
    	                        
	public function setEngineername($engineername){
		$this->engineername = $engineername;
         $this->apiParas["engineername"] = $engineername;
	}

	public function getEngineername(){
	  return $this->engineername;
	}

                        	                   			private $engineerphone;
    	                        
	public function setEngineerphone($engineerphone){
		$this->engineerphone = $engineerphone;
         $this->apiParas["engineerphone"] = $engineerphone;
	}

	public function getEngineerphone(){
	  return $this->engineerphone;
	}

                        	                   			private $serviceproviderno;
    	                        
	public function setServiceproviderno($serviceproviderno){
		$this->serviceproviderno = $serviceproviderno;
         $this->apiParas["serviceproviderno"] = $serviceproviderno;
	}

	public function getServiceproviderno(){
	  return $this->serviceproviderno;
	}

                        	                   			private $operatorpin;
    	                        
	public function setOperatorpin($operatorpin){
		$this->operatorpin = $operatorpin;
         $this->apiParas["operatorpin"] = $operatorpin;
	}

	public function getOperatorpin(){
	  return $this->operatorpin;
	}

                        	                   			private $operatetime;
    	                        
	public function setOperatetime($operatetime){
		$this->operatetime = $operatetime;
         $this->apiParas["operatetime"] = $operatetime;
	}

	public function getOperatetime(){
	  return $this->operatetime;
	}

                        	                   			private $ordertype;
    	                        
	public function setOrdertype($ordertype){
		$this->ordertype = $ordertype;
         $this->apiParas["ordertype"] = $ordertype;
	}

	public function getOrdertype(){
	  return $this->ordertype;
	}

                            }





        
 

