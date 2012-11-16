<?php

namespace DoctrineORMModule\Proxy\__CG__\Rcm\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class PageRevision extends \Rcm\Entity\PageRevision implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function toArray()
    {
        $this->__load();
        return parent::toArray();
    }

    public function getInstancesForDisplay()
    {
        $this->__load();
        return parent::getInstancesForDisplay();
    }

    public function getPageRevId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["pageRevId"];
        }
        $this->__load();
        return parent::getPageRevId();
    }

    public function setPageRevId($pageRevId)
    {
        $this->__load();
        return parent::setPageRevId($pageRevId);
    }

    public function getAuthor()
    {
        $this->__load();
        return parent::getAuthor();
    }

    public function setAuthor($author)
    {
        $this->__load();
        return parent::setAuthor($author);
    }

    public function getCreatedDate()
    {
        $this->__load();
        return parent::getCreatedDate();
    }

    public function setCreatedDate(\DateTime $createdDate)
    {
        $this->__load();
        return parent::setCreatedDate($createdDate);
    }

    public function getPage()
    {
        $this->__load();
        return parent::getPage();
    }

    public function setPage(\Rcm\Entity\Page $page)
    {
        $this->__load();
        return parent::setPage($page);
    }

    public function getPageTitle()
    {
        $this->__load();
        return parent::getPageTitle();
    }

    public function setPageTitle($pageTitle)
    {
        $this->__load();
        return parent::setPageTitle($pageTitle);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getKeywords()
    {
        $this->__load();
        return parent::getKeywords();
    }

    public function setKeywords($keywords)
    {
        $this->__load();
        return parent::setKeywords($keywords);
    }

    public function getPageLayout()
    {
        $this->__load();
        return parent::getPageLayout();
    }

    public function setPageLayout($pageLayout)
    {
        $this->__load();
        return parent::setPageLayout($pageLayout);
    }

    public function getPluginInstances()
    {
        $this->__load();
        return parent::getPluginInstances();
    }

    public function addInstances($instances)
    {
        $this->__load();
        return parent::addInstances($instances);
    }

    public function addInstance(\Rcm\Entity\PagePluginInstance $instance)
    {
        $this->__load();
        return parent::addInstance($instance);
    }

    public function getInstanceById($instanceId)
    {
        $this->__load();
        return parent::getInstanceById($instanceId);
    }

    public function getRawPluginInstances()
    {
        $this->__load();
        return parent::getRawPluginInstances();
    }

    public function removeInstance(\Rcm\Entity\PagePluginInstance $instance)
    {
        $this->__load();
        return parent::removeInstance($instance);
    }

    public function publishRevision()
    {
        $this->__load();
        return parent::publishRevision();
    }

    public function wasPublished()
    {
        $this->__load();
        return parent::wasPublished();
    }

    public function stageRevision()
    {
        $this->__load();
        return parent::stageRevision();
    }

    public function unStageRevision()
    {
        $this->__load();
        return parent::unStageRevision();
    }

    public function isStaged()
    {
        $this->__load();
        return parent::isStaged();
    }

    public function setIsDirty($isDirty)
    {
        $this->__load();
        return parent::setIsDirty($isDirty);
    }

    public function getIsDirty()
    {
        $this->__load();
        return parent::getIsDirty();
    }

    public function setMd5($md5)
    {
        $this->__load();
        return parent::setMd5($md5);
    }

    public function getMd5()
    {
        $this->__load();
        return parent::getMd5();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'pageRevId', 'author', 'createdDate', 'pageTitle', 'description', 'keywords', 'favIcon', 'pageLayout', 'published', 'md5', 'staged', 'page', 'pluginInstances');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        parent::__clone();
    }
}