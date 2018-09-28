<?php
class JcloudWmsMasterCarrierQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jcloud.wms.master.carrier.query";
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

                        	                   			private $carrierType;
    	                        
	public function setCarrierType($carrierType){
		$this->carrierType = $carrierType;
         $this->apiParas["carrierType"] = $carrierType;
	}

	public function getCarrierType(){
	  return $this->carrierType;
	}

                        	                   			private $englishName;
    	                        
	public function setEnglishName($englishName){
		$this->englishName = $englishName;
         $this->apiParas["englishName"] = $englishName;
	}

	public function getEnglishName(){
	  return $this->englishName;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $tel;
    	                        
	public function setTel($tel){
		$this->tel = $tel;
         $this->apiParas["tel"] = $tel;
	}

	public function getTel(){
	  return $this->tel;
	}

                        	                   			private $contact;
    	                        
	public function setContact($contact){
		$this->contact = $contact;
         $this->apiParas["contact"] = $contact;
	}

	public function getContact(){
	  return $this->contact;
	}

                        	                   			private $postCode;
    	                        
	public function setPostCode($postCode){
		$this->postCode = $postCode;
         $this->apiParas["postCode"] = $postCode;
	}

	public function getPostCode(){
	  return $this->postCode;
	}

                        	                   			private $useFlag;
    	                        
	public function setUseFlag($useFlag){
		$this->useFlag = $useFlag;
         $this->apiParas["useFlag"] = $useFlag;
	}

	public function getUseFlag(){
	  return $this->useFlag;
	}

                            }





        
 

