<?php
class EclpPoAddPoSidDetailRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.po.addPoSidDetail";
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
                                                        		                                    	                   			private $poNo;
    	                        
	public function setPoNo($poNo){
		$this->poNo = $poNo;
         $this->apiParas["poNo"] = $poNo;
	}

	public function getPoNo(){
	  return $this->poNo;
	}

                        	                   			private $version;
    	                        
	public function setVersion($version){
		$this->version = $version;
         $this->apiParas["version"] = $version;
	}

	public function getVersion(){
	  return $this->version;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                        private $deptGoodsNo;
                              public function setDeptGoodsNo($deptGoodsNo ){
                 $this->deptGoodsNo=$deptGoodsNo;
                 $this->apiParas["deptGoodsNo"] = $deptGoodsNo;
              }

              public function getDeptGoodsNo(){
              	return $this->deptGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                       private $serialNo;
                              public function setSerialNo($serialNo ){
                 $this->serialNo=$serialNo;
                 $this->apiParas["serialNo"] = $serialNo;
              }

              public function getSerialNo(){
              	return $this->serialNo;
              }
                                                                                                                                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

}





        
 

