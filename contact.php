<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Contáctanos - Guardiashop">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GUARDIASHOP | Contáctanos</title>
    <link rel="icon" href="./img/core-img/logoguardiashop.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/core-styleff.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .breadcumb_area {
            height: 300px;
            background-position: center;
            background-size: cover;
            position: relative;
        }

        .page-title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .page-title h2 {
            font-size: 48px;
            color: #444242;
        }

        .page-title .subtitle {
            font-size: 22px;
            color: #555;
            margin-top: 10px;
        }

        .contact-container {
            max-width: 1400px;
            margin: 80px auto;
            padding: 0 20px;
            text-align: center;
        }

        .contact-title {
            font-size: 56px;
            margin-bottom: 30px;
            font-weight: 700;
            color: #000;
        }

        .contact-description {
            font-size: 22px;
            color: #555;
            margin-bottom: 60px;
        }

        .contact-content {
            display: flex;
            justify-content: center;
            align-items: stretch;
            flex-wrap: wrap;
            gap: 50px;
            width: 100%;
            max-width: 1200px;
            margin: auto;
        }

        .google-map {
            flex: 1 1 60%;
            min-width: 350px;
            height: 550px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border: 3px solid #B78732;
        }

        .contact-info {
            flex: 1 1 35%;
            min-width: 300px;
            background-color: #fff;
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: left;
            border: 3px solid #B78732;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact-info p {
            margin: 25px 0;
            font-size: 20px;
            color: #555;
        }

        .contact-info i {
            color: #B78732;
            margin-right: 14px;
            font-size: 22px;
        }

        .contact-info a {
            color: #000;
            text-decoration: none;
            font-weight: 600;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        .contact-form {
            margin-top: 80px;
            background-color: #fff;
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            border: 3px solid #B78732;
        }

        .contact-form h3 {
            font-size: 32px;
            color: #000;
            margin-bottom: 30px;
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 15px;
            margin-bottom: 20px;
            font-size: 18px;
            border: 2px solid #ccc;
            border-radius: 10px;
            transition: border-color 0.3s;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #B78732;
            outline: none;
        }

        .contact-form button {
            padding: 15px;
            font-size: 18px;
            background-color: #B78732;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #a37427;
        }

        @media (max-width: 768px) {
            .contact-content {
                flex-direction: column;
                align-items: center;
            }

            .google-map, .contact-info, .contact-form {
                max-width: 95%;
            }
        }
    </style>
</head>

<body>

    <?php include './arc/nav.php'; ?>

    <div class="breadcumb_area breadcumb-style-two bg-img" style="background-image: url(img/bg-img/breadcumb2.jpg);">
        <div class="container-fluid h-100 m-0 p-0">
            <div class="row h-100 w-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                    <h2 style="color:#444242;">Contáctanos</h2>
                        <p class="subtitle">¿Tienes preguntas o comentarios? Estamos aquí para ayudarte. <br> Escríbenos o visítanos en nuestra sede.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-container">
        <h2 class="contact-title">¿Hablamos?</h2>
        <p class="contact-description">¿Tienes dudas, ideas o simplemente quieres saludarnos? <br>Estamos listos para escucharte.<br> Escríbenos o ven a conocernos en nuestra sede. ¡Será un gusto atenderte!
</p>

        <div class="contact-content">
            <div class="google-map">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.1555954198884!2d-76.66338592871985!3d5.690644317592581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e488f718a8b6395%3A0x48da7c08bd8fa2ba!2zQ3JhLiA2ICMgMjYtMjcsIFF1aWJkw7MsIENob2PDsw!5e0!3m2!1ses!2sco!4v1745289179461!5m2!1ses!2sco" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="contact-info">
                <p><i class="fas fa-map-marker-alt"></i> <strong>Dirección:</strong> CRA 6 #26-27, Quibdó, Chocó</p>
                <p><i class="fas fa-phone-alt"></i> <strong>Teléfono:</strong> <a href="tel:+5731043223454">+57 310 432 23454</a></p>
                <p><i class="fas fa-envelope"></i> <strong>Correo:</strong> <a href="mailto:Guardiashop@gmail.com">Guardiashop@gmail.com</a></p>
            </div>
        </div>

        <!-- Formulario de contacto -->
        <div class="contact-form">
            <h3>ESCRIBENOS UN MENSAJE</h3>
            <form action="#" method="POST">
                <input type="text" name="nombre" placeholder="Tu nombre completo" required>
                <input type="email" name="correo" placeholder="Tu correo electrónico" required>
                <textarea name="mensaje" rows="6" placeholder="Escribe tu mensaje aquí..." required></textarea>
                <button type="submit">Enviar mensaje</button>
            </form>
        </div>
    </div>

    <?php include './arc/footer.php'; ?>

    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/active.js"></script>

</body>
</html>
