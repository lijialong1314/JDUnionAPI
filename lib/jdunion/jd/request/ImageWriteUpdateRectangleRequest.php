<?php
class ImageWriteUpdateRectangleRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.image.write.updateRectangle";
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

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $imgId;
                              public function setImgId($imgId ){
                 $this->imgId=$imgId;
                 $this->apiParas["imgId"] = $imgId;
              }

              public function getImgId(){
              	return $this->imgId;
              }
                                                                                                                                                                                                                                                                                                                                              private $imgRectangleUrl;
                              public function setImgRectangleUrl($imgRectangleUrl ){
                 $this->imgRectangleUrl=$imgRectangleUrl;
                 $this->apiParas["imgRectangleUrl"] = $imgRectangleUrl;
              }

              public function getImgRectangleUrl(){
              	return $this->imgRectangleUrl;
              }
                                                                                                                                                                                                                                                                                                                                              private $imgIndex;
                              public function setImgIndex($imgIndex ){
                 $this->imgIndex=$imgIndex;
                 $this->apiParas["imgIndex"] = $imgIndex;
              }

              public function getImgIndex(){
              	return $this->imgIndex;
              }
                                                                                                                }





        
 

