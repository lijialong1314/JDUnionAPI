<?php
class VenderShipaddressQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vender.shipaddress.query";
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





        
 

