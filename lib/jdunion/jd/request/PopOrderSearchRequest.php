<?php
class PopOrderSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.order.search";
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
                                                        		                                    	                        	                   			private $startDate;
    	                                                            
	public function setStartDate($startDate){
		$this->startDate = $startDate;
         $this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate(){
	  return $this->startDate;
	}

                        	                   			private $endDate;
    	                                                            
	public function setEndDate($endDate){
		$this->endDate = $endDate;
         $this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate(){
	  return $this->endDate;
	}

                        	                   			private $orderState;
    	                                                            
	public function setOrderState($orderState){
		$this->orderState = $orderState;
         $this->apiParas["order_state"] = $orderState;
	}

	public function getOrderState(){
	  return $this->orderState;
	}

                        	                   			private $optionalFields;
    	                                                            
	public function setOptionalFields($optionalFields){
		$this->optionalFields = $optionalFields;
         $this->apiParas["optional_fields"] = $optionalFields;
	}

	public function getOptionalFields(){
	  return $this->optionalFields;
	}

                        	                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $pageSize;
    	                                                            
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $sortType;
    	                        
	public function setSortType($sortType){
		$this->sortType = $sortType;
         $this->apiParas["sortType"] = $sortType;
	}

	public function getSortType(){
	  return $this->sortType;
	}

                        	                   			private $dateType;
    	                        
	public function setDateType($dateType){
		$this->dateType = $dateType;
         $this->apiParas["dateType"] = $dateType;
	}

	public function getDateType(){
	  return $this->dateType;
	}

                            }





        
 

