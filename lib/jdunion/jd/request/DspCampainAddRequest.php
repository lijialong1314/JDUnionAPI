<?php
class DspCampainAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.campain.add";
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
                                                        		                                    	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $startTime;
    	                        
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $timeRange;
    	                        
	public function setTimeRange($timeRange){
		$this->timeRange = $timeRange;
         $this->apiParas["timeRange"] = $timeRange;
	}

	public function getTimeRange(){
	  return $this->timeRange;
	}

                        	                   			private $dayBudget;
    	                        
	public function setDayBudget($dayBudget){
		$this->dayBudget = $dayBudget;
         $this->apiParas["dayBudget"] = $dayBudget;
	}

	public function getDayBudget(){
	  return $this->dayBudget;
	}

                        	                        	                        	                        	                   			private $uniformSpeed;
    	                        
	public function setUniformSpeed($uniformSpeed){
		$this->uniformSpeed = $uniformSpeed;
         $this->apiParas["uniformSpeed"] = $uniformSpeed;
	}

	public function getUniformSpeed(){
	  return $this->uniformSpeed;
	}

                            }





        
 

