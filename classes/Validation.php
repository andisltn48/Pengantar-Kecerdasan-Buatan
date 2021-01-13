<?php

class Validation {
  private $_passed = false, $_errors = [];

  public function check($items = []) {
    foreach ($items as $item => $rules) {
      foreach ($rules as $rule => $rule_value) {
        switch ($rule) {
          case 'required':
            if (trim($_POST[$item]) == false && $rule_value == true) {
              $this->addError(ucwords("$item Wajib di isi"));
            }
            break;
          case 'min':
            if (strlen($_POST[$item]) < $rule_value) {
              $this->addError(ucwords("$item minimal $rule_value karakter"));
            }
            break;
          case 'max':
            if (strlen($_POST[$item]) > $rule_value) {
              $this->addError(ucwords("$item maximal $rule_value karakter"));
            }
            break;
          case 'match':
            if ($_POST[$item] != $_POST[$rule_value]) {
              $this->addError(ucwords("$item harus sama dengan $rule_value"));
            }
            break;
          default:
            break;
        }
      }
    }
    // end first foreach

    if (empty($this->_errors)) {
      $this->_passed = true;
    }
    return $this;
  }

  private function addError($error) {
    $this->_errors[] = $error;
  }

  public function errors() {
    return $this->_errors;
  }

  public function passed() {
    return $this->_passed;
  }
}
