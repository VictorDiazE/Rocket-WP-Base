<?php
/**
 * Register custom strings
 *
 * @package fc-corporativa
 */




/* ------------- Register custom strings */


if ( function_exists( 'pll_register_string' ) ) {

/* ------------- Register custom strings - 404 */

  pll_register_string('¡Vaya! Error 404','¡Vaya! Error 404','404');
  pll_register_string('No hemos podido encontrar la página que buscas.','No hemos podido encontrar la página que buscas.','404');
  pll_register_string('Aquí tienes algunos enlaces que pueden servirte de ayuda:','Aquí tienes algunos enlaces que pueden servirte de ayuda:','404');
  pll_register_string('Inicio','Inicio','404');
  pll_register_string('Otro link','Otro link','404');
  pll_register_string('Contacto','Contacto','404');

/* ------------- Register custom strings - URLs */

  pll_register_string('aviso-legal', 'aviso-legal','slugs');
  pll_register_string('politica-de-privacidad', 'politica-de-privacidad','slugs');
  pll_register_string('politica-de-privacidad', 'politica-de-cookies','slugs');

/* ------------- Register custom strings - COOKIES */

  pll_register_string('Utilizamos cookies propias y de terceros para mejorar la experiencia del usuario a través de su navegación. Si continúas navegando aceptas su uso','Cookies Notice');
  pll_register_string('Entendido', 'Entendido', 'Cookies Notice');
  pll_register_string('Política de Cookies', 'Política de Cookies', 'Cookies Notice');

}
