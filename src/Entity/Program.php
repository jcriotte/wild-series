<?php

namespace App\Entity;

use App\Repository\ProgramRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use DateTimeInterface;
use DateTime;


/**
 * @ORM\Entity(repositoryClass=ProgramRepository::class)
 * @UniqueEntity("title")
 * @Vich\Uploadable
 */
class Program
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\ExpressionLanguageSyntax
     * @Assert\NotBlank(message="Field title is required and not null")
     * @Assert\Length(max="255")
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @Assert\ExpressionLanguageSyntax
     * @Assert\NotBlank(message="Field summary is required and not null")
     * @Assert\Regex(
     *     pattern="/plus belle la vie/",
     *     match=true,
     *     message="On parle de vraies séries ici"
     * )
     */
    private $summary;

    /**
     * @Vich\UploadableField(mapping="poster_file", fileNameProperty="poster")
     * @Assert\File(
     *     maxSize = "1M",
     *     mimeTypes = {"image/jpeg", "image/png", "image/webp"},
     * )
     * @var File
     */
    private $posterFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\ExpressionLanguageSyntax
     * @Assert\File(maxSize = "1024k")
     */
    private $poster;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="programs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity=Season::class, mappedBy="program")
     */
    private $seasons;

    /**
     * @ORM\ManyToMany(targetEntity=Actor::class, mappedBy="programs")
     */
    private $actors;

    /**
     * @ORM\OneToMany(targetEntity=Review::class, mappedBy="program")
     */
    private $reviews;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="programs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $owner;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="watchlist")
     */
    private $viewers;

    /**
     * @ORM\Column(type="datetime")
     */
    private DateTimeInterface $updatedAt;

    public function __construct()
    {
        $this->seasons = new ArrayCollection();
        $this->actors = new ArrayCollection();
        $this->reviews = new ArrayCollection();
        $this->viewers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getPoster(): ?string
    {
        return $this->poster;
    }

    public function setPoster(?string $poster): self
    {
        $this->poster = $poster;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection|Season[]
     */
    public function getSeasons(): Collection
    {
        return $this->seasons;
    }

    public function addSeason(Season $season): self
    {
        if (!$this->seasons->contains($season)) {
            $this->seasons[] = $season;
            $season->setProgram($this);
        }

        return $this;
    }

    public function removeSeason(Season $season): self
    {
        if ($this->seasons->removeElement($season)) {
            // set the owning side to null (unless already changed)
            if ($season->getProgram() === $this) {
                $season->setProgram(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Actor[]
     */
    public function getActors(): Collection
    {
        return $this->actors;
    }

    public function addActor(Actor $actor): self
    {
        if (!$this->actors->contains($actor)) {
            $this->actors[] = $actor;
            $actor->addProgram($this);
        }

        return $this;
    }

    public function removeActor(Actor $actor): self
    {
        if ($this->actors->removeElement($actor)) {
            $actor->removeProgram($this);
        }

        return $this;
    }

    /**
     * @return Collection|Review[]
     */
    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    public function addReview(Review $review): self
    {
        if (!$this->reviews->contains($review)) {
            $this->reviews[] = $review;
            $review->setProgram($this);
        }

        return $this;
    }

    public function removeReview(Review $review): self
    {
        if ($this->reviews->removeElement($review)) {
            // set the owning side to null (unless already changed)
            if ($review->getProgram() === $this) {
                $review->setProgram(null);
            }
        }

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(?User $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getViewers(): Collection
    {
        return $this->viewers;
    }

    public function addViewer(User $user): self
    {
        if (!$this->viewers->contains($user)) {
            $this->viewers[] = $user;
            $user->addWatchlist($this);
        }

        return $this;
    }

    public function removeViewer(User $user): self
    {
        if ($this->viewers->removeElement($user)) {
            $user->removeWatchlist($this);
        }

        return $this;
    }

    public function setPosterFile(File $image = null):Program
    {
        $this->posterFile = $image;
        if ($image) {
            $this->updatedAt = new DateTime('now');
        }
        return $this;
    }

    public function getPosterFile(): ?File
    {
        return $this->posterFile;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
