<?php
class ImageWriteDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.image.write.delete";
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

                        	                   	                    		private $colorIds;
    	                        
	public function setColorIds($colorIds){
		$this->colorIds = $colorIds;
         $this->apiParas["colorIds"] = $colorIds;
	}

	public function getColorIds(){
	  return $this->colorIds;
	}

                        	                   	                    		private $imgIndexes;
    	                        
	public function setImgIndexes($imgIndexes){
		$this->imgIndexes = $imgIndexes;
         $this->apiParas["imgIndexes"] = $imgIndexes;
	}

	public function getImgIndexes(){
	  return $this->imgIndexes;
	}

}





        
 

