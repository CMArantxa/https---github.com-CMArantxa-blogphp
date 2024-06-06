
<?php include 'header.php';?>

<main class="container">
    <div class="row">
        <div class="col-sm-4">
        <div class="card" onclick="expandCard(this)">
                <img src="assets/img/politica.webp" class="card-img-top" alt="politica">
                <div class="card-body">
                    <h5 class="card-title">Politica alternativa</h5>
                    <p class="card-text">Defendemos los derechos de los pueblos indígenas, impulsando su empoderamiento para acercar sus luchas y visiones con voz propia. Proponemos alternativas más justas y sostenibles en el actual contexto de crisis económica, social y ambiental. Lo hacemos a través de un intercambio constante con los pueblos, acercándonos mutuamente en la defensa de la madre tierra y la autodeterminación, y haciendo difusión de la necesidad del cuidado del medio ambiente, la justicia social y una transformación hacia sociedades más solidarias e inclusivas.alterNativa promueve, protege y defiende los derechos de los pueblos indígenas. En coordinación con las comunidades, impulsamos su empoderamiento y visibilizamos sus luchas. Actuamos desde el intercambio entre pueblos y culturas, apostando por una alternativa a los modelos hegemónicos de desarrollo, sociales, económicos y políticos actuales.

                    Cooperamos con organizaciones indígenas para promover el reconocimiento y la implementación de los derechos de los pueblos. Acercamos alternativas de vida inspiradas en el sumak kausai (el buen vivir), basado en la frugalidad, el ecocentrismo y la justicia social, prácticas propias de los saberes de las comunidades indígenas.

                    Nos basamos en el respeto a la diversidad cultural, la justicia social y la sostenibilidad ambiental, desde una perspectiva integral y por una transformación social.AlterNativa impulsa el empoderamiento de los pueblos indígenas como actores de sus sistemas de organización social, con estructuras y procedimientos propios con plena legitimidad.

                    En el contexto actual, de creciente globalización, el movimiento social indígena ha tenido cada vez más presente la importancia de la comunicación audiovisual como estrategia clave e indispensable de denuncia y resistencia, y como herramienta político-estratégica para la defensa de la vida.

                    Acompañamos a los pueblos indígenas a través de campañas de comunicación e incidencia política, y acercamos el cine indígena a nivel local y global.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
        <div class="card" onclick="expandCard(this)">
                <img src="assets/img/musica.avif" class="card-img-top" alt="musica">
                <div class="card-body">
                    <h5 class="card-title">Cultura Rock</h5>
                    <p class="card-text">Hablar de rock es como hablar de religión, amor o política pues siempre va a generar un debate ya que hay diferentes puntos de vista  que van desde quiénes son los padres de un determinado género, cuáles  son los mejores bajistas, guitarristas, cantantes, en dónde nació el rock y un sin fin más de interrogantes, sin embargo la pregunta que quizás sea la más importante y de la que menos se debate es: ¿qué es el rock?. Para la mayoría de nuestros padres es solamente una moda, una etapa, algo que te pico durante tu adolescencia y que esperan a que  la edad sea la medicina perfecta para que te cures de ese mal, para otros que no son adeptos a ningún estilo de música, es solo un género más de los muchos que existen. Pero hay quienes defienden que el rock  va más allá de sólo ser música, que el rock es cultura o una forma de vida, me incluyo en este sector.Dicho lo anterior trataré de explicar de una manera breve el porqué el rock es cultura e incluso una forma de vida.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
        <div class="card" onclick="expandCard(this)">
                <img src="assets/img/cine.jpg" class="card-img-top" alt="cine">
                <div class="card-body">
                    <h5 class="card-title">Cine</h5>
                    <p class="card-text">Las industrias culturales, y especialmente la cinematográfica, han batallado tenazmente durante los últimos seis años por la bajada del IVA, una reivindicación que ha atendido el Gobierno de Pedro Sánchez. Casi dos meses después de que el tributo aplicado al cine bajara desde el 21% al 10%, su impacto en

                  
</main>
<script>
        function expandCard(card) {
            if (!card.classList.contains('card-expanded')) {
                card.classList.add('card-expanded');
                card.innerHTML += '<div class="close-button" onclick="collapseCard(this.parentNode)">X</div>';
            }
        }

        function collapseCard(card) {
            card.classList.remove('card-expanded');
            card.querySelector('.close-button').remove();
        }
    </script>
</body>
</html>


