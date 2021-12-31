<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
require_once 'layout.php';

$name = 'Wilder';

echo $twig->render('home.html.twig', ['name' => $name]);


echo $twig->render('_footer.html.twig', ['contactEmail' => $contactEmail]);