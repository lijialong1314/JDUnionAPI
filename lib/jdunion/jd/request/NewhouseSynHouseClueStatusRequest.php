<?php
class NewhouseSynHouseClueStatusRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.newhouse.synHouseClueStatus";
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
                                                        		                                    	                        	                   			private $clueId;
    	                        
	public function setClueId($clueId){
		$this->clueId = $clueId;
         $this->apiParas["clueId"] = $clueId;
	}

	public function getClueId(){
	  return $this->clueId;
	}

                        	                   			private $clueStatus;
    	                        
	public function setClueStatus($clueStatus){
		$this->clueStatus = $clueStatus;
         $this->apiParas["clueStatus"] = $clueStatus;
	}

	public function getClueStatus(){
	  return $this->clueStatus;
	}

                        	                   			private $brokerId;
    	                        
	public function setBrokerId($brokerId){
		$this->brokerId = $brokerId;
         $this->apiParas["brokerId"] = $brokerId;
	}

	public function getBrokerId(){
	  return $this->brokerId;
	}

                        	                   			private $updateTimeLong;
    	                        
	public function setUpdateTimeLong($updateTimeLong){
		$this->updateTimeLong = $updateTimeLong;
         $this->apiParas["updateTimeLong"] = $updateTimeLong;
	}

	public function getUpdateTimeLong(){
	  return $this->updateTimeLong;
	}

                        	                   			private $channelId;
    	                        
	public function setChannelId($channelId){
		$this->channelId = $channelId;
         $this->apiParas["channelId"] = $channelId;
	}

	public function getChannelId(){
	  return $this->channelId;
	}

                            }





        
 

