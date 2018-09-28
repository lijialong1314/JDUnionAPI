<?php
class ImgzonePictureQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.imgzone.picture.query";
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

                        	                   			private $startDate;
    	                                                            
	public function setStartDate($startDate){
		$this->startDate = $startDate;
         $this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate(){
	  return $this->startDate;
	}

                        	                   			private $endDate;
    	                                                            
	public function setEndDate($endDate){
		$this->endDate = $endDate;
         $this->apiParas["end_Date"] = $endDate;
	}

	public function getEndDate(){
	  return $this->endDate;
	}

                        	                   			private $pageNum;
    	                                                            
	public function setPageNum($pageNum){
		$this->pageNum = $pageNum;
         $this->apiParas["page_num"] = $pageNum;
	}

	public function getPageNum(){
	  return $this->pageNum;
	}

                        	                   			private $pageSize;
    	                                                            
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                            }





        
 

