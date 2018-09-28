<?php
class EclpCloudDeleteCenterUserRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.cloud.deleteCenterUser";
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
                                                        		                                    	                   			private $tenantId;
    	                        
	public function setTenantId($tenantId){
		$this->tenantId = $tenantId;
         $this->apiParas["tenantId"] = $tenantId;
	}

	public function getTenantId(){
	  return $this->tenantId;
	}

                        	                   			private $userId;
    	                        
	public function setUserId($userId){
		$this->userId = $userId;
         $this->apiParas["userId"] = $userId;
	}

	public function getUserId(){
	  return $this->userId;
	}

                        	                   			private $origin;
    	                        
	public function setOrigin($origin){
		$this->origin = $origin;
         $this->apiParas["origin"] = $origin;
	}

	public function getOrigin(){
	  return $this->origin;
	}

                        	                   			private $operator;
    	                        
	public function setOperator($operator){
		$this->operator = $operator;
         $this->apiParas["operator"] = $operator;
	}

	public function getOperator(){
	  return $this->operator;
	}

                                                    	}





        
 

