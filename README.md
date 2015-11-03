MovieSearch
===========

MovieSearch vous géolocalise et trouve les cinéma près de chez vous.
On peut consulter les films à l'affiche pour chaque cinéma.

L'application intègre l'API Google Maps JS

A l'avenir, il faudrais avoir la possibilité de reserver des places en ligne. Disposer d'une zone membres et d'une newsletters.
L'idéal serait de pouvoir intégrer une API pour trouver les films, du genre "API Allociné".

Installation composer
---------------------

    curl -sS https://getcomposer.org/installer | php

    mv composer.phar /usr/local/bin/composer

    curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer


Installation Tdcp-cine
----------------------

    git clone https://github.com/WildCodeSchool/projet-tdcp_cine.git

    cd projet-tdcp_cine

    composer install

    php app/console doctrine:schema:update --force

    sh bash/chmod.sh

Le dump SQL pour la liste des cinéma se trouve à la racine sous le nom "cinema.sql"
