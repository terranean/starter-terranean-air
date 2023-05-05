<?php
/**
 * @Author: Timi Wahalahti
 * @Date:   2019-12-03 11:03:31
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-12-29 19:05:36
 *
 * @package terranean-wp-starter
 */

namespace Air_Light;

add_filter( 'air_helper_pll_register_strings', function() {
  $strings = [
    // 'Key: String' => 'String',
  ];

  /**
   * Uncomment if you need to have default terranean-wp-starter accessibility strings
   * translatable via Polylang string translations.
   */
  // foreach ( get_default_localization_strings() as $key => $value ) {
  // $strings[ "Accessibility: {$key}" ] = $value;
  // }

  return $strings;
} );

function get_default_localization_strings( $language = 'en' ) {
  $strings = [
    'en'  => [
      'Add a menu'                                   => __( 'Add a menu', 'terranean-wp-starter' ),
      'Open main menu'                               => __( 'Open main menu', 'terranean-wp-starter' ),
      'Close main menu'                              => __( 'Close main menu', 'terranean-wp-starter' ),
      'Main navigation'                              => __( 'Main navigation', 'terranean-wp-starter' ),
      'Back to top'                                  => __( 'Back to top', 'terranean-wp-starter' ),
      'Open child menu for'                          => __( 'Open child menu for', 'terranean-wp-starter' ),
      'Close child menu for'                         => __( 'Close child menu for', 'terranean-wp-starter' ),
      'Skip to content'                              => __( 'Skip to content', 'terranean-wp-starter' ),
      'Skip over the carousel element'               => __( 'Skip over the carousel element', 'terranean-wp-starter' ),
      'External site'                                => __( 'External site', 'terranean-wp-starter' ),
      'opens in a new window'                        => __( 'opens in a new window', 'terranean-wp-starter' ),
      'Page not found.'                              => __( 'Page not found.', 'terranean-wp-starter' ),
      'The reason might be mistyped or expired URL.' => __( 'The reason might be mistyped or expired URL.', 'terranean-wp-starter' ),
      'Search'                                       => __( 'Search', 'terranean-wp-starter' ),
      'Block missing required data'                  => __( 'Block missing required data', 'terranean-wp-starter' ),
      'This error is shown only for logged in users' => __( 'This error is shown only for logged in users', 'terranean-wp-starter' ),
      'No results found for your search'             => __( 'No results found for your search', 'terranean-wp-starter' ),
      'Edit'                                         => __( 'Edit', 'terranean-wp-starter' ),
      'Previous slide'                               => __( 'Previous slide', 'terranean-wp-starter' ),
      'Next slide'                                   => __( 'Next slide', 'terranean-wp-starter' ),
      'Last slide'                                   => __( 'Last slide', 'terranean-wp-starter' ),
    ],
    'fi'  => [
      'Add a menu'                                   => 'Luo uusi valikko',
      'Open main menu'                               => 'Avaa päävalikko',
      'Close main menu'                              => 'Sulje päävalikko',
      'Main navigation'                              => 'Päävalikko',
      'Back to top'                                  => 'Siirry takaisin sivun alkuun',
      'Open child menu for'                          => 'Avaa alavalikko kohteelle',
      'Close child menu for'                         => 'Sulje alavalikko kohteelle',
      'Skip to content'                              => 'Siirry suoraan sisältöön',
      'Skip over the carousel element'               => 'Hyppää karusellisisällön yli seuraavaan sisältöön',
      'External site'                                => 'Ulkoinen sivusto',
      'opens in a new window'                        => 'avautuu uuteen ikkunaan',
      'Page not found.'                              => 'Hups. Näyttää, ettei sivua löydy.',
      'The reason might be mistyped or expired URL.' => 'Syynä voi olla virheellisesti kirjoitettu tai vanhentunut linkki.',
      'Search'                                       => 'Haku',
      'Block missing required data'                  => 'Lohkon pakollisia tietoja puuttuu',
      'This error is shown only for logged in users' => 'Tämä virhe näytetään vain kirjautuneille käyttäjille',
      'No results for your search'                   => 'Haullasi ei löytynyt tuloksia',
      'Edit'                                         => 'Muokkaa',
      'Previous slide'                               => 'Edellinen dia',
      'Next slide'                                   => 'Seuraava dia',
      'Last slide'                                   => 'Viimeinen dia',
    ],
  ];

  return ( array_key_exists( $language, $strings ) ) ? $strings[ $language ] : $strings['en'];
} // end get_default_localization_strings

function get_default_localization( $string ) {
  if ( function_exists( 'ask__' ) && array_key_exists( "Accessibility: {$string}", apply_filters( 'air_helper_pll_register_strings', [] ) ) ) {
    return ask__( "Accessibility: {$string}" );
  }

  return esc_html( get_default_localization_translation( $string ) );
} // end get_default_localization

function get_default_localization_translation( $string ) {
  $language = get_bloginfo( 'language' );
  if ( function_exists( 'pll_the_languages' ) ) {
    $language = pll_current_language();
  }

  $translations = get_default_localization_strings( $language );

  return ( array_key_exists( $string, $translations ) ) ? $translations[ $string ] : '';
} // end get_default_localization_translation
