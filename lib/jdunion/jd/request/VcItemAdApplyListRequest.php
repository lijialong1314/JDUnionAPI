<?php
class VcItemAdApplyListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.ad.apply.list";
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
                                    	                                            		                                    	                   			private $wid;
    	                        
	public function setWid($wid){
		$this->wid = $wid;
         $this->apiParas["wid"] = $wid;
	}

	public function getWid(){
	  return $this->wid;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $cid1;
    	                        
	public function setCid1($cid1){
		$this->cid1 = $cid1;
         $this->apiParas["cid1"] = $cid1;
	}

	public function getCid1(){
	  return $this->cid1;
	}

                        	                   			private $brandId;
    	                        
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brandId"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $state;
    	                        
	public function setState($state){
		$this->state = $state;
         $this->apiParas["state"] = $state;
	}

	public function getState(){
	  return $this->state;
	}

                        	                   			private $beginApplyTime;
    	                        
	public function setBeginApplyTime($beginApplyTime){
		$this->beginApplyTime = $beginApplyTime;
         $this->apiParas["beginApplyTime"] = $beginApplyTime;
	}

	public function getBeginApplyTime(){
	  return $this->beginApplyTime;
	}

                        	                   			private $endApplyTime;
    	                        
	public function setEndApplyTime($endApplyTime){
		$this->endApplyTime = $endApplyTime;
         $this->apiParas["endApplyTime"] = $endApplyTime;
	}

	public function getEndApplyTime(){
	  return $this->endApplyTime;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $offset;
    	                        
	public function setOffset($offset){
		$this->offset = $offset;
         $this->apiParas["offset"] = $offset;
	}

	public function getOffset(){
	  return $this->offset;
	}

                            }





        
 

