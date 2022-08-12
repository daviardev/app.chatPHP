<?php
    session_start();
    include_once "header.php";

    if (isset($_SESSION['unique_id'])) {
        header("location: ./pages/users.php");
    }
?>
<body>
    <div class="container">
        <section class="form login">
            <header>Chat app online</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="name-details">
                <div class="field input">
                    <label>Correo</label>
                    <input type="text" name="email" placeholder="Correo">
                </div>
                <div class="field input">
                    <label>Contraseña</label>
                    <input type="password" name="password" placeholder="Contraseña">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input class="button" type="submit" value="Continuar">
                </div>
            </div>
            </form>
            <div class="link">¿No tienes una cuenta? <a href="../index.php">Registrate</a> </div>
        </section>
    </div>
</body>
<script src="../js/pass-show-hide.js"></script>
<script src="../js/login.js"></script>
</html>