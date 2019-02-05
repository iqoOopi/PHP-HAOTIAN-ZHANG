<?php
class agent
{
    private $AgtFirstName;
    private $AgtMiddleInitial;
    private $AgtLastName;
    private $AgtBusPhone;
    private $AgtEmail;
    private $AgtPosition;
    private $AgencyId;

    public function getAgtFirstName()
    {
        return $this->AgtFirstName;
    }
    public function getAgtMiddleInitial()
    {
        return $this->AgtMiddleInitial;
    }
    public function getAgtLastName()
    {
        return $this->AgtLastName;
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
    public function setAgtFirstName($x)
    {
        $this->AgtFirstName = $x;
    }
    public function setAgtMiddleInitial($x)
    {
        $this->AgtMiddleInitial = $x;
    }
    public function setAgtLastName($x)
    {
        $this->AgtLastName = $x;
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
