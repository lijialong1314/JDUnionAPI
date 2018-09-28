<?php
class SendFactoryAbutmentAgainAssignInfoReturnRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.sendFactoryAbutmentAgainAssignInfoReturn";
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
                                    	                   			private $authNo;
    	                                                            
	public function setAuthNo($authNo){
		$this->authNo = $authNo;
         $this->apiParas["auth_no"] = $authNo;
	}

	public function getAuthNo(){
	  return $this->authNo;
	}

                                            		                                    	                   			private $msgType;
    	                                                            
	public function setMsgType($msgType){
		$this->msgType = $msgType;
         $this->apiParas["msg_type"] = $msgType;
	}

	public function getMsgType(){
	  return $this->msgType;
	}

                        	                   			private $ordNo;
    	                                                            
	public function setOrdNo($ordNo){
		$this->ordNo = $ordNo;
         $this->apiParas["ord_no"] = $ordNo;
	}

	public function getOrdNo(){
	  return $this->ordNo;
	}

                        	                   			private $assignTime;
    	                                                            
	public function setAssignTime($assignTime){
		$this->assignTime = $assignTime;
         $this->apiParas["assign_time"] = $assignTime;
	}

	public function getAssignTime(){
	  return $this->assignTime;
	}

                        	                   			private $atHomeTime;
    	                                                                        
	public function setAtHomeTime($atHomeTime){
		$this->atHomeTime = $atHomeTime;
         $this->apiParas["at_home_time"] = $atHomeTime;
	}

	public function getAtHomeTime(){
	  return $this->atHomeTime;
	}

                        	                   			private $assignerName;
    	                                                            
	public function setAssignerName($assignerName){
		$this->assignerName = $assignerName;
         $this->apiParas["assigner_name"] = $assignerName;
	}

	public function getAssignerName(){
	  return $this->assignerName;
	}

                        	                   			private $assignerTel;
    	                                                            
	public function setAssignerTel($assignerTel){
		$this->assignerTel = $assignerTel;
         $this->apiParas["assigner_tel"] = $assignerTel;
	}

	public function getAssignerTel(){
	  return $this->assignerTel;
	}

                            }





        
 

