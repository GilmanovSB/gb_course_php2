<?
class Goods {
    protected $image;
    protected $name;
    protected $description;
    protected $price;

    public function __construct(string $name, string $description, string $price, string $image)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
    } 
    

    public function getGoods()
    {
       $goods = [
        'name' => $this->name,
        'description' => $this->description,
        'price' => $this->price,
        'img' => $this->image
       ];
       return $goods;
    }
}