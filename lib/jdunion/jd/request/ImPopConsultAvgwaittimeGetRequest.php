<?php
class ImPopConsultAvgwaittimeGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.im.pop.consult.avgwaittime.get";
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
    	                        
	public function setWaiter($waiter){
		$this->waiter = $waiter;
         $this->apiParas["waiter"] = $waiter;
	}

	public function getWaiter(){
	  return $this->waiter;
	}

                        	                   			private $date;
    	                        
	public function setDate($date){
		$this->date = $date;
         $this->apiParas["date"] = $date;
	}

	public function getDate(){
	  return $this->date;
	}

}





        
 

