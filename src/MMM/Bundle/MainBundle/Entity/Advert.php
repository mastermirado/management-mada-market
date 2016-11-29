<?php

namespace MMM\Bundle\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Advert
 *
 * @ORM\Table(name="m_advert")
 * @ORM\Entity(repositoryClass="MMM\Bundle\MainBundle\Entity\AdvertRepository")
 */
class Advert
{
    /**
     * @var integer
     *
     * @ORM\Column(name="m_advert_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="m_advert_title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="m_advert_description", type="string", length=255)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="m_advert_nbrConsultation", type="bigint", nullable=true)
     */
    private $nbrConsultation;
    
    /**
     * 
     * @var Category
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="m_advert_category_id", referencedColumnName="m_category_id")
     */
    private $category;


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
     * Set title
     *
     * @param string $title
     * @return Advert
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Advert
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set nbrConsultation
     *
     * @param integer $nbrConsultation
     * @return Advert
     */
    public function setNbrConsultation($nbrConsultation)
    {
        $this->nbrConsultation = $nbrConsultation;

        return $this;
    }

    /**
     * Get nbrConsultation
     *
     * @return integer 
     */
    public function getNbrConsultation()
    {
        return $this->nbrConsultation;
    }

    /**
     * Set category
     *
     * @param \MMM\Bundle\MainBundle\Entity\Category $category
     * @return Advert
     */
    public function setCategory(\MMM\Bundle\MainBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \MMM\Bundle\MainBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
