<?php
class LdopAlphaWaybillRuleJosConvertRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.waybillRule.jos.Convert";
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
                                    	                   			private $waybillCodeRuleListXml;
    	                        
	public function setWaybillCodeRuleListXml($waybillCodeRuleListXml){
		$this->waybillCodeRuleListXml = $waybillCodeRuleListXml;
         $this->apiParas["waybillCodeRuleListXml"] = $waybillCodeRuleListXml;
	}

	public function getWaybillCodeRuleListXml(){
	  return $this->waybillCodeRuleListXml;
	}

}





        
 

