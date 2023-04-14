<?php 

require_once('conexiones.php');

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="5" >
    <meta charset="utf-8">
    <title>ONLINE</title>    
   <link rel="stylesheet" href="../CSS/tabla.css">

</head>
<body>
    <header id="cabecera">
       <h1 id="titulo">CONTEO EN VIVO DIRECTIVA</h1> 
    </header>
    

<div id="contenedor">

    
    

  

    <table border="3" id="tabla">
		<tr>
			<!--<td>id</td>-->
			<td>VOTOS <br> DIRECTIVO #1</td>
			<td>VOTOS <br> DIRECTIVO #2</td>
			<td>VOTOS <br> DIRECTIVO #3</td>
			<td>VOTOS EN BLANCO</td>

		</tr>

		<?php 
		$sql="SELECT count(`OpcionConsejoDir`) FROM `votacionesdoc` WHERE `OpcionConsejoDir` LIKE '01'";
		$result=mysqli_query($conn,$sql);
	    $OpcionConsejoDir1=mysqli_fetch_array($result);
		
		$sql="SELECT count(`OpcionConsejoDir`) FROM `votacionesdoc` WHERE `OpcionConsejoDir` LIKE '02'";
		$result=mysqli_query($conn,$sql);
		$OpcionConsejoDir2=mysqli_fetch_array($result);
		
		$sql="SELECT count(`OpcionConsejoDir`) FROM `votacionesdoc` WHERE `OpcionConsejoDir` LIKE '03'";
		$result=mysqli_query($conn,$sql);
	    $OpcionConsejoDir3=mysqli_fetch_array($result);
		
		$sql="SELECT count(`OpcionConsejoDir`) FROM `votacionesdoc` WHERE `OpcionConsejoDir` LIKE '00'";
		$result=mysqli_query($conn,$sql);
	    $OpcionConsejoDir0=mysqli_fetch_array($result);
		
	
		?>
		

		<tr>

			<td><?php echo $OpcionConsejoDir1[0] ?></td>
			<td><?php echo $OpcionConsejoDir2[0] ?></td>
			<td><?php echo $OpcionConsejoDir3[0] ?></td>
			<td><?php echo $OpcionConsejoDir0[0] ?></td>
     
            
		</tr>
		





       

   
</div>



</body>
</html>
