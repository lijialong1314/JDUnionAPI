<?php
class DspPictureUploadRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.picture.upload";
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
                                    	                   			private $picFile;
    	                        
	public function setPicFile($picFile){
		$this->picFile = $picFile;
         $this->apiParas["picFile"] = $picFile;
	}

	public function getPicFile(){
	  return $this->picFile;
	}

}





        
 

