<?php
class PopVideoInfosDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.video.infos.delete";
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
                                    	                        	                   	                    		private $videoIds;
    	                                                            
	public function setVideoIds($videoIds){
		$this->videoIds = $videoIds;
         $this->apiParas["video_ids"] = $videoIds;
	}

	public function getVideoIds(){
	  return $this->videoIds;
	}

                                            		                                    	                        	                        	                        	                            }





        
 

