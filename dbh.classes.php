<?php
class Dbh{
protected function connect(){   //now database can use this class and another clanss can extends with protected access modifiers
   try{
          $username="root";
          $password="";
          $dbh= new PDO('mysql:host=localhost;dbname=ooplogin',$username. $password);
          return $dbh;
   } 
   catch(PDOException $e)
   {
      //throw $th;
      print "Error!:". $e->getMessage()."<br/>";
      die();
   }
}
}
?>