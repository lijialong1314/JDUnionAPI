<?php
class ImgzonePictureUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.imgzone.picture.update";
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

                        	                   			private $pictureName;
    	                                                            
	public function setPictureName($pictureName){
		$this->pictureName = $pictureName;
         $this->apiParas["picture_name"] = $pictureName;
	}

	public function getPictureName(){
	  return $this->pictureName;
	}

                        	                   			private $pictureCateId;
    	                                                                        
	public function setPictureCateId($pictureCateId){
		$this->pictureCateId = $pictureCateId;
         $this->apiParas["picture_cate_id"] = $pictureCateId;
	}

	public function getPictureCateId(){
	  return $this->pictureCateId;
	}

}





        
 

