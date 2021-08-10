<?php

namespace ContainerVmtkdCu;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4b651 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdfe9c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf9a18 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'getConnection', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'getMetadataFactory', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'getExpressionBuilder', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'beginTransaction', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'getCache', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'transactional', array('func' => $func), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->transactional($func);
    }

    public function commit()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'commit', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->commit();
    }

    public function rollback()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'rollback', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'getClassMetadata', array('className' => $className), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'createQuery', array('dql' => $dql), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'createNamedQuery', array('name' => $name), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'createQueryBuilder', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'flush', array('entity' => $entity), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'clear', array('entityName' => $entityName), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->clear($entityName);
    }

    public function close()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'close', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->close();
    }

    public function persist($entity)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'persist', array('entity' => $entity), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'remove', array('entity' => $entity), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'refresh', array('entity' => $entity), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'detach', array('entity' => $entity), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'merge', array('entity' => $entity), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'contains', array('entity' => $entity), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'getEventManager', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'getConfiguration', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'isOpen', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'getUnitOfWork', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'getProxyFactory', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'initializeObject', array('obj' => $obj), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'getFilters', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'isFiltersStateClean', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'hasFilters', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return $this->valueHolder4b651->hasFilters();
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

        $instance->initializerdfe9c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4b651) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4b651 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4b651->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, '__get', ['name' => $name], $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        if (isset(self::$publicPropertiesf9a18[$name])) {
            return $this->valueHolder4b651->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b651;

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

        $targetObject = $this->valueHolder4b651;
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
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b651;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4b651;
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
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, '__isset', array('name' => $name), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b651;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4b651;
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
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, '__unset', array('name' => $name), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b651;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4b651;
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
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, '__clone', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        $this->valueHolder4b651 = clone $this->valueHolder4b651;
    }

    public function __sleep()
    {
        $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, '__sleep', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;

        return array('valueHolder4b651');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdfe9c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdfe9c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdfe9c && ($this->initializerdfe9c->__invoke($valueHolder4b651, $this, 'initializeProxy', array(), $this->initializerdfe9c) || 1) && $this->valueHolder4b651 = $valueHolder4b651;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4b651;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4b651;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
