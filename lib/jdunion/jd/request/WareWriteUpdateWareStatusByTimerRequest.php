<?php
class WareWriteUpdateWareStatusByTimerRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.write.updateWareStatusByTimer";
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
                                                        		                                    	                        	                        	                                                    	                        	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $upTime;
    	                        
	public function setUpTime($upTime){
		$this->upTime = $upTime;
         $this->apiParas["upTime"] = $upTime;
	}

	public function getUpTime(){
	  return $this->upTime;
	}

                        	                   			private $downTime;
    	                        
	public function setDownTime($downTime){
		$this->downTime = $downTime;
         $this->apiParas["downTime"] = $downTime;
	}

	public function getDownTime(){
	  return $this->downTime;
	}

}





        
 

