<?php
class PopVideoInfoCountRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.video.info.count";
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
                                                        		                                    	                        	                   			private $videoName;
    	                                                            
	public function setVideoName($videoName){
		$this->videoName = $videoName;
         $this->apiParas["video_name"] = $videoName;
	}

	public function getVideoName(){
	  return $this->videoName;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   	                    		private $statuses;
    	                        
	public function setStatuses($statuses){
		$this->statuses = $statuses;
         $this->apiParas["statuses"] = $statuses;
	}

	public function getStatuses(){
	  return $this->statuses;
	}

                        	                   			private $agentVideoId;
    	                                                                        
	public function setAgentVideoId($agentVideoId){
		$this->agentVideoId = $agentVideoId;
         $this->apiParas["agent_video_id"] = $agentVideoId;
	}

	public function getAgentVideoId(){
	  return $this->agentVideoId;
	}

                        	                   			private $videoType;
    	                                                            
	public function setVideoType($videoType){
		$this->videoType = $videoType;
         $this->apiParas["video_type"] = $videoType;
	}

	public function getVideoType(){
	  return $this->videoType;
	}

                        	                   			private $createdDateStart;
    	                                                                        
	public function setCreatedDateStart($createdDateStart){
		$this->createdDateStart = $createdDateStart;
         $this->apiParas["created_date_start"] = $createdDateStart;
	}

	public function getCreatedDateStart(){
	  return $this->createdDateStart;
	}

                        	                   			private $createdDateEnd;
    	                                                                        
	public function setCreatedDateEnd($createdDateEnd){
		$this->createdDateEnd = $createdDateEnd;
         $this->apiParas["created_date_end"] = $createdDateEnd;
	}

	public function getCreatedDateEnd(){
	  return $this->createdDateEnd;
	}

                        	                   			private $skuId;
    	                                                            
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                                                                        		                                    	                        	                        	                        	                            }





        
 

