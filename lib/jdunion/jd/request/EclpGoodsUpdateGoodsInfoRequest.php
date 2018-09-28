<?php
class EclpGoodsUpdateGoodsInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.goods.updateGoodsInfo";
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
                                                        		                                    	                   			private $goodsNo;
    	                        
	public function setGoodsNo($goodsNo){
		$this->goodsNo = $goodsNo;
         $this->apiParas["goodsNo"] = $goodsNo;
	}

	public function getGoodsNo(){
	  return $this->goodsNo;
	}

                        	                   			private $spGoodsNo;
    	                        
	public function setSpGoodsNo($spGoodsNo){
		$this->spGoodsNo = $spGoodsNo;
         $this->apiParas["spGoodsNo"] = $spGoodsNo;
	}

	public function getSpGoodsNo(){
	  return $this->spGoodsNo;
	}

                        	                   			private $barcodes;
    	                        
	public function setBarcodes($barcodes){
		$this->barcodes = $barcodes;
         $this->apiParas["barcodes"] = $barcodes;
	}

	public function getBarcodes(){
	  return $this->barcodes;
	}

                        	                   			private $abbreviation;
    	                        
	public function setAbbreviation($abbreviation){
		$this->abbreviation = $abbreviation;
         $this->apiParas["abbreviation"] = $abbreviation;
	}

	public function getAbbreviation(){
	  return $this->abbreviation;
	}

                        	                   			private $brandNo;
    	                        
	public function setBrandNo($brandNo){
		$this->brandNo = $brandNo;
         $this->apiParas["brandNo"] = $brandNo;
	}

	public function getBrandNo(){
	  return $this->brandNo;
	}

                        	                   			private $brandName;
    	                        
	public function setBrandName($brandName){
		$this->brandName = $brandName;
         $this->apiParas["brandName"] = $brandName;
	}

	public function getBrandName(){
	  return $this->brandName;
	}

                        	                   			private $manufacturer;
    	                        
	public function setManufacturer($manufacturer){
		$this->manufacturer = $manufacturer;
         $this->apiParas["manufacturer"] = $manufacturer;
	}

	public function getManufacturer(){
	  return $this->manufacturer;
	}

                        	                   			private $produceAddress;
    	                        
	public function setProduceAddress($produceAddress){
		$this->produceAddress = $produceAddress;
         $this->apiParas["produceAddress"] = $produceAddress;
	}

	public function getProduceAddress(){
	  return $this->produceAddress;
	}

                        	                   			private $standard;
    	                        
	public function setStandard($standard){
		$this->standard = $standard;
         $this->apiParas["standard"] = $standard;
	}

	public function getStandard(){
	  return $this->standard;
	}

                        	                   			private $color;
    	                        
	public function setColor($color){
		$this->color = $color;
         $this->apiParas["color"] = $color;
	}

	public function getColor(){
	  return $this->color;
	}

                        	                   			private $size;
    	                        
	public function setSize($size){
		$this->size = $size;
         $this->apiParas["size"] = $size;
	}

	public function getSize(){
	  return $this->size;
	}

                        	                   			private $sizeDefinition;
    	                        
	public function setSizeDefinition($sizeDefinition){
		$this->sizeDefinition = $sizeDefinition;
         $this->apiParas["sizeDefinition"] = $sizeDefinition;
	}

	public function getSizeDefinition(){
	  return $this->sizeDefinition;
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

                        	                   			private $batch;
    	                        
	public function setBatch($batch){
		$this->batch = $batch;
         $this->apiParas["batch"] = $batch;
	}

	public function getBatch(){
	  return $this->batch;
	}

                        	                   			private $cheapGift;
    	                        
	public function setCheapGift($cheapGift){
		$this->cheapGift = $cheapGift;
         $this->apiParas["cheapGift"] = $cheapGift;
	}

	public function getCheapGift(){
	  return $this->cheapGift;
	}

                        	                   			private $quality;
    	                        
	public function setQuality($quality){
		$this->quality = $quality;
         $this->apiParas["quality"] = $quality;
	}

	public function getQuality(){
	  return $this->quality;
	}

                        	                   			private $expensive;
    	                        
	public function setExpensive($expensive){
		$this->expensive = $expensive;
         $this->apiParas["expensive"] = $expensive;
	}

	public function getExpensive(){
	  return $this->expensive;
	}

                        	                   			private $luxury;
    	                        
	public function setLuxury($luxury){
		$this->luxury = $luxury;
         $this->apiParas["luxury"] = $luxury;
	}

	public function getLuxury(){
	  return $this->luxury;
	}

                        	                   			private $breakable;
    	                        
	public function setBreakable($breakable){
		$this->breakable = $breakable;
         $this->apiParas["breakable"] = $breakable;
	}

	public function getBreakable(){
	  return $this->breakable;
	}

                        	                   			private $liquid;
    	                        
	public function setLiquid($liquid){
		$this->liquid = $liquid;
         $this->apiParas["liquid"] = $liquid;
	}

	public function getLiquid(){
	  return $this->liquid;
	}

                        	                   			private $consumables;
    	                        
	public function setConsumables($consumables){
		$this->consumables = $consumables;
         $this->apiParas["consumables"] = $consumables;
	}

	public function getConsumables(){
	  return $this->consumables;
	}

                        	                   			private $abnormal;
    	                        
	public function setAbnormal($abnormal){
		$this->abnormal = $abnormal;
         $this->apiParas["abnormal"] = $abnormal;
	}

	public function getAbnormal(){
	  return $this->abnormal;
	}

                        	                   			private $imported;
    	                        
	public function setImported($imported){
		$this->imported = $imported;
         $this->apiParas["imported"] = $imported;
	}

	public function getImported(){
	  return $this->imported;
	}

                        	                   			private $health;
    	                        
	public function setHealth($health){
		$this->health = $health;
         $this->apiParas["health"] = $health;
	}

	public function getHealth(){
	  return $this->health;
	}

                        	                   			private $temperature;
    	                        
	public function setTemperature($temperature){
		$this->temperature = $temperature;
         $this->apiParas["temperature"] = $temperature;
	}

	public function getTemperature(){
	  return $this->temperature;
	}

                        	                   			private $temperatureCeil;
    	                        
	public function setTemperatureCeil($temperatureCeil){
		$this->temperatureCeil = $temperatureCeil;
         $this->apiParas["temperatureCeil"] = $temperatureCeil;
	}

	public function getTemperatureCeil(){
	  return $this->temperatureCeil;
	}

                        	                   			private $temperatureFloor;
    	                        
	public function setTemperatureFloor($temperatureFloor){
		$this->temperatureFloor = $temperatureFloor;
         $this->apiParas["temperatureFloor"] = $temperatureFloor;
	}

	public function getTemperatureFloor(){
	  return $this->temperatureFloor;
	}

                        	                   			private $humidity;
    	                        
	public function setHumidity($humidity){
		$this->humidity = $humidity;
         $this->apiParas["humidity"] = $humidity;
	}

	public function getHumidity(){
	  return $this->humidity;
	}

                        	                   			private $humidityCeil;
    	                        
	public function setHumidityCeil($humidityCeil){
		$this->humidityCeil = $humidityCeil;
         $this->apiParas["humidityCeil"] = $humidityCeil;
	}

	public function getHumidityCeil(){
	  return $this->humidityCeil;
	}

                        	                   			private $humidityFloor;
    	                        
	public function setHumidityFloor($humidityFloor){
		$this->humidityFloor = $humidityFloor;
         $this->apiParas["humidityFloor"] = $humidityFloor;
	}

	public function getHumidityFloor(){
	  return $this->humidityFloor;
	}

                        	                   			private $movable;
    	                        
	public function setMovable($movable){
		$this->movable = $movable;
         $this->apiParas["movable"] = $movable;
	}

	public function getMovable(){
	  return $this->movable;
	}

                        	                   			private $service3g;
    	                        
	public function setService3g($service3g){
		$this->service3g = $service3g;
         $this->apiParas["service3g"] = $service3g;
	}

	public function getService3g(){
	  return $this->service3g;
	}

                        	                   			private $sample;
    	                        
	public function setSample($sample){
		$this->sample = $sample;
         $this->apiParas["sample"] = $sample;
	}

	public function getSample(){
	  return $this->sample;
	}

                        	                   			private $odor;
    	                        
	public function setOdor($odor){
		$this->odor = $odor;
         $this->apiParas["odor"] = $odor;
	}

	public function getOdor(){
	  return $this->odor;
	}

                        	                   			private $sex;
    	                        
	public function setSex($sex){
		$this->sex = $sex;
         $this->apiParas["sex"] = $sex;
	}

	public function getSex(){
	  return $this->sex;
	}

                        	                   			private $precious;
    	                        
	public function setPrecious($precious){
		$this->precious = $precious;
         $this->apiParas["precious"] = $precious;
	}

	public function getPrecious(){
	  return $this->precious;
	}

                        	                   			private $mixedBatch;
    	                        
	public function setMixedBatch($mixedBatch){
		$this->mixedBatch = $mixedBatch;
         $this->apiParas["mixedBatch"] = $mixedBatch;
	}

	public function getMixedBatch(){
	  return $this->mixedBatch;
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

                        	                   			private $reserve6;
    	                        
	public function setReserve6($reserve6){
		$this->reserve6 = $reserve6;
         $this->apiParas["reserve6"] = $reserve6;
	}

	public function getReserve6(){
	  return $this->reserve6;
	}

                        	                   			private $reserve7;
    	                        
	public function setReserve7($reserve7){
		$this->reserve7 = $reserve7;
         $this->apiParas["reserve7"] = $reserve7;
	}

	public function getReserve7(){
	  return $this->reserve7;
	}

                        	                   			private $reserve8;
    	                        
	public function setReserve8($reserve8){
		$this->reserve8 = $reserve8;
         $this->apiParas["reserve8"] = $reserve8;
	}

	public function getReserve8(){
	  return $this->reserve8;
	}

                        	                   			private $reserve9;
    	                        
	public function setReserve9($reserve9){
		$this->reserve9 = $reserve9;
         $this->apiParas["reserve9"] = $reserve9;
	}

	public function getReserve9(){
	  return $this->reserve9;
	}

                        	                   			private $reserve10;
    	                        
	public function setReserve10($reserve10){
		$this->reserve10 = $reserve10;
         $this->apiParas["reserve10"] = $reserve10;
	}

	public function getReserve10(){
	  return $this->reserve10;
	}

                        	                   			private $fashionNo;
    	                        
	public function setFashionNo($fashionNo){
		$this->fashionNo = $fashionNo;
         $this->apiParas["fashionNo"] = $fashionNo;
	}

	public function getFashionNo(){
	  return $this->fashionNo;
	}

                        	                   			private $goodsMess;
    	                        
	public function setGoodsMess($goodsMess){
		$this->goodsMess = $goodsMess;
         $this->apiParas["goodsMess"] = $goodsMess;
	}

	public function getGoodsMess(){
	  return $this->goodsMess;
	}

                        	                   			private $isvGoodsNo;
    	                        
	public function setIsvGoodsNo($isvGoodsNo){
		$this->isvGoodsNo = $isvGoodsNo;
         $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
	}

	public function getIsvGoodsNo(){
	  return $this->isvGoodsNo;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $signType;
    	                        
	public function setSignType($signType){
		$this->signType = $signType;
         $this->apiParas["signType"] = $signType;
	}

	public function getSignType(){
	  return $this->signType;
	}

                        	                   			private $overseaPurchase;
    	                        
	public function setOverseaPurchase($overseaPurchase){
		$this->overseaPurchase = $overseaPurchase;
         $this->apiParas["overseaPurchase"] = $overseaPurchase;
	}

	public function getOverseaPurchase(){
	  return $this->overseaPurchase;
	}

                        	                   			private $qiRecord;
    	                        
	public function setQiRecord($qiRecord){
		$this->qiRecord = $qiRecord;
         $this->apiParas["qiRecord"] = $qiRecord;
	}

	public function getQiRecord(){
	  return $this->qiRecord;
	}

                        	                   			private $customRecord;
    	                        
	public function setCustomRecord($customRecord){
		$this->customRecord = $customRecord;
         $this->apiParas["customRecord"] = $customRecord;
	}

	public function getCustomRecord(){
	  return $this->customRecord;
	}

                        	                   			private $pattern;
    	                        
	public function setPattern($pattern){
		$this->pattern = $pattern;
         $this->apiParas["pattern"] = $pattern;
	}

	public function getPattern(){
	  return $this->pattern;
	}

                        	                   			private $ccProvider;
    	                        
	public function setCcProvider($ccProvider){
		$this->ccProvider = $ccProvider;
         $this->apiParas["ccProvider"] = $ccProvider;
	}

	public function getCcProvider(){
	  return $this->ccProvider;
	}

                        	                   			private $bondedArea;
    	                        
	public function setBondedArea($bondedArea){
		$this->bondedArea = $bondedArea;
         $this->apiParas["bondedArea"] = $bondedArea;
	}

	public function getBondedArea(){
	  return $this->bondedArea;
	}

                        	                   			private $sellerRecord;
    	                        
	public function setSellerRecord($sellerRecord){
		$this->sellerRecord = $sellerRecord;
         $this->apiParas["sellerRecord"] = $sellerRecord;
	}

	public function getSellerRecord(){
	  return $this->sellerRecord;
	}

                        	                   			private $batAttrIds;
    	                        
	public function setBatAttrIds($batAttrIds){
		$this->batAttrIds = $batAttrIds;
         $this->apiParas["batAttrIds"] = $batAttrIds;
	}

	public function getBatAttrIds(){
	  return $this->batAttrIds;
	}

                        	                   			private $needJDRecord;
    	                        
	public function setNeedJDRecord($needJDRecord){
		$this->needJDRecord = $needJDRecord;
         $this->apiParas["needJDRecord"] = $needJDRecord;
	}

	public function getNeedJDRecord(){
	  return $this->needJDRecord;
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

                        	                   			private $taxNumberPost;
    	                        
	public function setTaxNumberPost($taxNumberPost){
		$this->taxNumberPost = $taxNumberPost;
         $this->apiParas["taxNumberPost"] = $taxNumberPost;
	}

	public function getTaxNumberPost(){
	  return $this->taxNumberPost;
	}

                        	                   			private $postRate;
    	                        
	public function setPostRate($postRate){
		$this->postRate = $postRate;
         $this->apiParas["postRate"] = $postRate;
	}

	public function getPostRate(){
	  return $this->postRate;
	}

                        	                   			private $hsCode;
    	                        
	public function setHsCode($hsCode){
		$this->hsCode = $hsCode;
         $this->apiParas["hsCode"] = $hsCode;
	}

	public function getHsCode(){
	  return $this->hsCode;
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

                        	                   			private $flag;
    	                        
	public function setFlag($flag){
		$this->flag = $flag;
         $this->apiParas["flag"] = $flag;
	}

	public function getFlag(){
	  return $this->flag;
	}

                        	                   			private $legalUnit1;
    	                        
	public function setLegalUnit1($legalUnit1){
		$this->legalUnit1 = $legalUnit1;
         $this->apiParas["legalUnit1"] = $legalUnit1;
	}

	public function getLegalUnit1(){
	  return $this->legalUnit1;
	}

                        	                   			private $legalAmount1;
    	                        
	public function setLegalAmount1($legalAmount1){
		$this->legalAmount1 = $legalAmount1;
         $this->apiParas["legalAmount1"] = $legalAmount1;
	}

	public function getLegalAmount1(){
	  return $this->legalAmount1;
	}

                        	                   			private $measurement;
    	                        
	public function setMeasurement($measurement){
		$this->measurement = $measurement;
         $this->apiParas["measurement"] = $measurement;
	}

	public function getMeasurement(){
	  return $this->measurement;
	}

                        	                   			private $qiMeasurement;
    	                        
	public function setQiMeasurement($qiMeasurement){
		$this->qiMeasurement = $qiMeasurement;
         $this->apiParas["qiMeasurement"] = $qiMeasurement;
	}

	public function getQiMeasurement(){
	  return $this->qiMeasurement;
	}

                        	                   			private $delivery;
    	                        
	public function setDelivery($delivery){
		$this->delivery = $delivery;
         $this->apiParas["delivery"] = $delivery;
	}

	public function getDelivery(){
	  return $this->delivery;
	}

                        	                   			private $storeProperty;
    	                        
	public function setStoreProperty($storeProperty){
		$this->storeProperty = $storeProperty;
         $this->apiParas["storeProperty"] = $storeProperty;
	}

	public function getStoreProperty(){
	  return $this->storeProperty;
	}

                        	                   			private $productCategory;
    	                        
	public function setProductCategory($productCategory){
		$this->productCategory = $productCategory;
         $this->apiParas["productCategory"] = $productCategory;
	}

	public function getProductCategory(){
	  return $this->productCategory;
	}

                        	                   			private $category;
    	                        
	public function setCategory($category){
		$this->category = $category;
         $this->apiParas["category"] = $category;
	}

	public function getCategory(){
	  return $this->category;
	}

                        	                   			private $approvalNo;
    	                        
	public function setApprovalNo($approvalNo){
		$this->approvalNo = $approvalNo;
         $this->apiParas["approvalNo"] = $approvalNo;
	}

	public function getApprovalNo(){
	  return $this->approvalNo;
	}

                        	                   			private $storage;
    	                        
	public function setStorage($storage){
		$this->storage = $storage;
         $this->apiParas["storage"] = $storage;
	}

	public function getStorage(){
	  return $this->storage;
	}

                        	                   			private $form;
    	                        
	public function setForm($form){
		$this->form = $form;
         $this->apiParas["form"] = $form;
	}

	public function getForm(){
	  return $this->form;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $specification;
    	                        
	public function setSpecification($specification){
		$this->specification = $specification;
         $this->apiParas["specification"] = $specification;
	}

	public function getSpecification(){
	  return $this->specification;
	}

                        	                   			private $genericName;
    	                        
	public function setGenericName($genericName){
		$this->genericName = $genericName;
         $this->apiParas["genericName"] = $genericName;
	}

	public function getGenericName(){
	  return $this->genericName;
	}

                        	                   			private $dosage;
    	                        
	public function setDosage($dosage){
		$this->dosage = $dosage;
         $this->apiParas["dosage"] = $dosage;
	}

	public function getDosage(){
	  return $this->dosage;
	}

                        	                   			private $useMethods;
    	                        
	public function setUseMethods($useMethods){
		$this->useMethods = $useMethods;
         $this->apiParas["useMethods"] = $useMethods;
	}

	public function getUseMethods(){
	  return $this->useMethods;
	}

                        	                   			private $packingUnit;
    	                        
	public function setPackingUnit($packingUnit){
		$this->packingUnit = $packingUnit;
         $this->apiParas["packingUnit"] = $packingUnit;
	}

	public function getPackingUnit(){
	  return $this->packingUnit;
	}

                        	                   			private $efficacy;
    	                        
	public function setEfficacy($efficacy){
		$this->efficacy = $efficacy;
         $this->apiParas["efficacy"] = $efficacy;
	}

	public function getEfficacy(){
	  return $this->efficacy;
	}

                        	                   			private $manufactory;
    	                        
	public function setManufactory($manufactory){
		$this->manufactory = $manufactory;
         $this->apiParas["manufactory"] = $manufactory;
	}

	public function getManufactory(){
	  return $this->manufactory;
	}

                        	                   			private $price;
    	                        
	public function setPrice($price){
		$this->price = $price;
         $this->apiParas["price"] = $price;
	}

	public function getPrice(){
	  return $this->price;
	}

                                                    	}





        
 

