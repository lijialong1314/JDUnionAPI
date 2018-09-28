<?php
class JcloudWmsSkuAcceptServiceHandlerDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jcloud.wms.SkuAcceptServiceHandler.delete";
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
                                    	                        	                                            		                                    	                   			private $code;
    	                        
	public function setCode($code){
		$this->code = $code;
         $this->apiParas["code"] = $code;
	}

	public function getCode(){
	  return $this->code;
	}

                        	                   			private $tenantId;
    	                        
	public function setTenantId($tenantId){
		$this->tenantId = $tenantId;
         $this->apiParas["tenantId"] = $tenantId;
	}

	public function getTenantId(){
	  return $this->tenantId;
	}

                        	                   			private $ownerNo;
    	                        
	public function setOwnerNo($ownerNo){
		$this->ownerNo = $ownerNo;
         $this->apiParas["ownerNo"] = $ownerNo;
	}

	public function getOwnerNo(){
	  return $this->ownerNo;
	}

                        	                   			private $operateUser;
    	                        
	public function setOperateUser($operateUser){
		$this->operateUser = $operateUser;
         $this->apiParas["operateUser"] = $operateUser;
	}

	public function getOperateUser(){
	  return $this->operateUser;
	}

                        	                   			private $operateTime;
    	                        
	public function setOperateTime($operateTime){
		$this->operateTime = $operateTime;
         $this->apiParas["operateTime"] = $operateTime;
	}

	public function getOperateTime(){
	  return $this->operateTime;
	}

                            }





        
 

