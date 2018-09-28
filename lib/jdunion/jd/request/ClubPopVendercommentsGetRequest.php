<?php
class ClubPopVendercommentsGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.club.pop.vendercomments.get";
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
                                                        		                                    	                   			private $skuids;
    	                        
	public function setSkuids($skuids){
		$this->skuids = $skuids;
         $this->apiParas["skuids"] = $skuids;
	}

	public function getSkuids(){
	  return $this->skuids;
	}

                        	                        	                   			private $wareName;
    	                        
	public function setWareName($wareName){
		$this->wareName = $wareName;
         $this->apiParas["wareName"] = $wareName;
	}

	public function getWareName(){
	  return $this->wareName;
	}

                        	                   			private $beginTime;
    	                        
	public function setBeginTime($beginTime){
		$this->beginTime = $beginTime;
         $this->apiParas["beginTime"] = $beginTime;
	}

	public function getBeginTime(){
	  return $this->beginTime;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $score;
    	                        
	public function setScore($score){
		$this->score = $score;
         $this->apiParas["score"] = $score;
	}

	public function getScore(){
	  return $this->score;
	}

                        	                   			private $content;
    	                        
	public function setContent($content){
		$this->content = $content;
         $this->apiParas["content"] = $content;
	}

	public function getContent(){
	  return $this->content;
	}

                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                        	                   			private $isVenderReply;
    	                        
	public function setIsVenderReply($isVenderReply){
		$this->isVenderReply = $isVenderReply;
         $this->apiParas["isVenderReply"] = $isVenderReply;
	}

	public function getIsVenderReply(){
	  return $this->isVenderReply;
	}

                        	                   			private $cid;
    	                        
	public function setCid($cid){
		$this->cid = $cid;
         $this->apiParas["cid"] = $cid;
	}

	public function getCid(){
	  return $this->cid;
	}

                        	                   			private $orderIds;
    	                        
	public function setOrderIds($orderIds){
		$this->orderIds = $orderIds;
         $this->apiParas["orderIds"] = $orderIds;
	}

	public function getOrderIds(){
	  return $this->orderIds;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                            }





        
 

