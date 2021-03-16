<?php

class User {

    protected $nickname;

    protected $email;

    protected $password;

    protected $profileImg;


    public function __construct($nickname, $email, $password, $profileImg) {
        $this->nickname = $nickname;
        $this->email = $email;
        $this->password = $password;
        $this->profileImg = $profileImg;
}
        public function getNickname(){
          return $this->nickname;
        }

        public function getemail(){
          return $this->email;
        }

        public function getProfileImg(){
          return $this->profileImg;
        }

}

class GeneralProduct {

  protected $productTitle;

  protected $productGenre;

  protected $productWeight;

  protected $productQuantity;

  protected $productAvailable;


  public function __construct($productTitle, $productGenre, $productWeight, $productQuantity, $productAvailable){
    $this->productTitle = $productTitle;
    $this->productGenre = $productGenre;
    $this->productWeight = $productWeight;
    $this->productQuantity = $productQuantity;
    $this->productAvailable = $productAvailable;
  }
}


$userTest = new User('Wolfino', 'xwolfinox', 'wolfini1111', 'www.ciao,it');
echo $userTest->getNickname();


?>
