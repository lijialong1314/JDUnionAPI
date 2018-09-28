<?php
class KuaicheZnSpaceInfoSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.kuaiche.zn.space.info.search";
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
                                    	                   			private $pageId;
    	                                                            
	public function setPageId($pageId){
		$this->pageId = $pageId;
         $this->apiParas["page_id"] = $pageId;
	}

	public function getPageId(){
	  return $this->pageId;
	}

}





        
 

