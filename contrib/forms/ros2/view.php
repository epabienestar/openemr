<?php

// Copyright (C) 2009 Aron Racho <aron@mi-squared.com>
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; either version 2
require_once("../../globals.php");
require_once("$srcdir/api.inc");

require("C_FormROS2.class.php");

$c = new C_FormROS2();
echo $c->view_action($_GET['id']);
