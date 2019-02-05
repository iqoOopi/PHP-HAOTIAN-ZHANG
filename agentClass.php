<?php
class person
{
    private $id;
    private $firstName;
    private $middleInitial;
    private $lastName;
    public function __construct($id,$firstName,$middleInitial,$lastName){
        $this->id=$id;
        $this->firstName=$firstName;
        $this->middleInitial=$middleInitial;
        $this->lastName=$lastName;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getMiddleInitial()
    {
        return $this->middleInitial;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setId($x)
    {
        $this->id=$x;
    }
    public function setFirstName($x)
    {
        $this->firstName = $x;
    }
    public function setMiddleInitial($x)
    {
        $this->middleInitial = $x;
    }
    public function setLastName($x)
    {
        $this->lastName = $x;
    }
}
class agent extends person
{
    private $AgtBusPhone;
    private $AgtEmail;
    private $AgtPosition;
    private $AgencyId;
    
public function __construct($id,$AgtFirstName,$AgtMiddleInitial,$AgtLastName,$AgtBusPhone,$AgtEmail,$AgtPosition,$AgencyId){
    parent::__construct($id,$AgtFirstName,$AgtMiddleInitial,$AgtLastName);
    $this->AgtBusPhone=$AgtBusPhone;
    $this->AgtEmail=$AgtEmail;
    $this->AgtPosition=$AgtEmail;
    $this->AgencyId=$AgencyId;
}
    public function getAgtBusPhone()
    {
        return $this->AgtBusPhone;
    }
    public function getAgtEmail()
    {
        return $this->AgtEmail;
    }
    public function getAgencyId()
    {
        return $this->AgencyId;
    }
   
    public function setAgtBusPhone($x)
    {
        $this->AgtBusPhone = $x;
    }
    public function setAgtEmail($x)
    {
        $this->AgtEmail = $x;
    }
    public function setAgencyId($x)
    {
        $this->AgencyId = $x;
    }
}
?>