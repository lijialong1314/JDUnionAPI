<?php
class PopAftersaleGetWorkOrderListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.aftersale.GetWorkOrderList";
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
                                    	                   			private $workorderId;
    	                                                            
	public function setWorkorderId($workorderId){
		$this->workorderId = $workorderId;
         $this->apiParas["workorder_id"] = $workorderId;
	}

	public function getWorkorderId(){
	  return $this->workorderId;
	}

                        	                   			private $orderId;
    	                                                            
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   			private $beginDate;
    	                                                            
	public function setBeginDate($beginDate){
		$this->beginDate = $beginDate;
         $this->apiParas["begin_date"] = $beginDate;
	}

	public function getBeginDate(){
	  return $this->beginDate;
	}

                        	                   			private $endDate;
    	                                                            
	public function setEndDate($endDate){
		$this->endDate = $endDate;
         $this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate(){
	  return $this->endDate;
	}

                        	                   			private $pageNumber;
    	                                                            
	public function setPageNumber($pageNumber){
		$this->pageNumber = $pageNumber;
         $this->apiParas["page_number"] = $pageNumber;
	}

	public function getPageNumber(){
	  return $this->pageNumber;
	}

                        	                   			private $pageSize;
    	                                                            
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $queryType;
    	                                                            
	public function setQueryType($queryType){
		$this->queryType = $queryType;
         $this->apiParas["query_type"] = $queryType;
	}

	public function getQueryType(){
	  return $this->queryType;
	}

                        	}





        
 

