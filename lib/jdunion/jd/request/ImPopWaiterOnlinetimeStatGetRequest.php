<?php
class ImPopWaiterOnlinetimeStatGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.im.pop.waiter.onlinetime.stat.get";
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
                                    	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $waiter;
                              public function setWaiter($waiter ){
                 $this->waiter=$waiter;
                 $this->apiParas["waiter"] = $waiter;
              }

              public function getWaiter(){
              	return $this->waiter;
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

}





        
 

