<?php

# comment
// comment
/*
  Multiline comment
*/

// variables
// $name = "Moniruzzaman Saikat";        # with double quote
// $favMusician = 'Marshmello';          # with singel quote
// $age = 19;                            # integer
// $height = 5.7;                        # float
// $$favMusician = 'The Marshmello DJ';  # variable's variable :)

# echo $name;               # print value
# echo $name  . '\'s favourite musician is ' . $favMusician; # concatenation string

// echo $Marshmello;


// function
// function greeting()
// {
//   echo "Hey, Hello";
// }

// function with parameters
// function greetingName($name)
// {
//   echo "Hey, " . $name;
// }

// greetingName("Saikat");

// function with return 
// function getPronoun($isMale)
// {
//   // condition
//   // if ($isMale) {
//   //   return 'He';
//   // }

//   // return 'She';

//   // ternary operator
//   return $isMale ? 'He' : 'She';
// }


// $name = 'Anne Marie';
// $pronoun = getPronoun(false);
// echo $pronoun . ' is ' . $name;

// function with multiple params
// function sum($a, $b)
// {
//   return $a + $b;
// }
// echo sum(10, 200);

// array
// $fruits = ['Mango', 'Banana', 'Jackfruit', 'Pineapple', 'Orange'];
// $players = array('M e s s i', 'N e y m a r', 'Ronaldo');

# indexing
// $neymar = $players[1]; // 0 means first and 2 means second and son on...
// $messi = $players[0];

# array from string 
// $neymarsLetters = explode(' ', $messi);

// looping
// for ($index = 0; $index < count($neymarsLetters); $index += 1) {
//   echo $neymarsLetters[$index];
//   echo  $index === count($neymarsLetters) - 1 ? '' : ', ';
// }

# foreach loop
// foreach ($neymarsLetters as $index => $letter) {
//   echo $neymarsLetters[$index];
//   echo  $index === count($neymarsLetters) - 1 ? '' : ', ';
// };

/***************************************
 * OBJECT ORIENTIED PROGRAMMING
 ***************************************/
class Person
{
  // space modifiers
  public $name;             # public can be accessed from outside of the class
  protected $homeTown;      # protected can be accessed from the derived or child class
  private $sallery;         # can only be accessed from this class

  // construct or magic function
  function __construct($name, $homeTown)
  {
    $this->name = $name;
    $this->homeTown = $homeTown;
  }

  // method
  function info()
  {
    echo $this->name . ' is from ' . $this->homeTown . ' and his sallery is ' . $this->sallery . '😀';
  }

  public function setSallery($sallery)
  {
    $this->sallery = $sallery;
  }
}

$saikat = new Person('Moniruzzaman Saikat', 'Lalmonirhat');
$saikat->setSallery('0000000');
$saikat->info();
