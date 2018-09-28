<?php
class VcAplsStockUpdateProdStockInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.apls.stock.updateProdStockInfo";
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

                        	                   			private $companyId;
    	                        
	public function setCompanyId($companyId){
		$this->companyId = $companyId;
         $this->apiParas["companyId"] = $companyId;
	}

	public function getCompanyId(){
	  return $this->companyId;
	}

                        	                   			private $stockRfId;
    	                        
	public function setStockRfId($stockRfId){
		$this->stockRfId = $stockRfId;
         $this->apiParas["stockRfId"] = $stockRfId;
	}

	public function getStockRfId(){
	  return $this->stockRfId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $skuid;
                              public function setSkuid($skuid ){
                 $this->skuid=$skuid;
                 $this->apiParas["skuid"] = $skuid;
              }

              public function getSkuid(){
              	return $this->skuid;
              }
                                                                                                                                                                                                                                                                                                                       private $stockNum;
                              public function setStockNum($stockNum ){
                 $this->stockNum=$stockNum;
                 $this->apiParas["stockNum"] = $stockNum;
              }

              public function getStockNum(){
              	return $this->stockNum;
              }
                                                                                                                                            }





        
 

