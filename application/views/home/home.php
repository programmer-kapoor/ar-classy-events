<?php

echo "shu ";

?>
 <h2><?= $title; ?></h2>
<!-- <div class="option">list of cities</div> -->




<div class="main">
    <select name="" id="">
        <option value="">select state and country</option>
<?php foreach ($list as $lists): ?>


        <option value=""><?php echo $lists['city_name'].","; ?>

<?php echo $lists['city_state']; ?></option>
   
<?php endforeach; ?>

 </select>



<div><a href="<?php base_url();?>login">login</a></div>

<div><a href="<?php base_url();?>product">Product</a></div>
<div><a href="<?php base_url();?>product/details">Productdetails</a></div>
