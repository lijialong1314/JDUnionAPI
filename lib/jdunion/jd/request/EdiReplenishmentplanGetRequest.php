<?php
class EdiReplenishmentplanGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.replenishmentplan.get";
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

                        	                   			private $sendTimeStart;
    	                        
	public function setSendTimeStart($sendTimeStart){
		$this->sendTimeStart = $sendTimeStart;
         $this->apiParas["sendTimeStart"] = $sendTimeStart;
	}

	public function getSendTimeStart(){
	  return $this->sendTimeStart;
	}

                        	                   			private $sendTimeEnd;
    	                        
	public function setSendTimeEnd($sendTimeEnd){
		$this->sendTimeEnd = $sendTimeEnd;
         $this->apiParas["sendTimeEnd"] = $sendTimeEnd;
	}

	public function getSendTimeEnd(){
	  return $this->sendTimeEnd;
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





        
 

