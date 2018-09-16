<?php





function ref_number($length = 15) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



function createRandomPassword() {

    $chars = "abcdefghijkmnopqrstuvwxyz023456789";

      srand((double)microtime()*1000000);

      $i = 0;

      $pass = '' ;

      while ($i <= 7) {

          $num = rand() % 33;

          $tmp = substr($chars, $num, 1);

          $pass = $pass . $tmp;

          $i++;

      }

      return $pass;

  }






  function reduceCharsToAbout15 ($string){

  $strlen = strlen($string);

  if($strlen > 30){
  for( $i = 10; $i <= $strlen; $i++ ) {

  $string = substr( $string, $i); //restricting char to be revoming first 10 characters

  $strl =  strlen($string);

  if( $strl <= 15 ) { break; } //making sure the char output isnt more than 10

  }

  }

  return   $string;

  }




  function  arrageImageName($imagename){

          $w =  preg_replace("/\s*[^A-Za-z0-9.]/","",$imagename) ;

          $w = reduceCharsToAbout15($w); //check size first make sure its not more than 15 chars long

          $filename = "sh_".createRandomPassword().$w;


          return $filename;

     }



     function slug($string){

        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }




    function concatenate($string){

        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to period
        $string = preg_replace("/[\s_]/", ".", $string);
        return $string;
    }









?>