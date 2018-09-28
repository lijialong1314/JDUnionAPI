<?php
class EdiBookSubmitRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.book.submit";
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
                                                        		                                    	                   			private $bookDate;
    	                        
	public function setBookDate($bookDate){
		$this->bookDate = $bookDate;
         $this->apiParas["bookDate"] = $bookDate;
	}

	public function getBookDate(){
	  return $this->bookDate;
	}

                        	                   			private $bookTimePeriod;
    	                        
	public function setBookTimePeriod($bookTimePeriod){
		$this->bookTimePeriod = $bookTimePeriod;
         $this->apiParas["bookTimePeriod"] = $bookTimePeriod;
	}

	public function getBookTimePeriod(){
	  return $this->bookTimePeriod;
	}

                        	                   			private $bookID;
    	                        
	public function setBookID($bookID){
		$this->bookID = $bookID;
         $this->apiParas["bookID"] = $bookID;
	}

	public function getBookID(){
	  return $this->bookID;
	}

                        	                            }





        
 

