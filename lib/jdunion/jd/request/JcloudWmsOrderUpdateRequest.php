<?php
class JcloudWmsOrderUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jcloud.wms.order.update";
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
                                    	                        	                                            		                                    	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $tenantId;
    	                        
	public function setTenantId($tenantId){
		$this->tenantId = $tenantId;
         $this->apiParas["tenantId"] = $tenantId;
	}

	public function getTenantId(){
	  return $this->tenantId;
	}

                        	                   			private $billType;
    	                        
	public function setBillType($billType){
		$this->billType = $billType;
         $this->apiParas["billType"] = $billType;
	}

	public function getBillType(){
	  return $this->billType;
	}

                        	                   			private $ownerNo;
    	                        
	public function setOwnerNo($ownerNo){
		$this->ownerNo = $ownerNo;
         $this->apiParas["ownerNo"] = $ownerNo;
	}

	public function getOwnerNo(){
	  return $this->ownerNo;
	}

                        	                   			private $invoiceFlag;
    	                        
	public function setInvoiceFlag($invoiceFlag){
		$this->invoiceFlag = $invoiceFlag;
         $this->apiParas["invoiceFlag"] = $invoiceFlag;
	}

	public function getInvoiceFlag(){
	  return $this->invoiceFlag;
	}

                        	                   			private $invoiceTitle;
    	                        
	public function setInvoiceTitle($invoiceTitle){
		$this->invoiceTitle = $invoiceTitle;
         $this->apiParas["invoiceTitle"] = $invoiceTitle;
	}

	public function getInvoiceTitle(){
	  return $this->invoiceTitle;
	}

                        	                   			private $invoiceContent;
    	                        
	public function setInvoiceContent($invoiceContent){
		$this->invoiceContent = $invoiceContent;
         $this->apiParas["invoiceContent"] = $invoiceContent;
	}

	public function getInvoiceContent(){
	  return $this->invoiceContent;
	}

                        	                   			private $notes;
    	                        
	public function setNotes($notes){
		$this->notes = $notes;
         $this->apiParas["notes"] = $notes;
	}

	public function getNotes(){
	  return $this->notes;
	}

                        	                   			private $sellerNotes;
    	                        
	public function setSellerNotes($sellerNotes){
		$this->sellerNotes = $sellerNotes;
         $this->apiParas["sellerNotes"] = $sellerNotes;
	}

	public function getSellerNotes(){
	  return $this->sellerNotes;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $county;
    	                        
	public function setCounty($county){
		$this->county = $county;
         $this->apiParas["county"] = $county;
	}

	public function getCounty(){
	  return $this->county;
	}

                        	                   			private $zipcode;
    	                        
	public function setZipcode($zipcode){
		$this->zipcode = $zipcode;
         $this->apiParas["zipcode"] = $zipcode;
	}

	public function getZipcode(){
	  return $this->zipcode;
	}

                        	                   			private $contact;
    	                        
	public function setContact($contact){
		$this->contact = $contact;
         $this->apiParas["contact"] = $contact;
	}

	public function getContact(){
	  return $this->contact;
	}

                        	                   			private $tel;
    	                        
	public function setTel($tel){
		$this->tel = $tel;
         $this->apiParas["tel"] = $tel;
	}

	public function getTel(){
	  return $this->tel;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $operator;
    	                        
	public function setOperator($operator){
		$this->operator = $operator;
         $this->apiParas["operator"] = $operator;
	}

	public function getOperator(){
	  return $this->operator;
	}

                            }





        
 

