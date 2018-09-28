<?php
class ServicePromotionBatchGetcodeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.service.promotion.batch.getcode";
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
                              public function setId($id ){
                 $this->id=$id;
                 $this->apiParas["id"] = $id;
              }

              public function getId(){
              	return $this->id;
              }
                                                                                                                                                                                                                                                                                                                                              private $url;
                              public function setUrl($url ){
                 $this->url=$url;
                 $this->apiParas["url"] = $url;
              }

              public function getUrl(){
              	return $this->url;
              }
                                                                                                                                        	                   			private $unionId;
    	                        
	public function setUnionId($unionId){
		$this->unionId = $unionId;
         $this->apiParas["unionId"] = $unionId;
	}

	public function getUnionId(){
	  return $this->unionId;
	}

                        	                   			private $subUnionId;
    	                        
	public function setSubUnionId($subUnionId){
		$this->subUnionId = $subUnionId;
         $this->apiParas["subUnionId"] = $subUnionId;
	}

	public function getSubUnionId(){
	  return $this->subUnionId;
	}

                        	                   			private $channel;
    	                        
	public function setChannel($channel){
		$this->channel = $channel;
         $this->apiParas["channel"] = $channel;
	}

	public function getChannel(){
	  return $this->channel;
	}

                        	                   			private $webId;
    	                        
	public function setWebId($webId){
		$this->webId = $webId;
         $this->apiParas["webId"] = $webId;
	}

	public function getWebId(){
	  return $this->webId;
	}

                        	                   			private $positionId;
    	                        
	public function setPositionId($positionId){
		$this->positionId = $positionId;
         $this->apiParas["positionId"] = $positionId;
	}

	public function getPositionId(){
	  return $this->positionId;
	}

                        	                   			private $ext1;
    	                        
	public function setExt1($ext1){
		$this->ext1 = $ext1;
         $this->apiParas["ext1"] = $ext1;
	}

	public function getExt1(){
	  return $this->ext1;
	}

                        	                   			private $protocol;
    	                        
	public function setProtocol($protocol){
		$this->protocol = $protocol;
         $this->apiParas["protocol"] = $protocol;
	}

	public function getProtocol(){
	  return $this->protocol;
	}

                        	                   			private $pid;
    	                        
	public function setPid($pid){
		$this->pid = $pid;
         $this->apiParas["pid"] = $pid;
	}

	public function getPid(){
	  return $this->pid;
	}

                            }





        
 

