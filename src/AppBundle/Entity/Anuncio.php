<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anuncio
 *
 * @ORM\Table(name="anuncio")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnuncioRepository")
 */
class Anuncio
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="src_img1", type="string", length=255)
     */
    private $srcImg1;

    /**
     * @var string
     *
     * @ORM\Column(name="src_img2", type="string", length=255)
     */
    private $srcImg2;

    /**
     * @var string
     *
     * @ORM\Column(name="src_img3", type="string", length=255)
     */
    private $srcImg3;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Anuncio
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Anuncio
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Anuncio
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
     *
     * @return Anuncio
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Anuncio
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Anuncio
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Anuncio
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set srcImg1
     *
     * @param string $srcImg1
     *
     * @return Anuncio
     */
    public function setSrcImg1($srcImg1)
    {
        $this->srcImg1 = $srcImg1;

        return $this;
    }

    /**
     * Get srcImg1
     *
     * @return string
     */
    public function getSrcImg1()
    {
        return $this->srcImg1;
    }

    /**
     * Set srcImg2
     *
     * @param string $srcImg2
     *
     * @return Anuncio
     */
    public function setSrcImg2($srcImg2)
    {
        $this->srcImg2 = $srcImg2;

        return $this;
    }

    /**
     * Get srcImg2
     *
     * @return string
     */
    public function getSrcImg2()
    {
        return $this->srcImg2;
    }

    /**
     * Set srcImg3
     *
     * @param string $srcImg3
     *
     * @return Anuncio
     */
    public function setSrcImg3($srcImg3)
    {
        $this->srcImg3 = $srcImg3;

        return $this;
    }

    /**
     * Get srcImg3
     *
     * @return string
     */
    public function getSrcImg3()
    {
        return $this->srcImg3;
    }
}

