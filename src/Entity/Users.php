<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $identifier;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $license;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $money;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $skin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $job;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $job_grade;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $job2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $job2_grade;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $loadout;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $position;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bank;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $permission_level;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $group;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $is_dead;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dateofbirth;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sex;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $height;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $last_property;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $jail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone_number;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $hair;

    /**
     * @ORM\OneToOne(targetEntity=User::class, mappedBy="name_serveur", cascade={"persist", "remove"})
     */
    private $user;





    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): self
    {
        $this->identifier = $identifier;

        return $this;
    }

    public function getLicense(): ?string
    {
        return $this->license;
    }

    public function setLicense(?string $license): self
    {
        $this->license = $license;

        return $this;
    }

    public function getMoney(): ?int
    {
        return $this->money;
    }

    public function setMoney(?int $money): self
    {
        $this->money = $money;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSkin(): ?string
    {
        return $this->skin;
    }

    public function setSkin(?string $skin): self
    {
        $this->skin = $skin;

        return $this;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(?string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getJobGrade(): ?int
    {
        return $this->job_grade;
    }

    public function setJobGrade(?int $job_grade): self
    {
        $this->job_grade = $job_grade;

        return $this;
    }

    public function getJob2(): ?string
    {
        return $this->job2;
    }

    public function setJob2(?string $job2): self
    {
        $this->job2 = $job2;

        return $this;
    }

    public function getJob2Grade(): ?int
    {
        return $this->job2_grade;
    }

    public function setJob2Grade(?int $job2_grade): self
    {
        $this->job2_grade = $job2_grade;

        return $this;
    }

    public function getLoadout(): ?string
    {
        return $this->loadout;
    }

    public function setLoadout(?string $loadout): self
    {
        $this->loadout = $loadout;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getBank(): ?int
    {
        return $this->bank;
    }

    public function setBank(?int $bank): self
    {
        $this->bank = $bank;

        return $this;
    }

    public function getPermissionLevel(): ?int
    {
        return $this->permission_level;
    }

    public function setPermissionLevel(?int $permission_level): self
    {
        $this->permission_level = $permission_level;

        return $this;
    }

    public function getGroup(): ?string
    {
        return $this->group;
    }

    public function setGroup(?string $group): self
    {
        $this->group = $group;

        return $this;
    }

    public function getIsDead(): ?int
    {
        return $this->is_dead;
    }

    public function setIsDead(?int $is_dead): self
    {
        $this->is_dead = $is_dead;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getDateofbirth(): ?string
    {
        return $this->dateofbirth;
    }

    public function setDateofbirth(?string $dateofbirth): self
    {
        $this->dateofbirth = $dateofbirth;

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(?string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(?string $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getLastProperty(): ?string
    {
        return $this->last_property;
    }

    public function setLastProperty(?string $last_property): self
    {
        $this->last_property = $last_property;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getJail(): ?int
    {
        return $this->jail;
    }

    public function setJail(?int $jail): self
    {
        $this->jail = $jail;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(?string $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    public function getHair(): ?string
    {
        return $this->hair;
    }

    public function setHair(?string $hair): self
    {
        $this->hair = $hair;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        // set (or unset) the owning side of the relation if necessary
        $newName_serveur = null === $user ? null : $this;
        if ($user->getNameServeur() !== $newName_serveur) {
            $user->setNameServeur($newName_serveur);
        }

        return $this;
    }
}
