<?php $this->layout('layouts/base', [ 'title' => 'Welcome to My Slim App']) ?>

<h1>Hello, <?= $this->e($name) ?></h1>