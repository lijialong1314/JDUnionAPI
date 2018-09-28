<?php
class EdiSsSendRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.ss.send";
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
                                                        		                                    	                   			private $purchaseOrderCode;
    	                        
	public function setPurchaseOrderCode($purchaseOrderCode){
		$this->purchaseOrderCode = $purchaseOrderCode;
         $this->apiParas["purchaseOrderCode"] = $purchaseOrderCode;
	}

	public function getPurchaseOrderCode(){
	  return $this->purchaseOrderCode;
	}

                        	                        	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $shipmentNumber;
                              public function setShipmentNumber($shipmentNumber ){
                 $this->shipmentNumber=$shipmentNumber;
                 $this->apiParas["shipmentNumber"] = $shipmentNumber;
              }

              public function getShipmentNumber(){
              	return $this->shipmentNumber;
              }
                                                                                                                                                                                                                                                                                                                                              private $serialNumber;
                              public function setSerialNumber($serialNumber ){
                 $this->serialNumber=$serialNumber;
                 $this->apiParas["serialNumber"] = $serialNumber;
              }

              public function getSerialNumber(){
              	return $this->serialNumber;
              }
                                                                                                                                                                                                                                                                                                                                              private $sku;
                              public function setSku($sku ){
                 $this->sku=$sku;
                 $this->apiParas["sku"] = $sku;
              }

              public function getSku(){
              	return $this->sku;
              }
                                                                                                                                                                                                                                                                                                                                              private $vendorProductId;
                              public function setVendorProductId($vendorProductId ){
                 $this->vendorProductId=$vendorProductId;
                 $this->apiParas["vendorProductId"] = $vendorProductId;
              }

              public function getVendorProductId(){
              	return $this->vendorProductId;
              }
                                                                                                                }





        
 

