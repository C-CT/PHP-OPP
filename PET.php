<?php
        class Pet
        {
           public $name ;
           public $poisition;
           
           public function __construct($name)
            {
               $this->name= $name;
               $this->poisition=['x'=>0 , 'y'=>0]; 
            }
            public function moveTo( $x , $y )
            {
              $this->poisition['x'] = $x;
              $this->poisition['y'] = $y;
              return $this->poisition;
            }       
        }
        
        $cat1 =  new Pet("kitty");
        echo '第一隻貓的名子是' . $cat1->name ;
        echo "<br>";
        
        $cat1Position = $cat1-> moveTo(3,10);
        echo '第一隻貓的位置' . "x=" .$cat1Position['x'] ." , ". "y=" .$cat1Position['y']  ;
        echo "<br>";
        
        
        
        
        $cat2 =  new Pet("tom");
        echo '第二隻貓的名子是' . $cat2->name ;
        echo "<br>";
        $cat2Position = $cat1-> moveTo(100,100);
        echo '第二隻貓的位置' . "x=" .$cat2Position['x'] ." , ". "y=" .$cat2Position['y']  ;
        echo "<br>";       
        ?>