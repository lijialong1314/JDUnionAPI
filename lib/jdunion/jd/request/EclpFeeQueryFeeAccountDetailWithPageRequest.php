<?php
class EclpFeeQueryFeeAccountDetailWithPageRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.fee.queryFeeAccountDetailWithPage";
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
                                                        		                                    	                   			private $accountNo;
    	                        
	public function setAccountNo($accountNo){
		$this->accountNo = $accountNo;
         $this->apiParas["accountNo"] = $accountNo;
	}

	public function getAccountNo(){
	  return $this->accountNo;
	}

                        	                   			private $billDayStart;
    	                        
	public function setBillDayStart($billDayStart){
		$this->billDayStart = $billDayStart;
         $this->apiParas["billDayStart"] = $billDayStart;
	}

	public function getBillDayStart(){
	  return $this->billDayStart;
	}

                        	                   			private $billDayEnd;
    	                        
	public function setBillDayEnd($billDayEnd){
		$this->billDayEnd = $billDayEnd;
         $this->apiParas["billDayEnd"] = $billDayEnd;
	}

	public function getBillDayEnd(){
	  return $this->billDayEnd;
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





        
 

