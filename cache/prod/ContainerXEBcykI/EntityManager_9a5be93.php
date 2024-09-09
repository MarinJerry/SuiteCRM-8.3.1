<?php

namespace ContainerXEBcykI;

include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8ad0c = null;
    private $initializerae321 = null;
    private static $publicProperties40ece = [
        
    ];
    public function getConnection()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'getConnection', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'getMetadataFactory', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'getExpressionBuilder', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'beginTransaction', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'getCache', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->getCache();
    }
    public function transactional($func)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'transactional', array('func' => $func), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'commit', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->commit();
    }
    public function rollback()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'rollback', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'getClassMetadata', array('className' => $className), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'createQuery', array('dql' => $dql), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'createNamedQuery', array('name' => $name), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'createQueryBuilder', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'flush', array('entity' => $entity), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'clear', array('entityName' => $entityName), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->clear($entityName);
    }
    public function close()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'close', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->close();
    }
    public function persist($entity)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'persist', array('entity' => $entity), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'remove', array('entity' => $entity), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'refresh', array('entity' => $entity), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'detach', array('entity' => $entity), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'merge', array('entity' => $entity), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'contains', array('entity' => $entity), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'getEventManager', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'getConfiguration', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'isOpen', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'getUnitOfWork', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'getProxyFactory', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'initializeObject', array('obj' => $obj), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'getFilters', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'isFiltersStateClean', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'hasFilters', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return $this->valueHolder8ad0c->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerae321 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder8ad0c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8ad0c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder8ad0c->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, '__get', ['name' => $name], $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        if (isset(self::$publicProperties40ece[$name])) {
            return $this->valueHolder8ad0c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ad0c;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8ad0c;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ad0c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8ad0c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, '__isset', array('name' => $name), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ad0c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8ad0c;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, '__unset', array('name' => $name), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ad0c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8ad0c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, '__clone', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        $this->valueHolder8ad0c = clone $this->valueHolder8ad0c;
    }
    public function __sleep()
    {
        $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, '__sleep', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
        return array('valueHolder8ad0c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerae321 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerae321;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerae321 && ($this->initializerae321->__invoke($valueHolder8ad0c, $this, 'initializeProxy', array(), $this->initializerae321) || 1) && $this->valueHolder8ad0c = $valueHolder8ad0c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8ad0c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8ad0c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
