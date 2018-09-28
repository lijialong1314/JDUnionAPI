<?php
class LdopAlphaProviderStockIncreaseRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.provider.stock.increase";
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
                                                        		                                    	                   			private $operatorCode;
    	                        
	public function setOperatorCode($operatorCode){
		$this->operatorCode = $operatorCode;
         $this->apiParas["operatorCode"] = $operatorCode;
	}

	public function getOperatorCode(){
	  return $this->operatorCode;
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

                        	                   			private $providerId;
    	                        
	public function setProviderId($providerId){
		$this->providerId = $providerId;
         $this->apiParas["providerId"] = $providerId;
	}

	public function getProviderId(){
	  return $this->providerId;
	}

                        	                   			private $providerCode;
    	                        
	public function setProviderCode($providerCode){
		$this->providerCode = $providerCode;
         $this->apiParas["providerCode"] = $providerCode;
	}

	public function getProviderCode(){
	  return $this->providerCode;
	}

                        	                   			private $providerName;
    	                        
	public function setProviderName($providerName){
		$this->providerName = $providerName;
         $this->apiParas["providerName"] = $providerName;
	}

	public function getProviderName(){
	  return $this->providerName;
	}

                        	                   			private $branchCode;
    	                        
	public function setBranchCode($branchCode){
		$this->branchCode = $branchCode;
         $this->apiParas["branchCode"] = $branchCode;
	}

	public function getBranchCode(){
	  return $this->branchCode;
	}

                        	                   			private $branchName;
    	                        
	public function setBranchName($branchName){
		$this->branchName = $branchName;
         $this->apiParas["branchName"] = $branchName;
	}

	public function getBranchName(){
	  return $this->branchName;
	}

                        	                   			private $amount;
    	                        
	public function setAmount($amount){
		$this->amount = $amount;
         $this->apiParas["amount"] = $amount;
	}

	public function getAmount(){
	  return $this->amount;
	}

                        	                   			private $operatorTime;
    	                        
	public function setOperatorTime($operatorTime){
		$this->operatorTime = $operatorTime;
         $this->apiParas["operatorTime"] = $operatorTime;
	}

	public function getOperatorTime(){
	  return $this->operatorTime;
	}

                        	                   			private $operatorName;
    	                        
	public function setOperatorName($operatorName){
		$this->operatorName = $operatorName;
         $this->apiParas["operatorName"] = $operatorName;
	}

	public function getOperatorName(){
	  return $this->operatorName;
	}

                        	                   			private $state;
    	                        
	public function setState($state){
		$this->state = $state;
         $this->apiParas["state"] = $state;
	}

	public function getState(){
	  return $this->state;
	}

                            }





        
 

