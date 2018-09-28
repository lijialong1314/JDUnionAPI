<?php
class JwPurchaseOrderOrderHistoryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jw.purchase.order.orderHistory";
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

                        	                   			private $clientId;
    	                        
	public function setClientId($clientId){
		$this->clientId = $clientId;
         $this->apiParas["clientId"] = $clientId;
	}

	public function getClientId(){
	  return $this->clientId;
	}

                        	                   			private $clientBusinessNo;
    	                        
	public function setClientBusinessNo($clientBusinessNo){
		$this->clientBusinessNo = $clientBusinessNo;
         $this->apiParas["clientBusinessNo"] = $clientBusinessNo;
	}

	public function getClientBusinessNo(){
	  return $this->clientBusinessNo;
	}

                        	                        	                            }





        
 

