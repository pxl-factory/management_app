<?php

namespace App\Entity;

use App\Repository\EmployeeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeeRepository::class)]
class Employee
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $LastName;

    #[ORM\Column(type: 'string', length: 255)]
    private $FirstName;

    #[ORM\Column(type: 'date', nullable: true)]
    private $arrivalDate;

    #[ORM\ManyToOne(targetEntity: Departement::class, inversedBy: 'employees')]
    private $Department;

    #[ORM\ManyToMany(targetEntity: EquipmentIT::class, inversedBy: 'employees')]
    private $Equipment;

    public function __construct()
    {
        $this->Equipment = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): self
    {
        $this->LastName = $LastName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    public function setFirstName(string $FirstName): self
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    public function getArrivalDate(): ?\DateTimeInterface
    {
        return $this->arrivalDate;
    }

    public function setArrivalDate(?\DateTimeInterface $arrivalDate): self
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    public function getDepartment(): ?Departement
    {
        return $this->Department;
    }

    public function setDepartment(?Departement $Department): self
    {
        $this->Department = $Department;

        return $this;
    }

    /**
     * @return Collection<int, EquipmentIT>
     */
    public function getEquipment(): Collection
    {
        return $this->Equipment;
    }

    public function addEquipment(EquipmentIT $equipment): self
    {
        if (!$this->Equipment->contains($equipment)) {
            $this->Equipment[] = $equipment;
        }

        return $this;
    }

    public function removeEquipment(EquipmentIT $equipment): self
    {
        $this->Equipment->removeElement($equipment);

        return $this;
    }
}
