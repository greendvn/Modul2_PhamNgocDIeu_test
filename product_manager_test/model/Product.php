<?php


class Product
{
    protected $id;
    protected $name;
    protected $type;
    protected $price;
    protected $number;
    protected $dayCreate;
    protected $description;

    public function __construct($name,$type,$price,$number)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->number = $number;
    }

    /**
     * @param mixed $dayCreate
     */
    public function setDayCreate($dayCreate)
    {
        $this->dayCreate = $dayCreate;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getDayCreate()
    {
        return $this->dayCreate;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

}