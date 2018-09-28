<?php
class WarehouseOutboundOrderCreateOutboundOrderForBatchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.warehouse.outbound.order.createOutboundOrderForBatch";
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
                                                        		                                    	                        	                   			private $stockOutType;
    	                        
	public function setStockOutType($stockOutType){
		$this->stockOutType = $stockOutType;
         $this->apiParas["stockOutType"] = $stockOutType;
	}

	public function getStockOutType(){
	  return $this->stockOutType;
	}

                        	                   			private $remarkForOutBound;
    	                        
	public function setRemarkForOutBound($remarkForOutBound){
		$this->remarkForOutBound = $remarkForOutBound;
         $this->apiParas["remarkForOutBound"] = $remarkForOutBound;
	}

	public function getRemarkForOutBound(){
	  return $this->remarkForOutBound;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $snNo;
                              public function setSnNo($snNo ){
                 $this->snNo=$snNo;
                 $this->apiParas["snNo"] = $snNo;
              }

              public function getSnNo(){
              	return $this->snNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $spareCode;
                              public function setSpareCode($spareCode ){
                 $this->spareCode=$spareCode;
                 $this->apiParas["spareCode"] = $spareCode;
              }

              public function getSpareCode(){
              	return $this->spareCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $vendorCode;
                              public function setVendorCode($vendorCode ){
                 $this->vendorCode=$vendorCode;
                 $this->apiParas["vendorCode"] = $vendorCode;
              }

              public function getVendorCode(){
              	return $this->vendorCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $remark;
                              public function setRemark($remark ){
                 $this->remark=$remark;
                 $this->apiParas["remark"] = $remark;
              }

              public function getRemark(){
              	return $this->remark;
              }
                                                                                                                                            }





        
 

