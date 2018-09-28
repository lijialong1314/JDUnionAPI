<?php
class EdiReplenishmentplanConfirmRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.replenishmentplan.confirm";
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
                                                        		                                    	                   			private $replenishmentPlanCode;
    	                        
	public function setReplenishmentPlanCode($replenishmentPlanCode){
		$this->replenishmentPlanCode = $replenishmentPlanCode;
         $this->apiParas["replenishmentPlanCode"] = $replenishmentPlanCode;
	}

	public function getReplenishmentPlanCode(){
	  return $this->replenishmentPlanCode;
	}

                        	                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $jdSku;
                              public function setJdSku($jdSku ){
                 $this->jdSku=$jdSku;
                 $this->apiParas["jdSku"] = $jdSku;
              }

              public function getJdSku(){
              	return $this->jdSku;
              }
                                                                                                                                                                                                                                                                                                                                              private $vendorProductId;
                              public function setVendorProductId($vendorProductId ){
                 $this->vendorProductId=$vendorProductId;
                 $this->apiParas["vendorProductId"] = $vendorProductId;
              }

              public function getVendorProductId(){
              	return $this->vendorProductId;
              }
                                                                                                                                                                                                                                                                                                                                              private $productName;
                              public function setProductName($productName ){
                 $this->productName=$productName;
                 $this->apiParas["productName"] = $productName;
              }

              public function getProductName(){
              	return $this->productName;
              }
                                                                                                                                                                                                                                                                                                                                              private $week;
                              public function setWeek($week ){
                 $this->week=$week;
                 $this->apiParas["week"] = $week;
              }

              public function getWeek(){
              	return $this->week;
              }
                                                                                                                                                                                                                                                                                                                                              private $weekStartTime;
                              public function setWeekStartTime($weekStartTime ){
                 $this->weekStartTime=$weekStartTime;
                 $this->apiParas["weekStartTime"] = $weekStartTime;
              }

              public function getWeekStartTime(){
              	return $this->weekStartTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $weekEndTime;
                              public function setWeekEndTime($weekEndTime ){
                 $this->weekEndTime=$weekEndTime;
                 $this->apiParas["weekEndTime"] = $weekEndTime;
              }

              public function getWeekEndTime(){
              	return $this->weekEndTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $sureQuantity;
                              public function setSureQuantity($sureQuantity ){
                 $this->sureQuantity=$sureQuantity;
                 $this->apiParas["sureQuantity"] = $sureQuantity;
              }

              public function getSureQuantity(){
              	return $this->sureQuantity;
              }
                                                                                                                }





        
 

