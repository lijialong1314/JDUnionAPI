<?php
class LdopAlphaLastDcJosConvertRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.lastDc.jos.Convert";
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
                                    	                   			private $lastDcListXml;
    	                        
	public function setLastDcListXml($lastDcListXml){
		$this->lastDcListXml = $lastDcListXml;
         $this->apiParas["lastDcListXml"] = $lastDcListXml;
	}

	public function getLastDcListXml(){
	  return $this->lastDcListXml;
	}

}





        
 

