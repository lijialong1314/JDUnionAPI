<?php
class PopAfterSaleReplyWorkOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.afterSale.ReplyWorkOrder";
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
                                    	                        	                   			private $account;
    	                        
	public function setAccount($account){
		$this->account = $account;
         $this->apiParas["account"] = $account;
	}

	public function getAccount(){
	  return $this->account;
	}

                        	                   			private $workId;
    	                                                            
	public function setWorkId($workId){
		$this->workId = $workId;
         $this->apiParas["work_id"] = $workId;
	}

	public function getWorkId(){
	  return $this->workId;
	}

                        	                   			private $replyContent;
    	                                                            
	public function setReplyContent($replyContent){
		$this->replyContent = $replyContent;
         $this->apiParas["reply_content"] = $replyContent;
	}

	public function getReplyContent(){
	  return $this->replyContent;
	}

                        	                   			private $workType;
    	                                                            
	public function setWorkType($workType){
		$this->workType = $workType;
         $this->apiParas["work_type"] = $workType;
	}

	public function getWorkType(){
	  return $this->workType;
	}

                        	                   			private $work2Type;
    	                                                            
	public function setWork2Type($work2Type){
		$this->work2Type = $work2Type;
         $this->apiParas["work2_type"] = $work2Type;
	}

	public function getWork2Type(){
	  return $this->work2Type;
	}

                        	}





        
 

