<?php
class PopLocBroadbandOrderFindPageRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.loc.broadband.order.findPage";
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
                                                        		                                    	                        	                   			private $orderCreatedBegin;
    	                                                                        
	public function setOrderCreatedBegin($orderCreatedBegin){
		$this->orderCreatedBegin = $orderCreatedBegin;
         $this->apiParas["order_created_begin"] = $orderCreatedBegin;
	}

	public function getOrderCreatedBegin(){
	  return $this->orderCreatedBegin;
	}

                        	                   			private $orderCreatedEnd;
    	                                                                        
	public function setOrderCreatedEnd($orderCreatedEnd){
		$this->orderCreatedEnd = $orderCreatedEnd;
         $this->apiParas["order_created_end"] = $orderCreatedEnd;
	}

	public function getOrderCreatedEnd(){
	  return $this->orderCreatedEnd;
	}

                        	                   			private $orderStatus;
    	                                                            
	public function setOrderStatus($orderStatus){
		$this->orderStatus = $orderStatus;
         $this->apiParas["order_status"] = $orderStatus;
	}

	public function getOrderStatus(){
	  return $this->orderStatus;
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

}





        
 

