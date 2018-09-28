<?php
class ImgzonePictureUploadRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.imgzone.picture.upload";
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
                                    	                        	                   			private $imageData;
    	                                                            
	public function setImageData($imageData){
		$this->imageData = $imageData;
         $this->apiParas["image_data"] = $imageData;
	}

	public function getImageData(){
	  return $this->imageData;
	}

                        	                   			private $pictureCateId;
    	                                                                        
	public function setPictureCateId($pictureCateId){
		$this->pictureCateId = $pictureCateId;
         $this->apiParas["picture_cate_id"] = $pictureCateId;
	}

	public function getPictureCateId(){
	  return $this->pictureCateId;
	}

                        	                   			private $pictureName;
    	                                                            
	public function setPictureName($pictureName){
		$this->pictureName = $pictureName;
         $this->apiParas["picture_name"] = $pictureName;
	}

	public function getPictureName(){
	  return $this->pictureName;
	}

}





        
 

