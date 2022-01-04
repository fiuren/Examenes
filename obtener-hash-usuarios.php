<?php
echo password_hash("admin",  PASSWORD_BCRYPT, ['cost'=>12]) ?>
?>

<!-- otra forma de crear un hash es de la siguiente forma. una de Alto standing -->

<!-- $password = $_POST['OPERADOR2']; -->
<!-- $hashed_password = password_hash ($password, PASSWORD_DEFAULT); -->
<!-- var dump($hashed_password); -->


<!-- esto nos sirve para crear un hash (una contraseña encriptada) para la contraseña de nuestro usuario. Lo hacemos con admin, y despues lo repetimos 
tantas veces, como usuarios queramos crear; en nuestro caso 2 veces mas correspondientes a operador1 y operador 2 

referencia: https://jairogarciarincon.com/clase/creacion-de-un-cms-desde-cero-con-patron-mvc/conclusiones
-->
