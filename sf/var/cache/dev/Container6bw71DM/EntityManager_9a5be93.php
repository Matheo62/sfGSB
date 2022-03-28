<?php

namespace Container6bw71DM;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9ffbc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9ac1e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesef415 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'getConnection', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'getMetadataFactory', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'getExpressionBuilder', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'beginTransaction', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'getCache', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'transactional', array('func' => $func), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'commit', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->commit();
    }

    public function rollback()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'rollback', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'getClassMetadata', array('className' => $className), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'createQuery', array('dql' => $dql), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'createNamedQuery', array('name' => $name), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'createQueryBuilder', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'flush', array('entity' => $entity), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'clear', array('entityName' => $entityName), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->clear($entityName);
    }

    public function close()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'close', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->close();
    }

    public function persist($entity)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'persist', array('entity' => $entity), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'remove', array('entity' => $entity), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'refresh', array('entity' => $entity), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'detach', array('entity' => $entity), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'merge', array('entity' => $entity), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'contains', array('entity' => $entity), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'getEventManager', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'getConfiguration', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'isOpen', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'getUnitOfWork', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'getProxyFactory', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'initializeObject', array('obj' => $obj), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'getFilters', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'isFiltersStateClean', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'hasFilters', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return $this->valueHolder9ffbc->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer9ac1e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9ffbc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9ffbc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9ffbc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, '__get', ['name' => $name], $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        if (isset(self::$publicPropertiesef415[$name])) {
            return $this->valueHolder9ffbc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ffbc;

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

        $targetObject = $this->valueHolder9ffbc;
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
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ffbc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9ffbc;
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
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, '__isset', array('name' => $name), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ffbc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9ffbc;
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
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, '__unset', array('name' => $name), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ffbc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9ffbc;
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
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, '__clone', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        $this->valueHolder9ffbc = clone $this->valueHolder9ffbc;
    }

    public function __sleep()
    {
        $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, '__sleep', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;

        return array('valueHolder9ffbc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9ac1e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9ac1e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9ac1e && ($this->initializer9ac1e->__invoke($valueHolder9ffbc, $this, 'initializeProxy', array(), $this->initializer9ac1e) || 1) && $this->valueHolder9ffbc = $valueHolder9ffbc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9ffbc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9ffbc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
