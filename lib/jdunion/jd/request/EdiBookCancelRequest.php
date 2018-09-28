<?php
class EdiBookCancelRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.book.cancel";
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
                                                        		                                    	                   			private $reason;
    	                        
	public function setReason($reason){
		$this->reason = $reason;
         $this->apiParas["reason"] = $reason;
	}

	public function getReason(){
	  return $this->reason;
	}

                        	                   			private $bookID;
    	                        
	public function setBookID($bookID){
		$this->bookID = $bookID;
         $this->apiParas["bookID"] = $bookID;
	}

	public function getBookID(){
	  return $this->bookID;
	}

                        	                   			private $isCancelAll;
    	                        
	public function setIsCancelAll($isCancelAll){
		$this->isCancelAll = $isCancelAll;
         $this->apiParas["isCancelAll"] = $isCancelAll;
	}

	public function getIsCancelAll(){
	  return $this->isCancelAll;
	}

                        	                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $poNo;
                              public function setPoNo($poNo ){
                 $this->poNo=$poNo;
                 $this->apiParas["poNo"] = $poNo;
              }

              public function getPoNo(){
              	return $this->poNo;
              }
                                                                                                                }





        
 

