<?php
class QlGisCourierLbsInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ql.gis.courier.lbs.info";
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
                                    	                   			private $waybillCode;
    	                        
	public function setWaybillCode($waybillCode){
		$this->waybillCode = $waybillCode;
         $this->apiParas["waybillCode"] = $waybillCode;
	}

	public function getWaybillCode(){
	  return $this->waybillCode;
	}

                        	                   			private $appCode;
    	                        
	public function setAppCode($appCode){
		$this->appCode = $appCode;
         $this->apiParas["appCode"] = $appCode;
	}

	public function getAppCode(){
	  return $this->appCode;
	}

                        	                   			private $sign;
    	                        
	public function setSign($sign){
		$this->sign = $sign;
         $this->apiParas["sign"] = $sign;
	}

	public function getSign(){
	  return $this->sign;
	}

}





        
 

