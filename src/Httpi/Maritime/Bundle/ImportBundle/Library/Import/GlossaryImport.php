<?php

namespace Httpi\Maritime\Bundle\ImportBundle\Library\Import;

use Httpi\Bundle\CoreBundle\Entity\File;
use Httpi\Bundle\CoreBundle\Library\Import\FileImport;

class GlossaryImport extends LexiconImport {

    protected $entityFqn = 'HttpiMaritimeCoreBundle:Glossary';

    protected $entityTable = 'glossary';

}