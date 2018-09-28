<?php
class EptOrderGetorderIdsbyqueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ept.order.getorderIdsbyquery";
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
                                                        		                                    	                        	                   			private $orderStatus;
    	                        
	public function setOrderStatus($orderStatus){
		$this->orderStatus = $orderStatus;
         $this->apiParas["orderStatus"] = $orderStatus;
	}

	public function getOrderStatus(){
	  return $this->orderStatus;
	}

                        	                   			private $locked;
    	                        
	public function setLocked($locked){
		$this->locked = $locked;
         $this->apiParas["locked"] = $locked;
	}

	public function getLocked(){
	  return $this->locked;
	}

                        	                   			private $disputed;
    	                        
	public function setDisputed($disputed){
		$this->disputed = $disputed;
         $this->apiParas["disputed"] = $disputed;
	}

	public function getDisputed(){
	  return $this->disputed;
	}

                        	                   			private $bookTimeBegin;
    	                        
	public function setBookTimeBegin($bookTimeBegin){
		$this->bookTimeBegin = $bookTimeBegin;
         $this->apiParas["bookTimeBegin"] = $bookTimeBegin;
	}

	public function getBookTimeBegin(){
	  return $this->bookTimeBegin;
	}

                        	                   			private $bookTimeEnd;
    	                        
	public function setBookTimeEnd($bookTimeEnd){
		$this->bookTimeEnd = $bookTimeEnd;
         $this->apiParas["bookTimeEnd"] = $bookTimeEnd;
	}

	public function getBookTimeEnd(){
	  return $this->bookTimeEnd;
	}

                        	                   			private $userPin;
    	                        
	public function setUserPin($userPin){
		$this->userPin = $userPin;
         $this->apiParas["userPin"] = $userPin;
	}

	public function getUserPin(){
	  return $this->userPin;
	}

                        	                   			private $startRow;
    	                        
	public function setStartRow($startRow){
		$this->startRow = $startRow;
         $this->apiParas["startRow"] = $startRow;
	}

	public function getStartRow(){
	  return $this->startRow;
	}

                            }





        
 

