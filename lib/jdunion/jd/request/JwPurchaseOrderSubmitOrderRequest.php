<?php
class JwPurchaseOrderSubmitOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jw.purchase.order.submitOrder";
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

                        	                   			private $addressDetail;
    	                        
	public function setAddressDetail($addressDetail){
		$this->addressDetail = $addressDetail;
         $this->apiParas["addressDetail"] = $addressDetail;
	}

	public function getAddressDetail(){
	  return $this->addressDetail;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $idCard;
    	                        
	public function setIdCard($idCard){
		$this->idCard = $idCard;
         $this->apiParas["idCard"] = $idCard;
	}

	public function getIdCard(){
	  return $this->idCard;
	}

                                                                        		                                    	                   			private $invoiceType;
    	                        
	public function setInvoiceType($invoiceType){
		$this->invoiceType = $invoiceType;
         $this->apiParas["invoiceType"] = $invoiceType;
	}

	public function getInvoiceType(){
	  return $this->invoiceType;
	}

                        	                   			private $billingType;
    	                        
	public function setBillingType($billingType){
		$this->billingType = $billingType;
         $this->apiParas["billingType"] = $billingType;
	}

	public function getBillingType(){
	  return $this->billingType;
	}

                                                    	                   			private $autoDeductRebate;
    	                        
	public function setAutoDeductRebate($autoDeductRebate){
		$this->autoDeductRebate = $autoDeductRebate;
         $this->apiParas["autoDeductRebate"] = $autoDeductRebate;
	}

	public function getAutoDeductRebate(){
	  return $this->autoDeductRebate;
	}

                        	                   			private $rebate;
    	                        
	public function setRebate($rebate){
		$this->rebate = $rebate;
         $this->apiParas["rebate"] = $rebate;
	}

	public function getRebate(){
	  return $this->rebate;
	}

                        	                   			private $clientId;
    	                        
	public function setClientId($clientId){
		$this->clientId = $clientId;
         $this->apiParas["clientId"] = $clientId;
	}

	public function getClientId(){
	  return $this->clientId;
	}

                        	                   			private $clientBusinessNo;
    	                        
	public function setClientBusinessNo($clientBusinessNo){
		$this->clientBusinessNo = $clientBusinessNo;
         $this->apiParas["clientBusinessNo"] = $clientBusinessNo;
	}

	public function getClientBusinessNo(){
	  return $this->clientBusinessNo;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                        	                            }





        
 

