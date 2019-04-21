    function colorish(champ, erreur)
    {
    if(erreur)
      champ.style.backgroundColor = "#fba";
    else
      champ.style.backgroundColor = "";
    }


    function verifnom(champ)

    {
            var regex = /[a-zA-Z]/
        if(!regex.test(champ.value) || champ.value.length < 4 || champ.value.length > 25)

        {

        colorish(champ, true);

        return false;

        }

        else

        {

         colorish(champ, false);

         return true;

        }
        
    }

    function verifprix(champ)
    {
        var regex = /[0-9.,]/;
        var prix = parseInt(champ.value);

   if(!regex.test(champ.value) || champ.value.length < 2 || champ.value.length > 5 || isNaN(prix))

      {

      colorish(champ, true);

      return false;

       }

   else

       {

      colorish(champ, false);

      return true;

       }

    }    

    function verifnum(champ)
    {

    var regex = /[0-9]/;
    var num = champ.value;
   if(!regex.test(champ.value) || champ.value.length < 6 || isNaN(num))

   {

      colorish(champ, true);

      return false;

   }

   else

   {

      colorish(champ, false);

      return true;

   }

    }
    
   function verifform()

{
        var nom = document.getElementById('nomprod');
        var numero = document.getElementById('nprod');
        var qte = document.getElementById('QteProd');
        var desc = document.getElementById('DescProd');
        var prix = document.getElementById('PrixProd');
        var categorie = document.getElementById('CatProd');

        var NomOk = verifnom(nom);

        var qteOk = verifprix(qte);

        var descOK = verifnom(desc);

        var PrixOk = verifprix(prix);

        var NumOk = verifnum(numero);

        var CatOK = verifnom(categorie);

        if(NomOk && PrixOk && NumOk && qteOk && descOK && CatOK)

      {
        alert("Produit Ajouté");
        return true;
      }

   else

     {

      alert("Veuillez remplir correctement tous les champs");

      return false;

   }

}