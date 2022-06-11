
<p>
    <a href="/add-product" type="button" class="btn btn-sm btn-success" name="ADD" value="ADD"> ADD</a>
</p>


<form  method="post" action="/products/MassDelete" style="display: inline-block">

    <?php  foreach ($products as $i => $product) { ?>
        

            <div class="boxed">
                <?php if(($i+1) % 4 === 0) {
                    echo "<ul>";
                }?>
             <input class = "delete-checkbox" type="checkbox" name="checked[]" value=<?php echo $product['id']  ?>> </li>
             <li> <?php echo $product['sku'] ?></li>
             <li> <?php echo $product['price']."$" ?></li>
             <li> <?php echo $product['name'] ?></li>
              <?php if ($product['weight'] ) echo "<li>"."weight: ".$product['weight'] ."Kg"."</li>" ?>
              <?php if ($product['size'] ) echo "<li>". "Size: ".$product['size'] ."MB"."</li>" ?>
   <?php if ($product['length'] ) echo "<li>"."Dimension : ".$product['length']."x" .$product['width']."x".$product['height']."</li>"?>

              <?php if(($i+1) % 4 === 0) {
              echo "</ul>"; 
              }?>
            
            </div>
    <?php } ?>
    <button type="submit" name = "MASS DELETE" value="MASS DELETE" >Mass Delete</button>
</form> 

