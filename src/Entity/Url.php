<?php

namespace App\Entity;

use App\Repository\UrlRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UrlRepository::class)
 */
class Url
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64, options={"comment"="eg: link,img,file,and so on"})
     */
    private $type;

    /**
     * @ORM\Column(type="text")
     */
    private $urlInfo;

    /**
     * @ORM\Column(type="integer")
     */
    private $addTime;

    /**
     * @ORM\Column(type="string", length=16, nullable=true, options={"comment"="permanent or temporary"})
     */
    private $redirectType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getUrlInfo(): ?string
    {
        return $this->urlInfo;
    }

    public function setUrlInfo(string $urlInfo): self
    {
        $this->urlInfo = $urlInfo;

        return $this;
    }

    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

    public function setAddTime(int $addTime): self
    {
        $this->addTime = $addTime;

        return $this;
    }

    public function getRedirectType(): ?string
    {
        return $this->redirectType;
    }

    public function setRedirectType(?string $redirectType): self
    {
        $this->redirectType = $redirectType;

        return $this;
    }
}
