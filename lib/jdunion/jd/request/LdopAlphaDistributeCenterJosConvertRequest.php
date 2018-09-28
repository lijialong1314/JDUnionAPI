<?php
class LdopAlphaDistributeCenterJosConvertRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.distributeCenter.jos.Convert";
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
                                    	                   			private $distributeCenterListXml;
    	                        
	public function setDistributeCenterListXml($distributeCenterListXml){
		$this->distributeCenterListXml = $distributeCenterListXml;
         $this->apiParas["distributeCenterListXml"] = $distributeCenterListXml;
	}

	public function getDistributeCenterListXml(){
	  return $this->distributeCenterListXml;
	}

}





        
 

