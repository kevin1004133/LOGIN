
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous">
</script>

<body>
    <form id="form2" class="form-login" >

        <?php

        //Obterner las variable
        $nombre=($_GET['nombres']);
        
        ?>

        <h6>BIENVENIDO A COLOMBIA BIODIVERSA.COM</h6>
        <h9> FECHA DE INGRESO: </h9>
        <h9 id="HoraActual"> </h9>
        <p> </p>
        <h15> USUARIO: <?php echo "$nombre"; ?> </h15>
        <br> </br> 
        <h9> kevinguerrero1004133@gmail.com</h9>
        <p> </p> 
        <input class="btn btn-primary" type="submit" value="CERRAR SESION">


</form>
</body>
</html>        



<script>

       function getbyid(id) {
	return document.getElementById(id);
}



       function salir(){
        window.location.href = "login.html";

}    

//funcion obtener fecha y hora
showTime();
function showTime(){
myDate = new Date();
dia=myDate.getDate();
mes=myDate.getMonth();
año=myDate.getFullYear();
hours = myDate.getHours();
minutes = myDate.getMinutes();
seconds = myDate.getSeconds();

$("#HoraActual").text(dia+"/"+(mes+1)+"/"+año+" | "+"HORA:"+hours + ":" +minutes);

}

 

getbyid("form2").addEventListener("submit", function (e) {
	e.preventDefault();
	salir();
})

</script>
