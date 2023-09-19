<?php

namespace Cupidontech\MultiFaker\Country\Europe;

use Illuminate\Support\Str;
use Faker\Generator as BaseGenerator;

class FranceFakerGenerator extends BaseGenerator
{
    public function first_name()
    {
        $firstNames = [
            'Achille', 'Adèle', 'Adrien', 'Agathe', 'Alain', 'Alice', 'Amélie',
            'Antoine', 'Aurélie', 'Baptiste', 'Camille', 'Caroline', 'Cécile',
            'Cédric', 'Charlotte', 'Claire', 'Clément', 'Corinne', 'David',
            'Delphine', 'Élodie', 'Émilie', 'Étienne', 'Fabien', 'Fanny',
            'Florence', 'François', 'Gabriel', 'Gaëlle', 'Guillaume', 'Isabelle',
            'Jean', 'Julie', 'Julien', 'Laure', 'Léa', 'Louis', 'Lucas',
            'Magali', 'Manon', 'Marie', 'Mathieu', 'Mathilde', 'Maxime',
            'Mélanie', 'Michel', 'Nathalie', 'Nicolas', 'Nina', 'Olivier',
            'Pascal', 'Pauline', 'Philippe', 'Rachel', 'Rémi', 'Sébastien',
            'Sophie', 'Stéphane', 'Sylvie', 'Thierry', 'Valérie', 'Vincent',
            'Adèle', 'Alexandre', 'Alexandra', 'Alfred', 'Alice', 'Ambroise',
            'Anaïs', 'André', 'Angélique', 'Anne', 'Arnaud', 'Audrey',
            'Augustin', 'Aurélie', 'Axel', 'Barbara', 'Benjamin', 'Bernadette',
            'Béatrice', 'Benoît', 'Brigitte', 'Camille', 'Caroline', 'Catherine',
            'Cécile', 'Cédric', 'Chantal', 'Charlotte', 'Christelle', 'Christian',
            'Christine', 'Claire', 'Clémentine', 'Clément', 'Coralie', 'Cyril',
            'David', 'Delphine', 'Denis', 'Éléonore', 'Élisabeth', 'Élodie',
            'Émilie', 'Éric', 'Estelle', 'Fabien', 'Fabienne', 'Fanny',
            'Félix', 'Florian', 'Florence', 'Frédéric', 'Gabriel', 'Gaëlle',
            'Georges', 'Guillaume', 'Hélène', 'Henri', 'Inès', 'Isabelle',
            'Jacqueline', 'Jean', 'Jérémie', 'Jessica', 'Joël', 'Jonathan',
            'Julie', 'Julien', 'Justine', 'Laetitia', 'Laura', 'Laurence',
            'Léa', 'Léon', 'Léa', 'Léo', 'Léonie', 'Louis', 'Luc', 'Lucas',
            'Lucie', 'Magali', 'Manon', 'Marcel', 'Margaux', 'Marie', 'Marion',
            'Mathias', 'Mathilde', 'Maxime', 'Mélanie', 'Michel', 'Mireille',
            'Monique', 'Muriel', 'Nathalie', 'Nicolas', 'Nina', 'Noémie',
            'Olivier', 'Pascal', 'Patricia', 'Paul', 'Pauline', 'Philippe',
            'Rachel', 'Rémi', 'Sébastien', 'Sophie', 'Stéphane', 'Sylvie',
            'Thierry', 'Valérie', 'Vincent', 'Viviane', 'Xavier', 'Yann',
            'Yannick', 'Yves', 'Zoé', 'Marcelle', 'Gérard', 'René', 'Annie',
            'José', 'Christiane', 'Émile', 'Gisèle', 'Colette', 'Rémy',
            'Michèle', 'Martine', 'Liliane', 'Denise', 'Renée', 'Huguette',
            'Serge', 'Micheline', 'Raymond', 'Jacques', 'Marcelle', 'Pierre',
            'Philippe', 'Éliane', 'Carole', 'Marcel', 'Maurice', 'Murielle',
            'Isabelle', 'Christine', 'Laurent', 'Daniel', 'Josette', 'Christian',
            'Maurice', 'Laurence', 'Jean-Paul', 'Jean-Louis', 'Lydie', 'Sylvain',
            'Arlette', 'Édith', 'Marie-Thérèse', 'Antoine', 'Alain', 'Évelyne',
            'Pierrette', 'Roger', 'Jacqueline', 'Thérèse', 'Françoise', 'Lucien',
            'Agnès', 'Catherine', 'Francine', 'Christophe', 'Raymonde', 'Guy',
            'Marie-José', 'Nicole', 'Laurence', 'Bernard', 'Sylviane', 'Dominique',
            'Corinne', 'Valérie', 'Brigitte', 'Chantal', 'Alain', 'Céline',
            'Georgette', 'Jean-Claude', 'Sophie', 'Renée', 'Jean-Michel', 'Anne-Marie',
            'Jean-Jacques', 'Christelle', 'Francis', 'Pauline', 'André', 'Mireille',
            'Sylvie', 'Fabrice', 'Louisette', 'François', 'Émilie', 'Madeleine',
            'Claudine', 'Dany', 'Yvette', 'Claudette', 'Élisabeth', 'Marie-Claude',
            'Hervé', 'Martine', 'Madeleine', 'Thierry', 'Mauricette', 'Denis',
            'Raymonde', 'Philippe', 'Aline', 'François', 'Lydia', 'Suzanne',
            'Franck', 'Chloé', 'Amandine', 'Aline', 'Émile', 'Yannick', 'Catherine',
            'Estelle', 'Geneviève', 'Andrée', 'Marie-Anne', 'Cécilia', 'Jérôme',
            'Irène', 'Martine', 'Guy', 'Hélène', 'Marie-Pierre', 'Jules', 'Vanessa',
            'Colette', 'Jean-Luc', 'Huguette', 'Claude', 'Frédérique', 'Mickaël',
            'Michelle', 'Évelyne', 'Cathy', 'Liliane', 'Nadine', 'Marlène',
            'Micheline', 'Nicole', 'Serge', 'Romain', 'Thérèse', 'Olivier',
            'Caroline', 'Charlotte', 'Franck', 'Catherine', 'Isabelle', 'Laurent',
            'Bernard', 'Laurence', 'Lydie', 'Patrick', 'Françoise', 'Renée',
            'Dominique', 'Sabine', 'Fabien', 'Laetitia', 'Christophe', 'Jérôme',
            'Julien', 'Karine', 'Patrice', 'Morgane', 'Morgane', 'Stéphanie',
            'Sylviane', 'Marie-Christine', 'Annick', 'Pauline', 'Claudine',
            'Benoît', 'Alexandre', 'Agnès', 'Guillaume', 'Éric', 'Pierre',
            'Claire', 'Jocelyne', 'Gisèle', 'Julie', 'Gilles', 'Luc',
            'Valérie', 'Édith', 'Céline', 'Gérard', 'Isabelle', 'Mélissa',
            'Raphaël', 'Valérie', 'Lucas', 'Nathalie', 'Michel', 'Laurie',
            'Chantal', 'Aurélie', 'Georges', 'Élodie', 'Geneviève', 'Thibault',
            'Jérémy', 'Annie', 'Léa', 'Emmanuelle', 'Nicolas', 'Éric',
            'Sabrina', 'Mélanie', 'Nicolas', 'Dominique', 'Sylvie', 'Sébastien',
            'Estelle', 'André', 'Pascal', 'Émilie', 'Béatrice', 'Lucie',
            'Sylvain', 'Nathalie', 'Arnaud', 'Marie-José', 'Aurélien', 'Catherine',
            'Rémi', 'Valérie', 'Claire', 'Fanny', 'Marc', 'Marie-Noëlle',
            'Éliane', 'Amandine', 'Paul', 'Nicole', 'Émilie', 'Jean-Marc',
            'Vanessa', 'Charlotte', 'Véronique', 'Denise', 'Louis', 'Flore',
            'Maxime', 'Stéphane', 'Manon', 'Christine', 'Aline', 'Marion',
            'David', 'Laurence', 'Laura', 'Lucien', 'Séverine', 'Vincent',
            'Fabienne', 'Julie', 'Éric', 'Lucas', 'Élise', 'Sandra', 'Sabine',
            'François', 'Catherine', 'Romain', 'Véronique', 'Véronique', 'Valentin',
            'Aude', 'Sylvie', 'Jérémy', 'Laura', 'Jean-Michel', 'Hélène',
            'Pierre-Yves', 'Pauline', 'Émilie', 'Raphaël', 'Julien', 'Justine',
            'Emmanuelle', 'Bernard', 'Annie', 'Sophie', 'Françoise', 'Isabelle',
            'Alexandre', 'Yves', 'Marie-Hélène', 'Eugénie', 'Sylviane', 'Gilles',
            'Nicolas', 'Laurent', 'Géraldine', 'Daniel', 'Lucien', 'Aline',
            'Benoît', 'Vanessa', 'Édouard', 'Laurent', 'Bérangère', 'Alain',
            'Mylène', 'Josiane', 'Guy', 'Sébastien', 'Alexandra', 'Emilie',
            'Séverine', 'Paul', 'Baptiste', 'Marie-Christine', 'Morgane',
            'Margaux', 'Agnès', 'Olivier', 'Valérie', 'Aurélie', 'Emilie',
            'Édouard', 'Céline', 'Théo', 'Émilie', 'Nathalie', 'Philippe',
            'Jessica', 'Hélène', 'Sylvie', 'Stéphane', 'Jérôme', 'Justine',
            'Claudine', 'David', 'Aurélien', 'Léa', 'Élisabeth', 'Julien',
            'Benoît', 'Jean-Marc', 'Sandra', 'Maxime', 'Pierre', 'Catherine',
            'Sabrina', 'Sabine', 'Dominique', 'Stéphanie', 'Lucas', 'Arnaud',
            'Elsa', 'Luc', 'Guillaume', 'Antoine', 'Rémi', 'Éric', 'Laura',
            'Laëtitia', 'Isabelle', 'Mathieu', 'Sophie', 'Hélène', 'Élodie',
            'Caroline', 'Marie-Pierre', 'Laetitia', 'Jean-Luc', 'Nicolas',
            'Sébastien', 'Valérie', 'Valentin', 'Véronique', 'Charlotte',
            'Éric', 'Jean-Claude', 'Sophie', 'Manon', 'Émilie', 'Isabelle',
            'Paul', 'Jean-Louis', 'Sylvie', 'Léa', 'Élise', 'Jean', 'Amélie',
            'Alexis', 'Bernard', 'Caroline', 'Christophe', 'Mathilde', 'Laurence',
            'Stéphane', 'Audrey', 'Marion', 'Mylène', 'Lucas', 'Nathalie',
            'Valérie', 'Antoine', 'Caroline', 'Sophie', 'Franck', 'Céline',
            'Marie-Claire', 'Christian', 'Émilie', 'Laurent', 'Éric', 'Charlotte',
            'Valérie', 'Sylvie', 'Olivier', 'Emmanuelle', 'David', 'Marie',
            'Élise', 'Catherine', 'Emilie', 'Élodie', 'Alexandra', 'Stéphanie',
            'Manuel', 'Mélanie', 'Thibault', 'Nadine', 'Valentin', 'Géraldine',
            'Gilles', 'Jérôme', 'Marie-Christine', 'Frédéric', 'Karine',
            'Aurélie', 'Guillaume', 'Jérôme', 'Nathalie', 'Caroline', 'Laurent',
            'Isabelle', 'Mathieu', 'Julie', 'Jean', 'Michel', 'Marine',
            'Valérie', 'Émilie', 'David', 'Sophie', 'Céline', 'Sébastien',
            'Alexandre', 'Sylvie', 'Agnès', 'Élise', 'Pierre', 'Véronique',
            'Élodie', 'Laëtitia', 'Philippe', 'Lucas', 'Justine', 'Antoine',
            'Édouard', 'Benoît', 'Mylène', 'Lucie', 'Hélène', 'Valentine',
            'Emilie', 'Marie-Pierre', 'Amandine', 'Jérôme', 'Julien', 'Olivier',
            'Éric', 'Audrey', 'Manon', 'Sophie', 'Sébastien', 'Laurence',
            'Nicolas', 'Pauline', 'Antoine', 'Stéphane', 'Rémi', 'Emmanuelle',
            'Théo', 'Vanessa', 'Laure', 'Lucas', 'Séverine', 'Émilie',
            'Stéphane', 'Marie-Christine', 'Paul', 'Jean-Luc', 'Manuel', 'Gilles',
            'Laëtitia', 'Alexis', 'Franck', 'Thibault', 'Nathalie', 'Laurent',
            'Catherine', 'Morgane', 'Stéphanie', 'Mathieu', 'Christian',
            'Élodie', 'Valentin', 'Céline', 'Élodie', 'Isabelle', 'Lucien',
            'Charlotte', 'Sophie', 'Christophe', 'David', 'Éric', 'Pierre',
            'Valentine', 'Agnès', 'Sophie', 'Emmanuelle', 'Aurélie', 'Philippe',
            'Nathalie', 'Sylvie', 'Olivier', 'Émilie', 'Laurence', 'Sébastien',
            'Stéphanie', 'Manon', 'Édouard', 'Jérôme', 'Caroline', 'Guillaume',
            'Séverine', 'Stéphane', 'Marie-Pierre', 'Valentin', 'Mylène',
            'Mathieu', 'Julie', 'Lucas', 'Élodie', 'Vanessa', 'Lucie', 'Éric',
            'Jérôme', 'Justine', 'Nathalie', 'Antoine', 'Alexandre', 'Élise',
            'Pierre', 'Émilie', 'Amandine', 'Julien', 'Olivier', 'Rémi',
            'Valérie', 'Agnès', 'Laëtitia', 'Emilie', 'Pauline', 'Antoine',
            'Emmanuelle', 'Éric', 'Manon', 'Sylvie', 'Sophie', 'Laurence',
            'Théo', 'Sébastien', 'Laurent', 'Morgane', 'Valérie', 'Marie-Christine',
            'Thibault', 'Christian', 'Marine', 'Audrey', 'Stéphane', 'Élodie',
            'Marie-Pierre', 'Alexis', 'Franck', 'Nicolas', 'Élodie', 'Valentine',
            'Catherine', 'Lucas', 'Paul', 'Laëtitia', 'Céline', 'Rémi',
            'Sophie', 'Stéphanie', 'Manuel', 'Gilles', 'David', 'Élise', 'Mathieu',
            'Lucas', 'Élodie', 'Valentine', 'Valentin', 'Thibault', 'Élodie',
            'Alexis', 'Théo', 'Emmanuelle', 'Manuel', 'Rémi', 'Jérôme', 'Sophie',
            'Éric', 'Antoine', 'Aurélie', 'Laurence', 'Olivier', 'Émilie',
            'Séverine', 'Mylène', 'Caroline', 'Pierre', 'Nathalie', 'Stéphane',
            'Emilie', 'Sylvie', 'Guillaume', 'Christian', 'Élise', 'Vanessa',
            'Lucien', 'Catherine', 'Stéphanie', 'Marie-Christine', 'Marine',
            'Nathalie', 'Laëtitia', 'Philippe', 'Pauline', 'Élodie', 'Lucas',
            'Christophe', 'Mathieu', 'Agnès', 'Charlotte', 'Franck', 'Jérôme',
            'Laurent', 'Sophie', 'Audrey', 'Pierre', 'Éric', 'Manon', 'Laurence',
            'Amandine', 'Marie-Pierre', 'Rémi', 'Alexandre', 'Thibault',
            'Émilie', 'Valentin', 'Élodie', 'Sébastien', 'Lucas', 'Marine',
            'Sylvie', 'Valentine', 'Théo', 'Élise', 'Guillaume', 'Stéphane',
            'Sophie', 'Mathieu', 'Élodie', 'Manuel', 'Céline', 'Caroline',
            'Stéphanie', 'Alexis', 'Éric', 'Émilie', 'Olivier', 'Rémi',
            'Laëtitia', 'Morgane', 'Valérie', 'Jérôme', 'Marie-Christine',
            'Christian', 'Marine', 'Élodie', 'Thibault', 'Pauline', 'Audrey',
            'Franck', 'Catherine', 'Éric', 'Lucien', 'Élise', 'Laurence',
            'Vanessa', 'Sophie', 'Manon', 'Mylène', 'Emilie', 'Philippe',
            'David', 'Sylvie', 'Aurélie', 'Valentin', 'Pierre', 'Guillaume',
            'Théo', 'Alexandre', 'Sophie', 'Émilie', 'Rémi', 'Élodie',
            'Laëtitia', 'Amandine', 'Lucas', 'Caroline', 'Éric', 'Stéphane',
            'Marine', 'Manuel', 'Élise', 'Christian', 'Audrey', 'Mathieu',
            'Valentine', 'Morgane', 'Stéphanie', 'Sylvie', 'Éric', 'Marie-Christine',
            'Sophie', 'Thibault', 'Catherine', 'Olivier', 'Laurent', 'Rémi',
            'Jérôme', 'Élodie', 'Céline', 'Émilie', 'Aurélie', 'Pierre',
            'Sébastien', 'Émilie', 'Guillaume', 'Alexis', 'Philippe', 'Manon',
            'Théo', 'Lucien', 'Sophie', 'Élise', 'Mylène', 'David', 'Caroline',
            'Éric', 'Valentin', 'Laëtitia', 'Mathieu', 'Élodie', 'Rémi', 'Marine',
            'Christian', 'Audrey', 'Éric', 'Marie-Christine', 'Olivier', 'Vanessa',
            'Lucas', 'Morgane', 'Émilie', 'Stéphanie', 'Sylvie', 'Amandine',
            'Élodie', 'Stéphane', 'Jérôme', 'Sophie', 'Thibault', 'Élodie',
            'Valentine', 'Philippe', 'Alexandre', 'Laurence', 'Catherine',
        ];

        $randomIndex = rand(0, count($firstNames) - 1);
        return $firstNames[$randomIndex];
    }

    public function last_name()
    {

        $lastNames = [
            'Leclerc', 'Lapierre', 'Moreau', 'Lemieux', 'Morin', 'Dube', 'Larose',
            'Bergeron', 'Bouchard', 'Grenier', 'Beaulieu', 'Caron', 'Mercier',
            'Tremblay', 'Pelletier', 'Gagné', 'Renaud', 'Roy', 'Lévesque', 'Lapointe',
            'Richard', 'Léger', 'Desjardins', 'Deschamps', 'Marchand', 'Bélanger',
            'Fontaine', 'Laferrière', 'Laflamme', 'Thibault', 'Côté', 'Dion',
            'Martel', 'St-Pierre', 'Lapierre', 'Gagnon', 'Giroux', 'Boucher',
            'Hébert', 'Poirier', 'Giguère', 'Simard', 'Labonté', 'Bernier', 'Turcotte',
            'Lefebvre', 'Plante', 'Cormier', 'Bertrand', 'Dufour', 'Boisvert',
            'Lachance', 'Lemay', 'Couture', 'Trudeau', 'Daigle', 'Leclerc',
            'Lamontagne', 'Paquette', 'Beauchamp', 'Paradis', 'Fournier', 'Levesque',
            'Boudreau', 'Laplante', 'Lessard', 'Lapierre', 'Perreault', 'Leblanc',
            'Ouellet', 'Savard', 'Rivard', 'Girard', 'Tanguay', 'Caron', 'Gosselin',
            'Gauthier', 'Bolduc', 'Dubé', 'Bérubé', 'Séguin', 'Gagné', 'Picard',
            'Vachon', 'Lemelin', 'Lemay', 'Lajoie', 'Rioux', 'Thériault', 'Roy',
            'Bergeron', 'Lafontaine', 'Gosselin', 'Blanchard', 'Couturier', 'Leblanc',
            'Guillemette', 'Bélanger', 'Boivin', 'Hamel', 'Lussier', 'Desrochers',
            'Ferland', 'Lévesque', 'Leclair', 'Boucher', 'Landry', 'Sirois', 'Bouchard',
            'Doré', 'Desjardins', 'Perron', 'Bolduc', 'Couture', 'Leclerc', 'Cormier',
            'Grenier', 'Dubois', 'Lavoie', 'Michaud', 'Demers', 'Gagnon', 'Poirier',
            'Martin', 'Tardif', 'Fortin', 'Poulin', 'Létourneau', 'Dionne', 'Perrault',
            'Bissonnette', 'Bélisle', 'Allard', 'Deschamps', 'Fournier', 'St-Pierre',
            'Paré', 'Lehoux', 'Larose', 'Leclerc', 'Lafond', 'Champagne', 'Vézina',
            'Charbonneau', 'Grenier', 'Marcoux', 'Bertrand', 'Thibodeau', 'Noël',
            'Bouchard', 'Nadeau', 'Bélanger', 'Caron', 'Dufour', 'Benoit', 'Lachapelle',
            'Gagné', 'Roy', 'Boucher', 'Fortier', 'Leduc', 'Boulet', 'Morel',
            'Lalonde', 'Ouellette', 'Léger', 'Ménard', 'Daigle', 'Mongeau', 'Rivest',
            'Goulet', 'Blais', 'Morneau', 'Bellemare', 'Houle', 'Simard', 'Turgeon',
            'Robitaille', 'Lebeau', 'Cloutier', 'Bernier', 'Larouche', 'Lauzon',
            'Larocque', 'Dallaire', 'Carrière', 'Legault', 'Desroches', 'Laplante',
            'Beaudoin', 'Papineau', 'Guay', 'Rousseau', 'Pouliot', 'Perron', 'Leclerc',
            'Gauthier', 'Thibault', 'Rioux', 'Cormier', 'Pelletier', 'Breton', 'Béchard',
            'Dubois', 'Nadeau', 'Deschênes', 'Ménard', 'Lebrun', 'Dionne', 'Ferland',
            'Létourneau', 'Duguay', 'Barrette', 'Baron', 'Brousseau', 'Couturier',
            'Poirier', 'Baril', 'Cyr', 'Bourque', 'Vachon', 'Caron', 'Lapointe',
            'Côté', 'Cloutier', 'Grenier', 'Gagné', 'Pare', 'Giroux', 'Veilleux',
            'Dumont', 'Labrecque', 'Boulerice', 'Rancourt', 'Bilodeau', 'Leblond',
            'Plamondon', 'Provencher', 'Garneau', 'Laforest', 'Lemay', 'Desrochers',
            'Lapierre', 'Dumoulin', 'Bédard', 'Pothier', 'Guérin', 'Champagne', 'Lefrançois',
            'Gouin', 'Perreault', 'Gélinas', 'Lamoureux', 'Tessier', 'Lacasse', 'Legros',
            'Dallaire', 'Leblanc', 'Fortin', 'Bérubé', 'Lacroix', 'Paquin', 'Beaulieu',
            'Lamontagne', 'Pelletier', 'Fugère', 'Roy', 'Barrette', 'Bourgeois', 'Faubert',
            'Massé', 'Goulet', 'Blanchette', 'Benoit', 'Parent', 'Pomerleau', 'Poulin',
            'Mercier', 'Bélisle', 'Lacroix', 'Boucher', 'Bourassa', 'Dufresne',
            'Cardinal', 'Dumas', 'Sauvé', 'Chartrand', 'Allaire', 'Sirois', 'Dufour',
            'Leclaire', 'Trudeau', 'Marcoux', 'Charron', 'Audet', 'Bourbeau', 'Maurice',
            'Couture', 'Rondeau', 'Page', 'Laliberté', 'Charbonneau', 'Jetté', 'Ranger',
            'Charbonneau', 'Bourdon', 'Duchesne', 'Dubé', 'Plante', 'Laframboise',
            'Gosselin', 'Gouin', 'Giguère', 'Morency', 'Beaudoin', 'Baril', 'Renaud',
            'Poulin', 'Dumont', 'Grenier', 'Morin', 'Charron', 'St-Louis', 'Drapeau',
            'Bourque', 'Piché', 'Racine', 'Verret', 'Garneau', 'Beaudry', 'Cormier',
            'Bérubé', 'Robitaille', 'Coutu', 'Parent', 'Bédard', 'Fournier', 'Dugas',
            'Belzile', 'Desroches', 'Cliche', 'Bourbeau', 'Cormier', 'Rioux', 'Bernard',
            'Bisaillon', 'Tessier', 'Gagnon', 'Favreau', 'Gauthier', 'Boucher', 'Demers',
            'Champoux', 'Charest', 'Labrie', 'Vaillancourt', 'Lemay', 'Michel', 'Pelletier',
            'Gagné', 'Riopel', 'Ouellet', 'Vaillancourt', 'Nadon', 'Tardif', 'Laforest',
            'Cormier', 'Aubé', 'Plamondon', 'Goyette', 'Deschênes', 'Fortin', 'Simard',
            'Roy', 'Létourneau', 'Couture', 'Dion', 'Laplante', 'Boulanger', 'Boucher',
            'Desrochers', 'Blais', 'Ouellet', 'Larocque', 'Trépanier', 'Gingras', 'Lavoie',
            'Gagnon', 'Houle', 'Tanguay', 'Bourgeois', 'Gagné', 'Turcotte', 'Rancourt',
            'Laroche', 'Cyr', 'Hébert', 'Lefebvre', 'Pépin', 'Bourdon', 'Rondeau',
            'Gagnon', 'Roy', 'Poirier', 'Vachon', 'Lemelin', 'Gravel', 'Laliberté',
            'Boudreau', 'Bibeau', 'Marquis', 'Bérubé', 'Pelletier', 'Rioux', 'Daigle',
            'Blanchet', 'Giroux', 'Simard', 'Desrosiers', 'Dubé', 'Gosselin', 'Allard',
            'Leblond', 'Leblanc', 'Bolduc', 'Poulin', 'Boucher', 'Dubé', 'Trudeau',
            'Ménard', 'Dumas', 'Giguère', 'Piché', 'Beaudoin', 'Benoit', 'Belzile',
            'Leclair', 'Cloutier', 'Bédard', 'Jetté', 'Robitaille', 'Bernard',
            'Laframboise', 'Couturier', 'Paquette', 'Beauchamp', 'Caron', 'Barrette',
            'Cyr', 'Renaud', 'Plante', 'Verret', 'Piché', 'Gagnon', 'Savard',
            'Vézina', 'Favreau', 'Lacombe', 'Beauchesne', 'Labrecque', 'Lamothe',
            'Duchesne', 'Pouliot', 'Lalonde', 'Piché', 'Jetté', 'Duguay', 'Jetté',
            'Lebeau', 'Papineau', 'Couture', 'Pelletier', 'Bilodeau', 'Boivin',
            'Massé', 'Goulet', 'Blanchette', 'Benoit', 'Parent', 'Pomerleau', 'Poulin',
            'Mercier', 'Bélisle', 'Lacroix', 'Boucher', 'Bourassa', 'Dufresne',
            'Cardinal', 'Dumas', 'Sauvé', 'Chartrand', 'Allaire', 'Sirois', 'Dufour',
            'Leclaire', 'Trudeau', 'Marcoux', 'Charron', 'Audet', 'Bourbeau', 'Maurice',
            'Couture', 'Rondeau', 'Page', 'Laliberté', 'Charbonneau', 'Jetté', 'Ranger',
            'Charbonneau', 'Bourdon', 'Duchesne', 'Dubé', 'Plante', 'Laframboise',
            'Gosselin', 'Gouin', 'Giguère', 'Morency', 'Beaudoin', 'Baril', 'Renaud',
            'Poulin', 'Dumont', 'Grenier', 'Morin', 'Charron', 'St-Louis', 'Drapeau',
            'Bourque', 'Piché', 'Racine', 'Verret', 'Garneau', 'Beaudry', 'Cormier',
            'Bérubé', 'Robitaille', 'Coutu', 'Parent', 'Bédard', 'Fournier', 'Dugas',
            'Belzile', 'Desroches', 'Cliche', 'Bourbeau', 'Cormier', 'Rioux', 'Bernard',
            'Bisaillon', 'Tessier', 'Gagnon', 'Favreau', 'Gauthier', 'Boucher', 'Demers',
            'Champoux', 'Charest', 'Labrie', 'Vaillancourt', 'Lemay', 'Michel', 'Pelletier',
            'Gagné', 'Riopel', 'Ouellet', 'Vaillancourt', 'Nadon', 'Tardif', 'Laforest',
            'Cormier', 'Aubé', 'Plamondon', 'Goyette', 'Deschênes', 'Fortin', 'Simard',
            'Roy', 'Létourneau', 'Couture', 'Dion', 'Laplante', 'Boulanger', 'Boucher',
            'Desrochers', 'Blais', 'Ouellet', 'Larocque', 'Trépanier', 'Gingras', 'Lavoie',
            'Gagnon', 'Houle', 'Tanguay', 'Bourgeois', 'Gagné', 'Turcotte', 'Rancourt',
            'Laroche', 'Cyr', 'Hébert', 'Lefebvre', 'Pépin', 'Bourdon', 'Rondeau',
            'Gagnon', 'Roy', 'Poirier', 'Vachon', 'Lem'
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
            'Bretonne' , 'Normande', 'Alsacienne', 'Basque', 'Corse', 'Provençale', 'Savoyarde', 'Béarnaise', 'Catalane', 'Occitane',
            'Picarde', 'Champenoise', 'Lorraine', 'Bourguignonne', 'Franco-Comtoise', 'Vosgienne', 'Languedocienne', 'Gasconne', 'Périgourdine', 'Limousine',
            'Auvergnate', 'Lyonnaise', 'Bourbonnaise', 'Poitevine', 'Tourangelle', 'Angevine', 'Nantaise',  'Normande',                  
        ];
        

        $randomIndex = rand(0, count($origins) - 1);
        return $origins[$randomIndex];
    }

    function region()
    {
        $regions = [
            "Auvergne-Rhône-Alpes", "Bourgogne-Franche-Comté", "Bretagne", "Centre-Val de Loire", "Corse", "Grand Est", "Hauts-de-France", "Île-de-France", "Normandie", "Nouvelle-Aquitaine",
            "Occitanie", "Pays de la Loire", "Provence-Alpes-Côte d'Azur", "Guadeloupe", "Martinique", "Guyane", "La Réunion", "Mayotte", "Île-de-Clipperton"
        ];
        
        $regionAleatoire = $regions[array_rand($regions)];
        return $regionAleatoire;
    }

    function city($region)
    {
        $villesParRegion = [
            "Auvergne-Rhône-Alpes" => ["Lyon", "Grenoble", "Saint-Étienne", "Clermont-Ferrand", "Chambéry", "Annecy"],
            "Bourgogne-Franche-Comté" => ["Dijon", "Besançon", "Chalon-sur-Saône", "Mâcon", "Nevers", "Belfort"],
            "Bretagne" => ["Rennes", "Brest", "Quimper", "Lorient", "Vannes", "Saint-Malo"],
            "Centre-Val de Loire" => ["Tours", "Orléans", "Blois", "Chartres", "Bourges", "Châteauroux"],
            "Corse" => ["Ajaccio", "Bastia", "Corte", "Porto-Vecchio", "Calvi", "Bonifacio"],
            "Grand Est" => ["Strasbourg", "Metz", "Nancy", "Reims", "Mulhouse", "Colmar"],
            "Hauts-de-France" => ["Lille", "Amiens", "Roubaix", "Tourcoing", "Calais", "Dunkerque"],
            "Île-de-France" => ["Paris", "Marseille", "Lyon", "Toulouse", "Nice", "Nantes"],
            "Normandie" => ["Rouen", "Caen", "Le Havre", "Cherbourg-en-Cotentin", "Évreux", "Dieppe"],
            "Nouvelle-Aquitaine" => ["Bordeaux", "Limoges", "Pau", "La Rochelle", "Agen", "Angoulême"],
            "Occitanie" => ["Toulouse", "Montpellier", "Nîmes", "Perpignan", "Carcassonne", "Albi"],
            "Pays de la Loire" => ["Nantes", "Angers", "Le Mans", "Saint-Nazaire", "Laval", "La Roche-sur-Yon"],
            "Provence-Alpes-Côte d'Azur" => ["Marseille", "Nice", "Toulon", "Aix-en-Provence", "Avignon", "Cannes"],
            "Guadeloupe" => ["Pointe-à-Pitre", "Basse-Terre", "Les Abymes", "Le Gosier", "Sainte-Anne", "Petit-Bourg"],
            "Martinique" => ["Fort-de-France", "Le Lamentin", "Le Robert", "Schoelcher", "Ducos", "Sainte-Marie"],
            "Guyane" => ["Cayenne", "Matoury", "Saint-Laurent-du-Maroni", "Kourou", "Mana", "Rémire-Montjoly"],
            "La Réunion" => ["Saint-Denis", "Saint-Paul", "Saint-Pierre", "Le Tampon", "Saint-André", "Le Port"],
            "Mayotte" => ["Mamoudzou", "Koungou", "Dzaoudzi", "Dembeni", "Sada", "Bandraboua"],
            "Île-de-Clipperton" => ["Île-de-Clipperton"]
        ];

        $villeAleatoire = $villesParRegion[$region][array_rand($villesParRegion[$region])];
        return $villeAleatoire;
    }

    public function cities()
    {
       $villes = [
    "Paris", "Marseille", "Lyon", "Toulouse", "Nice", "Nantes", "Strasbourg", "Montpellier", "Bordeaux", "Lille",
    "Rennes", "Reims", "Le Havre", "Cergy", "Saint-Étienne", "Toulon", "Angers", "Grenoble", "Dijon", "Nîmes",
    "Aix-en-Provence", "Saint-Quentin", "Brest", "Le Mans", "Amiens", "Tours", "Limoges", "Villeurbanne", "Clermont-Ferrand", "Besançon",
    "Orléans", "Metz", "Rouen", "Mulhouse", "Perpignan", "Caen", "Nancy", "Saint-Denis", "Argenteuil", "Roubaix",
    "Tourcoing", "Montreuil", "Avignon", "Saint-Paul", "Nanterre", "Créteil", "Poitiers", "Courbevoie", "Fort-de-France", "Versailles",
    "Colombes", "Aulnay-sous-Bois", "Asnières-sur-Seine", "Rueil-Malmaison", "Saint-Pierre", "Saint-Maur-des-Fossés", "Champigny-sur-Marne", "Aubervilliers", "Dunkerque", "Béziers",
    "Bourges", "La Rochelle", "Le Tampon", "Pau", "La Seyne-sur-Mer", "Quimper", "Antibes", "Évry-Courcouronnes", "Cannes", "Fréjus",
    "Saint-Nazaire", "Colmar", "Bastia", "Le Cannet", "Calais", "Valence", "Mérignac", "Ajaccio", "Villeneuve-d'Ascq", "La Roche-sur-Yon",
    "Angoulême", "Sarcelles", "Vénissieux", "Saint-André", "Narbonne", "Cherbourg-en-Cotentin", "Vaulx-en-Velin", "La Courneuve", "Fort-de-France", "Cayenne",
    "Lorient", "Chambéry", "Roanne", "Belfort", "Épinay-sur-Seine", "Le Port", "Cholet", "Viry-Châtillon", "La Ciotat", "Chelles",
    "Clichy", "Niort", "Pantin", "Sartrouville", "Saint-Malo", "Le Blanc-Mesnil", "Meaux", "Alfortville", "Boulogne-sur-Mer", "Clamart",
    "Vannes", "Fontenay-sous-Bois", "Livry-Gargan", "Maisons-Alfort", "Sète", "Bron", "Saint-Laurent-du-Maroni", "Saint-Joseph", "Ajaccio", "La Garenne-Colombes",
    "Bagneux", "Évry", "Haguenau", "Villejuif", "Mâcon", "Thionville", "Dreux", "Nevers", "Puteaux", "Nogent-sur-Marne",
    "Suresnes", "Meudon", "Mantes-la-Jolie", "Albi", "Rueil-Malmaison", "Beauvais", "Bourg-en-Bresse", "Vincennes", "Levallois-Perret", "Cergy-Pontoise",
    "Maisons-Laffitte", "Courcouronnes", "Vitry-sur-Seine", "Talence", "Grigny", "Savigny-sur-Orge", "Pessac", "Bagnolet", "Rambouillet", "Montélimar",
    "Périgueux", "Cavaillon", "Soissons", "Clichy-sous-Bois", "Bourges", "Noisy-le-Grand", "Muret", "Étampes", "Neuilly-sur-Seine", "Plaisir",
    "Le Creusot", "Sainte-Geneviève-des-Bois", "Conflans-Sainte-Honorine", "Villiers-le-Bel", "Gagny", "La Celle-Saint-Cloud", "Schiltigheim", "Saint-Leu", "Le Perreux-sur-Marne", "Coudekerque-Branche",
    "Charenton-le-Pont", "Sannois", "Échirolles", "Vigneux-sur-Seine", "Rosny-sous-Bois", "Brétigny-sur-Orge", "Thonon-les-Bains", "La Courneuve", "Liévin", "Colomiers",
    "Cagnes-sur-Mer", "Aix-les-Bains", "Guyancourt", "Châtillon", "Châtenay-Malabry", "Le Plessis-Robinson", "Sucy-en-Brie", "Goussainville", "Angoulême", "La Garenne-Colombes",
    "Saint-Étienne-du-Rouvray", "Viry-Châtillon", "Charenton-le-Pont", "La Ciotat", "Garges-lès-Gonesse", "Pantin", "Villefranche-sur-Saône", "Romans-sur-Isère", "Les Mureaux", "Franconville",
    "Le Pré-Saint-Gervais", "Torcy", "Villeneuve-Saint-Georges", "Bagnolet", "Trappes", "Le Kremlin-Bicêtre", "Cambrai", "Houilles", "Villepinte", "Schiltigheim",
    "La Roche-sur-Yon", "Boulogne-sur-Mer", "Châtillon", "Saint-Cloud", "Dammarie-les-Lys", "Creil", "Le Chesnay", "Clichy-sous-Bois", "Villefranche-sur-Saône", "Cergy",
    "Soisy-sous-Montmorency", "Roissy-en-Brie", "Champs-sur-Marne", "Neuilly-sur-Marne", "Saint-Martin-d'Hères", "Nevers", "Vigneux-sur-Seine", "Sannois", "Viry-Châtillon", "Nogent-sur-Oise",
    "Grigny", "Lunel", "Le Plessis-Robinson", "Valenciennes", "Mantes-la-Jolie", "Dreux", "Montgeron", "Sucy-en-Brie", "Gagny", "Saint-Leu",
    "Saint-Ouen-l'Aumône", "Thionville", "Vélizy-Villacoublay", "Villeneuve-le-Roi", "Les Lilas", "Pontoise", "Montbéliard", "Rillieux-la-Pape", "La Possession", "Poissy",
    "Montfermeil", "Saint-Cloud", "Les Ulis", "Périgueux", "Haguenau", "Beaune", "Garges-lès-Gonesse", "Rungis", "Chatou", "Valence",
    "La Garenne-Colombes", "Grande-Synthe", "Charenton-le-Pont", "Vienne", "Les Pavillons-sous-Bois", "Sartrouville", "L'Haÿ-les-Roses", "Cachan", "Lisieux", "Outreau",
    "Villiers-sur-Marne", "Montigny-lès-Metz", "Libourne", "Le Kremlin-Bicêtre", "Les Mureaux", "Neuilly-Plaisance", "La Garde", "Bourg-lès-Valence", "Montrouge", "Villemomble",
    "La Celle-Saint-Cloud", "Le Perreux-sur-Marne", "Mandelieu-la-Napoule", "Villefranche-sur-Saône", "Rillieux-la-Pape", "Suresnes", "Laon", "Franconville", "Épernay", "Champs-sur-Marne",
    "Dumbéa", "Cayenne", "Saint-Pierre", "Matoury", "Baie-Mahault", "Le Gosier", "Remire-Montjoly", "Kourou", "Macouria", "Marigot",
    "Saint-Joseph", "Apatou", "Saint-Paul", "Sinnamary", "Roura", "Trinité", "Grand-Santi", "Mana", "Papaïchton", "Iraklio",
    "Thessaloniki", "Patras", "Larisa", "Volos", "Heraklion", "Kavala", "Chalcis", "Veroia", "Serres", "Katerini",
    "Samos", "Agrinio", "Trikala", "Lamia", "Alexandroupoli", "Xanthi", "Kalamata", "Kozani", "Polichni", "Karditsa",
    "Rethymno", "Ptolemaida", "Komotini", "Mytilene", "Giannitsa", "Kilkis", "Corfu", "Orestiada", "Aigio", "Pylaia",
    "Rhodes", "Serres", "Nea Filadelfeia", "Touba", "Xylokastro", "Katerini", "Megalopoli", "Levadia", "Livadeia", "Nea Artaki",
    "Nea Ionia", "Nea Makri", "Kalampaka", "Pefki", "Thermi", "Elefsina", "Voula", "Kos", "Kavala", "Mykonos",
    "Pyrgos", "Argos", "Neapoli", "Ptolemaida", "Zefyri", "Thessaloniki", "Peraia", "Nea Ionia", "Palaio Faliro", "Kamatero",
    "Menemeni", "Oraiokastro", "Alexandroupoli", "Eleftherio-Kordelio", "Nea Ionia", "Panorama", "Agia Paraskevi", "Koropi", "Preveza", "Florina",
    "Orestiada", "Nea Filadelfeia", "Rafina", "Nea Makri", "Nea Erythraia", "Moschato", "Salamina", "Vari", "Agios Ioannis Rentis", "Koridallos",
    "Vyronas", "Paiania", "Agios Dimitrios", "Korydallos", "Metamorfosi", "Artemida", "Piraeus", "Ermoupoli", "Nea Alikarnassos", "Molos",
    "Drapetsona", "Mytilene", "Kamari", "Pyrgos", "Acharnes", "Tripoli", "Mandra", "Kos", "Thermi", "Zografou",
    "Pylaia", "Ilioupoli", "Agia Varvara", "Nea Ionia", "Tavros", "Paiania", "Agios Ioannis Rentis", "Agios Dimitrios", "Vyronas", "Vari",
    "Nea Alikarnassos", "Nea Erythraia", "Metamorfosi", "Artemida", "Ermoupoli", "Moschato", "Paiania", "Molos", "Kamari", "Pyrgos",
    "Drapetsona", "Kamatero", "Koropi", "Nea Filadelfeia", "Preveza", "Salamina", "Florina", "Agia Paraskevi", "Oraiokastro", "Menemeni",
    "Eleftherio-Kordelio", "Alexandroupoli", "Elefsina", "Voula", "Neapoli", "Palaio Faliro", "Ptolemaida", "Nea Ionia", "Katerini", "Giannitsa",
    "Serres", "Xylokastro", "Touba", "Nea Makri", "Livadeia", "Nea Artaki", "Megalopoli", "Kalampaka", "Levadia", "Megalopolis",
    "Amfissa", "Argostoli", "Kefalos", "Eleusina", "Vari", "Alimos", "Ialysos", "Kalymnos", "Kos", "Ampelona",
    "Rhodes", "Korydallos", "Elaionas", "Sykies", "Pefki", "Komotini", "Kilkis", "Ptolemaida", "Kavala", "Samos",
    "Salamina", "Chalcis", "Koropi", "Zefyri", "Trikala", "Lamia", "Alexandroupoli", "Kozani", "Pylaia", "Rhodes",
    "Nea Filadelfeia", "Xanthi", "Kalamata", "Serres", "Rethymno", "Ptolemaida", "Komotini", "Mytilene", "Giannitsa", "Kilkis",
    "Corfu", "Orestiada", "Aigio", "Pylaia", "Rhodes", "Serres", "Nea Filadelfeia", "Touba", "Xylokastro", "Katerini",
    "Megalopoli", "Levadia", "Livadeia", "Nea Artaki", "Nea Ionia", "Nea Makri", "Kalampaka", "Pefki", "Thermi", "Elefsina",
    "Voula", "Kos", "Kavala", "Mykonos", "Pyrgos", "Argos", "Neapoli", "Ptolemaida", "Zefyri", "Thessaloniki",
    "Peraia", "Nea Ionia", "Palaio Faliro", "Kamatero", "Menemeni", "Oraiokastro", "Alexandroupoli", "Eleftherio-Kordelio", "Nea Ionia", "Panorama",
    "Agia Paraskevi", "Koropi", "Preveza", "Florina", "Orestiada", "Nea Filadelfeia", "Rafina", "Nea Makri", "Nea Erythraia", "Moschato",
    "Salamina", "Vari", "Agios Ioannis Rentis", "Koridallos", "Vyronas", "Paiania", "Agios Dimitrios", "Korydallos", "Metamorfosi", "Artemida",
    "Piraeus", "Ermoupoli", "Nea Alikarnassos", "Molos", "Drapetsona", "Mytilene", "Kamari", "Pyrgos", "Acharnes", "Tripoli",
    "Mandra", "Kos", "Thermi", "Zografou", "Pylaia", "Ilioupoli", "Agia Varvara", "Nea Ionia", "Tavros", "Paiania",
    "Agios Ioannis Rentis", "Agios Dimitrios", "Vyronas", "Vari", "Nea Alikarnassos", "Nea Erythraia", "Metamorfosi", "Artemida", "Ermoupoli", "Moschato",
    "Paiania", "Molos", "Kamari", "Pyrgos", "Drapetsona", "Kamatero", "Koropi", "Nea Filadelfeia", "Preveza", "Salamina",
    "Florina", "Agia Paraskevi", "Oraiokastro", "Menemeni", "Eleftherio-Kordelio", "Alexandroupoli", "Elefsina", "Voula", "Neapoli", "Palaio Faliro",
    "Ptolemaida", "Nea Ionia", "Katerini", "Giannitsa", "Serres", "Xylokastro", "Touba", "Nea Makri", "Livadeia", "Nea Artaki",
    "Megalopoli", "Kalampaka", "Levadia", "Megalopolis", "Amfissa", "Argostoli", "Kefalos", "Eleusina", "Vari", "Alimos",
    "Ialysos", "Kalymnos", "Kos", "Ampelona", "Rhodes", "Korydallos", "Elaionas", "Sykies", "Pefki", "Komotini",
    "Kilkis", "Ptolemaida", "Kavala", "Samos", "Salamina", "Chalcis", "Koropi", "Zefyri", "Trikala", "Lamia",
    "Alexandroupoli", "Kozani", "Pylaia", "Rhodes", "Nea Filadelfeia", "Xanthi", "Kalamata", "Serres", "Rethymno", "Ptolemaida",
    "Komotini", "Mytilene", "Giannitsa", "Kilkis", "Corfu", "Orestiada", "Aigio", "Pylaia", "Rhodes", "Serres",
    "Nea Filadelfeia", "Touba", "Xylokastro", "Katerini", "Megalopoli", "Levadia", "Livadeia", "Nea Artaki", "Nea Ionia", "Nea Makri",
    "Kalampaka", "Pefki", "Thermi", "Elefsina", "Voula", "Kos", "Kavala", "Mykonos", "Pyrgos", "Argos",
    "Neapoli", "Ptolemaida", "Zefyri", "Thessaloniki", "Peraia", "Nea Ionia", "Palaio Faliro", "Kamatero", "Menemeni", "Oraiokastro",
    "Alexandroupoli", "Eleftherio-Kordelio", "Nea Ionia", "Panorama", "Agia Paraskevi", "Koropi", "Preveza", "Florina", "Orestiada", "Nea Filadelfeia",
    "Rafina", "Nea Makri", "Nea Erythraia", "Moschato", "Salamina", "Vari", "Agios Ioannis Rentis", "Koridallos", "Vyronas", "Paiania",
    "Agios Ioannis Rentis", "Agios Dimitrios", "Korydallos", "Metamorfosi", "Artemida", "Piraeus", "Ermoupoli", "Nea Alikarnassos", "Molos", "Drapetsona",
    "Mytilene", "Kamari", "Pyrgos", "Acharnes", "Tripoli", "Mandra", "Kos", "Thermi", "Zografou", "Pylaia",
    "Ilioupoli", "Agia Varvara", "Nea Ionia", "Tavros", "Paiania", "Agios Ioannis Rentis", "Agios Dimitrios", "Vyronas", "Vari", "Nea Alikarn"
    ];


        return $villes[array_rand($villes)];
    }


    function coordinates()
    {
        // Limites géographiques de la France (latitude et longitude)
        $limites = [
            'nord' => 51.1242,   // Latitude Nord
            'sud' => 41.3125,     // Latitude Sud
            'ouest' => -5.1422,   // Longitude Ouest
            'est' => 9.5618      // Longitude Est
        ];
    
        // Génération de coordonnées aléatoires dans les limites de la France
        $latitude = $limites['sud'] + mt_rand() / mt_getrandmax() * ($limites['nord'] - $limites['sud']);
        $longitude = $limites['ouest'] + mt_rand() / mt_getrandmax() * ($limites['est'] - $limites['ouest']);
    
        return ['latitude' => $latitude, 'longitude' => $longitude];
    }
    
    public function address()
    {
        $cities = [
            'Paris', 'Marseille', 'Lyon', 'Toulouse', 'Nice', 'Nantes', 'Strasbourg', 'Montpellier', 'Bordeaux', 'Lille',
            'Rennes', 'Reims', 'Le Havre', 'Cannes', 'Grenoble', 'Brest', 'Limoges', 'Angers', 'Toulon', 'Amiens',
            'Aix-en-Provence', 'Nancy', 'Clermont-Ferrand', 'Tours', 'Metz', 'Besançon', 'Orléans', 'Mulhouse', 'Rouen', 'Caen',
        ];
    
        // Choisissez une ville aléatoire
        $randomCity = $cities[array_rand($cities)];
    
        // Générez une rue aléatoire (peut être personnalisé avec de vraies rues)
        $streetsInCity = [
            'Rue de la Paix', 'Avenue des Champs-Élysées', 'Boulevard Haussmann', 'Rue du Faubourg Saint-Honoré', 'Rue de Rivoli',
            'Boulevard Saint-Germain', 'Avenue Montaigne', 'Rue de la République', 'Rue du Bac', 'Rue Saint-Antoine',
            'Rue de la Roquette', 'Boulevard de la Villette', 'Rue de Belleville', 'Avenue de Clichy', 'Rue de la Pompe',
            'Rue de la Convention', 'Boulevard de l\'Opéra', 'Rue de la Cité', 'Rue du Temple', 'Avenue Foch',
        ];
    
        $randomStreet = $streetsInCity[array_rand($streetsInCity)];
    
        return "$randomStreet, $randomCity";
    }
    
    public function phone()
    {
        $prefix = '+33';
    
        // Générez le premier chiffre aléatoire parmi 6, 7 ou 9 (les préfixes mobiles en France)
        $firstDigit = [6, 7, 9][rand(0, 2)];
    
        // Générez les 8 chiffres suivants aléatoirement
        $secondPart = '';
        for ($i = 0; $i < 8; $i++) {
            $secondPart .= rand(0, 9);
        }
    
        return $prefix . $firstDigit  . $secondPart;
    }    

    public function email()
    {
        // Générez un nom d'utilisateur aléatoire, par exemple un prénom suivi d'un numéro
        $username = $this->last_name() . rand(1, 100);

        // Le suffixe de l'adresse e-mail
        $suffix = '@33.fr';

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
        $prefixes = [
            'Air France', 'Total', 'L\'Oréal', 'BNP Paribas', 'Renault', 'AXA', 'Vivint', 'Dassault Systèmes', 'Capgemini', 'Sanofi',
            'LVMH', 'Société Générale', 'Orange', 'Danone', 'Schneider Electric', 'Thales', 'Saint-Gobain', 'Carrefour', 'Publicis', 'Atos',
            'Michelin', 'Airbus', 'Veolia', 'Sodexo', 'Alstom', 'Engie', 'Hermès', 'Safran', 'EssilorLuxottica', 'Vinci',
            'Peugeot', 'Michelin', 'Eiffage', 'Euronext', 'Bouygues', 'Veolia Environnement', 'Kering', 'Accor', 'Dassault Aviation', 'EDF',
            'Capgemini', 'Air Liquide', 'Essilor', 'Suez', 'Arkema', 'Ubisoft', 'Valeo', 'Legrand', 'BNP Paribas', 'Danone',
            'Lagardère', 'EssilorLuxottica', 'Société Générale', 'Axa', 'Bouygues', 'Hermès', 'Thales', 'Safran', 'Michelin', 'Renault',
            'LVMH', 'Publicis', 'Veolia', 'Capgemini', 'Schneider Electric', 'Carrefour', 'Sodexo', 'Alstom', 'Vivint', 'Sanofi',
            'Orange', 'Suez', 'Essilor', 'Engie', 'Arkema', 'Ubisoft', 'Kering', 'Valeo', 'Legrand', 'Eiffage'
        ];
        
        $suffixes = [
            'Ltd', 'PLC', 'LLC', 'LLP', 'Limited', 'PLC', 'LLC', 'LLP', 'Holdings', 'Group', 'Corp', 'Corporation', 'Services',
            'Enterprises', 'Solutions', 'Global', 'Ventures', 'Industries', 'Integrators', 'Associates', 'Incorporated', 'Partners',
            'Resources', 'Technologies', 'Logistics', 'Management', 'Consulting', 'Enterprises', 'Solutions', 'Group', 'Industries',
            'Systems', 'Enterprises', 'Holdings', 'Development', 'Sustainable', 'Enterprises', 'Innovations', 'Foundation'

        ];

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

    function food()
    {

        $platsFrancais = [
            "Bouillabaisse",
            "Coq au Vin",
            "Ratatouille",
            "Croissant",
            "Escargot",
            "Quiche Lorraine",
            "Crème Brûlée",
            "Bœuf Bourguignon",
            "Cassoulet",
            "Blanquette de Veau",
            "Tarte Tatin",
            "Chateaubriand",
            "Bouef à la Mode",
            "Confit de Canard",
            "Coq au Vin",
            "Pot-au-Feu",
            "Salade Niçoise",
            "Moules Marinière",
            "Duck à l'Orange",
            "Tarte Flambée",
            "Pissaladière",
            "Boulette d'Avesnes",
            "Champvallon",
            "Poulet Vallée d'Auge",
            "Potée Lorraine",
            "Aligot",
            "Andouillette",
            "Hachis Parmentier",
            "Rognons de Veau",
            "Crêpe Suzette",
            "Cassoulet",
            "Tarte aux Fraises",
            "Boudin Noir",
            "Boudin Blanc",
            "Quenelle",
            "Truffade",
            "Boulette d'Avesnes",
            "Galette Complète",
            "Potage Parmentier",
            "Navarin d'Agneau",
            "Chateaubriand",
            "Pissaladière",
            "Bouillabaisse",
            "Croissant",
            "Quiche Lorraine",
            "Ratatouille",
            "Confit de Canard",
            "Crème Brûlée",
            "Bœuf Bourguignon",
            "Tarte Tatin",
            "Blanquette de Veau",
            "Moules Marinière",
            "Duck à l'Orange",
            "Salade Niçoise",
            "Escargot",
            "Coq au Vin",
            "Poulet Vallée d'Auge",
            "Aligot",
            "Champvallon",
            "Hachis Parmentier",
            "Rognons de Veau",
            "Tarte Flambée",
            "Boudin Noir",
            "Boudin Blanc",
            "Quenelle",
            "Truffade",
            "Galette Complète",
            "Potage Parmentier",
            "Navarin d'Agneau",
            "Chateaubriand",
            "Pissaladière",
            "Bouillabaisse",
            "Tarte aux Fraises",
        ];
        
        // Sélection aléatoire d'un nom de plat
        $nomPlat = $platsFrancais[array_rand($platsFrancais)];

        return $nomPlat;
    }
}