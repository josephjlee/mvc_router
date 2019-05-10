<?php

class Task {
  public $description;
  public $status = false;
  public function taskStatus() {
    return $this->status;
  }
  public function markTaskDone() {
    $this->status = true;
  }
}
