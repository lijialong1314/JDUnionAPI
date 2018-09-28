<?php
class LdopAlphaWaybillUnbindRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.waybill.unbind";
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
                                                        		                                    	                   			private $platformOrderNo;
    	                        
	public function setPlatformOrderNo($platformOrderNo){
		$this->platformOrderNo = $platformOrderNo;
         $this->apiParas["platformOrderNo"] = $platformOrderNo;
	}

	public function getPlatformOrderNo(){
	  return $this->platformOrderNo;
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

                        	                   			private $operatorName;
    	                        
	public function setOperatorName($operatorName){
		$this->operatorName = $operatorName;
         $this->apiParas["operatorName"] = $operatorName;
	}

	public function getOperatorName(){
	  return $this->operatorName;
	}

                        	                   			private $operatorTime;
    	                        
	public function setOperatorTime($operatorTime){
		$this->operatorTime = $operatorTime;
         $this->apiParas["operatorTime"] = $operatorTime;
	}

	public function getOperatorTime(){
	  return $this->operatorTime;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $waybillCodeList;
                              public function setWaybillCodeList($waybillCodeList ){
                 $this->waybillCodeList=$waybillCodeList;
                 $this->apiParas["waybillCodeList"] = $waybillCodeList;
              }

              public function getWaybillCodeList(){
              	return $this->waybillCodeList;
              }
                                                                                                                                            }





        
 

