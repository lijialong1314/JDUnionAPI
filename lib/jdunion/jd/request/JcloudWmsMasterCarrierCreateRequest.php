<?php
class JcloudWmsMasterCarrierCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jcloud.wms.master.carrier.create";
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
                                    	                        	                                            		                                    	                   			private $tenantId;
    	                        
	public function setTenantId($tenantId){
		$this->tenantId = $tenantId;
         $this->apiParas["tenantId"] = $tenantId;
	}

	public function getTenantId(){
	  return $this->tenantId;
	}

                        	                   			private $carrierNo;
    	                        
	public function setCarrierNo($carrierNo){
		$this->carrierNo = $carrierNo;
         $this->apiParas["carrierNo"] = $carrierNo;
	}

	public function getCarrierNo(){
	  return $this->carrierNo;
	}

                        	                   			private $carrierName;
    	                        
	public function setCarrierName($carrierName){
		$this->carrierName = $carrierName;
         $this->apiParas["carrierName"] = $carrierName;
	}

	public function getCarrierName(){
	  return $this->carrierName;
	}

                        	                   			private $useFlag;
    	                        
	public function setUseFlag($useFlag){
		$this->useFlag = $useFlag;
         $this->apiParas["useFlag"] = $useFlag;
	}

	public function getUseFlag(){
	  return $this->useFlag;
	}

                        	                   			private $contact;
    	                        
	public function setContact($contact){
		$this->contact = $contact;
         $this->apiParas["contact"] = $contact;
	}

	public function getContact(){
	  return $this->contact;
	}

                        	                   			private $contactPhone;
    	                        
	public function setContactPhone($contactPhone){
		$this->contactPhone = $contactPhone;
         $this->apiParas["contactPhone"] = $contactPhone;
	}

	public function getContactPhone(){
	  return $this->contactPhone;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $memo;
    	                        
	public function setMemo($memo){
		$this->memo = $memo;
         $this->apiParas["memo"] = $memo;
	}

	public function getMemo(){
	  return $this->memo;
	}

                        	                   			private $operateUser;
    	                        
	public function setOperateUser($operateUser){
		$this->operateUser = $operateUser;
         $this->apiParas["operateUser"] = $operateUser;
	}

	public function getOperateUser(){
	  return $this->operateUser;
	}

                        	                   			private $operateTime;
    	                        
	public function setOperateTime($operateTime){
		$this->operateTime = $operateTime;
         $this->apiParas["operateTime"] = $operateTime;
	}

	public function getOperateTime(){
	  return $this->operateTime;
	}

                            }





        
 

