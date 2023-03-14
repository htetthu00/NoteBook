<?php 

unset($_SESSION['user']);

setNormalSuccess('Successfully logout');

redirectTo('login');