<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"username"}, message="There is already an account with this username")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\OneToOne(targetEntity=Users::class, inversedBy="user", cascade={"persist", "remove"})
     */
    private $name_serveur;





    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function __toString(){
        // to show the name of the Category in the select
        return $this->username;
        // to show the id of the Category in the select
        // return $this->id;
    }

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $users): self
    {
        $this->users = $users;

        // set (or unset) the owning side of the relation if necessary
        $newUser_id = null === $users ? null : $this;
        if ($users->getUserId() !== $newUser_id) {
            $users->setUserId($newUser_id);
        }

        return $this;
    }

    public function getUsersId(): ?Users
    {
        return $this->users_id;
    }

    public function setUsersId(?Users $users_id): self
    {
        $this->users_id = $users_id;

        // set (or unset) the owning side of the relation if necessary
        $newUser_id = null === $users_id ? null : $this;
        if ($users_id->getUserId() !== $newUser_id) {
            $users_id->setUserId($newUser_id);
        }

        return $this;
    }

    public function getName(): ?users
    {
        return $this->name;
    }

    public function setName(?users $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUsersite(): ?Users
    {
        return $this->usersite;
    }

    public function setUsersite(?Users $usersite): self
    {
        $this->usersite = $usersite;

        // set (or unset) the owning side of the relation if necessary
        $newUsername = null === $usersite ? null : $this;
        if ($usersite->getUsername() !== $newUsername) {
            $usersite->setUsername($newUsername);
        }

        return $this;
    }

    public function getNameServeur(): ?users
    {
        return $this->name_serveur;
    }

    public function setNameServeur(?users $name_serveur): self
    {
        $this->name_serveur = $name_serveur;

        return $this;
    }
}
