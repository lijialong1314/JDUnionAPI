<?php
class DspMaterialInsertCreativeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.material.insertCreative";
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
                                    	                   			private $imgUrl;
    	                        
	public function setImgUrl($imgUrl){
		$this->imgUrl = $imgUrl;
         $this->apiParas["imgUrl"] = $imgUrl;
	}

	public function getImgUrl(){
	  return $this->imgUrl;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	}





        
 

