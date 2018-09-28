<?php
class EclpPoCancalPoOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.po.cancalPoOrder";
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
                                    	                   			private $poOrderNo;
    	                        
	public function setPoOrderNo($poOrderNo){
		$this->poOrderNo = $poOrderNo;
         $this->apiParas["poOrderNo"] = $poOrderNo;
	}

	public function getPoOrderNo(){
	  return $this->poOrderNo;
	}

                        	}





        
 

