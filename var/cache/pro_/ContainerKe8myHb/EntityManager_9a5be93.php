<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder36f21 = null;
    private $initializer6a50e = null;
    private static $publicPropertiesab159 = [
        
    ];
    public function getConnection()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'getConnection', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'getMetadataFactory', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'getExpressionBuilder', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'beginTransaction', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'getCache', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->getCache();
    }
    public function transactional($func)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'transactional', array('func' => $func), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'commit', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->commit();
    }
    public function rollback()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'rollback', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'getClassMetadata', array('className' => $className), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'createQuery', array('dql' => $dql), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'createNamedQuery', array('name' => $name), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'createQueryBuilder', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'flush', array('entity' => $entity), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'clear', array('entityName' => $entityName), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->clear($entityName);
    }
    public function close()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'close', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->close();
    }
    public function persist($entity)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'persist', array('entity' => $entity), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'remove', array('entity' => $entity), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'refresh', array('entity' => $entity), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'detach', array('entity' => $entity), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'merge', array('entity' => $entity), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'contains', array('entity' => $entity), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'getEventManager', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'getConfiguration', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'isOpen', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'getUnitOfWork', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'getProxyFactory', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'initializeObject', array('obj' => $obj), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'getFilters', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'isFiltersStateClean', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'hasFilters', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return $this->valueHolder36f21->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer6a50e = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder36f21) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder36f21 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder36f21->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, '__get', ['name' => $name], $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        if (isset(self::$publicPropertiesab159[$name])) {
            return $this->valueHolder36f21->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36f21;
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
        $targetObject = $this->valueHolder36f21;
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
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36f21;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder36f21;
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
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, '__isset', array('name' => $name), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36f21;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder36f21;
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
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, '__unset', array('name' => $name), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36f21;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder36f21;
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
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, '__clone', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        $this->valueHolder36f21 = clone $this->valueHolder36f21;
    }
    public function __sleep()
    {
        $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, '__sleep', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
        return array('valueHolder36f21');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6a50e = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6a50e;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer6a50e && ($this->initializer6a50e->__invoke($valueHolder36f21, $this, 'initializeProxy', array(), $this->initializer6a50e) || 1) && $this->valueHolder36f21 = $valueHolder36f21;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder36f21;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder36f21;
    }
}
