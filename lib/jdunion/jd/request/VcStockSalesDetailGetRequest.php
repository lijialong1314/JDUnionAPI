<?php
class VcStockSalesDetailGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.stock.sales.detail.get";
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
                                    	                                            		                                    	                   			private $productCode;
    	                                                            
	public function setProductCode($productCode){
		$this->productCode = $productCode;
         $this->apiParas["product_code"] = $productCode;
	}

	public function getProductCode(){
	  return $this->productCode;
	}

                            }





        
 

