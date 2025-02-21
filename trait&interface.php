<?php
trait HasLegs {
    public function walk(){
        $steps = 0;
        while($steps <= 10){
            echo $steps++ . '<br>';
        }
    }
}

trait HasFins {
    public function swim(){
        $laps = 0;
        while($laps <= 20){
            echo $laps++ . '<br>';
        }
    }
}

class Cat  {
    use HasLegs;
}
class Fish {
    use HasFins;
}
$cat = new Cat;
$cat->walk();

$fish = new Fish;
$fish->swim();


class Duck
{
    use HasLegs, HasFins;
}
 
$duck = new Duck();
$duck->walk();
//or
$duck->swim();

echo '<br><br><br><br><br>';


// INTERFACE
interface Bug
{
    public function legs();
    public function eyes();
}

class Spider implements Bug
{
    public function legs()
    {
        echo '8';
    }
 
    public function eyes()
    {
        echo '8';
    }
}

$bug = new Spider;
$bug->legs();
$bug->eyes();