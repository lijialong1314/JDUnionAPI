<?php
class EclpMasterCancelBjkServiceOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.master.cancelBjkServiceOrder";
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

                        	                   			private $serviceNo;
    	                        
	public function setServiceNo($serviceNo){
		$this->serviceNo = $serviceNo;
         $this->apiParas["serviceNo"] = $serviceNo;
	}

	public function getServiceNo(){
	  return $this->serviceNo;
	}

                        	}





        
 

