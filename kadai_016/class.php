
<!DOCTYPE html>
<html lang="ja">
<?php

class food {
public $name;
public $price;

public function __construct(string $name, int $price) {
  $this->name = $name;
  $this->price = $price;
 }

public function show_price() {
 echo $this->price;
}


}

class animal {

private $name;
private $height;
private $weight;

public function __construct( string $name, int $height, int $weight) {
  $this->name = $name;
  $this->height = $height;
  $this->weight = $weight; 
  }

public function show_height() {
echo $this->height;
}

}

$tomat = new food('とまと', 100) ;
$cat = new animal('猫', 60, 20);
print_r($tomat);
print_r($cat);
$tomat->show_price();
echo "<br>";
$cat->show_height();

?>

</html>