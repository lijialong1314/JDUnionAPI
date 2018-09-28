<?php
class JwPurchaseStockQueryStockRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jw.purchase.stock.queryStock";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $sku;
                              public function setSku($sku ){
                 $this->sku=$sku;
                 $this->apiParas["sku"] = $sku;
              }

              public function getSku(){
              	return $this->sku;
              }
                                                                                                                                                                                                                                                                                                                                              private $num;
                              public function setNum($num ){
                 $this->num=$num;
                 $this->apiParas["num"] = $num;
              }

              public function getNum(){
              	return $this->num;
              }
                                                                                                                                                            		                                    	                   			private $addressLevel1Id;
    	                        
	public function setAddressLevel1Id($addressLevel1Id){
		$this->addressLevel1Id = $addressLevel1Id;
         $this->apiParas["addressLevel1Id"] = $addressLevel1Id;
	}

	public function getAddressLevel1Id(){
	  return $this->addressLevel1Id;
	}

                        	                   			private $addressLevel2Id;
    	                        
	public function setAddressLevel2Id($addressLevel2Id){
		$this->addressLevel2Id = $addressLevel2Id;
         $this->apiParas["addressLevel2Id"] = $addressLevel2Id;
	}

	public function getAddressLevel2Id(){
	  return $this->addressLevel2Id;
	}

                        	                   			private $addressLevel3Id;
    	                        
	public function setAddressLevel3Id($addressLevel3Id){
		$this->addressLevel3Id = $addressLevel3Id;
         $this->apiParas["addressLevel3Id"] = $addressLevel3Id;
	}

	public function getAddressLevel3Id(){
	  return $this->addressLevel3Id;
	}

                        	                   			private $addressLevel4Id;
    	                        
	public function setAddressLevel4Id($addressLevel4Id){
		$this->addressLevel4Id = $addressLevel4Id;
         $this->apiParas["addressLevel4Id"] = $addressLevel4Id;
	}

	public function getAddressLevel4Id(){
	  return $this->addressLevel4Id;
	}

                                                    	                        	                            }





        
 

