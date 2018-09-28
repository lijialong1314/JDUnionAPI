<?php
class VcQualificationRuleGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.qualification.rule.get";
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
                                    	                   			private $catetory;
    	                        
	public function setCatetory($catetory){
		$this->catetory = $catetory;
         $this->apiParas["catetory"] = $catetory;
	}

	public function getCatetory(){
	  return $this->catetory;
	}

}





        
 

