<?php

namespace Cupidontech\MultiFaker\Country\Africa;

use Illuminate\Support\Str;
use Faker\Generator as BaseGenerator;

class CameroonFakerGenerator extends BaseGenerator
{
    // Implémentez les méthodes de génération spécifiques au Cameroun ici

    // Tableau de régions du Cameroun


    public function first_name()
    {
        // $firstNames = ['Jean', 'Marie', 'Pierre', 'Elise', 'Françoise'];
        $firstNames = [
            'Jean', 'Marie', 'Pierre', 'Elise', 'Françoise', 'Emmanuel', 'Frida', 'Dieudonné', 'Suzanne', 'Thierry',
            'Josiane', 'Olivier', 'Yvette', 'Serge', 'Estelle',
            'Valentine', 'Romain', 'Chantal', 'Bruno', 'Isabelle',
            'Achille', 'Sylvie', 'Albert', 'Claudine', 'Grégoire',
            'Caroline', 'Émile', 'Julienne', 'Blaise', 'Rachel',
            'Thierry', 'Nathalie', 'Gaston', 'Évelyne', 'Lucien',
            'Sylviane', 'Yannick', 'Bernadette', 'André', 'Nadia',
            'Hervé', 'Christiane', 'Luc', 'Yolande', 'Jérôme',
            'Edith', 'David', 'Patricia', 'René', 'Sophie',
            'Philippe', 'Brigitte', 'Lucas', 'Jocelyne', 'Auguste',
            // Ajout de plus de prénoms francophones
            'Antoine', 'Camille', 'Léa', 'Théo', 'Élise',
            'Victor', 'Manon', 'Nicolas', 'Margaux', 'Maxime',
            'Alexandra', 'Guillaume', 'Pauline', 'Benjamin', 'Charlotte',
            'Hugo', 'Mathilde', 'Louis', 'Marine', 'Baptiste',
            'Valérie', 'Lucie', 'Vincent', 'Laure', 'Damien',
            'Léonard', 'Clémence', 'Jean-Luc', 'Isabella', 'Léo',
            'Élodie', 'Matthieu', 'Amélie', 'Pierre-Yves', 'Sophia',
            'François', 'Léna', 'Guilhem', 'Catherine', 'Raphaël',
            'Laurène', 'Étienne', 'Rosalie', 'Florent', 'Éva',
            'Béatrice', 'Eliott', 'Julia', 'Cyril', 'Émilie',
            'Bérengère', 'Martin', 'Sophia', 'Jonathan', 'Eléonore',
            'Jeanne', 'Édouard', 'Anouk', 'Maxence', 'Emma',
            'Margot', 'Tristan', 'Mathéa', 'Lucien', 'Clara',
            'Lucas', 'Cécile', 'Oscar', 'Zoé', 'Valentin',
            'Elsa', 'Samuel', 'Louise', 'Thibault', 'Marion',
            'Gaspard', 'Mélanie', 'Bastien', 'Daphné', 'Alexis',
            'Manuela', 'Fabien', 'Salomé', 'Charles', 'Hélène',
            'Julien', 'Stéphanie', 'Simon', 'Audrey', 'Gabriel',
            'Lise', 'Alexandre', 'Camélia', 'Vincent', 'Justine',
            'Léon', 'Carole', 'Tom', 'Juliette', 'Romain',
            'Noémie', 'Louis', 'Soline', 'Luc', 'Éloïse',
            'Étienne', 'Morgane', 'Timothée', 'Lola', 'Nathan',
            'Sara', 'Victorien', 'Eugénie', 'Gilles', 'Alice',
            'Thomas', 'Anne', 'Julius', 'Léonie', 'Benoît',
            'Eléonore', 'Mathias', 'Maëlle', 'Émile', 'Léna',
            'Cédric', 'Amélie', 'Édouard', 'Inès', 'Gabin',
            'Soline', 'Andréas', 'Julia', 'Marcel', 'Aurore',
            'Nicolas', 'Manon', 'Alexis', 'Ariane', 'Philippe',
            'Justine', 'Antonin', 'Anaïs', 'Louis', 'Morgane',
            'Thibaut', 'Mélanie', 'Sacha', 'Mathilde', 'Maxence',
            'Maud', 'Jérémie', 'Fanny', 'Corentin', 'Marie',
            'Raphaëlle', 'Léopold', 'Maïlys', 'Hugo', 'Léa',
            'Hervé', 'Camille', 'Quentin', 'Sophie', 'Pierre',
            'Laura', 'Valentin', 'Lise', 'Adrien', 'Elisa',
            'Étienne', 'Coralie', 'Lorenzo', 'Clémence', 'Julien',
            'Émilie', 'Léo', 'Aurélie', 'Adèle', 'Robin',
            'Sophie', 'Alexandre', 'Chloé', 'Antoine', 'Caroline',
            'Romain', 'Léna', 'Valère', 'Olivia', 'Matthias',
            'Pauline', 'Célestin', 'Margot', 'Bastien', 'Charlotte',
            'Lilian', 'Flore', 'Nathanaël', 'Margaux', 'Axel',
            'Marion', 'Lucas', 'Claire', 'Élie', 'Manon',
            'Théodore', 'Mathilde', 'Flavien', 'Romane', 'Léandre',
            'Élise', 'Thibault', 'Alice', 'Jules', 'Pauline',
            'Nicolas', 'Éva', 'Alexis', 'Roxane', 'Augustin',
            'Laurine', 'Matéo', 'Mélissa', 'Victor', 'Inès',
            'Tristan', 'Lou', 'Cyril', 'Lénaïc', 'Eloïse',
            'Gustave', 'Éloïse', 'Émile', 'Julie', 'Auguste',
            'Anaïs', 'Pierre-Louis', 'Lily', 'Noé', 'Audrey',
            'Léo', 'Diane', 'André', 'Lola', 'Hugo',
            'Carla', 'Thomas', 'Sarah', 'Léandre', 'Mathilde',
            'Édouard', 'Maëlys', 'Adrien', 'Jade', 'Romain',
            'Margaux', 'Marius', 'Léa', 'Florian', 'Solène',
            'Raphaël', 'Juliette', 'Marius', 'Manon', 'Émile',
            'Clémentine', 'César', 'Elsa', 'Lucas', 'Zoé',
            'Martin', 'Justine', 'Julien', 'Julia', 'Adèle',
            'Jules', 'Marine', 'Théo', 'Camille', 'Maximilien',
            'Alicia', 'Victorien', 'Caroline', 'Éliott', 'Juliette',
            'Marcelin', 'Mélanie', 'Hector', 'Léa', 'Lucas',
            'Chloé', 'Thibaud', 'Élise', 'Jean', 'Sophie',
            'Nolan', 'Élodie', 'Léandre', 'Hélène', 'Thibaut',
            'Léna', 'Édouard', 'Éva', 'Hugues', 'Lola',
            'Noé', 'Louise', 'Léon', 'Inès', 'Clément',
            'Anaïs', 'Valentin', 'Charlotte', 'Marius', 'Aurélie',
            'Baptiste', 'Élise', 'Marius', 'Émilie', 'Antonin',
            'Manon', 'Paulin', 'Sophie', 'Alexandre', 'Clémence',
            'Morgan', 'Margaux', 'Gaspard', 'Lucie', 'Flavien',
            'Morgane', 'Eliott', 'Cécile', 'Jules', 'Émilie',
            'Samuel', 'Julia', 'Théodore', 'Caroline', 'Julien',
            'Sara', 'Alexis', 'Chloé', 'Romain', 'Anaïs',
            'Léonard', 'Mathilde', 'Victor', 'Marine', 'Louis',
            'Audrey', 'Léo', 'Laure', 'Axel', 'Julie',
            'Benoît', 'Émilie', 'Tom', 'Charlotte', 'Jérémie',
            'Sophie', 'Baptiste', 'Océane', 'Paul', 'Clara',
            'Mathis', 'Élise', 'Matthieu', 'Aurélie', 'Gabriel',
            'Sylvie', 'Lorenzo', 'Léa', 'Hugo', 'Roxane',
            'Sacha', 'Alice', 'Léon', 'Élodie', 'Tristan',
            'Émilie', 'Pierre', 'Mélanie', 'Antoine', 'Lucie',
            'Léopold', 'Maëlys', 'Noé', 'Mathilde', 'Lilian',
            'Margot', 'Mathias', 'Marion', 'Aurélien', 'Juliette',
            'Mathieu', 'Pauline', 'Marius', 'Camille', 'Valentin',
            'Lise', 'Arthur', 'Éloïse', 'Alexandre', 'Clémence',
            'Nicolas', 'Chloé', 'Romain', 'Anaïs', 'Lucas',
            'Cécile', 'Julien', 'Sophie', 'Adrien', 'Émilie',
            'Maxime', 'Julia', 'Samuel', 'Audrey', 'Antonin',
            'Manon', 'Thomas', 'Sophie', 'Jules', 'Charlotte',
            'Étienne', 'Mélanie', 'Alexis', 'Pauline', 'Benoît',
            'Léa', 'Édouard', 'Laura', 'Hector', 'Lola',
            'Léo', 'Sara', 'Julien', 'Hélène', 'Clément',
            'Julie', 'Valentin', 'Léna', 'Marius', 'Aurélie',
            'Baptiste', 'Élise', 'Marius', 'Émilie', 'Alexandre',
            'Manon', 'Paulin', 'Sophie', 'Alexandre', 'Clémence',
            'Morgan', 'Margaux', 'Gaspard', 'Lucie', 'Flavien',
            'Morgane', 'Eliott', 'Cécile', 'Jules', 'Émilie',
            'Samuel', 'Julia', 'Théodore', 'Caroline', 'Julien',
            'Sara', 'Alexis', 'Chloé', 'Romain', 'Anaïs',
            'Léonard', 'Mathilde', 'Victor', 'Marine', 'Louis',
            'Audrey', 'Léo', 'Laure', 'Axel', 'Julie',
            'Benoît', 'Émilie', 'Tom', 'Charlotte', 'Jérémie',
            'Sophie', 'Baptiste', 'Océane', 'Paul', 'Clara',
            'Mathis', 'Élise', 'Matthieu', 'Aurélie', 'Gabriel',
            'Sylvie', 'Lorenzo', 'Léa', 'Hugo', 'Roxane',
            'Sacha', 'Alice', 'Léon', 'Élodie', 'Tristan',
            'Émilie', 'Pierre', 'Mélanie', 'Antoine', 'Lucie',
            'Léopold', 'Maëlys', 'Noé', 'Mathilde', 'Lilian',
            'Margot', 'Mathias', 'Marion', 'Aurélien', 'Juliette',
            'Mathieu', 'Pauline', 'Marius', 'Camille', 'Valentin',
            'Lise', 'Arthur', 'Éloïse', 'Alexandre', 'Clémence',
            'Nicolas', 'Chloé', 'Romain', 'Anaïs', 'Lucas',
            'Cécile', 'Julien', 'Sophie', 'Adrien', 'Émilie',
            'Maxime', 'Julia', 'Samuel', 'Audrey', 'Antonin',
            'Manon', 'Thomas', 'Sophie', 'Jules', 'Charlotte',
            'Étienne', 'Mélanie', 'Alexis', 'Pauline', 'Benoît',
            'Léa', 'Édouard', 'Laura', 'Hector', 'Lola',
            'Léo', 'Sara', 'Julien', 'Hélène', 'Clément',
            'Julie', 'Valentin', 'Léna', 'Marius', 'Aurélie',
            'Baptiste', 'Élise', 'Marius', 'Émilie', 'Alexandre',
            'Manon', 'Paulin', 'Sophie', 'Alexandre', 'Clémence',
            'Morgan', 'Margaux', 'Gaspard', 'Lucie', 'Flavien',
            'Morgane', 'Eliott', 'Cécile', 'Jules', 'Émilie',
            'Samuel', 'Julia', 'Théodore', 'Caroline', 'Julien',
            'Sara', 'Alexis', 'Chloé', 'Romain', 'Anaïs',
            'Léonard', 'Mathilde', 'Victor', 'Marine', 'Louis',
            'Audrey', 'Léo', 'Laure', 'Axel', 'Julie',
            'Benoît', 'Émilie', 'Tom', 'Charlotte', 'Jérémie',
            'Sophie', 'Baptiste', 'Océane', 'Paul', 'Clara',
            'Mathis', 'Élise', 'Matthieu', 'Aurélie', 'Gabriel',
            'Sylvie', 'Lorenzo', 'Léa', 'Hugo', 'Roxane',
            'Sacha', 'Alice', 'Léon', 'Élodie', 'Tristan',
            'Émilie', 'Pierre', 'Mélanie', 'Antoine', 'Lucie',
            'Léopold', 'Maëlys', 'Noé', 'Mathilde', 'Lilian',
            'Margot', 'Mathias', 'Marion', 'Aurélien', 'Juliette',
            'Mathieu', 'Pauline', 'Marius', 'Camille', 'Valentin',
            'Lise', 'Arthur', 'Éloïse', 'Alexandre', 'Clémence',
            'Nicolas', 'Chloé', 'Romain', 'Anaïs', 'Lucas',
            'Cécile', 'Julien', 'Sophie', 'Adrien', 'Émilie',
            'Maxime', 'Julia', 'Samuel', 'Audrey', 'Antonin',
            'Manon', 'Thomas', 'Sophie', 'Jules', 'Charlotte',
            'Étienne', 'Mélanie', 'Alexis', 'Pauline', 'Benoît',
            'Léa', 'Édouard', 'Laura', 'Hector', 'Lola',
            'Léo', 'Sara', 'Julien', 'Hélène', 'Clément',
            'Julie', 'Valentin', 'Léna', 'Marius', 'Aurélie',
            'Baptiste', 'Élise', 'Marius', 'Émilie', 'Alexandre',
            'Manon', 'Paulin', 'Sophie', 'Alexandre', 'Clémence',
            'Morgan', 'Margaux', 'Gaspard', 'Lucie', 'Flavien',
            'Morgane', 'Eliott', 'Cécile', 'Jules', 'Émilie',
            'Samuel', 'Julia', 'Théodore', 'Caroline', 'Julien',
            'Sara', 'Alexis', 'Chloé', 'Romain', 'Anaïs',
            'Léonard', 'Mathilde', 'Victor', 'Marine', 'Louis',
            'Audrey', 'Léo', 'Laure', 'Axel', 'Julie',
            'Benoît', 'Émilie', 'Tom', 'Charlotte', 'Jérémie',
            'Sophie', 'Baptiste', 'Océane', 'Paul', 'Clara',
            'Mathis', 'Élise', 'Matthieu', 'Aurélie', 'Gabriel',
            'Sylvie', 'Lorenzo', 'Léa', 'Hugo', 'Roxane',
            'Sacha', 'Alice', 'Léon', 'Élodie', 'Tristan',
            'Émilie', 'Pierre', 'Mélanie', 'Antoine', 'Lucie',
            'Léopold', 'Maëlys', 'Noé', 'Mathilde', 'Lilian',
            'Margot', 'Mathias', 'Marion', 'Aurélien', 'Juliette',
            'Mathieu', 'Pauline', 'Marius', 'Camille', 'Valentin',
            'Lise', 'Arthur', 'Éloïse', 'Alexandre', 'Clémence',
            'Nicolas', 'Chloé', 'Romain', 'Anaïs', 'Lucas',
            'Cécile', 'Julien', 'Sophie', 'Adrien', 'Émilie',
            'Maxime', 'Julia', 'Samuel', 'Audrey', 'Antonin',
            'Manon', 'Thomas', 'Sophie', 'Jules', 'Charlotte',
            'Étienne', 'Mélanie', 'Alexis', 'Pauline', 'Benoît',
            'Léa', 'Édouard', 'Laura', 'Hector', 'Lola',
            'Léo', 'Sara', 'Julien', 'Hélène', 'Clément',
            'Julie', 'Valentin', 'Léna', 'Marius', 'Aurélie',
            'Baptiste', 'Élise', 'Marius', 'Émilie', 'Alexandre',
            'Manon', 'Paulin', 'Sophie', 'Alexandre', 'Clémence',
            'Morgan', 'Margaux', 'Gaspard', 'Lucie', 'Flavien',
            'Morgane', 'Eliott', 'Cécile', 'Jules', 'Émilie',
            'Samuel', 'Julia', 'Théodore', 'Caroline', 'Julien',
            'Sara', 'Alexis', 'Chloé', 'Romain', 'Anaïs',
            'Léonard', 'Mathilde', 'Victor', 'Marine', 'Louis',
            'Audrey', 'Léo', 'Laure', 'Axel', 'Julie',
            'Benoît', 'Émilie', 'Tom', 'Charlotte', 'Jérémie',
            'Sophie', 'Baptiste', 'Océane', 'Paul', 'Clara',
            'Mathis', 'Élise', 'Matthieu', 'Aurélie', 'Gabriel',
            'Sylvie', 'Lorenzo', 'Léa', 'Hugo', 'Roxane',
            'Sacha', 'Alice', 'Léon', 'Élodie', 'Tristan',
            'Émilie', 'Pierre', 'Mélanie', 'Antoine', 'Lucie',
            'Léopold', 'Maëlys', 'Noé', 'Mathilde', 'Lilian',
            'Margot', 'Mathias', 'Marion', 'Aurélien', 'Juliette',
            'Mathieu', 'Pauline', 'Marius', 'Camille', 'Valentin',
            'Lise', 'Arthur', 'Éloïse', 'Alexandre', 'Clémence',
            'Nicolas', 'Chloé', 'Romain', 'Anaïs', 'Lucas',
            'Cécile', 'Julien', 'Sophie', 'Adrien', 'Émilie',
            'Maxime', 'Julia', 'Samuel', 'Audrey', 'Antonin',
            'Manon', 'Thomas', 'Sophie', 'Jules', 'Charlotte',
            'Étienne', 'Mélanie', 'Alexis', 'Pauline', 'Benoît',
            'Léa', 'Édouard', 'Laura', 'Hector', 'Lola',
            'Léo', 'Sara', 'Julien', 'Hélène', 'Clément',
            'Julie', 'Valentin', 'Léna', 'Marius', 'Aurélie',
            'Baptiste', 'Élise', 'Marius', 'Émilie', 'Alexandre',
            'Manon', 'Paulin', 'Sophie', 'Alexandre', 'Clémence',
            'Morgan', 'Margaux', 'Gaspard', 'Lucie', 'Flavien',
            'Morgane', 'Eliott', 'Cécile', 'Jules', 'Émilie',
            'Samuel', 'Julia', 'Théodore', 'Caroline', 'Julien',
            'Sara', 'Alexis', 'Chloé', 'Romain', 'Anaïs',
            'Léonard', 'Mathilde', 'Victor', 'Marine', 'Louis',
            'Audrey', 'Léo', 'Laure', 'Axel', 'Julie',
            'Benoît', 'Émilie', 'Tom', 'Charlotte', 'Jérémie',
            'Sophie', 'Baptiste', 'Océane', 'Paul', 'Clara',
            'Mathis', 'Élise', 'Matthieu', 'Aurélie', 'Gabriel',
            'Sylvie', 'Lorenzo', 'Léa', 'Hugo', 'Roxane',
            'Sacha', 'Alice', 'Léon', 'Élodie', 'Tristan',
            'Émilie', 'Pierre', 'Mélanie', 'Antoine', 'Lucie',
            'Léopold', 'Maëlys', 'Noé', 'Mathilde', 'Lilian',
            'Margot', 'Mathias', 'Marion', 'Aurélien', 'Juliette',
            'Mathieu', 'Pauline', 'Marius', 'Camille', 'Valentin',
            'Lise', 'Arthur', 'Éloïse', 'Alexandre', 'Clémence',
            'Nicolas', 'Chloé', 'Romain', 'Anaïs', 'Lucas',
            'Cécile', 'Julien', 'Sophie', 'Adrien', 'Émilie',
            'Maxime', 'Julia', 'Samuel', 'Audrey', 'Antonin',
            'Manon', 'Thomas', 'Sophie', 'Jules', 'Charlotte',
            'Étienne', 'Mélanie', 'Alexis', 'Pauline', 'Benoît',
            'Léa', 'Édouard', 'Laura', 'Hector', 'Lola',
            'Léo', 'Sara', 'Julien', 'Hélène', 'Clément',
            'Julie', 'Valentin', 'Léna', 'Marius', 'Aurélie',
            'Baptiste', 'Élise', 'Marius', 'Émilie', 'Alexandre',
            'Manon', 'Paulin', 'Sophie', 'Alexandre', 'Clémence',
            'Morgan', 'Margaux', 'Gaspard', 'Lucie', 'Flavien',
            'Morgane', 'Eliott', 'Cécile', 'Jules', 'Émilie',
            'Samuel', 'Julia', 'Théodore', 'Caroline', 'Julien',
            'Sara', 'Alexis', 'Chloé', 'Romain', 'Anaïs',
            'Léonard', 'Mathilde', 'Victor', 'Marine', 'Louis',
            'Audrey', 'Léo', 'Laure', 'Axel', 'Julie',
            'Benoît', 'Émilie', 'Tom', 'Charlotte', 'Jérémie',
            'Sophie', 'Baptiste', 'Océane', 'Paul', 'Clara',
            'Mathis', 'Élise', 'Matthieu', 'Aurélie', 'Gabriel',
            'Sylvie', 'Lorenzo', 'Léa', 'Hugo', 'Roxane',
            'Sacha', 'Alice', 'Léon', 'Élodie', 'Tristan',
            'Émilie', 'Pierre', 'Mélanie', 'Antoine', 'Lucie',
            'Léopold', 'Maëlys', 'Noé', 'Mathilde', 'Lilian',
            'Margot', 'Mathias', 'Marion', 'Aurélien', 'Juliette',
            'Mathieu', 'Pauline', 'Marius', 'Camille', 'Valentin',
            'Lise', 'Arthur', 'Éloïse', 'Alexandre', 'Clémence',
            'Nicolas', 'Chloé', 'Romain', 'Anaïs', 'Lucas',
            'Cécile', 'Julien', 'Sophie', 'Adrien', 'Émilie',
            'Maxime', 'Julia', 'Samuel', 'Audrey', 'Antonin',
            'Manon', 'Thomas', 'Sophie', 'Jules', 'Charlotte',
            'Étienne', 'Mélanie', 'Alexis', 'Pauline', 'Benoît',
            'Léa', 'Édouard', 'Laura', 'Hector', 'Lola',
            'Léo', 'Sara', 'Julien', 'Hélène', 'Clément',
            'Julie', 'Valentin', 'Léna', 'Marius', 'Aurélie',
            'Baptiste', 'Élise', 'Marius', 'Émilie', 'Alexandre',
            'Manon', 'Paulin', 'Sophie', 'Alexandre', 'Clémence',
            'Morgan', 'Margaux', 'Gaspard', 'Lucie', 'Flavien',
            'Morgane', 'Eliott', 'Cécile', 'Jules', 'Émilie',
            'Samuel', 'Julia', 'Théodore', 'Caroline', 'Julien',
            'Sara', 'Alexis', 'Chloé', 'Romain', 'Anaïs',
            'Léonard', 'Mathilde', 'Victor', 'Marine', 'Louis',
            'Audrey', 'Léo', 'Laure', 'Axel', 'Julie',
            'Benoît', 'Émilie', 'Tom', 'Charlotte', 'Jérémie',
            'Sophie', 'Baptiste', 'Océane', 'Paul', 'Clara',
            'Mathis', 'Élise', 'Matthieu', 'Aurélie', 'Gabriel',
            'Sylvie', 'Lorenzo', 'Léa', 'Hugo', 'Roxane',
            'Sacha', 'Alice', 'Léon', 'Élodie', 'Tristan',
            'Émilie', 'Pierre', 'Mélanie', 'Antoine', 'Lucie',
            'Léopold', 'Maëlys', 'Noé', 'Mathilde', 'Lilian',
            'Margot', 'Mathias', 'Marion', 'Aurélien', 'Juliette',
            'Mathieu', 'Pauline', 'Marius', 'Camille', 'Valentin',
            'Lise', 'Arthur', 'Éloïse', 'Alexandre', 'Clémence',
            'Nicolas', 'Chloé', 'Romain', 'Anaïs', 'Lucas',
            'Cécile', 'Julien', 'Sophie', 'Adrien', 'Émilie',
            'Maxime', 'Julia', 'Samuel', 'Audrey', 'Antonin',
            'Manon', 'Thomas', 'Sophie', 'Jules', 'Charlotte',
            'Étienne', 'Mélanie', 'Alexis', 'Pauline', 'Benoît',
            'Léa', 'Édouard', 'Laura', 'Hector', 'Lola',
            'Léo', 'Sara', 'Julien', 'Hélène', 'Clément',
            'Julie', 'Valentin', 'Léna', 'Marius', 'Aurélie',
            'Baptiste', 'Élise', 'Marius', 'Émilie', 'Alexandre',
            'Manon', 'Paulin', 'Sophie', 'Alexandre', 'Clémence',
            'Morgan', 'Margaux', 'Gaspard', 'Lucie', 'Flavien',
            'Morgane', 'Eliott', 'Cécile', 'Jules', 'Émilie',
            'Samuel', 'Julia', 'Théodore', 'Caroline', 'Julien',
            'Sara', 'Alexis', 'Chloé', 'Romain', 'Anaïs',
            'Léonard', 'Mathilde', 'Victor', 'Marine', 'Louis',
            'Audrey', 'Léo', 'Laure', 'Axel', 'Julie',
            'Benoît', 'Émilie', 'Tom', 'Charlotte', 'Jérémie',
            'Sophie', 'Baptiste', 'Océane', 'Paul', 'Clara',
            'Mathis', 'Élise', 'Matthieu', 'Aurélie', 'Gabriel',
            'Sylvie', 'Lorenzo', 'Léa', 'Hugo', 'Roxane',
            'Sacha', 'Alice', 'Léon', 'Élodie', 'Tristan',
            'Émilie', 'Pierre', 'Mélanie', 'Antoine', 'Lucie',
            'Léopold', 'Maëlys', 'Noé', 'Mathilde', 'Lilian',
            'Margot', 'Mathias', 'Marion', 'Aurélien', 'Juliette',
            'Mathieu', 'Pauline', 'Marius', 'Camille', 'Valentin',
            'Lise', 'Arthur', 'Éloïse', 'Alexandre', 'Clémence',
            'Nicolas', 'Chloé', 'Romain', 'Anaïs', 'Lucas',
            'Cécile', 'Julien', 'Sophie', 'Adrien', 'Émilie',
            'Maxime', 'Julia', 'Samuel', 'Audrey', 'Antonin',
            'Manon', 'Thomas', 'Sophie', 'Jules', 'Charlotte',
            'Étienne', 'Mélanie', 'Alexis', 'Pauline', 'Benoît',
            'Léa', 'Édouard', 'Laura', 'Hector', 'Lola',
            'Léo', 'Sara', 'Julien', 'Hélène', 'Clément',
            'Julie', 'Valentin', 'Léna', 'Marius', 'Aurélie',
            'Baptiste', 'Élise', 'Marius', 'Émilie', 'Alexandre',
            'Manon', 'Paulin', 'Sophie', 'Alexandre', 'Clémence',
            'Morgan', 'Margaux', 'Gaspard', 'Lucie', 'Flavien',
            'Morgane', 'Eliott', 'Cécile', 'Jules', 'Émilie',
            'Samuel', 'Julia', 'Théodore', 'Caroline', 'Julien',
            'Sara', 'Alexis', 'Chloé', 'Romain', 'Anaïs',
            'Léonard', 'Mathilde', 'Victor', 'Marine', 'Louis',
            'Audrey', 'Léo', 'Laure', 'Axel', 'Julie',
            'Benoît', 'Émilie', 'Tom', 'Charlotte', 'Jérémie',
            'Sophie', 'Baptiste', 'Océane', 'Paul', 'Clara',
            'Mathis', 'Élise', 'Matthieu', 'Aurélie', 'Gabriel',
            'Sylvie', 'Lorenzo', 'Léa', 'Hugo', 'Roxane',
            'Sacha', 'Alice', 'Léon', 'Élodie', 'Tristan',
            'Émilie', 'Pierre', 'Mélanie', 'Antoine', 'Lucie',
            'Léopold', 'Maëlys', 'Noé', 'Mathilde', 'Lilian',
            'Margot', 'Mathias', 'Marion', 'Aurélien', 'Juliette',
            'Mathieu', 'Pauline', 'Marius', 'Camille', 'Valentin',
            'Lise', 'Arthur', 'Éloïse', 'Alexandre', 'Clémence',
            'Nicolas', 'Chloé', 'Romain', 'Anaïs', 'Lucas',
            'Cécile', 'Julien', 'Sophie', 'Adrien', 'Émilie',
            'Maxime', 'Julia', 'Samuel', 'Audrey', 'Antonin',
            'Manon', 'Thomas', 'Sophie', 'Jules', 'Charlotte',
            'Étienne', 'Mélanie', 'Alexis', 'Pauline', 'Benoît',
            'Léa', 'Édouard', 'Laura', 'Hector', 'Lola',
            'Léo', 'Sara', 'Julien', 'Hélène', 'Clément',
            'Julie', 'Valentin', 'Léna', 'Marius', 'Aurélie',
            'Baptiste', 'Élise', 'Marius', 'Émilie', 'Alexandre',
            'Manon', 'Paulin', 'Sophie', 'Alexandre', 'Clémence',
            'Morgan', 'Margaux', 'Gaspard', 'Lucie', 'Flavien',
            'Morgane', 'Eliott', 'Cécile', 'Jules', 'Émilie',
            'Samuel', 'Julia', 'Théodore', 'Caroline', 'Julien',
            'Sara', 'Alexis', 'Chloé', 'Romain', 'Anaïs',
            'Léonard', 'Mathilde', 'Victor', 'Marine', 'Louis',
            'Audrey', 'Léo', 'Laure', 'Axel', 'Julie',
            'Benoît', 'Émilie', 'Tom', 'Charlotte', 'Jérémie',
            'Sophie', 'Baptiste', 'Océane', 'Paul', 'Clara',
            'Mathis', 'Élise', 'Matthieu', 'Aurélie', 'Gabriel',
            'Sylvie', 'Lorenzo', 'Léa', 'Hugo', 'Roxane',
            'Sacha', 'Alice', 'Léon', 'Élodie', 'Tristan',
            'Émilie', 'Pierre', 'Mélanie', 'Antoine', 'Lucie',
            'Léopold', 'Maëlys', 'Noé', 'Mathilde', 'Lilian',
            'Margot', 'Mathias', 'Marion', 'Aurélien', 'Juliette',
            'Mathieu', 'Pauline', 'Marius', 'Camille', 'Valentin',
            'Lise', 'Arthur', 'Éloïse', 'Alexandre', 'Clémence',
            'Nicolas', 'Chloé', 'Romain', 'Anaïs', 'Lucas',
            'Cécile', 'Julien', 'Sophie', 'Adrien', 'Émilie',
            'Maxime', 'Julia', 'Samuel', 'Audrey', 'Antonin',
            'Manon', 'Thomas', 'Sophie', 'Jules', 'Charlotte',
            'Étienne', 'Mélanie', 'Alexis', 'Pauline', 'Benoît',
            'Léa', 'Édouard', 'Laura', 'Hector', 'Lola',
            'Léo', 'Sara', 'Julien', 'Hélène', 'Clément',
            'Julie', 'Valentin', 'Léna', 'Marius', 'Aurélie',
            'Baptiste', 'Élise', 'Marius', 'Émilie', 'Alexandre',
            'Manon', 'Paulin', 'Sophie', 'Alexandre', 'Clémence',
            'Morgan', 'Margaux', 'Gaspard', 'Lucie', 'Flavien',
            'Morgane', 'Eliott', 'Cécile', 'Jules', 'Émilie',
            'Samuel', 'Julia', 'Théodore', 'Caroline', 'Julien',
            'Sara', 'Alexis', 'Chloé', 'Romain', 'Anaïs',
            'Léonard', 'Mathilde', 'Victor', 'Marine', 'Louis',
            'Audrey', 'Léo', 'Laure', 'Axel', 'Julie',
            'Benoît', 'Émilie', 'Tom', 'Charlotte', 'Jérémie',
            'Sophie', 'Baptiste', 'Océane', 'Paul', 'Clara',
            'Mathis', 'Élise', 'Matthieu', 'Aurélie', 'Gabriel',
            'Sylvie', 'Lorenzo', 'Léa', 'Hugo', 'Roxane',
            'Sacha', 'Alice', 'Léon', 'Élodie', 'Tristan',
            'Émilie', 'Pierre', 'Mélanie', 'Antoine', 'Lucie',
            'Léopold', 'Maëlys', 'Noé', 'Mathilde', 'Lilian',
            'Margot', 'Mathias', 'Marion', 'Aurélien', 'Juliette',
            'Mathieu', 'Pauline', 'Marius', 'Camille', 'Valentin',
            'Lise', 'Arthur', 'Éloïse', 'Alexandre', 'Clémence',
            'Nicolas', 'Chloé', 'Romain', 'Anaïs', 'Lucas',
            'Cécile', 'Julien', 'Sophie', 'Adrien', 'Émilie',
            'Maxime', 'Julia', 'Samuel', 'Audrey', 'Antonin',
            'Manon', 'Thomas', 'Sophie', 'Jules', 'Charlotte',
            'Étienne', 'Mélanie', 'Alexis', 'Pauline', 'Benoît',
            'Léa', 'Édouard', 'Laura', 'Hector', 'Lola',
            'Léo', 'Sara', 'Julien', 'Hélène', 'Clément',
            'Julie', 'Valentin', 'Léna', 'Marius', 'Aurélie',
            'Baptiste', 'Élise', 'Marius', 'Émilie', 'Alexandre',
            'Manon', 'Paulin', 'Sophie', 'Alexandre', 'Clémence',
            'Morgan', 'Margaux', 'Gaspard', 'Lucie', 'Flavien',
            'Morgane', 'Eliott', 'Cécile', 'Jules', 'Émilie',
            'Samuel', 'Julia', 'Théodore', 'Caroline', 'Julien',
            'Sara', 'Alexis', 'Chloé', 'Romain', 'Anaïs',
            'Léonard', 'Mathilde', 'Victor', 'Marine', 'Louis',
            'Audrey', 'Léo', 'Laure', 'Axel', 'Julie',
            'Benoît', 'Émilie', 'Tom', 'Charlotte', 'Jérémie',
            'Sophie', 'Baptiste', 'Océane', 'Paul', 'Clara',
            'Mathis', 'Élise', 'Matthieu', 'Aurélie', 'Gabriel',
            'Sylvie', 'Lorenzo', 'Léa', 'Hugo', 'Roxane',
            'Sacha', 'Alice', 'Léon', 'Élodie', 'Tristan',
            'Émilie', 'Pierre', 'Mélanie', 'Antoine', 'Lucie',
            'Léopold', 'Maëlys', 'Noé', 'Mathilde', 'Lilian',
            'Margot', 'Mathias', 'Marion', 'Aurélien', 'Juliette',
            'Mathieu', 'Pauline', 'Marius', 'Camille', 'Valentin',
            'Lise', 'Arthur', 'Éloïse', 'Alexandre', 'Clémence',
            'Nicolas', 'Chloé', 'Romain', 'Anaïs', 'Lucas',
            'Cécile', 'Julien', 'Sophie', 'Adrien', 'Émilie',
            'Maxime', 'Julia', 'Samuel', 'Audrey', 'Antonin',
            'Manon', 'Thomas', 'Sophie', 'Jules', 'Charlotte',
            'Étienne', 'Mélanie', 'Alexis', 'Pauline', 'Benoît',
            'Léa', 'Édouard', 'Laura', 'Hector', 'Lola',
            'Léo', 'Sara', 'Julien', 'Hélène', 'Clément',
            'Julie', 'Valentin', 'Léna', 'Marius', 'Aurélie',
            'Baptiste', 'Élise', 'Marius', 'Émilie', 'Alexandre',
            'Manon', 'Paulin', 'Sophie', 'Alexandre', 'Clémence',
            'Morgan', 'Margaux', 'Gaspard', 'Lucie', 'Flavien',
            'Morgane', 'Eliott', 'Cécile', 'Jules', 'Émilie',
            'Samuel', 'Julia', 'Théodore', 'Caroline', 'Julien',
            'Sara', 'Alexis', 'Chloé', 'Romain', 'Anaïs',
            'Léonard', 'Mathilde', 'Victor', 'Marine', 'Louis',
            'Audrey', 'Léo', 'Laure', 'Axel', 'Julie',
            'Benoît', 'Émilie', 'Tom', 'Charlotte', 'Jérémie',
            'Sophie', 'Baptiste', 'Océane', 'Paul', 'Clara',
            'Mathis', 'Élise', 'Matthieu', 'Aurélie', 'Gabriel',
            'Sylvie', 'Lorenzo', 'Léa', 'Hugo', 'Roxane',
            'Sacha', 'Alice', 'Léon', 'Élodie', 'Tristan',
            'Émilie', 'Pierre', 'Mélanie', 'Antoine', 'Lucie',
            'Léopold', 'Maëlys', 'Noé', 'Mathilde', 'Lilian',
            'Margot', 'Mathias', 'Marion', 'Aurélien', 'Juliette',
            'Mathieu', 'Pauline', 'Marius', 'Camille', 'Valentin',
            'Lise', 'Arthur', 'Éloïse', 'Alexandre', 'Clémence',
            'Nicolas', 'Chloé', 'Romain', 'Anaïs', 'Lucas',
            'Cécile', 'Julien', 'Sophie', 'Adrien', 'Émilie',
            'Maxime', 'Julia', 'Samuel', 'Audrey', 'Antonin',
            'Manon', 'Thomas', 'Sophie', 'Jules', 'Charlotte',
            'Étienne', 'Mélanie', 'Alexis', 'Pauline', 'Benoît',
            'Léa', 'Édouard', 'Laura', 'Hector', 'Lola',
            'Léo', 'Sara', 'Julien', 'Hélène', 'Clément',
            'Julie', 'Valentin', 'Léna', 'Marius', 'Aurélie',
            'Baptiste', 'Élise', 'Marius', 'Émilie', 'Alexandre',
            'Manon', 'Paulin', 'Sophie', 'Alexandre', 'Clémence',
            'Morgan', 'Margaux', 'Gaspard', 'Lucie', 'Flavien',
            'Morgane', 'Eliott', 'Cécile', 'Jules', 'Émilie',
            'Samuel', 'Julia', 'Théodore', 'Caroline', 'Julien',
            'Sara', 'Alexis', 'Chloé', 'Romain', 'Anaïs',
            'Léonard', 'Mathilde', 'Victor', 'Marine', 'Louis',
            'Audrey', 'Léo', 'Laure', 'Axel', 'Julie',
            'Benoît', 'Émilie', 'Tom', 'Charlotte', 'Jérémie',
            'Sophie', 'Baptiste', 'Océane', 'Paul', 'Clara',
            'Mathis', 'Élise', 'Matthieu', 'Aurélie', 'Gabriel',
            'Sylvie', 'Lorenzo', 'Léa', 'Hugo', 'Roxane',
            'Sacha', 'Alice', 'Léon', 'Élodie', 'Tristan',
            'Émilie', 'Pierre', 'Mélanie', 'Antoine', 'Lucie',
            'Léopold', 'Maëlys', 'Noé', 'Mathilde', 'Lilian',
            'Margot', 'Mathias', 'Marion', 'Aurélien', 'Juliette',
            'Mathieu', 'Pauline', 'Marius', 'Camille', 'Valentin',
            'Lise', 'Arthur', 'Éloïse', 'Alexandre', 'Clémence',
            'Nicolas', 'Chloé', 'Romain', 'Anaïs', 'Lucas',
            'Cécile', 'Julien', 'Sophie', 'Adrien', 'Émilie',
            'Maxime', 'Julia', 'Samuel', 'Audrey', 'Antonin',
            'Manon', 'Thomas', 'Sophie', 'Jules', 'Charlotte',
            'Étienne', 'Mélanie', 'Alexis', 'Pauline', 'Benoît',
            'Léa', 'Édouard', 'Laura', 'Hector', 'Lola',
            'Léo', 'Sara', 'Julien', 'Hélène', 'Clément',
            'Julie', 'Valentin', 'Léna', 'Marius', 'Aurélie',
            'Baptiste', 'Élise', 'Marius', 'Émilie', 'Alexandre',
            'Manon', 'Paulin', 'Sophie', 'Alexandre', 'Clémence',
            'Morgan', 'Margaux', 'Gaspard', 'Lucie', 'Flavien',
            'Morgane', 'Eliott', 'Cécile', 'Jules', 'Émilie',
            'Samuel', 'Julia', 'Théodore', 'Caroline', 'Julien',
            'Sara', 'Alexis', 'Chloé', 'Romain', 'Anaïs',
            'Léonard', 'Mathilde', 'Victor', 'Marine', 'Louis',
            'Audrey', 'Léo', 'Laure', 'Axel', 'Julie',
            'Benoît', 'Émilie', 'Tom', 'Charlotte', 'Jérémie',
            'Sophie', 'Baptiste', 'Océane', 'Paul', 'Clara',
            'Mathis', 'Élise', 'Matthieu', 'Aurélie', 'Gabriel',
            'Sylvie', 'Lorenzo', 'Léa', 'Hugo', 'Roxane',
            'Sacha', 'Alice', 'Léon', 'Élodie', 'Tristan',
            'Émilie', 'Pierre', 'Mélanie', 'Antoine', 'Lucie',
            'Léopold', 'Maëlys', 'Noé', 'Mathilde', 'Lilian',
            'Margot', 'Mathias', 'Marion', 'Aurélien', 'Juliette',
            'Mathieu', 'Pauline', 'Marius', 'Camille', 'Valentin',
            'Lise', 'Arthur', 'Éloïse', 'Alexandre', 'Clémence',
            'Nicolas', 'Chloé', 'Romain', 'Anaïs', 'Lucas',
            'Cécile', 'Julien', 'Sophie', 'Adrien', 'Émilie',
            'Maxime', 'Julia', 'Samuel', 'Audrey', 'Antonin',
            'Manon', 'Thomas', 'Sophie', 'Jules', 'Charlotte',
            'Étienne', 'Mélanie', 'Alexis', 'Pauline', 'Benoît',
            'Léa', 'Édouard', 'Laura', 'Hector', 'Lola',
            'Léo', 'Sara', 'Julien', 'Hélène', 'Clément',
            'Julie', 'Valentin', 'Léna', 'Marius', 'Aurélie',
            'Baptiste', 'Élise'
        ];

        $randomIndex = rand(0, count($firstNames) - 1);
        return $firstNames[$randomIndex];
    }

    public function last_name()
    {

        $lastNames = [
            'Nkeng', 'Tchoua', 'Ekong', 'Makossa', 'Ngo', 'Ngombe', 'Mvondo', 'Mballa', 'Ngong', 'Takou',
            'Kouam', 'Ongolo', 'Moukouri', 'Bekolo', 'Ngando', 'Meyong', 'Ewane', 'Owona', 'Nkwenti', 'Tchami',
            'Biyong', 'Nkongo', 'Ondoa', 'Mvogo', 'Ndogmo', 'Elong', 'Mekoue', 'Ntoko', 'Mbia', 'Nkodo',
            'Tchouta', 'Mfoula', 'Ebangha', 'Ndam', 'Tchakounte', 'Mveng', 'Eseme', 'Mandeng', 'Mbekou', 'Njock',
            'Tchaptchet', 'Nguepi', 'Nnomo', 'Tchatchouang', 'Mbida', 'Eteme', 'Mvemba', 'Ngoma', 'Owono', 'Nkwelle',
            'Tchouanang', 'Mbezele', 'Nsong', 'Ekindi', 'Mfou', 'Nkwamba', 'Tchinda', 'Eboa', 'Nyebe', 'Meyap',
            'Tchekwa', 'Mvula', 'Ngounou', 'Ebanda', 'Nkouka', 'Moudourou', 'Tchouaffe', 'Meyoumbi', 'Ekoue', 'Ngoepe',
            'Tchapda', 'Onguene', 'Mbanda', 'Ngalim', 'Mekoulou', 'Elongo', 'Tchoumba', 'Nguimfack', 'Mbassi', 'Owona',
            'Tchoume', 'Nyeck', 'Meyoung', 'Njike', 'Mvondo', 'Tchapda', 'Ekotto', 'Nkoto', 'Mfoumbi', 'Ekindi',
            'Nkante', 'Ngoa', 'Mandessi', 'Tchinda', 'Ngoutou', 'Meka', 'Nkollo', 'Tchougong', 'Mboua', 'Ekani',
            'Nkwenti', 'Mvoto', 'Noumbissi', 'Tchane', 'Ngomba', 'Ngaounde', 'Meyong', 'Ewane', 'Mbanda', 'Meyounga',
            'Tchatchoua', 'Eteme', 'Mbom', 'Njikam', 'Owoundi', 'Tchoumbou', 'Nguimfack', 'Ekani', 'Mekulu', 'Mvondo',
            'Nkou', 'Tchoua', 'Nkoto', 'Onguene', 'Ekeke', 'Nga', 'Tchindou', 'Mbombo', 'Mbezele', 'Ngoepe',
            'Mvongo', 'Mvemba', 'Nkwelle', 'Nyeck', 'Mvuala', 'Nkwenti', 'Tchouna', 'Eyang', 'Mbia', 'Nkolo',
            'Moudourou', 'Ngalim', 'Mbanda', 'Tchinda', 'Elongo', 'Nkante', 'Tchane', 'Noumbissi', 'Eteme', 'Mbom',
            'Njikam', 'Meka', 'Meyounga', 'Tchatchoua', 'Mbanda', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala',
            'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou',
            'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam',
            'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo',
            'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti',
            'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo',
            'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua',
            'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi',
            'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang',
            'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle',
            'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke',
            'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom',
            'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia',
            'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala',
            'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou',
            'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam',
            'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo',
            'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti',
            'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo',
            'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua',
            'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi',
            'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang',
            'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle',
            'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke',
            'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom',
            'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia',
            'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala',
            'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou',
            'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam',
            'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo',
            'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti',
            'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo',
            'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua',
            'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi',
            'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang',
            'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle',
            'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke',
            'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom',
            'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia',
            'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala',
            'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou',
            'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam',
            'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo',
            'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti',
            'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo',
            'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua',
            'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi',
            'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang',
            'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle',
            'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke',
            'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom',
            'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia',
            'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala',
            'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou',
            'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam',
            'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo',
            'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti',
            'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo',
            'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua',
            'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi',
            'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang',
            'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle',
            'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke',
            'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom',
            'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia',
            'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala',
            'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou',
            'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam',
            'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo',
            'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti',
            'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo',
            'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua',
            'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi',
            'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang',
            'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle',
            'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke',
            'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom',
            'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia',
            'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala',
            'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou',
            'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo', 'Noumbissi', 'Mbom', 'Njikam',
            'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti', 'Eyang', 'Mbia', 'Nkolo',
            'Noumbissi', 'Mbom', 'Njikam', 'Tchatchoua', 'Ekeke', 'Tchindou', 'Mvongo', 'Nkwelle', 'Mvuala', 'Nkwenti',
            'Eyang', 'Mbia', 'Nkolo', 'Noumb'
        ];


        $randomIndex = rand(0, count($lastNames) - 1);
        return $lastNames[$randomIndex];
    }

    function gender()
    {
        $genders = ['Male', 'Female'];
        return $genders[array_rand($genders)];
    }

    public function origins()
    {
        $origins = [
            'Bamiléké', 'bassa', 'Beti', 'Bulu', 'Bafia', 'Bafia', 'Bassa', 'Bamun', 'Fang', 'Maka', 'Duala', 'Baka', 'Bamileke', 'Duala', 'Baka', 'Baka', 'Bamileke', 'Bulu', 'Duala', 'Bamileke', 'Maka', 'Bamun', 'Beti', 'Fang', 'Bamun', 'Bassa', 'Fang', 'Bafia',
        ];

        $randomIndex = rand(0, count($origins) - 1);
        return $origins[$randomIndex];
    }

    // Fonction pour générer une région aléatoire
    function region()
    {
        $regions = [
            "Adamaoua",
            "Centre",
            "Est",
            "Extrême-Nord",
            "Littoral",
            "Nord",
            "Nord-Ouest",
            "Ouest",
            "Sud",
            "Sud-Ouest"
        ];

        $regionAleatoire = $regions[array_rand($regions)];
        return $regionAleatoire;
    }

    // Fonction pour générer une ville aléatoire en fonction de la région
    public function city($region)
    {
        $villesParRegion = [
            "Adamaoua" => ["Ngaoundéré", "Tibati", "Meiganga"],
            "Centre" => ["Yaoundé", "Ebolowa", "Akonolinga"],
            "Est" => ["Bertoua", "Batouri", "Abong-Mbang"],
            "Extrême-Nord" => ["Maroua", "Mokolo", "Kousséri"],
            "Littoral" => ["Douala", "Nkongsamba", "Edea"],
            "Nord" => ["Garoua", "Poli", "Rey Bouba"],
            "Nord-Ouest" => ["Bamenda", "Buea", "Kumbo"],
            "Ouest" => ["Dschang", "Bafoussam", "Bafoussam"],
            "Sud" => ["Ebolowa", "Sangmélima", "Meyomessala"],
            "Sud-Ouest" => ["Buea", "Limbe", "Kumba"]
        ];

        $villeAleatoire = $villesParRegion[$region][array_rand($villesParRegion[$region])];
        return $villeAleatoire;
    }

    public function cities()
    {
        $villes = [
            "Yaoundé", "Douala", "Bafoussam", "Bamenda", "Dschang", "Ngaoundéré", "Garoua", "Limbe", "Kribi", "Bertoua", "Bafang", "Ebolowa", "Maroua", "Bamusso", "Tiko"
        ];
        return $villes[array_rand($villes)];
    }

    public function coordinates()
    {
        // Limites géographiques du Cameroun (latitude et longitude)
        $limites = [
            'nord' => 13.083333,   // Latitude Nord
            'sud' => 2.333333,     // Latitude Sud
            'ouest' => 8.483333,   // Longitude Ouest
            'est' => 16.083333     // Longitude Est
        ];

        // Génération de coordonnées aléatoires dans les limites du Cameroun
        $latitude = $limites['sud'] + mt_rand() / mt_getrandmax() * ($limites['nord'] - $limites['sud']);
        $longitude = $limites['ouest'] + mt_rand() / mt_getrandmax() * ($limites['est'] - $limites['ouest']);

        return ['latitude' => $latitude, 'longitude' => $longitude];
    }

    public function address()
    {

        $streets = [
            'Douala, Littoral' => [
                'Rue de la Liberté',
                'Avenue du Port',
                'Boulevard de l\'Indépendance',
                'Rue de la Paix',
                'Avenue de la République',
                'Logpom Eneo',
                'Logpom Carrefour Andem',
                'Logpom Fin goudron Bassong',
                'Makepe rhone poulin',
                'Makepe petit pays',
                'Makepe IBM',
                'Ndogbong Zachman',
                'Ndogbong Carrefour Conquete',
                'Beedi Hopital general'
            ],
            'Yaoundé, Centre' => [
                'Boulevard de Yaoundé',
                'Rue de l\'Unité',
                'Avenue de l\'Indépendance',
                'Boulevard de la Liberté',
                'Rue de la Démocratie',
            ],
            'Bafoussam, Ouest' => [
                'Avenue du Cameroun',
                'Rue de la Mairie',
                'Boulevard de l\'Espérance',
                'Rue de la Fraternité',
                'Avenue de la Solidarité',
            ],
            'Nkongsamba, Littoral' => [
                'Boulevard de Nkongsamba',
                'Rue de la Poste',
                'Avenue de la Gare',
                'Boulevard de la Liberté',
                'Rue de l\'Indépendance',
            ],
            'Limbe, Sud-Ouest' => [
                'Rue de Limbe',
                'Avenue du Port de Limbe',
                'Boulevard de la Plage',
                'Rue des Palmiers',
                'Avenue des Cocotiers',
            ],
            'Buea, Sud-Ouest' => [
                'Boulevard de Buea',
                'Rue de la Montagne',
                'Avenue de la Paix',
                'Boulevard de l\'Université',
                'Rue de la Science',
            ],
            'Garoua, Nord' => [
                'Avenue de Garoua',
                'Boulevard de la République',
                'Rue de la Solidarité',
                'Avenue de la Liberté',
                'Boulevard de l\'Indépendance',
            ],
            'Bafang, Ouest' => [
                'Rue de Bafang',
                'Avenue de la Gare',
                'Boulevard de l\'Unité',
                'Rue de la Concorde',
                'Avenue de la Réconciliation',
            ],
            'Bamenda, Nord-Ouest' => [
                'Boulevard de Bamenda',
                'Rue de la Ville',
                'Avenue de l\'Espoir',
                'Boulevard de la Jeunesse',
                'Rue de la Culture',
            ],
            'Kribi, Sud' => [
                'Rue de Kribi',
                'Avenue de la Plage',
                'Boulevard du Port',
                'Rue de la Détente',
                'Avenue de la Biodiversité',
            ],
        ];

        $randomCity = array_rand($streets);

        // Choisissez une rue aléatoire dans la ville
        $randomStreet = $streets[$randomCity][array_rand($streets[$randomCity])];

        return "$randomStreet, $randomCity";
    }

    public function phone()
    {
        $prefix = '+2376';

        // Générez le premier chiffre aléatoire parmi 6, 5, 7, 9 ou 8
        $firstDigit = [6, 5, 7, 9, 8][rand(0, 4)];


        // Générez les 5 derniers chiffres aléatoires
        $secondPart = '';
        for ($i = 0; $i < 7; $i++) {
            $secondPart .= rand(0, 9);
        }

        return $prefix . $firstDigit  . $secondPart;
    }

    public function email()
    {
        // Générez un nom d'utilisateur aléatoire, par exemple un prénom suivi d'un numéro
        $username = $this->last_name() . rand(1, 100);

        // Le suffixe de l'adresse e-mail
        $suffix = '@237.com';

        return $username . $suffix;
    }

    public function date($startDate = '-30 years', $endDate = 'now', $format = 'Y-m-d')
    {
        $timestamp = mt_rand(strtotime($startDate), strtotime($endDate));
        return date($format, $timestamp);
    }

    public function text($length)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $content = '';

        for ($i = 0; $i < $length; $i++) {
            $content .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $content;
    }

    public function companyName()
    {
        $prefixes = ['Société', 'Entreprise', 'Groupe', 'Compagnie', 'OM', 'MOMO', 'ODC', 'EU MOBILE MONEY', 'BICEC', 'UBA', 'FINESS', 'GLOBAL', 'BUCA', 'ACTIVA', 'MEMPHYS', 'SABITOO', 'ANNA', 'G6K', 'K-RISMA', 'BOCOM', 'TOTAL', 'NEXTTEL', 'BLUE', 'YOOME'];
        $suffixes = ['Ltd', 'SA', 'SARL', 'EURL', 'SPRL'];

        $prefix = $prefixes[rand(0, count($prefixes) - 1)];
        $suffix = $suffixes[rand(0, count($suffixes) - 1)];

        return "$prefix $suffix";
    }

    public function creditCardNumber()
    {
        $prefixes = ['4', '5', '37', '6'];
        $prefix = $prefixes[rand(0, count($prefixes) - 1)];

        $length = 16; // La plupart des numéros de cartes ont 16 chiffres

        // Générez les chiffres aléatoires restants
        $remainingLength = $length - strlen($prefix);
        $cardNumber = $prefix;
        for ($i = 0; $i < $remainingLength; $i++) {
            $cardNumber .= rand(0, 9);
        }

        return $cardNumber;
    }

    public function password()
    {
        // Générez un mot de passe aléatoire avec la longueur spécifiée
        $password = Str::random(10);

        return $password;
    }

    public function username()
    {

        $firstName = $this->first_name;
        $lastName = $this->last_name;

        // Générez un nombre aléatoire à ajouter au nom d'utilisateur
        $randomNumber = rand(100, 999);

        // Concaténez le prénom, le nom de famille et le numéro aléatoire pour former le nom d'utilisateur
        $username = strtolower($firstName . $lastName . $randomNumber);

        return $username;
    }

    function product()
    {
        // List of fictitious product names
        $productNames = [
            "Smartphone",
            "Laptop",
            "Tablet",
            "TV",
            "Headphones",
            "Camera",
            "Game Console",
            "Bluetooth Speaker",
            "Wireless Earbuds",
            "Smartwatch",
        ];
    
        // List of fictitious descriptions
        $descriptions = [
            "An excellent choice to stay connected at all times.",
            "Exceptional performance in an elegant design.",
            "The perfect tool for home entertainment.",
            "Outstanding sound quality for an immersive experience.",
            "Capture unforgettable moments with this camera.",
            "Dive into the world of video games with this console.",
            "Wirelessly stream music with superior quality.",
            "Comfortable and convenient, these earbuds are a must-have.",
            "Stay fit and connected with this smartwatch.",
        ];
    
        // Possible product categories
        $categories = ["Electronics", "Computers", "Audio", "Photography", "Gaming", "Accessories"];
    
        // Random generation of product data
        $productName = $productNames[array_rand($productNames)];
        $description = $descriptions[array_rand($descriptions)];
        $price = mt_rand(50, 10000000); // Random price between 50 and 10,000,000 currency units
        $category = $categories[array_rand($categories)];
        $availability = mt_rand(0, 1) ? "In stock" : "Out of stock"; // Product in stock or out of stock
    
        // Creating an associative array representing the product
        $product = [
            "name" => $productName,
            "description" => $description,
            "price" => $price,
            "category" => $category,
            "availability" => $availability,
        ];
    
        return $product;
    }
    

    function food() {
        $platsCamerounais = [
            "Ndolé",
            "Poulet DG",
            "Sauce arachide",
            "Achu",
            "Sanga",
            "Koki",
            "Piment",
            "Mbongo Tchobi",
            "Corn chaff",
            "Nkui",
            "Sangah",
            "Taranta",
            "Eru",
            "African Salad",
            "Camerounian Jollof Rice",
            'Okok',
            'Chawarma',
            'Poumseh',
            'Pile',
            'Pomme Rotir'
        ];
    
        // Sélection aléatoire d'un nom de plat
        $nomPlat = $platsCamerounais[array_rand($platsCamerounais)];
    
        return $nomPlat;
    }
    

}
