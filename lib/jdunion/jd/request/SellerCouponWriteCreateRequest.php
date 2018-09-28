<?php
class SellerCouponWriteCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.coupon.write.create";
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

                        	                   			private $bindType;
    	                        
	public function setBindType($bindType){
		$this->bindType = $bindType;
         $this->apiParas["bindType"] = $bindType;
	}

	public function getBindType(){
	  return $this->bindType;
	}

                        	                   			private $grantType;
    	                        
	public function setGrantType($grantType){
		$this->grantType = $grantType;
         $this->apiParas["grantType"] = $grantType;
	}

	public function getGrantType(){
	  return $this->grantType;
	}

                        	                   			private $num;
    	                        
	public function setNum($num){
		$this->num = $num;
         $this->apiParas["num"] = $num;
	}

	public function getNum(){
	  return $this->num;
	}

                        	                   			private $discount;
    	                        
	public function setDiscount($discount){
		$this->discount = $discount;
         $this->apiParas["discount"] = $discount;
	}

	public function getDiscount(){
	  return $this->discount;
	}

                        	                   			private $quota;
    	                        
	public function setQuota($quota){
		$this->quota = $quota;
         $this->apiParas["quota"] = $quota;
	}

	public function getQuota(){
	  return $this->quota;
	}

                        	                   			private $validityType;
    	                        
	public function setValidityType($validityType){
		$this->validityType = $validityType;
         $this->apiParas["validityType"] = $validityType;
	}

	public function getValidityType(){
	  return $this->validityType;
	}

                        	                   			private $days;
    	                        
	public function setDays($days){
		$this->days = $days;
         $this->apiParas["days"] = $days;
	}

	public function getDays(){
	  return $this->days;
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

                        	                   			private $password;
    	                        
	public function setPassword($password){
		$this->password = $password;
         $this->apiParas["password"] = $password;
	}

	public function getPassword(){
	  return $this->password;
	}

                        	                   			private $batchKey;
    	                        
	public function setBatchKey($batchKey){
		$this->batchKey = $batchKey;
         $this->apiParas["batchKey"] = $batchKey;
	}

	public function getBatchKey(){
	  return $this->batchKey;
	}

                        	                   			private $member;
    	                        
	public function setMember($member){
		$this->member = $member;
         $this->apiParas["member"] = $member;
	}

	public function getMember(){
	  return $this->member;
	}

                        	                   			private $takeBeginTime;
    	                        
	public function setTakeBeginTime($takeBeginTime){
		$this->takeBeginTime = $takeBeginTime;
         $this->apiParas["takeBeginTime"] = $takeBeginTime;
	}

	public function getTakeBeginTime(){
	  return $this->takeBeginTime;
	}

                        	                   			private $takeEndTime;
    	                        
	public function setTakeEndTime($takeEndTime){
		$this->takeEndTime = $takeEndTime;
         $this->apiParas["takeEndTime"] = $takeEndTime;
	}

	public function getTakeEndTime(){
	  return $this->takeEndTime;
	}

                        	                   			private $takeRule;
    	                        
	public function setTakeRule($takeRule){
		$this->takeRule = $takeRule;
         $this->apiParas["takeRule"] = $takeRule;
	}

	public function getTakeRule(){
	  return $this->takeRule;
	}

                        	                   			private $takeNum;
    	                        
	public function setTakeNum($takeNum){
		$this->takeNum = $takeNum;
         $this->apiParas["takeNum"] = $takeNum;
	}

	public function getTakeNum(){
	  return $this->takeNum;
	}

                        	                   			private $display;
    	                        
	public function setDisplay($display){
		$this->display = $display;
         $this->apiParas["display"] = $display;
	}

	public function getDisplay(){
	  return $this->display;
	}

                        	                   			private $platformType;
    	                        
	public function setPlatformType($platformType){
		$this->platformType = $platformType;
         $this->apiParas["platformType"] = $platformType;
	}

	public function getPlatformType(){
	  return $this->platformType;
	}

                        	                   			private $platform;
    	                        
	public function setPlatform($platform){
		$this->platform = $platform;
         $this->apiParas["platform"] = $platform;
	}

	public function getPlatform(){
	  return $this->platform;
	}

                        	                   			private $imgUrl;
    	                        
	public function setImgUrl($imgUrl){
		$this->imgUrl = $imgUrl;
         $this->apiParas["imgUrl"] = $imgUrl;
	}

	public function getImgUrl(){
	  return $this->imgUrl;
	}

                        	                   			private $boundStatus;
    	                        
	public function setBoundStatus($boundStatus){
		$this->boundStatus = $boundStatus;
         $this->apiParas["boundStatus"] = $boundStatus;
	}

	public function getBoundStatus(){
	  return $this->boundStatus;
	}

                        	                   			private $jdNum;
    	                        
	public function setJdNum($jdNum){
		$this->jdNum = $jdNum;
         $this->apiParas["jdNum"] = $jdNum;
	}

	public function getJdNum(){
	  return $this->jdNum;
	}

                        	                   			private $itemId;
    	                        
	public function setItemId($itemId){
		$this->itemId = $itemId;
         $this->apiParas["itemId"] = $itemId;
	}

	public function getItemId(){
	  return $this->itemId;
	}

                        	                   			private $shareType;
    	                        
	public function setShareType($shareType){
		$this->shareType = $shareType;
         $this->apiParas["shareType"] = $shareType;
	}

	public function getShareType(){
	  return $this->shareType;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                }





        
 

