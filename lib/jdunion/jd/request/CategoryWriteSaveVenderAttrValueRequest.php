<?php
class CategoryWriteSaveVenderAttrValueRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.category.write.saveVenderAttrValue";
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
                                                        		                                    	                        	                        	                                                    	                                            		                                    	                   			private $valueId;
    	                        
	public function setValueId($valueId){
		$this->valueId = $valueId;
         $this->apiParas["valueId"] = $valueId;
	}

	public function getValueId(){
	  return $this->valueId;
	}

                        	                   			private $attValue;
    	                        
	public function setAttValue($attValue){
		$this->attValue = $attValue;
         $this->apiParas["attValue"] = $attValue;
	}

	public function getAttValue(){
	  return $this->attValue;
	}

                        	                   			private $attributeId;
    	                        
	public function setAttributeId($attributeId){
		$this->attributeId = $attributeId;
         $this->apiParas["attributeId"] = $attributeId;
	}

	public function getAttributeId(){
	  return $this->attributeId;
	}

                        	                   			private $categoryId;
    	                        
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["categoryId"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
	}

                        	                   			private $indexId;
    	                        
	public function setIndexId($indexId){
		$this->indexId = $indexId;
         $this->apiParas["indexId"] = $indexId;
	}

	public function getIndexId(){
	  return $this->indexId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $key;
                              public function setKey($key ){
                 $this->key=$key;
                 $this->apiParas["key"] = $key;
              }

              public function getKey(){
              	return $this->key;
              }
                                                                                                                                                                                                                                                                                                                                              private $value;
                              public function setValue($value ){
                 $this->value=$value;
                 $this->apiParas["value"] = $value;
              }

              public function getValue(){
              	return $this->value;
              }
                                                                                                                                            }





        
 

