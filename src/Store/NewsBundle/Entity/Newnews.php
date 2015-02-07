<?php

namespace Store\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newnews
 */
class Newnews
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $categoriName;

    /**
     * @var string
     */
    private $slug;


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
     * Set categoriName
     *
     * @param string $categoriName
     * @return Newnews
     */
    public function setCategoriName($categoriName)
    {
        $this->categoriName = $categoriName;

        return $this;
    }

    /**
     * Get categoriName
     *
     * @return string 
     */
    public function getCategoriName()
    {
        return $this->categoriName;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Newnews
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $news;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->news = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add news
     *
     * @param \Store\NewsBundle\Entity\News $news
     * @return Newnews
     */
    public function addNews(\Store\NewsBundle\Entity\News $news)
    {
        $this->news[] = $news;

        return $this;
    }

    /**
     * Remove news
     *
     * @param \Store\NewsBundle\Entity\News $news
     */
    public function removeNews(\Store\NewsBundle\Entity\News $news)
    {
        $this->news->removeElement($news);
    }

    /**
     * Get news
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNews()
    {
        return $this->news;
    }
}
