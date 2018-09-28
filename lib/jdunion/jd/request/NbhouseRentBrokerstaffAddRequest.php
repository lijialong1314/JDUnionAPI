<?php
class NbhouseRentBrokerstaffAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.nbhouse.rent.brokerstaff.add";
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
                                                        		                                    	                   			private $brokerStaffName;
    	                        
	public function setBrokerStaffName($brokerStaffName){
		$this->brokerStaffName = $brokerStaffName;
         $this->apiParas["brokerStaffName"] = $brokerStaffName;
	}

	public function getBrokerStaffName(){
	  return $this->brokerStaffName;
	}

                        	                   			private $brokerStaffPhone;
    	                        
	public function setBrokerStaffPhone($brokerStaffPhone){
		$this->brokerStaffPhone = $brokerStaffPhone;
         $this->apiParas["brokerStaffPhone"] = $brokerStaffPhone;
	}

	public function getBrokerStaffPhone(){
	  return $this->brokerStaffPhone;
	}

                        	                   			private $brokerStaffGender;
    	                        
	public function setBrokerStaffGender($brokerStaffGender){
		$this->brokerStaffGender = $brokerStaffGender;
         $this->apiParas["brokerStaffGender"] = $brokerStaffGender;
	}

	public function getBrokerStaffGender(){
	  return $this->brokerStaffGender;
	}

                        	                   			private $brokerStaffImg;
    	                        
	public function setBrokerStaffImg($brokerStaffImg){
		$this->brokerStaffImg = $brokerStaffImg;
         $this->apiParas["brokerStaffImg"] = $brokerStaffImg;
	}

	public function getBrokerStaffImg(){
	  return $this->brokerStaffImg;
	}

                        	                   			private $brokerStaffIdCardNum;
    	                        
	public function setBrokerStaffIdCardNum($brokerStaffIdCardNum){
		$this->brokerStaffIdCardNum = $brokerStaffIdCardNum;
         $this->apiParas["brokerStaffIdCardNum"] = $brokerStaffIdCardNum;
	}

	public function getBrokerStaffIdCardNum(){
	  return $this->brokerStaffIdCardNum;
	}

                        	                   			private $brokerStaffIdcardfront;
    	                        
	public function setBrokerStaffIdcardfront($brokerStaffIdcardfront){
		$this->brokerStaffIdcardfront = $brokerStaffIdcardfront;
         $this->apiParas["brokerStaffIdcardfront"] = $brokerStaffIdcardfront;
	}

	public function getBrokerStaffIdcardfront(){
	  return $this->brokerStaffIdcardfront;
	}

                        	                   			private $brokerStaffIdcardback;
    	                        
	public function setBrokerStaffIdcardback($brokerStaffIdcardback){
		$this->brokerStaffIdcardback = $brokerStaffIdcardback;
         $this->apiParas["brokerStaffIdcardback"] = $brokerStaffIdcardback;
	}

	public function getBrokerStaffIdcardback(){
	  return $this->brokerStaffIdcardback;
	}

                        	                   			private $brokerName;
    	                        
	public function setBrokerName($brokerName){
		$this->brokerName = $brokerName;
         $this->apiParas["brokerName"] = $brokerName;
	}

	public function getBrokerName(){
	  return $this->brokerName;
	}

                        	                            }





        
 

