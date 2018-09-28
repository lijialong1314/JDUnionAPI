<?php
class EptWarecenterWarelistGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ept.warecenter.warelist.get";
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
                                    	                                            		                                    	                   			private $wareIdsStr;
    	                        
	public function setWareIdsStr($wareIdsStr){
		$this->wareIdsStr = $wareIdsStr;
         $this->apiParas["wareIdsStr"] = $wareIdsStr;
	}

	public function getWareIdsStr(){
	  return $this->wareIdsStr;
	}

                        	                   			private $wareStatus;
    	                        
	public function setWareStatus($wareStatus){
		$this->wareStatus = $wareStatus;
         $this->apiParas["wareStatus"] = $wareStatus;
	}

	public function getWareStatus(){
	  return $this->wareStatus;
	}

                        	                   			private $categoryId;
    	                        
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["categoryId"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
	}

                        	                   			private $title;
    	                        
	public function setTitle($title){
		$this->title = $title;
         $this->apiParas["title"] = $title;
	}

	public function getTitle(){
	  return $this->title;
	}

                        	                   			private $itemNum;
    	                        
	public function setItemNum($itemNum){
		$this->itemNum = $itemNum;
         $this->apiParas["itemNum"] = $itemNum;
	}

	public function getItemNum(){
	  return $this->itemNum;
	}

                        	                   			private $transportId;
    	                        
	public function setTransportId($transportId){
		$this->transportId = $transportId;
         $this->apiParas["transportId"] = $transportId;
	}

	public function getTransportId(){
	  return $this->transportId;
	}

                        	                   			private $startOnlineTime;
    	                        
	public function setStartOnlineTime($startOnlineTime){
		$this->startOnlineTime = $startOnlineTime;
         $this->apiParas["startOnlineTime"] = $startOnlineTime;
	}

	public function getStartOnlineTime(){
	  return $this->startOnlineTime;
	}

                        	                   			private $endOnlineTime;
    	                        
	public function setEndOnlineTime($endOnlineTime){
		$this->endOnlineTime = $endOnlineTime;
         $this->apiParas["endOnlineTime"] = $endOnlineTime;
	}

	public function getEndOnlineTime(){
	  return $this->endOnlineTime;
	}

                        	                   			private $minSupplyPrice;
    	                        
	public function setMinSupplyPrice($minSupplyPrice){
		$this->minSupplyPrice = $minSupplyPrice;
         $this->apiParas["minSupplyPrice"] = $minSupplyPrice;
	}

	public function getMinSupplyPrice(){
	  return $this->minSupplyPrice;
	}

                        	                   			private $maxSupplyPrice;
    	                        
	public function setMaxSupplyPrice($maxSupplyPrice){
		$this->maxSupplyPrice = $maxSupplyPrice;
         $this->apiParas["maxSupplyPrice"] = $maxSupplyPrice;
	}

	public function getMaxSupplyPrice(){
	  return $this->maxSupplyPrice;
	}

                        	                   			private $recommendTpid;
    	                        
	public function setRecommendTpid($recommendTpid){
		$this->recommendTpid = $recommendTpid;
         $this->apiParas["recommendTpid"] = $recommendTpid;
	}

	public function getRecommendTpid(){
	  return $this->recommendTpid;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $currentPage;
    	                        
	public function setCurrentPage($currentPage){
		$this->currentPage = $currentPage;
         $this->apiParas["currentPage"] = $currentPage;
	}

	public function getCurrentPage(){
	  return $this->currentPage;
	}

                            }





        
 

