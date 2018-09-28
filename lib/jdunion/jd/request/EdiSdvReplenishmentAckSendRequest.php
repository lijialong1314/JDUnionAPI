<?php
class EdiSdvReplenishmentAckSendRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.sdv.replenishment.ack.send";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $jdSKU;
                              public function setJdSKU($jdSKU ){
                 $this->jdSKU=$jdSKU;
                 $this->apiParas["jdSKU"] = $jdSKU;
              }

              public function getJdSKU(){
              	return $this->jdSKU;
              }
                                                                                                                                                                                                                                                                                                                                              private $vendorProductId;
                              public function setVendorProductId($vendorProductId ){
                 $this->vendorProductId=$vendorProductId;
                 $this->apiParas["vendorProductId"] = $vendorProductId;
              }

              public function getVendorProductId(){
              	return $this->vendorProductId;
              }
                                                                                                                                                                                                                                                                                                                                              private $deliverCenterID;
                              public function setDeliverCenterID($deliverCenterID ){
                 $this->deliverCenterID=$deliverCenterID;
                 $this->apiParas["deliverCenterID"] = $deliverCenterID;
              }

              public function getDeliverCenterID(){
              	return $this->deliverCenterID;
              }
                                                                                                                                                                                                                                                                                                                                              private $replenishmentAckQuantity;
                              public function setReplenishmentAckQuantity($replenishmentAckQuantity ){
                 $this->replenishmentAckQuantity=$replenishmentAckQuantity;
                 $this->apiParas["replenishmentAckQuantity"] = $replenishmentAckQuantity;
              }

              public function getReplenishmentAckQuantity(){
              	return $this->replenishmentAckQuantity;
              }
                                                                                                                                                                                                                                                                                                                                              private $startTime;
                              public function setStartTime($startTime ){
                 $this->startTime=$startTime;
                 $this->apiParas["startTime"] = $startTime;
              }

              public function getStartTime(){
              	return $this->startTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $endTime;
                              public function setEndTime($endTime ){
                 $this->endTime=$endTime;
                 $this->apiParas["endTime"] = $endTime;
              }

              public function getEndTime(){
              	return $this->endTime;
              }
                                                                                                                                        	                            }





        
 

