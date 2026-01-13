<?php


class Category
{

    private string $name;
    private string $type;



    public function getName(): string
    {
        return $this->name;
    }
   public function getType():string
   {
    return $this->type;
   }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setType(string $type): void
    {
        $this->type=$type;
    }


}
