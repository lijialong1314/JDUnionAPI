<?php
class EclpCoQueryLwbByLwbNoConditionRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.co.queryLwbByLwbNoCondition";
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
                                                        		                                    	                   			private $lwbNo;
    	                        
	public function setLwbNo($lwbNo){
		$this->lwbNo = $lwbNo;
         $this->apiParas["lwbNo"] = $lwbNo;
	}

	public function getLwbNo(){
	  return $this->lwbNo;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                                                    	}





        
 

