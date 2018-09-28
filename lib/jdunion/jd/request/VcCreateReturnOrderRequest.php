<?php
class VcCreateReturnOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.create.return.order";
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
                                                        		                                    	                   			private $fromDeliverCenterId;
    	                        
	public function setFromDeliverCenterId($fromDeliverCenterId){
		$this->fromDeliverCenterId = $fromDeliverCenterId;
         $this->apiParas["fromDeliverCenterId"] = $fromDeliverCenterId;
	}

	public function getFromDeliverCenterId(){
	  return $this->fromDeliverCenterId;
	}

                        	                   			private $toDeliverCenterId;
    	                        
	public function setToDeliverCenterId($toDeliverCenterId){
		$this->toDeliverCenterId = $toDeliverCenterId;
         $this->apiParas["toDeliverCenterId"] = $toDeliverCenterId;
	}

	public function getToDeliverCenterId(){
	  return $this->toDeliverCenterId;
	}

                        	                   			private $purchaseErpCode;
    	                        
	public function setPurchaseErpCode($purchaseErpCode){
		$this->purchaseErpCode = $purchaseErpCode;
         $this->apiParas["purchaseErpCode"] = $purchaseErpCode;
	}

	public function getPurchaseErpCode(){
	  return $this->purchaseErpCode;
	}

                        	                   			private $balanceType;
    	                        
	public function setBalanceType($balanceType){
		$this->balanceType = $balanceType;
         $this->apiParas["balanceType"] = $balanceType;
	}

	public function getBalanceType(){
	  return $this->balanceType;
	}

                        	                   			private $transportType;
    	                        
	public function setTransportType($transportType){
		$this->transportType = $transportType;
         $this->apiParas["transportType"] = $transportType;
	}

	public function getTransportType(){
	  return $this->transportType;
	}

                        	                   			private $receiverName;
    	                        
	public function setReceiverName($receiverName){
		$this->receiverName = $receiverName;
         $this->apiParas["receiverName"] = $receiverName;
	}

	public function getReceiverName(){
	  return $this->receiverName;
	}

                        	                   			private $receiverCell;
    	                        
	public function setReceiverCell($receiverCell){
		$this->receiverCell = $receiverCell;
         $this->apiParas["receiverCell"] = $receiverCell;
	}

	public function getReceiverCell(){
	  return $this->receiverCell;
	}

                        	                   			private $pikerID;
    	                        
	public function setPikerID($pikerID){
		$this->pikerID = $pikerID;
         $this->apiParas["pikerID"] = $pikerID;
	}

	public function getPikerID(){
	  return $this->pikerID;
	}

                        	                   			private $reservedPickUpDate;
    	                        
	public function setReservedPickUpDate($reservedPickUpDate){
		$this->reservedPickUpDate = $reservedPickUpDate;
         $this->apiParas["reservedPickUpDate"] = $reservedPickUpDate;
	}

	public function getReservedPickUpDate(){
	  return $this->reservedPickUpDate;
	}

                        	                   			private $receiverAddress;
    	                        
	public function setReceiverAddress($receiverAddress){
		$this->receiverAddress = $receiverAddress;
         $this->apiParas["receiverAddress"] = $receiverAddress;
	}

	public function getReceiverAddress(){
	  return $this->receiverAddress;
	}

                        	                   			private $postCode;
    	                        
	public function setPostCode($postCode){
		$this->postCode = $postCode;
         $this->apiParas["postCode"] = $postCode;
	}

	public function getPostCode(){
	  return $this->postCode;
	}

                        	                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $wareId;
                              public function setWareId($wareId ){
                 $this->wareId=$wareId;
                 $this->apiParas["wareId"] = $wareId;
              }

              public function getWareId(){
              	return $this->wareId;
              }
                                                                                                                                                                                                                                                                                                                                              private $returnNum;
                              public function setReturnNum($returnNum ){
                 $this->returnNum=$returnNum;
                 $this->apiParas["returnNum"] = $returnNum;
              }

              public function getReturnNum(){
              	return $this->returnNum;
              }
                                                                                                                }





        
 

