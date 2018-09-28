<?php
class EclpMasterQueryDeptRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.master.queryDept";
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
                                    	                   			private $deptNos;
    	                        
	public function setDeptNos($deptNos){
		$this->deptNos = $deptNos;
         $this->apiParas["deptNos"] = $deptNos;
	}

	public function getDeptNos(){
	  return $this->deptNos;
	}

                        	}





        
 

