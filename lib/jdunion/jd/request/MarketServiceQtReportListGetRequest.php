<?php
class MarketServiceQtReportListGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.service.qt.report.list.get";
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
                                                        		                                    	                   			private $serviceItemCode;
    	                                                                        
	public function setServiceItemCode($serviceItemCode){
		$this->serviceItemCode = $serviceItemCode;
         $this->apiParas["service_item_code"] = $serviceItemCode;
	}

	public function getServiceItemCode(){
	  return $this->serviceItemCode;
	}

                        	                   			private $qtType;
    	                                                            
	public function setQtType($qtType){
		$this->qtType = $qtType;
         $this->apiParas["qt_type"] = $qtType;
	}

	public function getQtType(){
	  return $this->qtType;
	}

                        	                   			private $spName;
    	                                                            
	public function setSpName($spName){
		$this->spName = $spName;
         $this->apiParas["sp_name"] = $spName;
	}

	public function getSpName(){
	  return $this->spName;
	}

                        	                   			private $startTime;
    	                                                            
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $endTime;
    	                                                            
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
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





        
 

