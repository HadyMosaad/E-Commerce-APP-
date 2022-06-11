
<script>
function prodType(prod ){
  var Disk = document.getElementById("Disk");
  var Book = document.getElementById("Book");
  var Furn = document.getElementById("Furniture");
  Disk.style.display="none";
  Book.style.display="none";
  Furn.style.display="none";
  //value
  if(prod=="Disk"){
    Disk.style.display="block";
  }else if(prod=="Book"){
    Book.style.display="block";
  }else if(prod=="Furniture"){
    Furn.style.display="block";
  }

} </script>

<form method="post" id ="product_form" enctype="multipart/form-data">
    <div class="form-group">
        <label>Product sku</label>
        <input type="text"  id ="sku" name="sku" class="form-control" placeholder="enter SKU">
    </div>
    <div class="form-group">
        <label>Product name</label>
        <textarea class="form-control" id ="name" name="name" placeholder="enter NAME"></textarea>
    </div>
    <div class="form-group">
        <label>Product price</label>
        <input type="number" step=".01" id ="price" name="price" class="form-control" placeholder="enter PRICE">
    </div>

<select name="switcher" id="productType" onChange="prodType(this.value);">
<option value="">Choose Switcher</option>
<option value="Disk"> DVD</option>
<option value="Book"> Book  </option>
<option value="Furniture"> Furniture  </option>
</select>
<div class="fieldbox" id="Disk">
                  <text> Please, provide size</text> <br>
                  <label>Size</label>
                  <input type="text" id="size" name="size" value="">
                </div>
                <div class="fieldbox" id="Book">
                  <text> Please, provide weight</text> <br>
                  <label>Weight</label>
                  <input type="text" id ="weight" name="weight" value="">
                </div>

                <div class="fieldbox" id="Furniture">
                  <text> Please, provide dimensions </text> <br>
                  <label>Length</label>
                  <input type="text" id ="length" name="length" value=""><br>
                 <label>Width</label>
                <input type="text" id="width" name="width" value=""><br>
                    <label>height</label>
                    <input type="text" id ="height" name="height" value=""><br>
                </div>
<input class="btn btn-sm btn-success" type="submit" value ="Save" name="submit" >


</form>
<p>
    <a href="/" type="button" class="btn btn-sm btn-secondary">Cancel</a>
</p>
