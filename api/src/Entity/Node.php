<?php

namespace Crank\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Bridge\Doctrine\Types\UuidType;
use Symfony\Component\Uid\Uuid;

#[ORM\Entity]
#[ApiResource]
class Node
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    #[ORM\Column(type: UuidType::NAME, unique: true)]
    public ?Uuid $id;

    #[ORM\Column(type: 'string')]
    public string $mac;

    #[ORM\Column(type: 'string')]
    public string $hostname;

    #[ORM\Column(type: 'string')]
    public string $ip;
}