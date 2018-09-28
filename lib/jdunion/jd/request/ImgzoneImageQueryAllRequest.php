<?php
class ImgzoneImageQueryAllRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.imgzone.image.queryAll";
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
                                                        		                                    	                        	                   			private $categoryId;
    	                                                            
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
	}

                        	                   			private $imageName;
    	                                                            
	public function setImageName($imageName){
		$this->imageName = $imageName;
         $this->apiParas["image_name"] = $imageName;
	}

	public function getImageName(){
	  return $this->imageName;
	}

                        	                   			private $scrollId;
    	                                                            
	public function setScrollId($scrollId){
		$this->scrollId = $scrollId;
         $this->apiParas["scroll_id"] = $scrollId;
	}

	public function getScrollId(){
	  return $this->scrollId;
	}

                            }





        
 

