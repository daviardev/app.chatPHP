<?php 
    include_once "header.php";
    include_once "../php/config.php";
    session_start();

    if (!isset($_SESSION['unique_id'])) {
        header("location: login.php");
    }
?>
<body>
    <div class="container">
        <section class="chat-area">
            <header>
            <?php
                    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");

                    if (mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                }

            ?>
                <a href="./users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                    <img src="../php/images/<?php echo $row['img']; ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
                        <p><?php echo $row['status']; ?></p>
                </div>
            </header>
            <div class="chat-box">
                <div class="chat outgoing">
                    <div class="details">
                        <p>Grefg una pregunta, cuando me llega el pc? estoy muy emocionado</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="https://esports.as.com/2020/01/07/Grefg.png?hash=c1c7a3a13b4e5bbc9db2295d1f67110ae61425fe" alt="">
                    <div class="details">
                        <p>Claro bro. te mando ese pc el lunes</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>Ese pc me servirá para juegos triple A?</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="https://esports.as.com/2020/01/07/Grefg.png?hash=c1c7a3a13b4e5bbc9db2295d1f67110ae61425fe" alt="">
                    <div class="details">
                        <p>Como lo había mencionado, es un pc tocho bro</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>Una pregunta, en un video se vió un consolador de tu novia, es real?</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="https://esports.as.com/2020/01/07/Grefg.png?hash=c1c7a3a13b4e5bbc9db2295d1f67110ae61425fe" alt="">
                    <div class="details">
                        <p>De hecho se colocó ahí adrede, sí fuera real, se hubiera cortado esa parte</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>Entiendo, muchas gracias grefg, estaré esperando con ansias. Mandaré una foto cuando llega o incluso un video</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="https://esports.as.com/2020/01/07/Grefg.png?hash=c1c7a3a13b4e5bbc9db2295d1f67110ae61425fe" alt="">
                    <div class="details">
                        <p>Te lo agradecería bro, para que la gente crea que es real</p>
                    </div>
                </div>
            </div>
            <form action="#" class="typing-area" autocomplete="off">
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
                <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Escribe un mensaje aquí">
                <button><i class="fas fa-paper-plane"></i></button>
            </form>
        </section>
    </div>
</body>
<script src="../js/chat.js"></script>
</html>