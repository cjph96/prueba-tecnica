<?php

namespace ContainerUCUAfvB;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder671ed = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer43ca1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbf17d = [
        
    ];

    public function getConnection()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'getConnection', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'getMetadataFactory', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'getExpressionBuilder', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'beginTransaction', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'getCache', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->getCache();
    }

    public function transactional($func)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'transactional', array('func' => $func), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->transactional($func);
    }

    public function commit()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'commit', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->commit();
    }

    public function rollback()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'rollback', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'getClassMetadata', array('className' => $className), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'createQuery', array('dql' => $dql), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'createNamedQuery', array('name' => $name), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'createQueryBuilder', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'flush', array('entity' => $entity), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'clear', array('entityName' => $entityName), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->clear($entityName);
    }

    public function close()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'close', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->close();
    }

    public function persist($entity)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'persist', array('entity' => $entity), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'remove', array('entity' => $entity), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'refresh', array('entity' => $entity), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'detach', array('entity' => $entity), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'merge', array('entity' => $entity), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'getRepository', array('entityName' => $entityName), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'contains', array('entity' => $entity), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'getEventManager', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'getConfiguration', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'isOpen', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'getUnitOfWork', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'getProxyFactory', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'initializeObject', array('obj' => $obj), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'getFilters', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'isFiltersStateClean', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'hasFilters', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return $this->valueHolder671ed->hasFilters();
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

        $instance->initializer43ca1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder671ed) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder671ed = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder671ed->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, '__get', ['name' => $name], $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        if (isset(self::$publicPropertiesbf17d[$name])) {
            return $this->valueHolder671ed->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder671ed;

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

        $targetObject = $this->valueHolder671ed;
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
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder671ed;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder671ed;
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
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, '__isset', array('name' => $name), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder671ed;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder671ed;
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
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, '__unset', array('name' => $name), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder671ed;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder671ed;
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
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, '__clone', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        $this->valueHolder671ed = clone $this->valueHolder671ed;
    }

    public function __sleep()
    {
        $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, '__sleep', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;

        return array('valueHolder671ed');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer43ca1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer43ca1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer43ca1 && ($this->initializer43ca1->__invoke($valueHolder671ed, $this, 'initializeProxy', array(), $this->initializer43ca1) || 1) && $this->valueHolder671ed = $valueHolder671ed;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder671ed;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder671ed;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
