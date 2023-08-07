<?php
class Language
{
  private $category;
  private $language;

  function setCat($a)
  {
    $this->category = $a;
  }

  function getCat()
  {
    return $this->category;
  }

  function setLang($a)
  {
    $this->language = $a;
  }

  function getLang()
  {
    return $this->language;
  }

  function __clone()
  {
    $lang = new Language();
    $lang->setLang($this->language);
    return $lang;
  }
}
