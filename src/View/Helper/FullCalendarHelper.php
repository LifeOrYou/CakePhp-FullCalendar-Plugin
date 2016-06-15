<?php

namespace FullCalendar\View\Helper;

use Cake\View\Helper;

class FullCalendarHelper extends Helper {

	public $helpers = ['Html'];

	public function css($options = []) {
		return $this->Html->css($path, $options + ['plugin' => true]);
	}

	public function script($options = []) {
		return $this->Html->script($path, $options + ['plugin' => true]);
	}

}