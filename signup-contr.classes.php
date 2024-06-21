<?php
class SignupContr extends Signup{
  private $uid;
  private $pwd;
  private $pwdRepeat;
  private $email;
 
  public function __construct($uid, $pwd, $pwdRepeat, $email){
  $this->uid=$uid;
  $this->pwd=$pwd;
  $this->pwdRepeat=$pwdRepeat;
  $this->email=$email;

  }

  public function signupUser(){
         if($this->emptyInput()==false){
        //echo "Empty Input!";
        header("location:../index.php?error=emptyinput");
        exit();
}

        if($this->invalidUid()==false){
            //echo "Invalid Username!";
            header("location:../index.php?error=username");
            exit();
        }


        if($this->invalidEmail()==false){
            //echo "Invalid Email!";
            header("location:../index.php?error=email");
            exit();
        }

        if($this->pwdMatch()==false){
            //echo "Password is not Matched!";
            header("location:../index.php?error=password");
            exit();
        }

        if($this->uidTakenCheck()==false){
            //echo "User or Email taken!";
            header("location:../index.php?error=uidoremailtaken");
            exit();
        }
      $this->setUser($this->uid, $this->pwd, $this->email);

  }



  private function emptyInput(){
    $result=true;

    if(empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)) {
        $result=false;
    }
    else{
        $result=true;
    }

    return $result;
  }
//Invalid User name
  private function invalidUid(){
    $result=true;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
    {
        $result=false;
    }
    else{
        $result=true;
    }

    return $result;
  }

//Invalid Email
  private function invalidEmail(){
    $result=true;
    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
    {
        $result=false;
    }
    else{
        $result=true;
    }

    return $result;
  }

  //Password Matched
  private function pwdMatch(){
    $result=true;
    if($this->pwd !==$this->pwdRepeat)
    {
        $result=false;
    }
    else{
        $result=true;
    }

    return $result;
  }

    //User is Checked
    private function uidTakenCheck(){
        $result=true;
        if(!$this->checkUser($this->uid, $this->email))
        {
            $result=false;
        }
        else{
            $result=true;
        }
    
        return $result;
      }

}
?>