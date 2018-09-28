<?php
class VcAplsStockBatchGetProdStockInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.apls.stock.batchGetProdStockInfo";
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

                        	                   	                    		private $skuList;
    	                        
	public function setSkuList($skuList){
		$this->skuList = $skuList;
         $this->apiParas["skuList"] = $skuList;
	}

	public function getSkuList(){
	  return $this->skuList;
	}

                            }





        
 

