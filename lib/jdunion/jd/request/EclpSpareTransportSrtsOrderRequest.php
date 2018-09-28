<?php
class EclpSpareTransportSrtsOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.spare.transportSrtsOrder";
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
                                                        		                                    	                   			private $tid;
    	                        
	public function setTid($tid){
		$this->tid = $tid;
         $this->apiParas["tid"] = $tid;
	}

	public function getTid(){
	  return $this->tid;
	}

                        	                   			private $isvSrtsNo;
    	                        
	public function setIsvSrtsNo($isvSrtsNo){
		$this->isvSrtsNo = $isvSrtsNo;
         $this->apiParas["isvSrtsNo"] = $isvSrtsNo;
	}

	public function getIsvSrtsNo(){
	  return $this->isvSrtsNo;
	}

                        	                   			private $sellerNo;
    	                        
	public function setSellerNo($sellerNo){
		$this->sellerNo = $sellerNo;
         $this->apiParas["sellerNo"] = $sellerNo;
	}

	public function getSellerNo(){
	  return $this->sellerNo;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $supplierNo;
    	                        
	public function setSupplierNo($supplierNo){
		$this->supplierNo = $supplierNo;
         $this->apiParas["supplierNo"] = $supplierNo;
	}

	public function getSupplierNo(){
	  return $this->supplierNo;
	}

                        	                   			private $billType;
    	                        
	public function setBillType($billType){
		$this->billType = $billType;
         $this->apiParas["billType"] = $billType;
	}

	public function getBillType(){
	  return $this->billType;
	}

                        	                   			private $shipVia;
    	                        
	public function setShipVia($shipVia){
		$this->shipVia = $shipVia;
         $this->apiParas["shipVia"] = $shipVia;
	}

	public function getShipVia(){
	  return $this->shipVia;
	}

                        	                   			private $comment;
    	                        
	public function setComment($comment){
		$this->comment = $comment;
         $this->apiParas["comment"] = $comment;
	}

	public function getComment(){
	  return $this->comment;
	}

                        	                   			private $spareWarehouseNo;
    	                        
	public function setSpareWarehouseNo($spareWarehouseNo){
		$this->spareWarehouseNo = $spareWarehouseNo;
         $this->apiParas["spareWarehouseNo"] = $spareWarehouseNo;
	}

	public function getSpareWarehouseNo(){
	  return $this->spareWarehouseNo;
	}

                        	                   			private $receiveName;
    	                        
	public function setReceiveName($receiveName){
		$this->receiveName = $receiveName;
         $this->apiParas["receiveName"] = $receiveName;
	}

	public function getReceiveName(){
	  return $this->receiveName;
	}

                        	                   			private $receivePhone;
    	                        
	public function setReceivePhone($receivePhone){
		$this->receivePhone = $receivePhone;
         $this->apiParas["receivePhone"] = $receivePhone;
	}

	public function getReceivePhone(){
	  return $this->receivePhone;
	}

                        	                   			private $provinceId;
    	                        
	public function setProvinceId($provinceId){
		$this->provinceId = $provinceId;
         $this->apiParas["provinceId"] = $provinceId;
	}

	public function getProvinceId(){
	  return $this->provinceId;
	}

                        	                   			private $cityId;
    	                        
	public function setCityId($cityId){
		$this->cityId = $cityId;
         $this->apiParas["cityId"] = $cityId;
	}

	public function getCityId(){
	  return $this->cityId;
	}

                        	                   			private $countyId;
    	                        
	public function setCountyId($countyId){
		$this->countyId = $countyId;
         $this->apiParas["countyId"] = $countyId;
	}

	public function getCountyId(){
	  return $this->countyId;
	}

                        	                   			private $townId;
    	                        
	public function setTownId($townId){
		$this->townId = $townId;
         $this->apiParas["townId"] = $townId;
	}

	public function getTownId(){
	  return $this->townId;
	}

                        	                   			private $receiveAddress;
    	                        
	public function setReceiveAddress($receiveAddress){
		$this->receiveAddress = $receiveAddress;
         $this->apiParas["receiveAddress"] = $receiveAddress;
	}

	public function getReceiveAddress(){
	  return $this->receiveAddress;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                        private $goodsNo;
                              public function setGoodsNo($goodsNo ){
                 $this->goodsNo=$goodsNo;
                 $this->apiParas["goodsNo"] = $goodsNo;
              }

              public function getGoodsNo(){
              	return $this->goodsNo;
              }
                                                                                                                                                                                                                                                                                                                       private $goodsLevel;
                              public function setGoodsLevel($goodsLevel ){
                 $this->goodsLevel=$goodsLevel;
                 $this->apiParas["goodsLevel"] = $goodsLevel;
              }

              public function getGoodsLevel(){
              	return $this->goodsLevel;
              }
                                                                                                                                                                                                                                                                                                                       private $goodsName;
                              public function setGoodsName($goodsName ){
                 $this->goodsName=$goodsName;
                 $this->apiParas["goodsName"] = $goodsName;
              }

              public function getGoodsName(){
              	return $this->goodsName;
              }
                                                                                                                                                                                                                                                                                                                       private $outSpareWarehouseNum;
                              public function setOutSpareWarehouseNum($outSpareWarehouseNum ){
                 $this->outSpareWarehouseNum=$outSpareWarehouseNum;
                 $this->apiParas["outSpareWarehouseNum"] = $outSpareWarehouseNum;
              }

              public function getOutSpareWarehouseNum(){
              	return $this->outSpareWarehouseNum;
              }
                                                                                                                                        	}





        
 

