MovieSearch
===========

MovieSearch vous géolocalise et trouve les cinéma près de chez vous.
On peut consulter les films à l'affiche pour chaque cinéma.

A l'avenir, il faudrais avoir la possibilité de reserver des places en ligne. Disposer d'une zone membres et d'une newsletters.

Installation composer
---------------------

curl -sS https://getcomposer.org/installer | php

mv composer.phar /usr/local/bin/composer

curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer


Installation Tdcp-cine
----------------------

git clone https://github.com/Inso-61/MovieSearch.git

cd MovieSearch

composer install

php app/console doctrine:schema:update --force

sh bash/chmod.sh
