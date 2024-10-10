<html>
    <head>
        <title>Ejemplo usando PHP</title>
        <style type="text/css">
            p {color:white;}
            #contenedor{ background-color: green; width: 300px;text-align: center;margin: auto; padding: 15px;}
            h4{font-size: 30px;}
    </style>
    </head>
    <body>
        <?php
            echo "<div id='contenedor'>"; 
            echo "<p>INFORMACION<p>";
            echo "</div>";
        ?>
    </body>
    <div style="max-width: 800px; margin: 0 auto; padding: 20px;">
        <p style="color: black;">
            solo HTML
        </p>
    </div>
    <h1 style="display: flex; justify-content: center; border-radius: black;">
        <strong>Esto es una prueba</strong>
    </h1>
    <div style="max-width: 800px; margin: 0 auto; padding: 20px;">
        <p style="color: black;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi totam vero quibusdam temporibus omnis commodi aliquam accusamus ea, libero eius laudantium quas fugiat iusto ipsa dolore inventore corporis hic eveniet assumenda porro ad optio sit? Aut, nemo rem placeat facere reprehenderit suscipit quidem? Sunt nostrum sint eum aliquam ipsa, ipsum beatae perferendis consectetur ea velit! Ipsum magnam laudantium quas hic quidem numquam recusandae earum at asperiores sit minus cupiditate omnis sunt, obcaecati tempore, sint repellat repudiandae cum dicta sequi temporibus doloribus officiis consectetur? Ex ad dolorum voluptatibus vel quia autem praesentium possimus enim, accusantium quam exercitationem officiis vitae consequuntur cum.
        </p>
    </div>
    <section>
        <h3 style="display: flex; justify-content: center; align-items: center; ">imagen php</h3>
        <div style="display: flex; justify-content: center; align-items: center; ">
            <img style="width: 300px; border-radius: 50%;" src="data:image/png;base64,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" alt="">
        </div>
    </section>
    <div style="display: flex; justify-content: center">
        <?php
            echo "<h4>Fusion de ambos</h4>";
        ?>
    </div>
    <div style="display: flex; justify-content: center">
        <?php
            echo <<<EOT
            <p style="color: black;">Mi nombre es Juan Andres, tengo 20 años Esto debería mostrar una 'A' mayúscula: \x41</p>
            
            EOT;
        ?>
    </div>
</html>