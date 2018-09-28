<?php
class EdiForecastpoGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.forecastpo.get";
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
                                                        		                                    	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   			private $forecastTimeStart;
    	                        
	public function setForecastTimeStart($forecastTimeStart){
		$this->forecastTimeStart = $forecastTimeStart;
         $this->apiParas["forecastTimeStart"] = $forecastTimeStart;
	}

	public function getForecastTimeStart(){
	  return $this->forecastTimeStart;
	}

                        	                   			private $forecastTimeEnd;
    	                        
	public function setForecastTimeEnd($forecastTimeEnd){
		$this->forecastTimeEnd = $forecastTimeEnd;
         $this->apiParas["forecastTimeEnd"] = $forecastTimeEnd;
	}

	public function getForecastTimeEnd(){
	  return $this->forecastTimeEnd;
	}

                        	                   			private $pageNum;
    	                        
	public function setPageNum($pageNum){
		$this->pageNum = $pageNum;
         $this->apiParas["pageNum"] = $pageNum;
	}

	public function getPageNum(){
	  return $this->pageNum;
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





        
 

