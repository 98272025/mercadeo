<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Programa de Ingeniería de Energías - Universidad Santiago de Cali">
    <title>Ingeniería de Energías Sostenibles - USC</title>
    <style>
        :root {
            --usc-green: #005C29;
            --usc-gold: #FFD700;
            --text-dark: #333;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            line-height: 1.6;
            color: var(--text-dark);
        }

        .header {
            background: var(--usc-green);
            padding: 1rem;
            text-align: center;
        }

        .logo {
            width: 220px;
            margin: 0 auto;
            display: block;
        }

        .hero {
            padding: 4rem 1rem;
            background: linear-gradient(rgba(0,92,41,0.9), rgba(0,92,41,0.8));
            color: white;
            text-align: center;
        }

        .counter {
            text-align: center;
            font-size: 1.2rem;
            margin-top: 1rem;
            font-weight: bold;
        }

        footer {
            background: var(--usc-green);
            color: white;
            padding: 2rem 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="header">
        <img src="https://www.usc.edu.co/wp-content/uploads/2023/05/logo-USC.png.webp" 
             alt="Universidad Santiago de Cali" 
             class="logo">
    </header>

    <section class="hero">
        <h1>Ingeniería de Energías Renovables</h1>
        <p>Transformando el futuro energético con tecnología inteligente</p>
    </section>

    <!-- Contador de visitas -->
    <div class="counter">
        <?php
            $archivo = "contador.txt";
            if (!file_exists($archivo)) {
                file_put_contents($archivo, "0");
            }
            $contador = (int) file_get_contents($archivo);
            $contador++;
            file_put_contents($archivo, $contador);
            echo "Número de visitas: " . $contador;
        ?>
    </div>

    <footer>
        <p>Universidad Santiago de Cali</p>
        <p>Carrera 62 # 5-00, Cali - Colombia</p>
    </footer>
</body>
</html>
