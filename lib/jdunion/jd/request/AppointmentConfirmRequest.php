<?php
class AppointmentConfirmRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.appointmentConfirm";
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
                                                        		                                    	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                        	                   			private $asmsServiceId;
    	                        
	public function setAsmsServiceId($asmsServiceId){
		$this->asmsServiceId = $asmsServiceId;
         $this->apiParas["asmsServiceId"] = $asmsServiceId;
	}

	public function getAsmsServiceId(){
	  return $this->asmsServiceId;
	}

                        	                   			private $engineer;
    	                        
	public function setEngineer($engineer){
		$this->engineer = $engineer;
         $this->apiParas["engineer"] = $engineer;
	}

	public function getEngineer(){
	  return $this->engineer;
	}

                        	                   			private $engineerName;
    	                        
	public function setEngineerName($engineerName){
		$this->engineerName = $engineerName;
         $this->apiParas["engineerName"] = $engineerName;
	}

	public function getEngineerName(){
	  return $this->engineerName;
	}

                        	                   			private $appointmentTime;
    	                        
	public function setAppointmentTime($appointmentTime){
		$this->appointmentTime = $appointmentTime;
         $this->apiParas["appointmentTime"] = $appointmentTime;
	}

	public function getAppointmentTime(){
	  return $this->appointmentTime;
	}

                            }





        
 

