<?php
class LdopAlphaBranchJosConvertRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.branch.jos.Convert";
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
                                    	                   			private $branchListXml;
    	                        
	public function setBranchListXml($branchListXml){
		$this->branchListXml = $branchListXml;
         $this->apiParas["branchListXml"] = $branchListXml;
	}

	public function getBranchListXml(){
	  return $this->branchListXml;
	}

}





        
 

