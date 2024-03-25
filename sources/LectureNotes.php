<?php
namespace Enc;

class LectureNotes
{
    public static function lireFichier(string $nomFichier): ?Eleve
    {
        // Ouvre le fichier en lecture
        $fichier = fopen($nomFichier, 'r');

        // Lit la première ligne qui contient le nom et le prénom de l'élève
        $ligne = fgetcsv($fichier,1000,";");

        // Initialise les variables pour stocker les informations sur l'élève et ses notes
        $nom = $ligne[0];
        $prenom = $ligne[1];
        $notes = [];

        // Lit le reste du fichier, qui contient les notes de l'élève
        while (($ligne = fgetcsv($fichier,1000,";")) !== false)
        {
            $matiere = new Matiere($ligne[0],$ligne[0]);
            $valeurNote = floatval($ligne[1]);
            $coeffNote = intval($ligne[2]);
            $dateNote = \DateTime::createFromFormat('d/m/Y', $ligne[3]);

            // Crée une nouvelle note avec les informations lues
            $note = new Note($matiere, $valeurNote, $coeffNote, $dateNote);

            // Ajoute la note à la liste des notes de l'élève
            $notes[] = $note;
        }

        // Ferme le fichier
        fclose($fichier);

        // Crée un nouvel objet Eleve avec les informations lues
        return new Eleve($nom, $prenom, $notes);
    }
}