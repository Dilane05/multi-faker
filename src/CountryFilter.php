<?php

namespace Cupidontech\MultiFaker;

class CountryFilter
{
    public function getContinentByCountry($country)
    {
        // Implémentez ici la logique pour faire correspondre le pays à son continent
        // Par exemple, utilisez un tableau associatif pour faire correspondre les pays aux continents.

        $countryToContinent = [
            'Cameroon' => 'Africa',
            'IvoryCoast' => 'Africa',
            'Nigeria' => 'Africa',
            'France' => 'Europe',
            'Germany' => 'Europe',
            'UnitedState' => 'America',
            // Ajoutez d'autres correspondances pays-continent au besoin
        ];

        // Recherche le pays dans le tableau des correspondances et renvoie le continent correspondant
        if (array_key_exists($country, $countryToContinent)) {
            return $countryToContinent[$country];
        }

        // Si le pays n'est pas trouvé, vous pouvez choisir une valeur par défaut ou générer une exception, selon vos besoins.
        return 'Unknown';
    }
}
