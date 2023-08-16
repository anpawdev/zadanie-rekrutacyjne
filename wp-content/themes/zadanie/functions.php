<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Includes
 * ------------------------------------------------------------------------
 * The `function.php` file is should responsible only for including theme's
 * components. Your theme custom logic should be distributed
 * across separate files in the `/src` directory.
 */
// general
require_once 'src/styles.php';
require_once 'src/scripts.php';
require_once 'src/navs.php';

// additional
require_once 'src/acf.php';
require_once 'src/utilities.php';

// disable default dashboard widgets and unnecessary code
require_once 'src/clean.php';
