<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/2936/2936956.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Chat app online</title>
</head>
<body>
    <div class="container">
        <section class="users">
            <header>
                <div class="content">
                    <img src="https://pps.whatsapp.net/v/t61.24694-24/291483763_3316118818675085_5448892912731441282_n.jpg?ccb=11-4&oh=01_AVwb7-i5KFLAFTlDymXx80gsZWD72NTnOYaX4eoCjctTgA&oe=62FE5905" alt="">
                    <div class="details">
                        <span>DevSilva</span>
                        <p>Activo ahora</p>
                    </div>
                </div>
                <a href="./login.html" class="logout">Cerrar sesión</a>
            </header>
            <div class="search">
                <span class="text">Seleccionar un usuario para comenzar a charlar</span>
                <input type="text" placeholder="Introduzca el nombre del usuario">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="https://yt3.ggpht.com/ytc/AMLnZu_YWCL0jHWRbGczKlKQv3JI6hnQdZC3wtqnj1Xtdw=s900-c-k-c0x00ffffff-no-rj" alt="">
                        <div class="details">
                        <span>Fernanfloo</span>
                        <p>Te apetece grabar?</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="data:image/jpeg;base64,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" alt="">
                        <div class="details">
                        <span>Midudev</span>
                        <p>Te programo tu juego?</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="https://cde.laprensa.e3.pe/ima/0/0/1/8/4/184347.jpg" alt="">
                        <div class="details">
                        <span>Goku</span>
                        <p>Vamos a entrenar</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="https://esports.as.com/2020/01/07/Grefg.png?hash=c1c7a3a13b4e5bbc9db2295d1f67110ae61425fe" alt="">
                        <div class="details">
                        <span>The Grefg</span>
                        <p>El pc está en camino</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="https://phantom-marca.unidadeditorial.es/edb00b9a53224381dce1c48cff9a4e67/crop/0x42/1079x648/resize/1320/f/jpg/assets/multimedia/imagenes/2021/06/24/16245300128092.jpg" alt="">
                        <div class="details">
                        <span>Ibai</span>
                        <p>Quieres ir a la casa de messi?</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                 <a href="#">
                    <div class="content">
                        <img src="https://static.platzi.com/cdn-cgi/image/width=1024,quality=75,format=auto/media/teachers/perfil-Freddy-Vega-v2.png" alt="">
                        <div class="details">
                        <span>Freddy Vega</span>
                        <p>Te gustaría trabajar en Platzi?</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
            </div>
        </section>
    </div>
</body>
<script src="../js/users.js"></script>
</html>