<?php
class EdiBookSaveAndGetTimeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.book.saveAndGetTime";
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
                                                        		                                    	                   			private $carrier;
    	                        
	public function setCarrier($carrier){
		$this->carrier = $carrier;
         $this->apiParas["carrier"] = $carrier;
	}

	public function getCarrier(){
	  return $this->carrier;
	}

                        	                   			private $carrierTel;
    	                        
	public function setCarrierTel($carrierTel){
		$this->carrierTel = $carrierTel;
         $this->apiParas["carrierTel"] = $carrierTel;
	}

	public function getCarrierTel(){
	  return $this->carrierTel;
	}

                        	                   			private $tcCode;
    	                        
	public function setTcCode($tcCode){
		$this->tcCode = $tcCode;
         $this->apiParas["tcCode"] = $tcCode;
	}

	public function getTcCode(){
	  return $this->tcCode;
	}

                        	                   			private $tcName;
    	                        
	public function setTcName($tcName){
		$this->tcName = $tcName;
         $this->apiParas["tcName"] = $tcName;
	}

	public function getTcName(){
	  return $this->tcName;
	}

                        	                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $bookQtySum;
                              public function setBookQtySum($bookQtySum ){
                 $this->bookQtySum=$bookQtySum;
                 $this->apiParas["bookQtySum"] = $bookQtySum;
              }

              public function getBookQtySum(){
              	return $this->bookQtySum;
              }
                                                                                                                                                                                                                                                                                                                                              private $poNoSum;
                              public function setPoNoSum($poNoSum ){
                 $this->poNoSum=$poNoSum;
                 $this->apiParas["poNoSum"] = $poNoSum;
              }

              public function getPoNoSum(){
              	return $this->poNoSum;
              }
                                                                                                                                                                                                                                                                                                                                              private $bookBoxQtySum;
                              public function setBookBoxQtySum($bookBoxQtySum ){
                 $this->bookBoxQtySum=$bookBoxQtySum;
                 $this->apiParas["bookBoxQtySum"] = $bookBoxQtySum;
              }

              public function getBookBoxQtySum(){
              	return $this->bookBoxQtySum;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                               private $poNoDetail;
                              public function setPoNoDetail($poNoDetail ){
                 $this->poNoDetail=$poNoDetail;
                 $this->apiParas["poNoDetail"] = $poNoDetail;
              }

              public function getPoNoDetail(){
              	return $this->poNoDetail;
              }
                                                                                                                                                                                                                                                                                                                                              private $bookQtyDetail;
                              public function setBookQtyDetail($bookQtyDetail ){
                 $this->bookQtyDetail=$bookQtyDetail;
                 $this->apiParas["bookQtyDetail"] = $bookQtyDetail;
              }

              public function getBookQtyDetail(){
              	return $this->bookQtyDetail;
              }
                                                                                                                                                                                                                                                                                                                                              private $goodsNoDetail;
                              public function setGoodsNoDetail($goodsNoDetail ){
                 $this->goodsNoDetail=$goodsNoDetail;
                 $this->apiParas["goodsNoDetail"] = $goodsNoDetail;
              }

              public function getGoodsNoDetail(){
              	return $this->goodsNoDetail;
              }
                                                                                                                }





        
 

