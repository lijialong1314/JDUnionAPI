<?php
class VcGetpurchaserlistbypinRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.getpurchaserlistbypin";
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
                                    	}





        
 

