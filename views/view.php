
<div class="container" style = 'display:flex; width: 900px'>
<?foreach($products as $product):?>
<div>
    <img src = '<?echo $product['img']?>' width = '30%'>
    <h3><?echo $product['name']?></h3>
    <p><?echo $product['description']?></p>
    <p>Price: <?echo $product['price']?>$</p>
</div>
<?endforeach;?>
</div>