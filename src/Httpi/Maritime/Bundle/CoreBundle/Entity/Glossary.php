<?php

namespace Httpi\Maritime\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Httpi\Bundle\CoreBundle\Library\Model\ModelTrait;

/**
 * Glossary
 *
 * @ORM\Table(name="glossary")
 * @ORM\Entity
 */
class Glossary
{
    use ModelTrait;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="abbr", type="string", length=128, nullable=false)
     */
    private $abbr;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=false)
     */
    private $value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_verified", type="boolean", nullable=false)
     */
    private $isVerified;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_published", type="boolean", nullable=false)
     */
    private $isPublished;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_imported", type="boolean", nullable=false)
     */
    private $isImported;

    /**
     * @var \Httpi\Bundle\CoreBundle\Entity\Info
     *
     * @ORM\ManyToOne(targetEntity="Httpi\Bundle\CoreBundle\Entity\Info", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="info_id", referencedColumnName="id")
     * })
     */
    private $info;

    /**
     * @var \Httpi\Bundle\CoreBundle\Entity\Import
     *
     * @ORM\ManyToOne(targetEntity="Httpi\Bundle\CoreBundle\Entity\Import", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="import_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $import;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set abbr
     *
     * @param string $abbr
     * @return Glossary
     */
    public function setAbbr($abbr)
    {
        $this->abbr = $abbr;
    
        return $this;
    }

    /**
     * Get abbr
     *
     * @return string 
     */
    public function getAbbr()
    {
        return $this->abbr;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return Glossary
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set isVerified
     *
     * @param boolean $isVerified
     * @return Glossary
     */
    public function setIsVerified($isVerified)
    {
        $this->isVerified = $isVerified;
    
        return $this;
    }

    /**
     * Get isVerified
     *
     * @return boolean 
     */
    public function getIsVerified()
    {
        return $this->isVerified;
    }

    /**
     * Set isPublished
     *
     * @param boolean $isPublished
     * @return Glossary
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;
    
        return $this;
    }

    /**
     * Get isPublished
     *
     * @return boolean 
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * Set isImported
     *
     * @param boolean $isImported
     * @return Glossary
     */
    public function setIsImported($isImported)
    {
        $this->isImported = $isImported;
    
        return $this;
    }

    /**
     * Get isImported
     *
     * @return boolean 
     */
    public function getIsImported()
    {
        return $this->isImported;
    }

    /**
     * Set info
     *
     * @param \Httpi\Bundle\CoreBundle\Entity\Info $info
     * @return Glossary
     */
    public function setInfo(\Httpi\Bundle\CoreBundle\Entity\Info $info = null)
    {
        $this->info = $info;
    
        return $this;
    }

    /**
     * Get info
     *
     * @return \Httpi\Bundle\CoreBundle\Entity\Info 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set import
     *
     * @param \Httpi\Bundle\CoreBundle\Entity\Import $import
     * @return Glossary
     */
    public function setImport(\Httpi\Bundle\CoreBundle\Entity\Import $import = null)
    {
        $this->import = $import;
    
        return $this;
    }

    /**
     * Get import
     *
     * @return \Httpi\Bundle\CoreBundle\Entity\Import 
     */
    public function getImport()
    {
        return $this->import;
    }
}