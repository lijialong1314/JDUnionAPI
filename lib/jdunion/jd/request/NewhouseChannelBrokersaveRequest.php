<?php
class NewhouseChannelBrokersaveRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.newhouse.channel.brokersave";
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
                                                        		                                    	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $channelId;
    	                        
	public function setChannelId($channelId){
		$this->channelId = $channelId;
         $this->apiParas["channelId"] = $channelId;
	}

	public function getChannelId(){
	  return $this->channelId;
	}

                        	                   			private $brokerName;
    	                        
	public function setBrokerName($brokerName){
		$this->brokerName = $brokerName;
         $this->apiParas["brokerName"] = $brokerName;
	}

	public function getBrokerName(){
	  return $this->brokerName;
	}

                        	                   			private $brokerPhone;
    	                        
	public function setBrokerPhone($brokerPhone){
		$this->brokerPhone = $brokerPhone;
         $this->apiParas["brokerPhone"] = $brokerPhone;
	}

	public function getBrokerPhone(){
	  return $this->brokerPhone;
	}

                        	                   			private $brokerGender;
    	                        
	public function setBrokerGender($brokerGender){
		$this->brokerGender = $brokerGender;
         $this->apiParas["brokerGender"] = $brokerGender;
	}

	public function getBrokerGender(){
	  return $this->brokerGender;
	}

                        	                   			private $brokerDepartment;
    	                        
	public function setBrokerDepartment($brokerDepartment){
		$this->brokerDepartment = $brokerDepartment;
         $this->apiParas["brokerDepartment"] = $brokerDepartment;
	}

	public function getBrokerDepartment(){
	  return $this->brokerDepartment;
	}

                        	                   			private $brokerImg;
    	                        
	public function setBrokerImg($brokerImg){
		$this->brokerImg = $brokerImg;
         $this->apiParas["brokerImg"] = $brokerImg;
	}

	public function getBrokerImg(){
	  return $this->brokerImg;
	}

                        	                   			private $brokerRole;
    	                        
	public function setBrokerRole($brokerRole){
		$this->brokerRole = $brokerRole;
         $this->apiParas["brokerRole"] = $brokerRole;
	}

	public function getBrokerRole(){
	  return $this->brokerRole;
	}

                        	                   			private $imid;
    	                        
	public function setImid($imid){
		$this->imid = $imid;
         $this->apiParas["imid"] = $imid;
	}

	public function getImid(){
	  return $this->imid;
	}

                        	                   			private $brokerType;
    	                        
	public function setBrokerType($brokerType){
		$this->brokerType = $brokerType;
         $this->apiParas["brokerType"] = $brokerType;
	}

	public function getBrokerType(){
	  return $this->brokerType;
	}

                        	                   			private $businessRecord;
    	                        
	public function setBusinessRecord($businessRecord){
		$this->businessRecord = $businessRecord;
         $this->apiParas["businessRecord"] = $businessRecord;
	}

	public function getBusinessRecord(){
	  return $this->businessRecord;
	}

                            }





        
 

