<?php

namespace CineSearch\TdcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Film
{
    //Generate code

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $genre;

    /**
     * @var string
     */
    private $acteurs;

    /**
     * @var string
     */
    private $cinema;

    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $synopsis;

    /**
     * @var string
     */
    private $trailer;


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
     * Set name
     *
     * @param string $name
     *
     * @return Film
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
     * Set image
     *
     * @param string $image
     *
     * @return Film
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Film
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set acteurs
     *
     * @param string $acteurs
     *
     * @return Film
     */
    public function setActeurs($acteurs)
    {
        $this->acteurs = $acteurs;

        return $this;
    }

    /**
     * Get acteurs
     *
     * @return string
     */
    public function getActeurs()
    {
        return $this->acteurs;
    }

    /**
     * Set cinema
     *
     * @param string $cinema
     *
     * @return Film
     */
    public function setCinema($cinema)
    {
        $this->cinema = $cinema;

        return $this;
    }

    /**
     * Get cinema
     *
     * @return string
     */
    public function getCinema()
    {
        return $this->cinema;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Film
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     *
     * @return Film
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set trailer
     *
     * @param string $trailer
     *
     * @return Film
     */
    public function setTrailer($trailer)
    {
        $this->trailer = $trailer;

        return $this;
    }

    /**
     * Get trailer
     *
     * @return string
     */
    public function getTrailer()
    {
        return $this->trailer;
    }
}
