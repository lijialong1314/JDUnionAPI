<?php
class LogisticsSkuQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.sku.query";
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
                                    	                   			private $joslGoodNo;
    	                                                                        
	public function setJoslGoodNo($joslGoodNo){
		$this->joslGoodNo = $joslGoodNo;
         $this->apiParas["josl_good_no"] = $joslGoodNo;
	}

	public function getJoslGoodNo(){
	  return $this->joslGoodNo;
	}

                        	                   			private $isvGoodNo;
    	                                                                        
	public function setIsvGoodNo($isvGoodNo){
		$this->isvGoodNo = $isvGoodNo;
         $this->apiParas["isv_good_no"] = $isvGoodNo;
	}

	public function getIsvGoodNo(){
	  return $this->isvGoodNo;
	}

                        	}





        
 

