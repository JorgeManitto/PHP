<form action="" method="post">
        <?php
        
            if(isset($errorlogin)){
                echo $errorlogin;
            }
        
        ?>
        <label for="user">Email :</label>
        <input type="text" name="email">

        <label for="password">Password :</label>
        <input type="password" name="password">

        <input type="submit"  placeholder="Entrar" name="enviar">

    </form>