<?php
class EdiScheduleplanSendRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.scheduleplan.send";
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
                                                        		                                    	                   			private $schedulePlanCode;
    	                        
	public function setSchedulePlanCode($schedulePlanCode){
		$this->schedulePlanCode = $schedulePlanCode;
         $this->apiParas["schedulePlanCode"] = $schedulePlanCode;
	}

	public function getSchedulePlanCode(){
	  return $this->schedulePlanCode;
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
                                                                                                                                                                                                                                                                                                                                              private $schedulePlanTime;
                              public function setSchedulePlanTime($schedulePlanTime ){
                 $this->schedulePlanTime=$schedulePlanTime;
                 $this->apiParas["schedulePlanTime"] = $schedulePlanTime;
              }

              public function getSchedulePlanTime(){
              	return $this->schedulePlanTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $quantity;
                              public function setQuantity($quantity ){
                 $this->quantity=$quantity;
                 $this->apiParas["quantity"] = $quantity;
              }

              public function getQuantity(){
              	return $this->quantity;
              }
                                                                                                                }





        
 

