<?php
    include_once "../php/config.php";
    include_once "header.php";
    session_start();
    
    if (!isset($_SESSION['unique_id'])) {
        header("location: login.php"); //Sí el usuario no está logueado y trata de entrar, se devolverá a la página de login
    }
?>
<body>
    <div class="container">
        <section class="users">
            <header>
                <?php 
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");

                    if (mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }

                ?>
                <div class="content">
                    <img src="../php/images/<?php echo $row['img'] ?>">
                    <div class="details">
                        <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                        <p><?php echo $row['status'] ?></p>
                    </div>
                </div>
                <a href="../php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Cerrar sesión</a>
            </header>
            <div class="search">
                <span class="text">Seleccionar un usuario para comenzar a charlar o búscalo</span>
                <input type="text" placeholder="Introduzca el nombre del usuario">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                    
            </div>
        </section>
    </div>
</body>
<script src="../js/users.js"></script>
</html>