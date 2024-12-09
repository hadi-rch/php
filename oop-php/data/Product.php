<?php 

class Product
{
    protected string $name;
    // private string $name;
    protected int $price;
    // private int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    //agar $name dan $price bisa diakses di luar dari clss private maka dibuatlah function seperti di bawah
    public function getName (): string{
        return $this->name;
    } 
    public function getPrice (): int{
        return $this->price;
    } 

}

class ProductDummy extends Product
{
    public function info()
    {
        echo "Name $this->name" . PHP_EOL; //tidak bisa diakses karena $name private, untuk data mengaksesnya maka diganti dari private menjadi protected
        echo "Price $this->price" . PHP_EOL;
    }
}