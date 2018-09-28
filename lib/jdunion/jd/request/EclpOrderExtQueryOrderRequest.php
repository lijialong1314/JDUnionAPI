<?php
class EclpOrderExtQueryOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.order.ext.queryOrder";
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
                                                        		                                    	                   	                    		private $isvUUID;
    	                        
	public function setIsvUUID($isvUUID){
		$this->isvUUID = $isvUUID;
         $this->apiParas["isvUUID"] = $isvUUID;
	}

	public function getIsvUUID(){
	  return $this->isvUUID;
	}

                        	                   			private $isvSource;
    	                        
	public function setIsvSource($isvSource){
		$this->isvSource = $isvSource;
         $this->apiParas["isvSource"] = $isvSource;
	}

	public function getIsvSource(){
	  return $this->isvSource;
	}

                        	                   			private $departmentNo;
    	                        
	public function setDepartmentNo($departmentNo){
		$this->departmentNo = $departmentNo;
         $this->apiParas["departmentNo"] = $departmentNo;
	}

	public function getDepartmentNo(){
	  return $this->departmentNo;
	}

                                                    	}





        
 

