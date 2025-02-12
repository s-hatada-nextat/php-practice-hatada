<?php
class Name {
    private string $fName;
    private string $lName;
    private int $age;

    public function __construct(string $firstName, string $lastName, int $age) {
        $this->fName = $firstName;
        $this->lName = $lastName;
        $this->age = $age;
    }

    public function introduction(){
        echo $this->lName . $this->fName . $this->age . "歳です\n";
    }

}

$yamada = new Name('太郎', '山田', 15);
$yamada->introduction();