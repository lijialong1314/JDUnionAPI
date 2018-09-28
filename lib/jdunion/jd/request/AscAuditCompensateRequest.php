<?php
class AscAuditCompensateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.audit.compensate";
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
                                    	                        	                        	                                            		                                    	                   			private $buId;
    	                        
	public function setBuId($buId){
		$this->buId = $buId;
         $this->apiParas["buId"] = $buId;
	}

	public function getBuId(){
	  return $this->buId;
	}

                        	                   			private $operatePin;
    	                        
	public function setOperatePin($operatePin){
		$this->operatePin = $operatePin;
         $this->apiParas["operatePin"] = $operatePin;
	}

	public function getOperatePin(){
	  return $this->operatePin;
	}

                        	                   			private $operateNick;
    	                        
	public function setOperateNick($operateNick){
		$this->operateNick = $operateNick;
         $this->apiParas["operateNick"] = $operateNick;
	}

	public function getOperateNick(){
	  return $this->operateNick;
	}

                        	                   			private $serviceId;
    	                        
	public function setServiceId($serviceId){
		$this->serviceId = $serviceId;
         $this->apiParas["serviceId"] = $serviceId;
	}

	public function getServiceId(){
	  return $this->serviceId;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $approveNotes;
    	                        
	public function setApproveNotes($approveNotes){
		$this->approveNotes = $approveNotes;
         $this->apiParas["approveNotes"] = $approveNotes;
	}

	public function getApproveNotes(){
	  return $this->approveNotes;
	}

                        	                   			private $sysVersion;
    	                        
	public function setSysVersion($sysVersion){
		$this->sysVersion = $sysVersion;
         $this->apiParas["sysVersion"] = $sysVersion;
	}

	public function getSysVersion(){
	  return $this->sysVersion;
	}

                        	                   			private $approveReasonCid1;
    	                        
	public function setApproveReasonCid1($approveReasonCid1){
		$this->approveReasonCid1 = $approveReasonCid1;
         $this->apiParas["approveReasonCid1"] = $approveReasonCid1;
	}

	public function getApproveReasonCid1(){
	  return $this->approveReasonCid1;
	}

                        	                   			private $approveReasonCid2;
    	                        
	public function setApproveReasonCid2($approveReasonCid2){
		$this->approveReasonCid2 = $approveReasonCid2;
         $this->apiParas["approveReasonCid2"] = $approveReasonCid2;
	}

	public function getApproveReasonCid2(){
	  return $this->approveReasonCid2;
	}

                        	                   			private $deliveryCenterId;
    	                        
	public function setDeliveryCenterId($deliveryCenterId){
		$this->deliveryCenterId = $deliveryCenterId;
         $this->apiParas["deliveryCenterId"] = $deliveryCenterId;
	}

	public function getDeliveryCenterId(){
	  return $this->deliveryCenterId;
	}

                        	                   			private $deliveryCenterName;
    	                        
	public function setDeliveryCenterName($deliveryCenterName){
		$this->deliveryCenterName = $deliveryCenterName;
         $this->apiParas["deliveryCenterName"] = $deliveryCenterName;
	}

	public function getDeliveryCenterName(){
	  return $this->deliveryCenterName;
	}

                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                                            		                                    	                   			private $customerContactName;
    	                        
	public function setCustomerContactName($customerContactName){
		$this->customerContactName = $customerContactName;
         $this->apiParas["customerContactName"] = $customerContactName;
	}

	public function getCustomerContactName(){
	  return $this->customerContactName;
	}

                        	                   			private $customerContactTel;
    	                        
	public function setCustomerContactTel($customerContactTel){
		$this->customerContactTel = $customerContactTel;
         $this->apiParas["customerContactTel"] = $customerContactTel;
	}

	public function getCustomerContactTel(){
	  return $this->customerContactTel;
	}

                        	                   			private $customerContactMobile;
    	                        
	public function setCustomerContactMobile($customerContactMobile){
		$this->customerContactMobile = $customerContactMobile;
         $this->apiParas["customerContactMobile"] = $customerContactMobile;
	}

	public function getCustomerContactMobile(){
	  return $this->customerContactMobile;
	}

                        	                   			private $customerZipcode;
    	                        
	public function setCustomerZipcode($customerZipcode){
		$this->customerZipcode = $customerZipcode;
         $this->apiParas["customerZipcode"] = $customerZipcode;
	}

	public function getCustomerZipcode(){
	  return $this->customerZipcode;
	}

                        	                   			private $customerProvince;
    	                        
	public function setCustomerProvince($customerProvince){
		$this->customerProvince = $customerProvince;
         $this->apiParas["customerProvince"] = $customerProvince;
	}

	public function getCustomerProvince(){
	  return $this->customerProvince;
	}

                        	                   			private $customerCity;
    	                        
	public function setCustomerCity($customerCity){
		$this->customerCity = $customerCity;
         $this->apiParas["customerCity"] = $customerCity;
	}

	public function getCustomerCity(){
	  return $this->customerCity;
	}

                        	                   			private $customerCounty;
    	                        
	public function setCustomerCounty($customerCounty){
		$this->customerCounty = $customerCounty;
         $this->apiParas["customerCounty"] = $customerCounty;
	}

	public function getCustomerCounty(){
	  return $this->customerCounty;
	}

                        	                   			private $customerVillage;
    	                        
	public function setCustomerVillage($customerVillage){
		$this->customerVillage = $customerVillage;
         $this->apiParas["customerVillage"] = $customerVillage;
	}

	public function getCustomerVillage(){
	  return $this->customerVillage;
	}

                        	                   			private $customerDetailAddress;
    	                        
	public function setCustomerDetailAddress($customerDetailAddress){
		$this->customerDetailAddress = $customerDetailAddress;
         $this->apiParas["customerDetailAddress"] = $customerDetailAddress;
	}

	public function getCustomerDetailAddress(){
	  return $this->customerDetailAddress;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareName;
                              public function setWareName($wareName ){
                 $this->wareName=$wareName;
                 $this->apiParas["wareName"] = $wareName;
              }

              public function getWareName(){
              	return $this->wareName;
              }
                                                                                                                                                                                                                                                                                                                                              private $warePrice;
                              public function setWarePrice($warePrice ){
                 $this->warePrice=$warePrice;
                 $this->apiParas["warePrice"] = $warePrice;
              }

              public function getWarePrice(){
              	return $this->warePrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareNum;
                              public function setWareNum($wareNum ){
                 $this->wareNum=$wareNum;
                 $this->apiParas["wareNum"] = $wareNum;
              }

              public function getWareNum(){
              	return $this->wareNum;
              }
                                                                                                                                        	                   			private $extJsonStr;
    	                        
	public function setExtJsonStr($extJsonStr){
		$this->extJsonStr = $extJsonStr;
         $this->apiParas["extJsonStr"] = $extJsonStr;
	}

	public function getExtJsonStr(){
	  return $this->extJsonStr;
	}

                            }





        
 

