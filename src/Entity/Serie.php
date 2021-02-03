<?php

namespace App\Entity;

use App\Repository\SerieRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as assert;

/**
 * @UniqueEntity(fields ={"tmdbId"})
 * @ORM\Entity(repositoryClass=SerieRepository::class)
 */
class Serie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @assert\NotBlank(message="please donne moi un nom...")
     * @ORM\column(type="string", length=255)
     */
    private $name;
    /**
     * @ORM\column(type="text", nullable=true)
     */
    private $overview;

    /**
     * @ORM\column(type="string", length=50, nullable=true)
     */
    private $status;
    /**
     * @ORM\column(type="decimal" ,precision=3,scale=1,nullable=true)
     */
    private $votes;


    /**
     * @ORM\column(type="decimal" ,precision=6,scale=2,nullable=true)
     */
    private $popularity;
    /**
     * @ORM\column(type="string",length=255, nullable=true)
     */
    private $genres;
    /**
     * @ORM\column(type="date",nullable=true)
     */
    private $firstAirDate;

    /**
     * @ORM\column(type="date",nullable=true)
     */
    private $lastAirDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true,unique=true)
     */
    private $backdrop;
    /**
     * @ORM\Column(type="string", length=255, nullable=true,unique=true)
     */
    private $poster;
    /**
     * @ORM\Column (type="integer",unique=true)
     */
    private $tmdbId;
    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $dateModified;
    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $dateCreated;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getOverview()
    {
        return $this->overview;
    }

    /**
     * @param mixed $overview
     */
    public function setOverview($overview): void
    {
        $this->overview = $overview;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * @param mixed $votes
     */
    public function setVotes($votes): void
    {
        $this->votes = $votes;
    }

    /**
     * @return mixed
     */
    public function getPopularity()
    {
        return $this->popularity;
    }

    /**
     * @param mixed $popularity
     */
    public function setPopularity($popularity): void
    {
        $this->popularity = $popularity;
    }

    /**
     * @return mixed
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * @param mixed $genres
     */
    public function setGenres($genres): void
    {
        $this->genres = $genres;
    }

    /**
     * @return mixed
     */
    public function getFirstAirDate()
    {
        return $this->firstAirDate;
    }

    /**
     * @param mixed $firstAirDate
     */
    public function setFirstAirDate($firstAirDate): void
    {
        $this->firstAirDate = $firstAirDate;
    }

    /**
     * @return mixed
     */
    public function getLastAirDate()
    {
        return $this->lastAirDate;
    }

    /**
     * @param mixed $lastAirDate
     */
    public function setLastAirDate($lastAirDate): void
    {
        $this->lastAirDate = $lastAirDate;
    }

    /**
     * @return mixed
     */
    public function getBackdrop()
    {
        return $this->backdrop;
    }

    /**
     * @param mixed $backdrop
     */
    public function setBackdrop($backdrop): void
    {
        $this->backdrop = $backdrop;
    }

    /**
     * @return mixed
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * @param mixed $poster
     */
    public function setPoster($poster): void
    {
        $this->poster = $poster;
    }

    /**
     * @return mixed
     */
    public function getTmdbId()
    {
        return $this->tmdbId;
    }

    /**
     * @param mixed $tmdbId
     */
    public function setTmdbId($tmdbId): void
    {
        $this->tmdbId = $tmdbId;
    }

    /**
     * @return mixed
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * @param mixed $dateModified
     */
    public function setDateModified($dateModified): void
    {
        $this->dateModified = $dateModified;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param mixed $dateCreated
     */
    public function setDateCreated($dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
