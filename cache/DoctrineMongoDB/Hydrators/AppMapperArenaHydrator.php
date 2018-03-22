<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\Query\Query;
use Doctrine\ODM\MongoDB\UnitOfWork;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadataInfo;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class AppMapperArenaHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data, array $hints = array())
    {
        $hydratedData = array();

        /** @Field(type="id") */
        if (isset($data['_id']) || (! empty($this->class->fieldMappings['id']['nullable']) && array_key_exists('_id', $data))) {
            $value = $data['_id'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['id']['type'];
                $return = $value instanceof \MongoId ? (string) $value : $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @Field(type="collection") */
        if (isset($data['gameInfo']) || (! empty($this->class->fieldMappings['gameInfo']['nullable']) && array_key_exists('gameInfo', $data))) {
            $value = $data['gameInfo'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['gameInfo']['type'];
                $return = $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['gameInfo']->setValue($document, $return);
            $hydratedData['gameInfo'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['description']) || (! empty($this->class->fieldMappings['description']['nullable']) && array_key_exists('description', $data))) {
            $value = $data['description'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['description']['type'];
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['description']->setValue($document, $return);
            $hydratedData['description'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['title']) || (! empty($this->class->fieldMappings['title']['nullable']) && array_key_exists('title', $data))) {
            $value = $data['title'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['title']['type'];
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['title']->setValue($document, $return);
            $hydratedData['title'] = $return;
        }

        /** @Many */
        $mongoData = isset($data['submits']) ? $data['submits'] : null;
        $return = $this->dm->getConfiguration()->getPersistentCollectionFactory()->create($this->dm, $this->class->fieldMappings['submits']);
        $return->setHints($hints);
        $return->setOwner($document, $this->class->fieldMappings['submits']);
        $return->setInitialized(false);
        if ($mongoData) {
            $return->setMongoData($mongoData);
        }
        $this->class->reflFields['submits']->setValue($document, $return);
        $hydratedData['submits'] = $return;

        /** @Many */
        $mongoData = isset($data['confrontations']) ? $data['confrontations'] : null;
        $return = $this->dm->getConfiguration()->getPersistentCollectionFactory()->create($this->dm, $this->class->fieldMappings['confrontations']);
        $return->setHints($hints);
        $return->setOwner($document, $this->class->fieldMappings['confrontations']);
        $return->setInitialized(false);
        if ($mongoData) {
            $return->setMongoData($mongoData);
        }
        $this->class->reflFields['confrontations']->setValue($document, $return);
        $hydratedData['confrontations'] = $return;

        /** @Field(type="date") */
        if (isset($data['date'])) {
            $value = $data['date'];
            if ($value === null) { $return = null; } else { $return = \Doctrine\ODM\MongoDB\Types\DateType::getDateTime($value); }
            $this->class->reflFields['date']->setValue($document, clone $return);
            $hydratedData['date'] = $return;
        }

        /** @Field(type="bool") */
        if (isset($data['ready']) || (! empty($this->class->fieldMappings['ready']['nullable']) && array_key_exists('ready', $data))) {
            $value = $data['ready'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['ready']['type'];
                $return = (bool) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['ready']->setValue($document, $return);
            $hydratedData['ready'] = $return;
        }

        /** @ReferenceOne */
        if (isset($data['winner'])) {
            $reference = $data['winner'];
            $className = $this->unitOfWork->getClassNameForAssociation($this->class->fieldMappings['winner'], $reference);
            $mongoId = ClassMetadataInfo::getReferenceId($reference, $this->class->fieldMappings['winner']['storeAs']);
            $targetMetadata = $this->dm->getClassMetadata($className);
            $id = $targetMetadata->getPHPIdentifierValue($mongoId);
            $return = $this->dm->getReference($className, $id);
            $this->class->reflFields['winner']->setValue($document, $return);
            $hydratedData['winner'] = $return;
        }
        return $hydratedData;
    }
}