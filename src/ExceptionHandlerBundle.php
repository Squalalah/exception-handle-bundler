<?php
declare(strict_types=1);

namespace Amontreuil\ExceptionHandlerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

//ce fichier peut paraitre inutile, mais il permet à symfony de detecter tout le dossier comme étant un "bundle"
//permettant d'ajouter ce bundle au bundles.php du projet, et le services.yaml du bundle chargera donc correctement
//Ce fichier est donc très important (comme chacun des fichiers du bundle)
class ExceptionHandlerBundle extends Bundle
{

}
