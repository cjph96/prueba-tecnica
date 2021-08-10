<?php

namespace ContainerZ1Rydba;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder88e03 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer51847 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesff78d = [
        
    ];

    public function getConnection()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'getConnection', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'getMetadataFactory', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'getExpressionBuilder', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'beginTransaction', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'getCache', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->getCache();
    }

    public function transactional($func)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'transactional', array('func' => $func), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->transactional($func);
    }

    public function commit()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'commit', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->commit();
    }

    public function rollback()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'rollback', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'getClassMetadata', array('className' => $className), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'createQuery', array('dql' => $dql), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'createNamedQuery', array('name' => $name), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'createQueryBuilder', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'flush', array('entity' => $entity), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'clear', array('entityName' => $entityName), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->clear($entityName);
    }

    public function close()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'close', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->close();
    }

    public function persist($entity)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'persist', array('entity' => $entity), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'remove', array('entity' => $entity), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'refresh', array('entity' => $entity), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'detach', array('entity' => $entity), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'merge', array('entity' => $entity), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'getRepository', array('entityName' => $entityName), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'contains', array('entity' => $entity), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'getEventManager', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'getConfiguration', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'isOpen', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'getUnitOfWork', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'getProxyFactory', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'initializeObject', array('obj' => $obj), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'getFilters', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'isFiltersStateClean', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'hasFilters', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return $this->valueHolder88e03->hasFilters();
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

        $instance->initializer51847 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder88e03) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder88e03 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder88e03->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, '__get', ['name' => $name], $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        if (isset(self::$publicPropertiesff78d[$name])) {
            return $this->valueHolder88e03->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88e03;

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

        $targetObject = $this->valueHolder88e03;
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
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88e03;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder88e03;
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
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, '__isset', array('name' => $name), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88e03;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder88e03;
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
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, '__unset', array('name' => $name), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88e03;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder88e03;
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
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, '__clone', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        $this->valueHolder88e03 = clone $this->valueHolder88e03;
    }

    public function __sleep()
    {
        $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, '__sleep', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;

        return array('valueHolder88e03');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer51847 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer51847;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer51847 && ($this->initializer51847->__invoke($valueHolder88e03, $this, 'initializeProxy', array(), $this->initializer51847) || 1) && $this->valueHolder88e03 = $valueHolder88e03;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder88e03;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder88e03;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
