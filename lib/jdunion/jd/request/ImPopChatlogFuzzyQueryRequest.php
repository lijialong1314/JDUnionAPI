<?php
class ImPopChatlogFuzzyQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.im.pop.chatlog.fuzzy.query";
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
                                    	                        	                   			private $waiter;
    	                        
	public function setWaiter($waiter){
		$this->waiter = $waiter;
         $this->apiParas["waiter"] = $waiter;
	}

	public function getWaiter(){
	  return $this->waiter;
	}

                        	                   			private $customer;
    	                        
	public function setCustomer($customer){
		$this->customer = $customer;
         $this->apiParas["customer"] = $customer;
	}

	public function getCustomer(){
	  return $this->customer;
	}

                        	                   			private $keyWord;
    	                        
	public function setKeyWord($keyWord){
		$this->keyWord = $keyWord;
         $this->apiParas["keyWord"] = $keyWord;
	}

	public function getKeyWord(){
	  return $this->keyWord;
	}

                        	                   			private $startTime;
    	                        
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
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
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

}





        
 

