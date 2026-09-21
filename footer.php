</main>
    
    <footer>
      <div class="footer-brand">
        <img src="<?php echo get_template_directory_uri(); ?>/IMGS/Logotipo-Isabel-Rampinelli-02.webp" alt="Dra. Isabel Rampinelli — Neurologista"><p>CRM-SC 31805 | RQE 27017</p>
      </div>
      <div>
        <p class="eyebrow">Consultórios</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/ICONS/pin.svg" alt=""> Criciúma – SC: Rua Antonio De Lucca, 148, Sala 111, Pio Corrêa</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/ICONS/pin.svg" alt=""> Araranguá – SC: Rua Governador Jorge Lacerda, 840 - Nova Divinéia</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/ICONS/pin.svg" alt=""> Turvo – SC: R. Nereu Ramos, 800 - Centro</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/ICONS/relogio.svg" alt=""> Segunda a sexta: 8h às 18h.</p>
      </div>
    </footer>

    <?php
      if (defined('ABSPATH') && function_exists('wp_footer')) {
          wp_footer(); /* ESSENCIAL: Carrega o script.js e scripts do painel do WordPress */
      } else {
          echo '<script src="' . get_template_directory_uri() . '/script.js" defer></script>';
      }
    ?>
  </body>
</html>