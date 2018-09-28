<?php
class EclpIbQueryOutsideMainRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.ib.queryOutsideMain";
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
                                    	                   			private $outsideMainNo;
    	                        
	public function setOutsideMainNo($outsideMainNo){
		$this->outsideMainNo = $outsideMainNo;
         $this->apiParas["outsideMainNo"] = $outsideMainNo;
	}

	public function getOutsideMainNo(){
	  return $this->outsideMainNo;
	}

                        	}





        
 

