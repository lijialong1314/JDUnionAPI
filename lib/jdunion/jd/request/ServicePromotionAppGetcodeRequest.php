<?php
class ServicePromotionAppGetcodeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.service.promotion.app.getcode";
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
                                    	                                            		                                    	                   			private $jdurl;
    	                        
	public function setJdurl($jdurl){
		$this->jdurl = $jdurl;
         $this->apiParas["jdurl"] = $jdurl;
	}

	public function getJdurl(){
	  return $this->jdurl;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $subUnionId;
    	                        
	public function setSubUnionId($subUnionId){
		$this->subUnionId = $subUnionId;
         $this->apiParas["subUnionId"] = $subUnionId;
	}

	public function getSubUnionId(){
	  return $this->subUnionId;
	}

                        	                   			private $positionId;
    	                        
	public function setPositionId($positionId){
		$this->positionId = $positionId;
         $this->apiParas["positionId"] = $positionId;
	}

	public function getPositionId(){
	  return $this->positionId;
	}

                        	                   			private $ext;
    	                        
	public function setExt($ext){
		$this->ext = $ext;
         $this->apiParas["ext"] = $ext;
	}

	public function getExt(){
	  return $this->ext;
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





        
 

