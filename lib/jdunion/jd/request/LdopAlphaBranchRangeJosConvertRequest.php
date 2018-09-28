<?php
class LdopAlphaBranchRangeJosConvertRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.branchRange.jos.Convert";
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
                                    	                   			private $branchRangeListXml;
    	                        
	public function setBranchRangeListXml($branchRangeListXml){
		$this->branchRangeListXml = $branchRangeListXml;
         $this->apiParas["branchRangeListXml"] = $branchRangeListXml;
	}

	public function getBranchRangeListXml(){
	  return $this->branchRangeListXml;
	}

}





        
 

