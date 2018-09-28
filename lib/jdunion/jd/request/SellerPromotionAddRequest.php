<?php
class SellerPromotionAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.promotion.add";
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
                                                        		                                    	                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $beginTime;
    	                                                            
	public function setBeginTime($beginTime){
		$this->beginTime = $beginTime;
         $this->apiParas["begin_time"] = $beginTime;
	}

	public function getBeginTime(){
	  return $this->beginTime;
	}

                        	                   			private $endTime;
    	                                                            
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $bound;
    	                        
	public function setBound($bound){
		$this->bound = $bound;
         $this->apiParas["bound"] = $bound;
	}

	public function getBound(){
	  return $this->bound;
	}

                        	                   			private $member;
    	                        
	public function setMember($member){
		$this->member = $member;
         $this->apiParas["member"] = $member;
	}

	public function getMember(){
	  return $this->member;
	}

                        	                   			private $slogan;
    	                        
	public function setSlogan($slogan){
		$this->slogan = $slogan;
         $this->apiParas["slogan"] = $slogan;
	}

	public function getSlogan(){
	  return $this->slogan;
	}

                        	                   			private $comment;
    	                        
	public function setComment($comment){
		$this->comment = $comment;
         $this->apiParas["comment"] = $comment;
	}

	public function getComment(){
	  return $this->comment;
	}

                        	                   			private $favorMode;
    	                                                            
	public function setFavorMode($favorMode){
		$this->favorMode = $favorMode;
         $this->apiParas["favor_mode"] = $favorMode;
	}

	public function getFavorMode(){
	  return $this->favorMode;
	}

                        	                            }





        
 

