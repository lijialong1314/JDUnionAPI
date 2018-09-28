<?php
class ProductoutstorageRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.productoutstorage";
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
                                    	                        	                        	                   			private $twoOrderId;
    	                        
	public function setTwoOrderId($twoOrderId){
		$this->twoOrderId = $twoOrderId;
         $this->apiParas["twoOrderId"] = $twoOrderId;
	}

	public function getTwoOrderId(){
	  return $this->twoOrderId;
	}

                        	                   			private $waybillNumber;
    	                        
	public function setWaybillNumber($waybillNumber){
		$this->waybillNumber = $waybillNumber;
         $this->apiParas["waybillNumber"] = $waybillNumber;
	}

	public function getWaybillNumber(){
	  return $this->waybillNumber;
	}

                        	                   			private $logisticsCompanies;
    	                        
	public function setLogisticsCompanies($logisticsCompanies){
		$this->logisticsCompanies = $logisticsCompanies;
         $this->apiParas["logisticsCompanies"] = $logisticsCompanies;
	}

	public function getLogisticsCompanies(){
	  return $this->logisticsCompanies;
	}

                        	                   			private $bagCount;
    	                        
	public function setBagCount($bagCount){
		$this->bagCount = $bagCount;
         $this->apiParas["bagCount"] = $bagCount;
	}

	public function getBagCount(){
	  return $this->bagCount;
	}

                        	                   			private $extStr;
    	                        
	public function setExtStr($extStr){
		$this->extStr = $extStr;
         $this->apiParas["extStr"] = $extStr;
	}

	public function getExtStr(){
	  return $this->extStr;
	}

}





        
 

