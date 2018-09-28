<?php
class ImageReadFindImagesByColorRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.image.read.findImagesByColor";
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
                                                        		                                    	                        	                        	                                                    	                        	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $colorId;
    	                        
	public function setColorId($colorId){
		$this->colorId = $colorId;
         $this->apiParas["colorId"] = $colorId;
	}

	public function getColorId(){
	  return $this->colorId;
	}

}





        
 

