<?php
class VcItemApplyAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.apply.add";
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
                                    	                                            		                                    	                   			private $props;
    	                        
	public function setProps($props){
		$this->props = $props;
         $this->apiParas["props"] = $props;
	}

	public function getProps(){
	  return $this->props;
	}

                        	                   			private $inputPids;
    	                                                            
	public function setInputPids($inputPids){
		$this->inputPids = $inputPids;
         $this->apiParas["input_pids"] = $inputPids;
	}

	public function getInputPids(){
	  return $this->inputPids;
	}

                        	                   			private $inputStr;
    	                                                            
	public function setInputStr($inputStr){
		$this->inputStr = $inputStr;
         $this->apiParas["input_str"] = $inputStr;
	}

	public function getInputStr(){
	  return $this->inputStr;
	}

                        	                   			private $wReadme;
    	                                                            
	public function setWReadme($wReadme){
		$this->wReadme = $wReadme;
         $this->apiParas["w_readme"] = $wReadme;
	}

	public function getWReadme(){
	  return $this->wReadme;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $cid1;
    	                        
	public function setCid1($cid1){
		$this->cid1 = $cid1;
         $this->apiParas["cid1"] = $cid1;
	}

	public function getCid1(){
	  return $this->cid1;
	}

                        	                   			private $cid2;
    	                        
	public function setCid2($cid2){
		$this->cid2 = $cid2;
         $this->apiParas["cid2"] = $cid2;
	}

	public function getCid2(){
	  return $this->cid2;
	}

                        	                   			private $model;
    	                        
	public function setModel($model){
		$this->model = $model;
         $this->apiParas["model"] = $model;
	}

	public function getModel(){
	  return $this->model;
	}

                        	                   			private $originalPlace;
    	                                                            
	public function setOriginalPlace($originalPlace){
		$this->originalPlace = $originalPlace;
         $this->apiParas["original_place"] = $originalPlace;
	}

	public function getOriginalPlace(){
	  return $this->originalPlace;
	}

                        	                   			private $length;
    	                        
	public function setLength($length){
		$this->length = $length;
         $this->apiParas["length"] = $length;
	}

	public function getLength(){
	  return $this->length;
	}

                        	                   			private $width;
    	                        
	public function setWidth($width){
		$this->width = $width;
         $this->apiParas["width"] = $width;
	}

	public function getWidth(){
	  return $this->width;
	}

                        	                   			private $height;
    	                        
	public function setHeight($height){
		$this->height = $height;
         $this->apiParas["height"] = $height;
	}

	public function getHeight(){
	  return $this->height;
	}

                        	                   			private $weight;
    	                        
	public function setWeight($weight){
		$this->weight = $weight;
         $this->apiParas["weight"] = $weight;
	}

	public function getWeight(){
	  return $this->weight;
	}

                        	                   			private $salerCode;
    	                                                            
	public function setSalerCode($salerCode){
		$this->salerCode = $salerCode;
         $this->apiParas["saler_code"] = $salerCode;
	}

	public function getSalerCode(){
	  return $this->salerCode;
	}

                        	                   			private $salerName;
    	                                                            
	public function setSalerName($salerName){
		$this->salerName = $salerName;
         $this->apiParas["saler_name"] = $salerName;
	}

	public function getSalerName(){
	  return $this->salerName;
	}

                        	                   			private $purchaserCode;
    	                                                            
	public function setPurchaserCode($purchaserCode){
		$this->purchaserCode = $purchaserCode;
         $this->apiParas["purchaser_code"] = $purchaserCode;
	}

	public function getPurchaserCode(){
	  return $this->purchaserCode;
	}

                        	                   			private $purchaserName;
    	                                                            
	public function setPurchaserName($purchaserName){
		$this->purchaserName = $purchaserName;
         $this->apiParas["purchaser_name"] = $purchaserName;
	}

	public function getPurchaserName(){
	  return $this->purchaserName;
	}

                        	                   			private $marketPrice;
    	                                                            
	public function setMarketPrice($marketPrice){
		$this->marketPrice = $marketPrice;
         $this->apiParas["market_price"] = $marketPrice;
	}

	public function getMarketPrice(){
	  return $this->marketPrice;
	}

                        	                   			private $purchasePrice;
    	                                                            
	public function setPurchasePrice($purchasePrice){
		$this->purchasePrice = $purchasePrice;
         $this->apiParas["purchase_price"] = $purchasePrice;
	}

	public function getPurchasePrice(){
	  return $this->purchasePrice;
	}

                        	                   			private $memberPrice;
    	                                                            
	public function setMemberPrice($memberPrice){
		$this->memberPrice = $memberPrice;
         $this->apiParas["member_price"] = $memberPrice;
	}

	public function getMemberPrice(){
	  return $this->memberPrice;
	}

                        	                   			private $brandId;
    	                                                            
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $zhBrand;
    	                                                            
	public function setZhBrand($zhBrand){
		$this->zhBrand = $zhBrand;
         $this->apiParas["zh_brand"] = $zhBrand;
	}

	public function getZhBrand(){
	  return $this->zhBrand;
	}

                        	                   			private $enBrand;
    	                                                            
	public function setEnBrand($enBrand){
		$this->enBrand = $enBrand;
         $this->apiParas["en_brand"] = $enBrand;
	}

	public function getEnBrand(){
	  return $this->enBrand;
	}

                        	                   			private $warranty;
    	                        
	public function setWarranty($warranty){
		$this->warranty = $warranty;
         $this->apiParas["warranty"] = $warranty;
	}

	public function getWarranty(){
	  return $this->warranty;
	}

                        	                   			private $shelfLife;
    	                                                            
	public function setShelfLife($shelfLife){
		$this->shelfLife = $shelfLife;
         $this->apiParas["shelf_life"] = $shelfLife;
	}

	public function getShelfLife(){
	  return $this->shelfLife;
	}

                        	                   			private $pkgInfo;
    	                                                            
	public function setPkgInfo($pkgInfo){
		$this->pkgInfo = $pkgInfo;
         $this->apiParas["pkg_info"] = $pkgInfo;
	}

	public function getPkgInfo(){
	  return $this->pkgInfo;
	}

                        	                   			private $skuUnit;
    	                                                            
	public function setSkuUnit($skuUnit){
		$this->skuUnit = $skuUnit;
         $this->apiParas["sku_unit"] = $skuUnit;
	}

	public function getSkuUnit(){
	  return $this->skuUnit;
	}

                        	                   			private $webSite;
    	                                                            
	public function setWebSite($webSite){
		$this->webSite = $webSite;
         $this->apiParas["web_site"] = $webSite;
	}

	public function getWebSite(){
	  return $this->webSite;
	}

                        	                   			private $tel;
    	                        
	public function setTel($tel){
		$this->tel = $tel;
         $this->apiParas["tel"] = $tel;
	}

	public function getTel(){
	  return $this->tel;
	}

                        	                   			private $upc;
    	                        
	public function setUpc($upc){
		$this->upc = $upc;
         $this->apiParas["upc"] = $upc;
	}

	public function getUpc(){
	  return $this->upc;
	}

                        	                   			private $intro;
    	                        
	public function setIntro($intro){
		$this->intro = $intro;
         $this->apiParas["intro"] = $intro;
	}

	public function getIntro(){
	  return $this->intro;
	}

                        	                   			private $packType;
    	                                                            
	public function setPackType($packType){
		$this->packType = $packType;
         $this->apiParas["pack_type"] = $packType;
	}

	public function getPackType(){
	  return $this->packType;
	}

                        	                   			private $packing;
    	                        
	public function setPacking($packing){
		$this->packing = $packing;
         $this->apiParas["packing"] = $packing;
	}

	public function getPacking(){
	  return $this->packing;
	}

                            }





        
 

