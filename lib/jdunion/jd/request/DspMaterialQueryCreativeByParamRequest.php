<?php
class DspMaterialQueryCreativeByParamRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.material.queryCreativeByParam";
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
                                    	                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $pagesize;
    	                        
	public function setPagesize($pagesize){
		$this->pagesize = $pagesize;
         $this->apiParas["pagesize"] = $pagesize;
	}

	public function getPagesize(){
	  return $this->pagesize;
	}

}





        
 

