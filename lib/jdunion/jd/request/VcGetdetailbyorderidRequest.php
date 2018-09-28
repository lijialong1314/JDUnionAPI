<?php
class VcGetdetailbyorderidRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.getdetailbyorderid";
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
                                                        		                                    	                   			private $orderId;
    	                                                            
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                        	                   			private $sortFiled;
    	                                                            
	public function setSortFiled($sortFiled){
		$this->sortFiled = $sortFiled;
         $this->apiParas["sort_filed"] = $sortFiled;
	}

	public function getSortFiled(){
	  return $this->sortFiled;
	}

                        	                   			private $sortMode;
    	                                                            
	public function setSortMode($sortMode){
		$this->sortMode = $sortMode;
         $this->apiParas["sort_mode"] = $sortMode;
	}

	public function getSortMode(){
	  return $this->sortMode;
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

                        	                   			private $isPage;
    	                                                            
	public function setIsPage($isPage){
		$this->isPage = $isPage;
         $this->apiParas["is_page"] = $isPage;
	}

	public function getIsPage(){
	  return $this->isPage;
	}

                            }





        
 

