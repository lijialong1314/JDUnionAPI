<?php
class ImgzonePictureDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.imgzone.picture.delete";
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
                                    	                        	                   			private $pictureIds;
    	                                                            
	public function setPictureIds($pictureIds){
		$this->pictureIds = $pictureIds;
         $this->apiParas["picture_ids"] = $pictureIds;
	}

	public function getPictureIds(){
	  return $this->pictureIds;
	}

}





        
 

