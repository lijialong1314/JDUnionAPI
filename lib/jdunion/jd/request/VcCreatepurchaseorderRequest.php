<?php
class VcCreatepurchaseorderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.createpurchaseorder";
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
                                                        		                                    	                   			private $orderDeliverCenterId;
    	                                                                                    
	public function setOrderDeliverCenterId($orderDeliverCenterId){
		$this->orderDeliverCenterId = $orderDeliverCenterId;
         $this->apiParas["order_deliver_center_id"] = $orderDeliverCenterId;
	}

	public function getOrderDeliverCenterId(){
	  return $this->orderDeliverCenterId;
	}

                        	                   			private $purchaserErpCode;
    	                                                                        
	public function setPurchaserErpCode($purchaserErpCode){
		$this->purchaserErpCode = $purchaserErpCode;
         $this->apiParas["purchaser_erp_code"] = $purchaserErpCode;
	}

	public function getPurchaserErpCode(){
	  return $this->purchaserErpCode;
	}

                        	                   			private $orderRemark;
    	                                                            
	public function setOrderRemark($orderRemark){
		$this->orderRemark = $orderRemark;
         $this->apiParas["order_remark"] = $orderRemark;
	}

	public function getOrderRemark(){
	  return $this->orderRemark;
	}

                        	                                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $wareId;
                              public function setWareId($wareId ){
                 $this->wareId=$wareId;
                 $this->apiParas["ware_id"] = $wareId;
              }

              public function getWareId(){
              	return $this->wareId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      private $wareDeliverCenterId;
                              public function setWareDeliverCenterId($wareDeliverCenterId ){
                 $this->wareDeliverCenterId=$wareDeliverCenterId;
                 $this->apiParas["ware_deliver_center_id"] = $wareDeliverCenterId;
              }

              public function getWareDeliverCenterId(){
              	return $this->wareDeliverCenterId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $originalNum;
                              public function setOriginalNum($originalNum ){
                 $this->originalNum=$originalNum;
                 $this->apiParas["original_num"] = $originalNum;
              }

              public function getOriginalNum(){
              	return $this->originalNum;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $wareRemark;
                              public function setWareRemark($wareRemark ){
                 $this->wareRemark=$wareRemark;
                 $this->apiParas["ware_remark"] = $wareRemark;
              }

              public function getWareRemark(){
              	return $this->wareRemark;
              }
                                                                                                                }





        
 

