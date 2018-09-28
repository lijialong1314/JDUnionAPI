<?php
class RegisterorderGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.registerorder.get";
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
                                                        		                                    	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $appTime;
    	                        
	public function setAppTime($appTime){
		$this->appTime = $appTime;
         $this->apiParas["appTime"] = $appTime;
	}

	public function getAppTime(){
	  return $this->appTime;
	}

                        	                   			private $hospitalName;
    	                        
	public function setHospitalName($hospitalName){
		$this->hospitalName = $hospitalName;
         $this->apiParas["hospitalName"] = $hospitalName;
	}

	public function getHospitalName(){
	  return $this->hospitalName;
	}

                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                        	                   			private $departmentName;
    	                        
	public function setDepartmentName($departmentName){
		$this->departmentName = $departmentName;
         $this->apiParas["departmentName"] = $departmentName;
	}

	public function getDepartmentName(){
	  return $this->departmentName;
	}

                        	                   			private $doctorName;
    	                        
	public function setDoctorName($doctorName){
		$this->doctorName = $doctorName;
         $this->apiParas["doctorName"] = $doctorName;
	}

	public function getDoctorName(){
	  return $this->doctorName;
	}

                        	                   			private $platform;
    	                        
	public function setPlatform($platform){
		$this->platform = $platform;
         $this->apiParas["platform"] = $platform;
	}

	public function getPlatform(){
	  return $this->platform;
	}

                        	                   			private $visitingName;
    	                        
	public function setVisitingName($visitingName){
		$this->visitingName = $visitingName;
         $this->apiParas["visitingName"] = $visitingName;
	}

	public function getVisitingName(){
	  return $this->visitingName;
	}

                        	                   			private $uuid;
    	                        
	public function setUuid($uuid){
		$this->uuid = $uuid;
         $this->apiParas["uuid"] = $uuid;
	}

	public function getUuid(){
	  return $this->uuid;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $timeType;
    	                        
	public function setTimeType($timeType){
		$this->timeType = $timeType;
         $this->apiParas["timeType"] = $timeType;
	}

	public function getTimeType(){
	  return $this->timeType;
	}

                        	                   			private $url;
    	                        
	public function setUrl($url){
		$this->url = $url;
         $this->apiParas["url"] = $url;
	}

	public function getUrl(){
	  return $this->url;
	}

                            }





        
 

