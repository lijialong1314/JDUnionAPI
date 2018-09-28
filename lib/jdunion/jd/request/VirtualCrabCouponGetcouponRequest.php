<?php
class VirtualCrabCouponGetcouponRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.virtual.crabCoupon.getcoupon";
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
                                                        		                                    	                   			private $merchantId;
    	                        
	public function setMerchantId($merchantId){
		$this->merchantId = $merchantId;
         $this->apiParas["merchantId"] = $merchantId;
	}

	public function getMerchantId(){
	  return $this->merchantId;
	}

                        	                   			private $merchantName;
    	                        
	public function setMerchantName($merchantName){
		$this->merchantName = $merchantName;
         $this->apiParas["merchantName"] = $merchantName;
	}

	public function getMerchantName(){
	  return $this->merchantName;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $channelType;
    	                        
	public function setChannelType($channelType){
		$this->channelType = $channelType;
         $this->apiParas["channelType"] = $channelType;
	}

	public function getChannelType(){
	  return $this->channelType;
	}

                        	                   			private $couponType;
    	                        
	public function setCouponType($couponType){
		$this->couponType = $couponType;
         $this->apiParas["couponType"] = $couponType;
	}

	public function getCouponType(){
	  return $this->couponType;
	}

                        	                   			private $couponNumber;
    	                        
	public function setCouponNumber($couponNumber){
		$this->couponNumber = $couponNumber;
         $this->apiParas["couponNumber"] = $couponNumber;
	}

	public function getCouponNumber(){
	  return $this->couponNumber;
	}

                        	                   			private $trackingName;
    	                        
	public function setTrackingName($trackingName){
		$this->trackingName = $trackingName;
         $this->apiParas["trackingName"] = $trackingName;
	}

	public function getTrackingName(){
	  return $this->trackingName;
	}

                        	                   			private $trackingNumber;
    	                        
	public function setTrackingNumber($trackingNumber){
		$this->trackingNumber = $trackingNumber;
         $this->apiParas["trackingNumber"] = $trackingNumber;
	}

	public function getTrackingNumber(){
	  return $this->trackingNumber;
	}

                        	                   			private $sendTime;
    	                        
	public function setSendTime($sendTime){
		$this->sendTime = $sendTime;
         $this->apiParas["sendTime"] = $sendTime;
	}

	public function getSendTime(){
	  return $this->sendTime;
	}

                        	                   			private $receiverName;
    	                        
	public function setReceiverName($receiverName){
		$this->receiverName = $receiverName;
         $this->apiParas["receiverName"] = $receiverName;
	}

	public function getReceiverName(){
	  return $this->receiverName;
	}

                        	                   			private $receiverMobile;
    	                        
	public function setReceiverMobile($receiverMobile){
		$this->receiverMobile = $receiverMobile;
         $this->apiParas["receiverMobile"] = $receiverMobile;
	}

	public function getReceiverMobile(){
	  return $this->receiverMobile;
	}

                        	                   			private $sendSerialNumber;
    	                        
	public function setSendSerialNumber($sendSerialNumber){
		$this->sendSerialNumber = $sendSerialNumber;
         $this->apiParas["sendSerialNumber"] = $sendSerialNumber;
	}

	public function getSendSerialNumber(){
	  return $this->sendSerialNumber;
	}

                                                    	                        	                        	}





        
 

