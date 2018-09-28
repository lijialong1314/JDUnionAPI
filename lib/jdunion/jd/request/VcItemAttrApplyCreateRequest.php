<?php
class VcItemAttrApplyCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.attr.apply.create";
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
                                    	                                            		                                    	                   			private $wareGroupId;
    	                                                                        
	public function setWareGroupId($wareGroupId){
		$this->wareGroupId = $wareGroupId;
         $this->apiParas["ware_group_id"] = $wareGroupId;
	}

	public function getWareGroupId(){
	  return $this->wareGroupId;
	}

                        	                   			private $publicName;
    	                                                            
	public function setPublicName($publicName){
		$this->publicName = $publicName;
         $this->apiParas["public_name"] = $publicName;
	}

	public function getPublicName(){
	  return $this->publicName;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $wareIds;
                              public function setWareIds($wareIds ){
                 $this->wareIds=$wareIds;
                 $this->apiParas["ware_ids"] = $wareIds;
              }

              public function getWareIds(){
              	return $this->wareIds;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $dim1Vals;
                              public function setDim1Vals($dim1Vals ){
                 $this->dim1Vals=$dim1Vals;
                 $this->apiParas["dim1_vals"] = $dim1Vals;
              }

              public function getDim1Vals(){
              	return $this->dim1Vals;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $dim1Sorts;
                              public function setDim1Sorts($dim1Sorts ){
                 $this->dim1Sorts=$dim1Sorts;
                 $this->apiParas["dim1_sorts"] = $dim1Sorts;
              }

              public function getDim1Sorts(){
              	return $this->dim1Sorts;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $dim2Vals;
                              public function setDim2Vals($dim2Vals ){
                 $this->dim2Vals=$dim2Vals;
                 $this->apiParas["dim2_vals"] = $dim2Vals;
              }

              public function getDim2Vals(){
              	return $this->dim2Vals;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $dim2Sorts;
                              public function setDim2Sorts($dim2Sorts ){
                 $this->dim2Sorts=$dim2Sorts;
                 $this->apiParas["dim2_sorts"] = $dim2Sorts;
              }

              public function getDim2Sorts(){
              	return $this->dim2Sorts;
              }
                                                                                                                                                                    	}





        
 

