<?php
class EdiPrepoSendRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.prepo.send";
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
                                                        		                                    	                   			private $forecastPurchaseOrderCode;
    	                        
	public function setForecastPurchaseOrderCode($forecastPurchaseOrderCode){
		$this->forecastPurchaseOrderCode = $forecastPurchaseOrderCode;
         $this->apiParas["forecastPurchaseOrderCode"] = $forecastPurchaseOrderCode;
	}

	public function getForecastPurchaseOrderCode(){
	  return $this->forecastPurchaseOrderCode;
	}

                        	                   			private $prePurchaseOrderCode;
    	                        
	public function setPrePurchaseOrderCode($prePurchaseOrderCode){
		$this->prePurchaseOrderCode = $prePurchaseOrderCode;
         $this->apiParas["prePurchaseOrderCode"] = $prePurchaseOrderCode;
	}

	public function getPrePurchaseOrderCode(){
	  return $this->prePurchaseOrderCode;
	}

                        	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                        	                   			private $vendorName;
    	                        
	public function setVendorName($vendorName){
		$this->vendorName = $vendorName;
         $this->apiParas["vendorName"] = $vendorName;
	}

	public function getVendorName(){
	  return $this->vendorName;
	}

                        	                   			private $orgCode;
    	                        
	public function setOrgCode($orgCode){
		$this->orgCode = $orgCode;
         $this->apiParas["orgCode"] = $orgCode;
	}

	public function getOrgCode(){
	  return $this->orgCode;
	}

                        	                   			private $orgName;
    	                        
	public function setOrgName($orgName){
		$this->orgName = $orgName;
         $this->apiParas["orgName"] = $orgName;
	}

	public function getOrgName(){
	  return $this->orgName;
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
                                                                                                                                                                                                                                                                                                                                              private $quantity;
                              public function setQuantity($quantity ){
                 $this->quantity=$quantity;
                 $this->apiParas["quantity"] = $quantity;
              }

              public function getQuantity(){
              	return $this->quantity;
              }
                                                                                                                }





        
 

