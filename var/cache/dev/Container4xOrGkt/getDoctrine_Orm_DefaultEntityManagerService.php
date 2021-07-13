<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.orm.default_entity_manager' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/PruneableInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/ResettableInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/DoctrineProvider.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';
include_once $this->targetDirs[3].'/vendor/psr/cache/src/CacheItemPoolInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AdapterInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache-contracts/CacheInterface.php';
include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/ArrayTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/ArrayAdapter.php';

$a = new \Doctrine\ORM\Configuration();

$b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();
$b->addDriver(($this->privates['doctrine.orm.default_annotation_metadata_driver'] ?? $this->load('getDoctrine_Orm_DefaultAnnotationMetadataDriverService.php')), 'App\\Entity');

$a->setEntityNamespaces(['App' => 'App\\Entity']);
$a->setMetadataCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.metadata'] ?? ($this->privates['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()))));
$a->setQueryCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.query'] ?? ($this->privates['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()))));
$a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.result'] ?? ($this->privates['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()))));
$a->setMetadataDriverImpl($b);
$a->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$a->setProxyNamespace('Proxies');
$a->setAutoGenerateProxyClasses(true);
$a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
$a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
$a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(($this->privates['.service_locator.9_yeNH1'] ?? ($this->privates['.service_locator.9_yeNH1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], [])))));

$this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->load('getDoctrine_Dbal_DefaultConnectionService.php')), $a);

(new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

return $instance;