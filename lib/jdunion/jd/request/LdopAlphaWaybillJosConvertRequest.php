<?php
class LdopAlphaWaybillJosConvertRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.waybill.jos.Convert";
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
                                    	                   			private $waybillDTOXml;
    	                        
	public function setWaybillDTOXml($waybillDTOXml){
		$this->waybillDTOXml = $waybillDTOXml;
         $this->apiParas["waybillDTOXml"] = $waybillDTOXml;
	}

	public function getWaybillDTOXml(){
	  return $this->waybillDTOXml;
	}

}





        
 

