<?php 

class Headgear {

    public $version; 
    public $items = array();

	public function __toString() {
		return $this->version."\n";
	}
	
    public function toJson() {
        $itemsJson = "";
        for($i = 0; $i < count($this->items); $i++) {
            if ($i != 0){
                $itemsJson.=",";
            }
            $item = $this->items[$i];
            $itemsJson.=$item->toJson();
        }
        return 
        "{\"version\": \"".$this->version."\",".
        "\"items\": [".$itemsJson."]}";
    }
	
    public function addItem($item) {
        $this->items[count($this->items)] = $item;
    }
}

class HeadgearItem {

    public $name;
    public $imageUrl;
    public $damageReduction;
    public $durability;
    public $weight;

    public function __toString() {
        return $this->name."\n".
        $this->imageUrl."\n".
        $this->damageReduction."\n".
        $this->durability."\n".
        $this->weight."\n";
    }

    public function toJson() {
        return "{".
        "\"name\":\"".$this->name."\",".
        "\"imageUrl\":\"".$this->imageUrl."\",".
        "\"damageReduction\":\"".$this->damageReduction."\",".
        "\"durability\":\"".$this->durability."\",".
        "\"weight\":\"".$this->weight."\"".
        "}";
    }

}

?>