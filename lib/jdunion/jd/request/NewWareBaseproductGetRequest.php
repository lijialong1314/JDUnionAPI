<?php
class NewWareBaseproductGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.new.ware.baseproduct.get";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $ids;
                              public function setIds($ids ){
                 $this->ids=$ids;
                 $this->apiParas["ids"] = $ids;
              }

              public function getIds(){
              	return $this->ids;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                               private $basefields;
                              public function setBasefields($basefields ){
                 $this->basefields=$basefields;
                 $this->apiParas["basefields"] = $basefields;
              }

              public function getBasefields(){
              	return $this->basefields;
              }
                                                                                                                }





        
 

