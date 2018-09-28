<?php
class EclpFeeQueryFeeAccountWithPageRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.fee.queryFeeAccountWithPage";
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

                        	                   			private $accountNo;
    	                        
	public function setAccountNo($accountNo){
		$this->accountNo = $accountNo;
         $this->apiParas["accountNo"] = $accountNo;
	}

	public function getAccountNo(){
	  return $this->accountNo;
	}

                        	                   			private $accountDayStart;
    	                        
	public function setAccountDayStart($accountDayStart){
		$this->accountDayStart = $accountDayStart;
         $this->apiParas["accountDayStart"] = $accountDayStart;
	}

	public function getAccountDayStart(){
	  return $this->accountDayStart;
	}

                        	                   			private $accountDayEnd;
    	                        
	public function setAccountDayEnd($accountDayEnd){
		$this->accountDayEnd = $accountDayEnd;
         $this->apiParas["accountDayEnd"] = $accountDayEnd;
	}

	public function getAccountDayEnd(){
	  return $this->accountDayEnd;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   			private $currentPage;
    	                        
	public function setCurrentPage($currentPage){
		$this->currentPage = $currentPage;
         $this->apiParas["currentPage"] = $currentPage;
	}

	public function getCurrentPage(){
	  return $this->currentPage;
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





        
 

