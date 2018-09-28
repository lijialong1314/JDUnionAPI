<?php
class EclpGoodsSaveGoodsRecordRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.goods.saveGoodsRecord";
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
                                                        		                                    	                   			private $bondedArea;
    	                        
	public function setBondedArea($bondedArea){
		$this->bondedArea = $bondedArea;
         $this->apiParas["bondedArea"] = $bondedArea;
	}

	public function getBondedArea(){
	  return $this->bondedArea;
	}

                        	                   			private $platformId;
    	                        
	public function setPlatformId($platformId){
		$this->platformId = $platformId;
         $this->apiParas["platformId"] = $platformId;
	}

	public function getPlatformId(){
	  return $this->platformId;
	}

                        	                   			private $platformName;
    	                        
	public function setPlatformName($platformName){
		$this->platformName = $platformName;
         $this->apiParas["platformName"] = $platformName;
	}

	public function getPlatformName(){
	  return $this->platformName;
	}

                        	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $pattern;
    	                        
	public function setPattern($pattern){
		$this->pattern = $pattern;
         $this->apiParas["pattern"] = $pattern;
	}

	public function getPattern(){
	  return $this->pattern;
	}

                        	                   			private $isvGoodsNo;
    	                        
	public function setIsvGoodsNo($isvGoodsNo){
		$this->isvGoodsNo = $isvGoodsNo;
         $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
	}

	public function getIsvGoodsNo(){
	  return $this->isvGoodsNo;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $barcodes;
    	                        
	public function setBarcodes($barcodes){
		$this->barcodes = $barcodes;
         $this->apiParas["barcodes"] = $barcodes;
	}

	public function getBarcodes(){
	  return $this->barcodes;
	}

                        	                   			private $postChangeType;
    	                        
	public function setPostChangeType($postChangeType){
		$this->postChangeType = $postChangeType;
         $this->apiParas["postChangeType"] = $postChangeType;
	}

	public function getPostChangeType(){
	  return $this->postChangeType;
	}

                        	                   			private $brand;
    	                        
	public function setBrand($brand){
		$this->brand = $brand;
         $this->apiParas["brand"] = $brand;
	}

	public function getBrand(){
	  return $this->brand;
	}

                        	                   			private $brandEn;
    	                        
	public function setBrandEn($brandEn){
		$this->brandEn = $brandEn;
         $this->apiParas["brandEn"] = $brandEn;
	}

	public function getBrandEn(){
	  return $this->brandEn;
	}

                        	                   			private $goodsName;
    	                        
	public function setGoodsName($goodsName){
		$this->goodsName = $goodsName;
         $this->apiParas["goodsName"] = $goodsName;
	}

	public function getGoodsName(){
	  return $this->goodsName;
	}

                        	                   			private $goodsNameEn;
    	                        
	public function setGoodsNameEn($goodsNameEn){
		$this->goodsNameEn = $goodsNameEn;
         $this->apiParas["goodsNameEn"] = $goodsNameEn;
	}

	public function getGoodsNameEn(){
	  return $this->goodsNameEn;
	}

                        	                   			private $modelNumber;
    	                        
	public function setModelNumber($modelNumber){
		$this->modelNumber = $modelNumber;
         $this->apiParas["modelNumber"] = $modelNumber;
	}

	public function getModelNumber(){
	  return $this->modelNumber;
	}

                        	                   			private $spe;
    	                        
	public function setSpe($spe){
		$this->spe = $spe;
         $this->apiParas["spe"] = $spe;
	}

	public function getSpe(){
	  return $this->spe;
	}

                        	                   			private $unit;
    	                        
	public function setUnit($unit){
		$this->unit = $unit;
         $this->apiParas["unit"] = $unit;
	}

	public function getUnit(){
	  return $this->unit;
	}

                        	                   			private $grossWeight;
    	                        
	public function setGrossWeight($grossWeight){
		$this->grossWeight = $grossWeight;
         $this->apiParas["grossWeight"] = $grossWeight;
	}

	public function getGrossWeight(){
	  return $this->grossWeight;
	}

                        	                   			private $netWeight;
    	                        
	public function setNetWeight($netWeight){
		$this->netWeight = $netWeight;
         $this->apiParas["netWeight"] = $netWeight;
	}

	public function getNetWeight(){
	  return $this->netWeight;
	}

                        	                   			private $hsCode;
    	                        
	public function setHsCode($hsCode){
		$this->hsCode = $hsCode;
         $this->apiParas["hsCode"] = $hsCode;
	}

	public function getHsCode(){
	  return $this->hsCode;
	}

                        	                   			private $vatRate;
    	                        
	public function setVatRate($vatRate){
		$this->vatRate = $vatRate;
         $this->apiParas["vatRate"] = $vatRate;
	}

	public function getVatRate(){
	  return $this->vatRate;
	}

                        	                   			private $taxRate;
    	                        
	public function setTaxRate($taxRate){
		$this->taxRate = $taxRate;
         $this->apiParas["taxRate"] = $taxRate;
	}

	public function getTaxRate(){
	  return $this->taxRate;
	}

                        	                   			private $hgsbys;
    	                        
	public function setHgsbys($hgsbys){
		$this->hgsbys = $hgsbys;
         $this->apiParas["hgsbys"] = $hgsbys;
	}

	public function getHgsbys(){
	  return $this->hgsbys;
	}

                        	                   			private $function;
    	                        
	public function setFunction($function){
		$this->function = $function;
         $this->apiParas["function"] = $function;
	}

	public function getFunction(){
	  return $this->function;
	}

                        	                   			private $purpose;
    	                        
	public function setPurpose($purpose){
		$this->purpose = $purpose;
         $this->apiParas["purpose"] = $purpose;
	}

	public function getPurpose(){
	  return $this->purpose;
	}

                        	                   			private $composition;
    	                        
	public function setComposition($composition){
		$this->composition = $composition;
         $this->apiParas["composition"] = $composition;
	}

	public function getComposition(){
	  return $this->composition;
	}

                        	                   			private $enterpriseName;
    	                        
	public function setEnterpriseName($enterpriseName){
		$this->enterpriseName = $enterpriseName;
         $this->apiParas["enterpriseName"] = $enterpriseName;
	}

	public function getEnterpriseName(){
	  return $this->enterpriseName;
	}

                        	                   			private $enterpriseAddress;
    	                        
	public function setEnterpriseAddress($enterpriseAddress){
		$this->enterpriseAddress = $enterpriseAddress;
         $this->apiParas["enterpriseAddress"] = $enterpriseAddress;
	}

	public function getEnterpriseAddress(){
	  return $this->enterpriseAddress;
	}

                        	                   			private $country;
    	                        
	public function setCountry($country){
		$this->country = $country;
         $this->apiParas["country"] = $country;
	}

	public function getCountry(){
	  return $this->country;
	}

                        	                   			private $qiCountry;
    	                        
	public function setQiCountry($qiCountry){
		$this->qiCountry = $qiCountry;
         $this->apiParas["qiCountry"] = $qiCountry;
	}

	public function getQiCountry(){
	  return $this->qiCountry;
	}

                        	                   			private $originRegion;
    	                        
	public function setOriginRegion($originRegion){
		$this->originRegion = $originRegion;
         $this->apiParas["originRegion"] = $originRegion;
	}

	public function getOriginRegion(){
	  return $this->originRegion;
	}

                        	                   			private $goodsCostPrice;
    	                        
	public function setGoodsCostPrice($goodsCostPrice){
		$this->goodsCostPrice = $goodsCostPrice;
         $this->apiParas["goodsCostPrice"] = $goodsCostPrice;
	}

	public function getGoodsCostPrice(){
	  return $this->goodsCostPrice;
	}

                        	                   			private $goodsSellerPrice;
    	                        
	public function setGoodsSellerPrice($goodsSellerPrice){
		$this->goodsSellerPrice = $goodsSellerPrice;
         $this->apiParas["goodsSellerPrice"] = $goodsSellerPrice;
	}

	public function getGoodsSellerPrice(){
	  return $this->goodsSellerPrice;
	}

                        	                   			private $volume;
    	                        
	public function setVolume($volume){
		$this->volume = $volume;
         $this->apiParas["volume"] = $volume;
	}

	public function getVolume(){
	  return $this->volume;
	}

                        	                   			private $safeDays;
    	                        
	public function setSafeDays($safeDays){
		$this->safeDays = $safeDays;
         $this->apiParas["safeDays"] = $safeDays;
	}

	public function getSafeDays(){
	  return $this->safeDays;
	}

                        	                   			private $saleWebPage;
    	                        
	public function setSaleWebPage($saleWebPage){
		$this->saleWebPage = $saleWebPage;
         $this->apiParas["saleWebPage"] = $saleWebPage;
	}

	public function getSaleWebPage(){
	  return $this->saleWebPage;
	}

                        	                   			private $goodsPicture;
    	                        
	public function setGoodsPicture($goodsPicture){
		$this->goodsPicture = $goodsPicture;
         $this->apiParas["goodsPicture"] = $goodsPicture;
	}

	public function getGoodsPicture(){
	  return $this->goodsPicture;
	}

                        	                   			private $goodsData;
    	                        
	public function setGoodsData($goodsData){
		$this->goodsData = $goodsData;
         $this->apiParas["goodsData"] = $goodsData;
	}

	public function getGoodsData(){
	  return $this->goodsData;
	}

                        	                   			private $contacts;
    	                        
	public function setContacts($contacts){
		$this->contacts = $contacts;
         $this->apiParas["contacts"] = $contacts;
	}

	public function getContacts(){
	  return $this->contacts;
	}

                        	                   			private $email;
    	                        
	public function setEmail($email){
		$this->email = $email;
         $this->apiParas["email"] = $email;
	}

	public function getEmail(){
	  return $this->email;
	}

                        	                   			private $telephone;
    	                        
	public function setTelephone($telephone){
		$this->telephone = $telephone;
         $this->apiParas["telephone"] = $telephone;
	}

	public function getTelephone(){
	  return $this->telephone;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $reserve1;
    	                        
	public function setReserve1($reserve1){
		$this->reserve1 = $reserve1;
         $this->apiParas["reserve1"] = $reserve1;
	}

	public function getReserve1(){
	  return $this->reserve1;
	}

                        	                   			private $reserve2;
    	                        
	public function setReserve2($reserve2){
		$this->reserve2 = $reserve2;
         $this->apiParas["reserve2"] = $reserve2;
	}

	public function getReserve2(){
	  return $this->reserve2;
	}

                        	                   			private $reserve3;
    	                        
	public function setReserve3($reserve3){
		$this->reserve3 = $reserve3;
         $this->apiParas["reserve3"] = $reserve3;
	}

	public function getReserve3(){
	  return $this->reserve3;
	}

                        	                   			private $reserve4;
    	                        
	public function setReserve4($reserve4){
		$this->reserve4 = $reserve4;
         $this->apiParas["reserve4"] = $reserve4;
	}

	public function getReserve4(){
	  return $this->reserve4;
	}

                        	                   			private $reserve5;
    	                        
	public function setReserve5($reserve5){
		$this->reserve5 = $reserve5;
         $this->apiParas["reserve5"] = $reserve5;
	}

	public function getReserve5(){
	  return $this->reserve5;
	}

                                                    	}





        
 

