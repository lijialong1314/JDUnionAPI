<?php
class LasImHfsOrderSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.im.hfs.order.search";
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
                                                        		                                    	                   			private $code;
    	                        
	public function setCode($code){
		$this->code = $code;
         $this->apiParas["code"] = $code;
	}

	public function getCode(){
	  return $this->code;
	}

                        	                   			private $offset;
    	                        
	public function setOffset($offset){
		$this->offset = $offset;
         $this->apiParas["offset"] = $offset;
	}

	public function getOffset(){
	  return $this->offset;
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

                            }





        
 

