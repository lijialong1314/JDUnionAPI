<?php
class ServicePromotionAppReportRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.service.promotion.appReport";
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
                                    	                                            		                                    	                   			private $time;
    	                        
	public function setTime($time){
		$this->time = $time;
         $this->apiParas["time"] = $time;
	}

	public function getTime(){
	  return $this->time;
	}

                        	                   			private $siteKey;
    	                        
	public function setSiteKey($siteKey){
		$this->siteKey = $siteKey;
         $this->apiParas["siteKey"] = $siteKey;
	}

	public function getSiteKey(){
	  return $this->siteKey;
	}

                        	                   			private $ext1;
    	                        
	public function setExt1($ext1){
		$this->ext1 = $ext1;
         $this->apiParas["ext1"] = $ext1;
	}

	public function getExt1(){
	  return $this->ext1;
	}

                        	                   			private $ext2;
    	                        
	public function setExt2($ext2){
		$this->ext2 = $ext2;
         $this->apiParas["ext2"] = $ext2;
	}

	public function getExt2(){
	  return $this->ext2;
	}

                        	                   			private $ext3;
    	                        
	public function setExt3($ext3){
		$this->ext3 = $ext3;
         $this->apiParas["ext3"] = $ext3;
	}

	public function getExt3(){
	  return $this->ext3;
	}

                            }





        
 

