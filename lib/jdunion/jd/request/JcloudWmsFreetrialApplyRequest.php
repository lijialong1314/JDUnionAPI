<?php
class JcloudWmsFreetrialApplyRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jcloud.wms.freetrial.apply";
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
                                    	                        	                                            		                                    	                   			private $companyName;
    	                        
	public function setCompanyName($companyName){
		$this->companyName = $companyName;
         $this->apiParas["companyName"] = $companyName;
	}

	public function getCompanyName(){
	  return $this->companyName;
	}

                        	                   			private $userName;
    	                        
	public function setUserName($userName){
		$this->userName = $userName;
         $this->apiParas["userName"] = $userName;
	}

	public function getUserName(){
	  return $this->userName;
	}

                        	                   			private $email;
    	                        
	public function setEmail($email){
		$this->email = $email;
         $this->apiParas["email"] = $email;
	}

	public function getEmail(){
	  return $this->email;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                        	                   			private $industry;
    	                        
	public function setIndustry($industry){
		$this->industry = $industry;
         $this->apiParas["industry"] = $industry;
	}

	public function getIndustry(){
	  return $this->industry;
	}

                        	                   			private $jdPin;
    	                        
	public function setJdPin($jdPin){
		$this->jdPin = $jdPin;
         $this->apiParas["jdPin"] = $jdPin;
	}

	public function getJdPin(){
	  return $this->jdPin;
	}

                        	                            }





        
 

