<?php
class DropshipDpsDeliveryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dropship.dps.delivery";
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
                                                        		                                    	                        	                   			private $customOrderId;
    	                        
	public function setCustomOrderId($customOrderId){
		$this->customOrderId = $customOrderId;
         $this->apiParas["customOrderId"] = $customOrderId;
	}

	public function getCustomOrderId(){
	  return $this->customOrderId;
	}

                        	                   			private $carrierId;
    	                        
	public function setCarrierId($carrierId){
		$this->carrierId = $carrierId;
         $this->apiParas["carrierId"] = $carrierId;
	}

	public function getCarrierId(){
	  return $this->carrierId;
	}

                        	                   			private $carrierBusinessName;
    	                        
	public function setCarrierBusinessName($carrierBusinessName){
		$this->carrierBusinessName = $carrierBusinessName;
         $this->apiParas["carrierBusinessName"] = $carrierBusinessName;
	}

	public function getCarrierBusinessName(){
	  return $this->carrierBusinessName;
	}

                        	                   			private $shipNo;
    	                        
	public function setShipNo($shipNo){
		$this->shipNo = $shipNo;
         $this->apiParas["shipNo"] = $shipNo;
	}

	public function getShipNo(){
	  return $this->shipNo;
	}

                        	                   			private $estimateDate;
    	                        
	public function setEstimateDate($estimateDate){
		$this->estimateDate = $estimateDate;
         $this->apiParas["estimateDate"] = $estimateDate;
	}

	public function getEstimateDate(){
	  return $this->estimateDate;
	}

                            }





        
 

