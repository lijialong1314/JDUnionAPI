<?php
class ImgzonePictureReplaceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.imgzone.picture.replace";
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
                                    	                        	                   			private $pictureId;
    	                                                            
	public function setPictureId($pictureId){
		$this->pictureId = $pictureId;
         $this->apiParas["picture_id"] = $pictureId;
	}

	public function getPictureId(){
	  return $this->pictureId;
	}

                        	                   			private $imageData;
    	                                                            
	public function setImageData($imageData){
		$this->imageData = $imageData;
         $this->apiParas["image_data"] = $imageData;
	}

	public function getImageData(){
	  return $this->imageData;
	}

}





        
 

