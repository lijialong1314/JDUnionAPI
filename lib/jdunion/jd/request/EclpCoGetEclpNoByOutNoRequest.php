<?php
class EclpCoGetEclpNoByOutNoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.co.getEclpNoByOutNo";
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
                                    	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $outNo;
    	                        
	public function setOutNo($outNo){
		$this->outNo = $outNo;
         $this->apiParas["outNo"] = $outNo;
	}

	public function getOutNo(){
	  return $this->outNo;
	}

                        	                   			private $recepitType;
    	                        
	public function setRecepitType($recepitType){
		$this->recepitType = $recepitType;
         $this->apiParas["recepitType"] = $recepitType;
	}

	public function getRecepitType(){
	  return $this->recepitType;
	}

}





        
 

