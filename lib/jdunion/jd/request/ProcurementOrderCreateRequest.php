<?php
class ProcurementOrderCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.procurement.order.create";
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
                                                        		                                    	                   			private $deliverCenterId;
    	                        
	public function setDeliverCenterId($deliverCenterId){
		$this->deliverCenterId = $deliverCenterId;
         $this->apiParas["deliverCenterId"] = $deliverCenterId;
	}

	public function getDeliverCenterId(){
	  return $this->deliverCenterId;
	}

                        	                   			private $purchaserErpCode;
    	                        
	public function setPurchaserErpCode($purchaserErpCode){
		$this->purchaserErpCode = $purchaserErpCode;
         $this->apiParas["purchaserErpCode"] = $purchaserErpCode;
	}

	public function getPurchaserErpCode(){
	  return $this->purchaserErpCode;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $wareId;
                              public function setWareId($wareId ){
                 $this->wareId=$wareId;
                 $this->apiParas["wareId"] = $wareId;
              }

              public function getWareId(){
              	return $this->wareId;
              }
                                                                                                                                                                                                                                                                                                                                              private $allocationDeliverCenterId;
                              public function setAllocationDeliverCenterId($allocationDeliverCenterId ){
                 $this->allocationDeliverCenterId=$allocationDeliverCenterId;
                 $this->apiParas["allocationDeliverCenterId"] = $allocationDeliverCenterId;
              }

              public function getAllocationDeliverCenterId(){
              	return $this->allocationDeliverCenterId;
              }
                                                                                                                                                                                                                                                                                                                                              private $originalNum;
                              public function setOriginalNum($originalNum ){
                 $this->originalNum=$originalNum;
                 $this->apiParas["originalNum"] = $originalNum;
              }

              public function getOriginalNum(){
              	return $this->originalNum;
              }
                                                                                                                }





        
 

