<?php
class IsvPushVenderBindStatusGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.isv.push.vender.bind.status.get";
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
                                    	                   			private $bindAppCode;
    	                        
	public function setBindAppCode($bindAppCode){
		$this->bindAppCode = $bindAppCode;
         $this->apiParas["bindAppCode"] = $bindAppCode;
	}

	public function getBindAppCode(){
	  return $this->bindAppCode;
	}

                        	                   			private $dbId;
    	                        
	public function setDbId($dbId){
		$this->dbId = $dbId;
         $this->apiParas["dbId"] = $dbId;
	}

	public function getDbId(){
	  return $this->dbId;
	}

                        	                   			private $bindUserId;
    	                        
	public function setBindUserId($bindUserId){
		$this->bindUserId = $bindUserId;
         $this->apiParas["bindUserId"] = $bindUserId;
	}

	public function getBindUserId(){
	  return $this->bindUserId;
	}

                        	                   			private $pageNo;
    	                        
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

}





        
 

