<?php

namespace Container4dXjBlw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder56923 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6ae6f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4af28 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'getConnection', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'getMetadataFactory', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'getExpressionBuilder', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'beginTransaction', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'getCache', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'transactional', array('func' => $func), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'commit', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->commit();
    }

    public function rollback()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'rollback', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'getClassMetadata', array('className' => $className), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'createQuery', array('dql' => $dql), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'createNamedQuery', array('name' => $name), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'createQueryBuilder', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'flush', array('entity' => $entity), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'clear', array('entityName' => $entityName), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->clear($entityName);
    }

    public function close()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'close', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->close();
    }

    public function persist($entity)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'persist', array('entity' => $entity), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'remove', array('entity' => $entity), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'refresh', array('entity' => $entity), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'detach', array('entity' => $entity), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'merge', array('entity' => $entity), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'contains', array('entity' => $entity), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'getEventManager', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'getConfiguration', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'isOpen', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'getUnitOfWork', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'getProxyFactory', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'initializeObject', array('obj' => $obj), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'getFilters', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'isFiltersStateClean', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'hasFilters', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return $this->valueHolder56923->hasFilters();
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

        $instance->initializer6ae6f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder56923) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder56923 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder56923->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, '__get', ['name' => $name], $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        if (isset(self::$publicProperties4af28[$name])) {
            return $this->valueHolder56923->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56923;

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

        $targetObject = $this->valueHolder56923;
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
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56923;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder56923;
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
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, '__isset', array('name' => $name), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56923;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder56923;
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
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, '__unset', array('name' => $name), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56923;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder56923;
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
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, '__clone', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        $this->valueHolder56923 = clone $this->valueHolder56923;
    }

    public function __sleep()
    {
        $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, '__sleep', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;

        return array('valueHolder56923');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6ae6f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6ae6f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6ae6f && ($this->initializer6ae6f->__invoke($valueHolder56923, $this, 'initializeProxy', array(), $this->initializer6ae6f) || 1) && $this->valueHolder56923 = $valueHolder56923;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder56923;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56923;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
