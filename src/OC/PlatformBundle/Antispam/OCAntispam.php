<?php
namespace OC\PlatformBundle\Antispam;


class OCAntispam

{

  /**
   * Vérifie si le texte est un spam ou non
   *
   * @param string $text
   * @return bool
   */
  // initialisation avec les variable
  public function __construct(\Swift_Mailer $mailer, $locale, $minLength)
  {
    $this->mailer    = $mailer;
    $this->locale    = $locale;
    $this->minLength = (int) $minLength;
  }

  public function isSpam($text)
  {
    return strlen($text) < $this->minLength;
  }

}
