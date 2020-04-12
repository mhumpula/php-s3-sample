<?php

$checksum = 'e0012edf3e80b6978849f5eff0d4b4e4c79ff1609dd1e613307e16318854d24ae64f26d17af3ef0bf7cfb710ca74755a';

copy('https://getcomposer.org/installer', 'composer-setup.php');
if (hash_file('SHA384', 'composer-setup.php') === $checksum) {
  echo("Composer installer verified\n");
} else {
  echo("Composer installer corrupt\n");
  unlink('composer-setup.php');
  exit(1);
}

system("php composer-setup.php --install-dir=/usr/local/bin --filename=composer");

unlink('composer-setup.php');
