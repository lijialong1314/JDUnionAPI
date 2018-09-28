<?php
class LdopAlphaVendorStockQueryByProviderCodeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.vendor.stock.queryByProviderCode";
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
                                    	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                        	                   			private $providerCode;
    	                        
	public function setProviderCode($providerCode){
		$this->providerCode = $providerCode;
         $this->apiParas["providerCode"] = $providerCode;
	}

	public function getProviderCode(){
	  return $this->providerCode;
	}

                        	                   			private $branchCode;
    	                        
	public function setBranchCode($branchCode){
		$this->branchCode = $branchCode;
         $this->apiParas["branchCode"] = $branchCode;
	}

	public function getBranchCode(){
	  return $this->branchCode;
	}

}





        
 

