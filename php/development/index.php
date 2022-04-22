<?php

class animal{
     public $name;

     public function __construct(String $name)
     {
          $this->name = $name;
     } 

     function sound(){}
}

class dog extends animal{
     function name(){
          return $this->name;
     }

     function sound(){
          return "gug gug gug...";
     }
}

class cat extends animal{

     // override
     public function __construct(String $name, String $tahun)
     {
          $this->name = $name;     

     }

     function name(): string{
          return $this->name;
     }

     function sound(){
          return "meoowww...";
     }
}

class upcasting{
     function sound(cat $sound){
          return $sound->name("sad");
     }
}

// $dog = new dog("Siberian husky");
// echo($dog->name());
$cat = new cat("Kucing kampungs", "1");
// echo($cat->name());

$casting = new upcasting();
echo($casting->sound($cat));

// $abs = new animal("Kucing");