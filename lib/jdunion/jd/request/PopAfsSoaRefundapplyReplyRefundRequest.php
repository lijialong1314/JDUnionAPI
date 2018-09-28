<?php
class PopAfsSoaRefundapplyReplyRefundRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.afs.soa.refundapply.replyRefund";
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
                                                        		                                    	                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $checkUserName;
    	                        
	public function setCheckUserName($checkUserName){
		$this->checkUserName = $checkUserName;
         $this->apiParas["checkUserName"] = $checkUserName;
	}

	public function getCheckUserName(){
	  return $this->checkUserName;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $rejectType;
    	                        
	public function setRejectType($rejectType){
		$this->rejectType = $rejectType;
         $this->apiParas["rejectType"] = $rejectType;
	}

	public function getRejectType(){
	  return $this->rejectType;
	}

                        	                   			private $outWareStatus;
    	                        
	public function setOutWareStatus($outWareStatus){
		$this->outWareStatus = $outWareStatus;
         $this->apiParas["outWareStatus"] = $outWareStatus;
	}

	public function getOutWareStatus(){
	  return $this->outWareStatus;
	}

                            }





        
 

