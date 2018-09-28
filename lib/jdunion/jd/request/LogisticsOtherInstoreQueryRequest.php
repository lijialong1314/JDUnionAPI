<?php
class LogisticsOtherInstoreQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.otherInstore.query";
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
                                    	                   			private $inBoundNo;
    	                                                                        
	public function setInBoundNo($inBoundNo){
		$this->inBoundNo = $inBoundNo;
         $this->apiParas["in_bound_no"] = $inBoundNo;
	}

	public function getInBoundNo(){
	  return $this->inBoundNo;
	}

                        	}





        
 

