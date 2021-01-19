<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/
DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Información sobre el producto</title>
</head>
<body>
<h3>Información sobre el producto</h3>
<form action="index.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend>Datos básicos</legend>
<label for="nombre">Nombre</label> <br/>
<input type="text" name="nombre" id="" size="50" maxlength="250" />
<br/><br/>
<label for="descripcion">Descripción</label> <br/>
<textarea name="descripcion" id="descripcion" cols="40" rows="5"></textarea>
<br/><br/>
Foto <input type="file" name="foto" />
<br/><br/>
<input name="contador" type="checkbox" value="si" /> Añadir contador de visitas
</fieldset>
<fieldset>
<legend>Datos económicos</legend>
<label for="precio">Precio</label>
<input type="text" size="5" id="precio" name="precio" /> &euro;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label for="impuestos">Impuestos</label>
<select id="impuestos" name="impuestos">
<option value="4">4%</option>
<option value="7">7%</option>
<option value="16">16%</option>
<option value="25">25%</option>
</select>
<br/><br/>
<label>Promoción</label> <br/>
<input type="radio" name="promocion" value="ninguno" checked="checked" /> Ninguno
<br/>
<input type="radio" name="promocion" value="portes" /> Transporte gratuito <br/>
<input type="radio" name="promocion" value="descuento" /> Descuento 5%
</fieldset>
<input type="submit" value="enviar">
</form>

El nombre del producto :<?php echo $_POST ["nombre"];?><br/>

Decripcion: <?php echo $_POST["descripcion"];?><br/>  
precio: <?php echo $_POST["precio"];?><br/> 
Su impuestos: <?php echo $_POST["impuestos"];?><br/> 
Promoción: <?php echo $_POST["promocion"];?><br/> 

</body>
</html>