<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Staff.
 *
 * @ORM\Table(name="staff", indexes={@ORM\Index(name="fk_supervisor_staff_id_idx", columns={"supervisor_id"}), @ORM\Index(name="fk_staff_department_id_idx", columns={"department_id"}), @ORM\Index(name="fk_staff_user_type_id_idx", columns={"user_type_id"}), @ORM\Index(name="INDEXSEARCHstaff", columns={"lname", "fname"})})
 * @ORM\Entity
 */
class Staff
{
    /**
     * @var int
     *
     * @ORM\Column(name="staff_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $staffId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lname", type="string", length=765, nullable=true)
     */
    private $lname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fname", type="string", length=765, nullable=true)
     */
    private $fname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=765, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel", type="string", length=45, nullable=true)
     */
    private $tel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="department_id", type="integer", nullable=true)
     */
    private $departmentId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="staff_sort", type="integer", nullable=true)
     */
    private $staffSort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=765, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip", type="string", length=300, nullable=true)
     */
    private $ip;

    /**
     * @var int|null
     *
     * @ORM\Column(name="access_level", type="integer", nullable=true)
     */
    private $accessLevel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=192, nullable=true)
     */
    private $password;

    /**
     * @var int|null
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ptags", type="string", length=765, nullable=true)
     */
    private $ptags;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extra", type="string", length=765, nullable=true)
     */
    private $extra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bio", type="blob", length=65535, nullable=true)
     */
    private $bio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="position_number", type="string", length=30, nullable=true)
     */
    private $positionNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="job_classification", type="string", length=255, nullable=true)
     */
    private $jobClassification;

    /**
     * @var string|null
     *
     * @ORM\Column(name="room_number", type="string", length=60, nullable=true)
     */
    private $roomNumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="supervisor_id", type="integer", nullable=true)
     */
    private $supervisorId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emergency_contact_name", type="string", length=150, nullable=true)
     */
    private $emergencyContactName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emergency_contact_relation", type="string", length=150, nullable=true)
     */
    private $emergencyContactRelation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emergency_contact_phone", type="string", length=60, nullable=true)
     */
    private $emergencyContactPhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street_address", type="string", length=255, nullable=true)
     */
    private $streetAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=150, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=60, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip", type="string", length=30, nullable=true)
     */
    private $zip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="home_phone", type="string", length=60, nullable=true)
     */
    private $homePhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cell_phone", type="string", length=60, nullable=true)
     */
    private $cellPhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=60, nullable=true)
     */
    private $fax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="intercom", type="string", length=30, nullable=true)
     */
    private $intercom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lat_long", type="string", length=75, nullable=true)
     */
    private $latLong;

    /**
     * @var string|null
     *
     * @ORM\Column(name="social_media", type="text", length=16777215, nullable=true)
     */
    private $socialMedia;

    /**
     * @var \UserType
     *
     * @ORM\ManyToOne(targetEntity="UserType")
     * @ORM\JoinColumns({
     *     @ORM\JoinColumn(name="user_type_id", referencedColumnName="user_type_id")
     * })
     */
    private $userType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Subject", inversedBy="staff")
     * @ORM\JoinTable(name="staff_subject",
     *     joinColumns={
     *         @ORM\JoinColumn(name="staff_id", referencedColumnName="staff_id")
     *     },
     *     inverseJoinColumns={
     *         @ORM\JoinColumn(name="subject_id", referencedColumnName="subject_id")
     *     }
     * )
     */
    private $subject;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->subject = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getStaffId(): ?int
    {
        return $this->staffId;
    }

    public function getLname(): ?string
    {
        return $this->lname;
    }

    public function setLname(?string $lname): self
    {
        $this->lname = $lname;

        return $this;
    }

    public function getFname(): ?string
    {
        return $this->fname;
    }

    public function setFname(?string $fname): self
    {
        $this->fname = $fname;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getDepartmentId(): ?int
    {
        return $this->departmentId;
    }

    public function setDepartmentId(?int $departmentId): self
    {
        $this->departmentId = $departmentId;

        return $this;
    }

    public function getStaffSort(): ?int
    {
        return $this->staffSort;
    }

    public function setStaffSort(?int $staffSort): self
    {
        $this->staffSort = $staffSort;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getAccessLevel(): ?int
    {
        return $this->accessLevel;
    }

    public function setAccessLevel(?int $accessLevel): self
    {
        $this->accessLevel = $accessLevel;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(?int $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getPtags(): ?string
    {
        return $this->ptags;
    }

    public function setPtags(?string $ptags): self
    {
        $this->ptags = $ptags;

        return $this;
    }

    public function getExtra(): ?string
    {
        return $this->extra;
    }

    public function setExtra(?string $extra): self
    {
        $this->extra = $extra;

        return $this;
    }

    public function getBio()
    {
        return $this->bio;
    }

    public function setBio($bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    public function getPositionNumber(): ?string
    {
        return $this->positionNumber;
    }

    public function setPositionNumber(?string $positionNumber): self
    {
        $this->positionNumber = $positionNumber;

        return $this;
    }

    public function getJobClassification(): ?string
    {
        return $this->jobClassification;
    }

    public function setJobClassification(?string $jobClassification): self
    {
        $this->jobClassification = $jobClassification;

        return $this;
    }

    public function getRoomNumber(): ?string
    {
        return $this->roomNumber;
    }

    public function setRoomNumber(?string $roomNumber): self
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    public function getSupervisorId(): ?int
    {
        return $this->supervisorId;
    }

    public function setSupervisorId(?int $supervisorId): self
    {
        $this->supervisorId = $supervisorId;

        return $this;
    }

    public function getEmergencyContactName(): ?string
    {
        return $this->emergencyContactName;
    }

    public function setEmergencyContactName(?string $emergencyContactName): self
    {
        $this->emergencyContactName = $emergencyContactName;

        return $this;
    }

    public function getEmergencyContactRelation(): ?string
    {
        return $this->emergencyContactRelation;
    }

    public function setEmergencyContactRelation(?string $emergencyContactRelation): self
    {
        $this->emergencyContactRelation = $emergencyContactRelation;

        return $this;
    }

    public function getEmergencyContactPhone(): ?string
    {
        return $this->emergencyContactPhone;
    }

    public function setEmergencyContactPhone(?string $emergencyContactPhone): self
    {
        $this->emergencyContactPhone = $emergencyContactPhone;

        return $this;
    }

    public function getStreetAddress(): ?string
    {
        return $this->streetAddress;
    }

    public function setStreetAddress(?string $streetAddress): self
    {
        $this->streetAddress = $streetAddress;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(?string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    public function getHomePhone(): ?string
    {
        return $this->homePhone;
    }

    public function setHomePhone(?string $homePhone): self
    {
        $this->homePhone = $homePhone;

        return $this;
    }

    public function getCellPhone(): ?string
    {
        return $this->cellPhone;
    }

    public function setCellPhone(?string $cellPhone): self
    {
        $this->cellPhone = $cellPhone;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getIntercom(): ?string
    {
        return $this->intercom;
    }

    public function setIntercom(?string $intercom): self
    {
        $this->intercom = $intercom;

        return $this;
    }

    public function getLatLong(): ?string
    {
        return $this->latLong;
    }

    public function setLatLong(?string $latLong): self
    {
        $this->latLong = $latLong;

        return $this;
    }

    public function getSocialMedia(): ?string
    {
        return $this->socialMedia;
    }

    public function setSocialMedia(?string $socialMedia): self
    {
        $this->socialMedia = $socialMedia;

        return $this;
    }

    public function getUserType(): ?UserType
    {
        return $this->userType;
    }

    public function setUserType(?UserType $userType): self
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * @return Collection|Subject[]
     */
    public function getSubject(): Collection
    {
        return $this->subject;
    }

    public function addSubject(Subject $subject): self
    {
        if (!$this->subject->contains($subject)) {
            $this->subject[] = $subject;
        }

        return $this;
    }

    public function removeSubject(Subject $subject): self
    {
        $this->subject->removeElement($subject);

        return $this;
    }
}