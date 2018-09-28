<?php
class EclpRtwTransportRtwRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.rtw.transportRtw";
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
                                                        		                                    	                   			private $eclpSoNo;
    	                        
	public function setEclpSoNo($eclpSoNo){
		$this->eclpSoNo = $eclpSoNo;
         $this->apiParas["eclpSoNo"] = $eclpSoNo;
	}

	public function getEclpSoNo(){
	  return $this->eclpSoNo;
	}

                        	                   			private $eclpRtwNo;
    	                        
	public function setEclpRtwNo($eclpRtwNo){
		$this->eclpRtwNo = $eclpRtwNo;
         $this->apiParas["eclpRtwNo"] = $eclpRtwNo;
	}

	public function getEclpRtwNo(){
	  return $this->eclpRtwNo;
	}

                        	                   			private $isvRtwNum;
    	                        
	public function setIsvRtwNum($isvRtwNum){
		$this->isvRtwNum = $isvRtwNum;
         $this->apiParas["isvRtwNum"] = $isvRtwNum;
	}

	public function getIsvRtwNum(){
	  return $this->isvRtwNum;
	}

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $reson;
    	                        
	public function setReson($reson){
		$this->reson = $reson;
         $this->apiParas["reson"] = $reson;
	}

	public function getReson(){
	  return $this->reson;
	}

                                                    	}





        
 

