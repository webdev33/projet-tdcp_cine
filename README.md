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

Cloner le projet : 

    git clone https://github.com/WildCodeSchool/projet-tdcp_cine.git

Placer vous dans le projet :

    cd projet-tdcp_cine
    
Installation du projet :

    composer install
    
Update database :

    php app/console doctrine:schema:update --force
    
Droits écriture sur logs/ cache/ :

    sh bash/chmod.sh
    
Insertion des data fixtures :

    php app/console doctrine:fixtures:load   
