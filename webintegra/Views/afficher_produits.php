<?PHP
include_once "../Core/ProduitIntC.php";
//$produit=new ProduitInt('chaise',152,150,125,'chaise comfortable',1);
$produit1C=new ProduitIntC();
$listeProduits=$produit1C->afficherProduits();

//var_dump($listeEmployes->fetchAll());
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Liste Produits| Geoconcept</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/geoconcept.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- nalika Icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <!-- animate CSS
		============================================ -->
    <!-- normalize CSS
		============================================ -->
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <!-- morrisjs CSS
		============================================ -->
    <!-- mCustomScrollbar CSS
		============================================ -->
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    -->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!-- modernizr JS
		============================================ -->
    <!--<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>

<body>


<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<?php require_once 'header.php' ?>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            client=tr[i].getElementsByTagName("td")[5];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                }
                else  if (client) {
                    txtValue = client.textContent || client.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    }

</script>
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="icon nalika-eye"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Liste Produits</h2>
                                        <p>Liste des Produits<span class="bread-ntd"> GeoConcept</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcomb-report">
                                    <!--<form role="search" class="" method="POST" action="rechercher_produit.php">
                                        <input name="search" type="text" placeholder="Rechercher Produits.." class="form-control" style="width: 40%;margin-left: 40%;color: white;">
                                        <button type="submit" class="btn btn-custon-four btn-default" style="position: absolute; top: 7%; left: 40%;margin-left: 30%;border: none;background-color:;" ><i class="fa fa-search"></i></button>
                                    </form>-->
                                    <div class="breadcome-heading" style="margin-left: 40%;">
                                        <form role="search" class="">
                                            <input data-toggle="tooltip" title="Recherche Nom/Catégorie" id="myInput" style="color:white;"  type="text" placeholder="..."  onkeyup="myFunction()" class="form-control">
                                        </form>
                                    </div>
                                    <a data-toggle="tooltip" title="Télécharger PDF" href="TelechargerListe.php" class="fa fa-download fa-2x" target="_blank">
                                        <!--<button data-toggle="tooltip" data-placement="left"  title="Telecharger Liste Produits PDF" class="btn"><i class="icon nalika-download"></i></button>-->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Produits :</h4>
                            <div class="container" style="border: white;border-width: 4px;margin-bottom: 30px;">
                            <a data-toggle="tooltip" title="Mail staff" href="mail.php" target="_blank" class="fa fa-envelope fa-2x" style="position: absolute;right: 20%;top: 4%;color: #85ffc7;"></a>
                            <a data-toggle="tooltip" title="SMS staff" href="sms.php" target="_blank" class="fa fa-phone fa-2x" style="position: absolute;right: 15%;top: 4%;color: #e8ddb5;" ></a>
                            <a data-toggle="tooltip" title="Ajouter Produit" href="product-edit.php" class="fa fa-plus-square fa-2x" style="position: absolute;right: 10%;top: 4%;color: #8ed081;"></a>
                            </div>

                        <table id="myTable" class="table-bordered" style="background-color: #365D84" >
                            <tr style="background: #365D84;">
                                <th><strong>Nom</strong></th>
                                <th><strong>Num</strong></th>
                                <th><strong>Prix</strong></th>
                                <th><strong>Quantité</strong></th>
                                <th><strong>Description</strong></th>
                                <th><strong>Catégorie</strong></th>
                            </tr>

                            <?PHP
                            foreach($listeProduits as $row){
                                ?>
                                <tr>
                                    <td><?PHP echo $row['nom']; ?></td>
                                    <td><?PHP echo $row['num']; ?></td>
                                    <td><?PHP echo $row['prix']; ?></td>
                                    <td><?PHP echo $row['qte']; ?></td>
                                    <td><?PHP echo $row['descr']; ?></td>
                                    <td><?PHP echo $row['cat']; ?></td>
                                    <td><form method="POST" action="supprimer_produit.php">
                                            <button data-toggle="tooltip" title="Supprimer" type="submit" class="btn waves-effect btn-sm " name="supprimer" style="background-color:#fe5f55;" ><i class="fa fa-trash-o"></i></button>
                                            <input type="hidden" value="<?PHP echo $row['num']; ?>" name="num">
                                        </form>
                                    </td>
                                    <td><a data-toggle="tooltip" title="Modifier" class="btn btn-sm" style="background-color: #e0e1dd;" href="Page_Update.php?numprod=<?PHP echo $row['num'];?>&amp;nomprod=<?PHP echo $row['nom'];?>&amp;prix=<?PHP echo $row['prix'];?>&amp;qte=<?PHP echo $row['qte'];?>&amp;descr=<?PHP echo $row['descr'];?>&amp;cat=<?PHP echo $row['cat'];?>">
                                         <i class="fa fa-edit"></i> </a></td>
                                    <td>
                                        <form method="POST" action="product-detail.php">
                                           <button data-toggle="tooltip" title="Consulter" class="btn  waves-effect btn-sm " type="submit" name="btndetail" style="background-color: #edd382;"><i class="fa fa-eye"></i></button>
                                            <input type="hidden" value="<?PHP echo $row['num']; ?>" name="num">
                                        </form>
                                    </td>
                                </tr>
                                <?PHP
                            }
                            ?>
                        </table>

                        <script>
                            function demoFromHTML() {
                                var pdf = new jsPDF('p', 'pt', 'letter');
                                // source can be HTML-formatted string, or a reference
                                // to an actual DOM element from which the text will be scraped.
                                source = $('#content')[0];

                                // we support special element handlers. Register them with jQuery-style
                                // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
                                // There is no support for any other type of selectors
                                // (class, of compound) at this time.
                                specialElementHandlers = {
                                    // element with id of "bypass" - jQuery style selector

                                    '#bypassme': function (element, renderer) {
                                        // true = "handled elsewhere, bypass text extraction"
                                        return true
                                    }
                                };
                                margins = {
                                    top: 80,
                                    bottom: 60,
                                    left: 40,
                                    width: 522
                                };
                                // all coords and widths are in jsPDF instance's declared units
                                // 'inches' in this case
                                pdf.fromHTML(
                                    source, // HTML string or DOM elem ref.
                                    margins.left, // x coord
                                    margins.top, { // y coord
                                        'width': margins.width, // max width of content on PDF
                                        'elementHandlers': specialElementHandlers
                                    },

                                    function (dispose) {
                                        // dispose: object with X, Y of the last line add to the PDF
                                        //          this allow the insertion of new lines after html
                                        pdf.save('Test.pdf');
                                    }, margins
                                );
                            }
                        </script>
                        <div class="custom-pagination">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jquery
    ============================================ -->


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<!-- functional datatable script with no CSS
<script type="text/javascript">
    $(document).ready(function() {
       var table = $("#example").DataTable({
            ajax: {
                url: "TestAjax.php",
                type: "POST",
                dataSrc: ""
            },
            columns: [
                { data: "nom" },
                { data: "num" },
                { data: "prix" },
                { data: "qte" },
                { data: "descr" },
                { data: "cat" }
            ],
            //iDisplayLength: 1,
            iDisplayStart: 0
        });
    });;

</script>
--->
<!--
-->

<!-- bootstrap JS
    ============================================ -->
<!-- wow JS
    ============================================ -->
<!-- price-slider JS
    ============================================ -->
<!-- meanmenu JS
    ============================================ -->
<!-- owl.carousel JS
    ============================================ -->
<!-- sticky JS
    ============================================ -->
<!-- scrollUp JS
    ============================================ -->
<!-- mCustomScrollbar JS
    ============================================ -->
<!-- metisMenu JS
    ============================================ -->
<!-- morrisjs JS
    ============================================ -->
<!-- calendar JS
    ============================================ -->
<!-- plugins JS
    ============================================ -->
<!-- main JS
    ============================================ -->

</body>

</html>
