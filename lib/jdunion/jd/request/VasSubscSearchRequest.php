<?php
class VasSubscSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vas.subsc.search";
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
                                                        		                                    	                        	                   			private $serviceCode;
    	                                                            
	public function setServiceCode($serviceCode){
		$this->serviceCode = $serviceCode;
         $this->apiParas["service_code"] = $serviceCode;
	}

	public function getServiceCode(){
	  return $this->serviceCode;
	}

                        	                   			private $timeQueryType;
    	                                                                        
	public function setTimeQueryType($timeQueryType){
		$this->timeQueryType = $timeQueryType;
         $this->apiParas["time_query_type"] = $timeQueryType;
	}

	public function getTimeQueryType(){
	  return $this->timeQueryType;
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

                        	                   			private $articleType;
    	                                                            
	public function setArticleType($articleType){
		$this->articleType = $articleType;
         $this->apiParas["article_type"] = $articleType;
	}

	public function getArticleType(){
	  return $this->articleType;
	}

                        	                   			private $buyer;
    	                        
	public function setBuyer($buyer){
		$this->buyer = $buyer;
         $this->apiParas["buyer"] = $buyer;
	}

	public function getBuyer(){
	  return $this->buyer;
	}

                        	                   			private $pageIndex;
    	                                                            
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["page_index"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $pageSize;
    	                                                            
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                            }





        
 

