<?php
class LasImHfsQuerycodeSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.im.hfs.querycode.search";
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
                                    	                   			private $no;
    	                        
	public function setNo($no){
		$this->no = $no;
         $this->apiParas["no"] = $no;
	}

	public function getNo(){
	  return $this->no;
	}

                        	                   			private $token;
    	                        
	public function setToken($token){
		$this->token = $token;
         $this->apiParas["token"] = $token;
	}

	public function getToken(){
	  return $this->token;
	}

                        	                   			private $date;
    	                        
	public function setDate($date){
		$this->date = $date;
         $this->apiParas["date"] = $date;
	}

	public function getDate(){
	  return $this->date;
	}

}





        
 

