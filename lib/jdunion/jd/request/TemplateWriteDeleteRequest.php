<?php
class TemplateWriteDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.template.write.delete";
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
                                                        		                                    	                        	                        	                                                    	                        	                   			private $templateId;
    	                        
	public function setTemplateId($templateId){
		$this->templateId = $templateId;
         $this->apiParas["templateId"] = $templateId;
	}

	public function getTemplateId(){
	  return $this->templateId;
	}

}





        
 

