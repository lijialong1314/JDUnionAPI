<?php
class YairComponentRunRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yair.component.run";
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
                                    	                   			private $sampFile;
    	                        
	public function setSampFile($sampFile){
		$this->sampFile = $sampFile;
         $this->apiParas["sampFile"] = $sampFile;
	}

	public function getSampFile(){
	  return $this->sampFile;
	}

                        	                   			private $foreFile;
    	                        
	public function setForeFile($foreFile){
		$this->foreFile = $foreFile;
         $this->apiParas["foreFile"] = $foreFile;
	}

	public function getForeFile(){
	  return $this->foreFile;
	}

                        	                   			private $cid;
    	                        
	public function setCid($cid){
		$this->cid = $cid;
         $this->apiParas["cid"] = $cid;
	}

	public function getCid(){
	  return $this->cid;
	}

                        	                   			private $inputJson;
    	                        
	public function setInputJson($inputJson){
		$this->inputJson = $inputJson;
         $this->apiParas["inputJson"] = $inputJson;
	}

	public function getInputJson(){
	  return $this->inputJson;
	}

}





        
 

