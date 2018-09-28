<?php
class MarketFuwuAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.fuwu.add";
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
                                                        		                                    	                   			private $serviceCode;
    	                        
	public function setServiceCode($serviceCode){
		$this->serviceCode = $serviceCode;
         $this->apiParas["serviceCode"] = $serviceCode;
	}

	public function getServiceCode(){
	  return $this->serviceCode;
	}

                        	                   			private $serviceName;
    	                        
	public function setServiceName($serviceName){
		$this->serviceName = $serviceName;
         $this->apiParas["serviceName"] = $serviceName;
	}

	public function getServiceName(){
	  return $this->serviceName;
	}

                        	                   			private $serviceStatus;
    	                                                            
	public function setServiceStatus($serviceStatus){
		$this->serviceStatus = $serviceStatus;
         $this->apiParas["service_status"] = $serviceStatus;
	}

	public function getServiceStatus(){
	  return $this->serviceStatus;
	}

                        	                   			private $serviceDetailUrl;
    	                        
	public function setServiceDetailUrl($serviceDetailUrl){
		$this->serviceDetailUrl = $serviceDetailUrl;
         $this->apiParas["serviceDetailUrl"] = $serviceDetailUrl;
	}

	public function getServiceDetailUrl(){
	  return $this->serviceDetailUrl;
	}

                        	                   			private $serviceLogo;
    	                        
	public function setServiceLogo($serviceLogo){
		$this->serviceLogo = $serviceLogo;
         $this->apiParas["serviceLogo"] = $serviceLogo;
	}

	public function getServiceLogo(){
	  return $this->serviceLogo;
	}

                        	                   			private $fwsPin;
    	                        
	public function setFwsPin($fwsPin){
		$this->fwsPin = $fwsPin;
         $this->apiParas["fwsPin"] = $fwsPin;
	}

	public function getFwsPin(){
	  return $this->fwsPin;
	}

                        	                   			private $fwsId;
    	                        
	public function setFwsId($fwsId){
		$this->fwsId = $fwsId;
         $this->apiParas["fwsId"] = $fwsId;
	}

	public function getFwsId(){
	  return $this->fwsId;
	}

                        	                   			private $cid;
    	                        
	public function setCid($cid){
		$this->cid = $cid;
         $this->apiParas["cid"] = $cid;
	}

	public function getCid(){
	  return $this->cid;
	}

                        	                   			private $serviceType;
    	                                                            
	public function setServiceType($serviceType){
		$this->serviceType = $serviceType;
         $this->apiParas["service_type"] = $serviceType;
	}

	public function getServiceType(){
	  return $this->serviceType;
	}

                        	                   			private $appKey;
    	                        
	public function setAppKey($appKey){
		$this->appKey = $appKey;
         $this->apiParas["appKey"] = $appKey;
	}

	public function getAppKey(){
	  return $this->appKey;
	}

                                            		                                    	                   			private $itemCode;
    	                        
	public function setItemCode($itemCode){
		$this->itemCode = $itemCode;
         $this->apiParas["itemCode"] = $itemCode;
	}

	public function getItemCode(){
	  return $this->itemCode;
	}

                        	                   			private $chargeType;
    	                        
	public function setChargeType($chargeType){
		$this->chargeType = $chargeType;
         $this->apiParas["chargeType"] = $chargeType;
	}

	public function getChargeType(){
	  return $this->chargeType;
	}

                        	                   			private $itemVersion;
    	                        
	public function setItemVersion($itemVersion){
		$this->itemVersion = $itemVersion;
         $this->apiParas["itemVersion"] = $itemVersion;
	}

	public function getItemVersion(){
	  return $this->itemVersion;
	}

                                                                                                         	                        	                                                                                                                                                                                                                                                                                                               private $chargeDays;
                              public function setChargeDays($chargeDays ){
                 $this->chargeDays=$chargeDays;
                 $this->apiParas["chargeDays"] = $chargeDays;
              }

              public function getChargeDays(){
              	return $this->chargeDays;
              }
                                                                                                                                                                                                                                                                                                                                              private $pageDisplay;
                              public function setPageDisplay($pageDisplay ){
                 $this->pageDisplay=$pageDisplay;
                 $this->apiParas["pageDisplay"] = $pageDisplay;
              }

              public function getPageDisplay(){
              	return $this->pageDisplay;
              }
                                                                                                                                                                                                                                                                                                                                              private $price;
                              public function setPrice($price ){
                 $this->price=$price;
                 $this->apiParas["price"] = $price;
              }

              public function getPrice(){
              	return $this->price;
              }
                                                                                                                }





        
 

