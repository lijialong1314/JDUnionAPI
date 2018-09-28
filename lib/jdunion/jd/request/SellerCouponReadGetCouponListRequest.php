<?php
class SellerCouponReadGetCouponListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.coupon.read.getCouponList";
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
                                                        		                                    	                        	                        	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                        	                   			private $port;
    	                        
	public function setPort($port){
		$this->port = $port;
         $this->apiParas["port"] = $port;
	}

	public function getPort(){
	  return $this->port;
	}

                                                                        		                                    	                        	                   			private $couponId;
    	                        
	public function setCouponId($couponId){
		$this->couponId = $couponId;
         $this->apiParas["couponId"] = $couponId;
	}

	public function getCouponId(){
	  return $this->couponId;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $grantType;
    	                        
	public function setGrantType($grantType){
		$this->grantType = $grantType;
         $this->apiParas["grantType"] = $grantType;
	}

	public function getGrantType(){
	  return $this->grantType;
	}

                        	                   			private $bindType;
    	                        
	public function setBindType($bindType){
		$this->bindType = $bindType;
         $this->apiParas["bindType"] = $bindType;
	}

	public function getBindType(){
	  return $this->bindType;
	}

                        	                   			private $grantWay;
    	                        
	public function setGrantWay($grantWay){
		$this->grantWay = $grantWay;
         $this->apiParas["grantWay"] = $grantWay;
	}

	public function getGrantWay(){
	  return $this->grantWay;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $createMonth;
    	                        
	public function setCreateMonth($createMonth){
		$this->createMonth = $createMonth;
         $this->apiParas["createMonth"] = $createMonth;
	}

	public function getCreateMonth(){
	  return $this->createMonth;
	}

                        	                   			private $creatorType;
    	                        
	public function setCreatorType($creatorType){
		$this->creatorType = $creatorType;
         $this->apiParas["creatorType"] = $creatorType;
	}

	public function getCreatorType(){
	  return $this->creatorType;
	}

                        	                   			private $closed;
    	                        
	public function setClosed($closed){
		$this->closed = $closed;
         $this->apiParas["closed"] = $closed;
	}

	public function getClosed(){
	  return $this->closed;
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





        
 

