<?php
$_SESSION["page"]=array();
$_SESSION["page"]="GameGeo.php";

?>

<?php

if (isset($_POST['submit']) ) {
  $page = 1 ;
  $name = $_FILES['file']['name'];

?>


<style media="screen">

</style>


  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

      <link rel="stylesheet" href="GameGeo/css/style.css">

      <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
     <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
     <link rel="stylesheet" href="GameGeo/css/styleGame.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php require_once 'header.php';
?>










      <style>
      .flex-container {
        display: flex;
        flex-wrap: nowrap;

      }
      </style>





<!--  _______________________________________________________________________________________________-->
<div style="background-color:#d1c286; ">


<div class="flex-container">
  <div style="background-color:white; display:flex; ">
    <ul class="ulChangePic" >

      <li>

    <button  id="zoomout" type="button" name="button"><i class="fas fa-plus-circle"></i></button>

    </li>
    <li>
    <button  id="zoomin" type="button" name="button"><i class="fas fa-minus-circle"></i></button>
      </li>
      <li>
      <button  id="rotateYmin" type="button" name="button"><i class="fas fa-sync-alt"></i></button>
        </li>
<li>
  <button type="button" id="delete"><i class="fas fa-trash-alt"></i></button>
</li>
    </ul>
  </div>
  <div>
<img id="background" src="GameGeo/<?php echo $name ?>" style="display:flex"/>
  </div>

<div class="">

<table class="table table-striped"  style=" margin-left: 2%; margin-right: 10%; margin-top: 5%; border:0px;">
  <tbody>

    <tr class="table-light">
  <td colspan="3">


  <div id="carousel-example-multi" class="carousel carousel-multi slide" style=" height:100px; width: 500px; background-color: white;">


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style="height:100px; " >
    <div class="item active">
      <div class="media media-card container">
        <img src="GameGeo/chaise1.jpg" alt="Image" name="0" class="img-responsive addPIc" >
      </div>
    </div>

    <div class="item ">
      <div class="media media-card container">
      <img src="GameGeo/chaise2.jpg" alt="Image"  name="1" class="img-responsive addPIc" >
      </div>
    </div>

    <div class="item ">
      <div class="media media-card container">
      <img src="GameGeo/chaise3.jpg" alt="Image"  name="2" class="img-responsive addPIc">
      </div>
    </div>

    <div class="item ">
      <div class="media media-card container">
        <img src="GameGeo/table2.jpg" alt="Image"  name="3" class="img-responsive addPIc">
      </div>
    </div>

    <div class="item ">
      <div class="media media-card container">
        <img src="GameGeo/tableavecchaise.jpg" alt="Image"  name="4" class="img-responsive addPIc">
      </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-multi" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-multi" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  </div>



</td>
</tr>


<!-- ********************************************************* -->
</tbody>
</table>
<div style="  border: 2px solid white;
  border-radius: 100px; margin-left:30%;width:200px;height:200px; background:white; margin-top:10%;">


<table  style="border:0px; margin-top:10%;margin-left:8%; ">
  <tbody>
<tr >
<td></td>
<td></td>
  <td> <button type="button" id="up" style="border:none; width:50px;height:50px;background:none;"><i class="fas  fa-chevron-circle-up"  style="width:50px;height:50px;"></i></button> </td>

<td></td>
</tr>
<tr >
<td></td>
  <td > <button type="button" id="left" style="border:none;width:50px;height:50px;background:none;"><i class="fas  fa-chevron-circle-left"  style="width:50px;height:50px;"></i></button></td>
<td></td>
  <td> <button type="button" id="right" style="border:none;width:50px;height:50px;background:none;"><i class="fas  fa-chevron-circle-right"  style="width:50px;height:50px;"></i></button></td>

</tr>
<tr >
<td></td>
      <td></td>
        <td> <button type="button" id="down" style="border:none;background:none;"><i class="fas fa-chevron-circle-down" style="width:50px;height:50px;"></i></button> </td>
  <td></td>

</tr>


</tbody>
</table>
</div>
</div>


<img id="top1" class="shirt" src="GameGeo/chaise1.png" />

  <img id="top2" class="shirt" src="GameGeo/chaise2.png" />
<img id="top3" class="shirt" src="GameGeo/chaise3.png" />
<img id="top3" class="shirt" src="GameGeo/table2.png" />
<img id="top3" class="shirt" src="GameGeo/tableavecchaise.png" />





</div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src='https://code.jquery.com/ui/1.10.4/jquery-ui.min.js'></script>



    <script  src="GameGeo/js/index.js"></script>
    <script  src="GameGeo/js/indexGame.js"></script>



</body>
<footer style="background:white;">
<h1 style="margin-left:30%; padding-top:2%;">Avec Geo Jouez Avec Nos Produits</h1>
<h4 style="margin-left:40%; ">(vous pouvez utiliser les boutons de directions)</h4>
</footer>
</html>
<?php } ?>
