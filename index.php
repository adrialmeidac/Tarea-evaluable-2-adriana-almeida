<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia</title>
      <style>
  
    <style>
   
    body {
      margin: 0;
      height: 100vh; 
      display: flex;
      justify-content: center; 
      align-items: center;     
      background: #f4f4f4;     
      font-family: sans-serif;
      
    }
    main {
        display: flex;
        flex-direction:column;
        align-items:center;
    }
    h1{
        margin-bottom: 20px; 
        text-align: center;
        color: black;
        font-size: 2rem;
    }

    
    nav {
      background: #0b74de;
      padding: 20px 40px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
      /*text-align: center;*/
      display:inline-block;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column; 
      align-items: center;
      gap: 15px;             
    }

    nav a {
      text-decoration: none;
      color: white;
      font-weight: bold;
      font-size: 1.2rem;
      padding: 8px 16px;
      border-radius: 6px;
      transition: background 0.3s ease;
      
    }

    nav a:hover {
      background: rgba(255, 255, 255, 0.2);
    }
  </style>
</head>

</head>
<body>
    <main>
        <h1>MI ACADEMIA</h1>
    <nav>
        <ul>
            <li><a href="./academy.php">Academia</a></li>
            <li><a href="./biblioteca.php">Biblioteca</a></li>
            <li><a href="./triangle.php">Triángulo</a></li>
</ul>
</nav>
</main> 
</body>
</html>