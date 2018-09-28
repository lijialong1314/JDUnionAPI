<?php
class VcItemVideosFindRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.videos.find";
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
                                    	                                            		                                    	                   			private $keywords;
    	                        
	public function setKeywords($keywords){
		$this->keywords = $keywords;
         $this->apiParas["keywords"] = $keywords;
	}

	public function getKeywords(){
	  return $this->keywords;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $length;
    	                        
	public function setLength($length){
		$this->length = $length;
         $this->apiParas["length"] = $length;
	}

	public function getLength(){
	  return $this->length;
	}

                            }





        
 

