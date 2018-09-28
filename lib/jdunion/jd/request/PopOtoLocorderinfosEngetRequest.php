<?php
class PopOtoLocorderinfosEngetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.oto.locorderinfos.enget";
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
                                    	                        	                   			private $timeType;
    	                                                            
	public function setTimeType($timeType){
		$this->timeType = $timeType;
         $this->apiParas["time_type"] = $timeType;
	}

	public function getTimeType(){
	  return $this->timeType;
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

                        	                   			private $codeStatus;
    	                                                            
	public function setCodeStatus($codeStatus){
		$this->codeStatus = $codeStatus;
         $this->apiParas["code_status"] = $codeStatus;
	}

	public function getCodeStatus(){
	  return $this->codeStatus;
	}

                        	                   			private $codeType;
    	                                                            
	public function setCodeType($codeType){
		$this->codeType = $codeType;
         $this->apiParas["code_type"] = $codeType;
	}

	public function getCodeType(){
	  return $this->codeType;
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





        
 

