<?php

namespace Container5zJeW56;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class srcDevDebugProjectContainer extends Container
{
    private $buildParameters;
    private $parameters;
    private $targetDirs = array();

    /**
     * @internal but protected for BC on cache:clear
     */
    protected $privates = array();

    public function __construct(array $buildParameters = array())
    {
        $dir = $this->targetDirs[0] = \dirname(__DIR__);
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = array();
        $this->syntheticIds = array(
            'kernel' => true,
        );
        $this->methodMap = array(
            'cache.app' => 'getCache_AppService',
            'cache.system' => 'getCache_SystemService',
            'doctrine' => 'getDoctrineService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'vich_uploader.templating.helper.uploader_helper' => 'getVichUploader_Templating_Helper_UploaderHelperService',
        );
        $this->fileMap = array(
            'App\\Controller\\Platform\\ContainerController' => __DIR__.'/getContainerControllerService.php',
            'App\\Controller\\Platform\\ImageController' => __DIR__.'/getImageControllerService.php',
            'App\\Controller\\Platform\\MainController' => __DIR__.'/getMainControllerService.php',
            'App\\Controller\\Platform\\SecurityController' => __DIR__.'/getSecurityControllerService.php',
            'App\\Controller\\Platform\\UserController' => __DIR__.'/getUserControllerService.php',
            'App\\Controller\\RealProperty\\RealPropertyController' => __DIR__.'/getRealPropertyControllerService.php',
            'App\\Controller\\RealProperty\\RealPropertyTypeController' => __DIR__.'/getRealPropertyTypeControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => __DIR__.'/getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => __DIR__.'/getTemplateControllerService.php',
            'cache.app_clearer' => __DIR__.'/getCache_AppClearerService.php',
            'cache.global_clearer' => __DIR__.'/getCache_GlobalClearerService.php',
            'cache.system_clearer' => __DIR__.'/getCache_SystemClearerService.php',
            'cache_clearer' => __DIR__.'/getCacheClearerService.php',
            'cache_warmer' => __DIR__.'/getCacheWarmerService.php',
            'console.command.public_alias.doctrine_cache.contains_command' => __DIR__.'/getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService.php',
            'console.command.public_alias.doctrine_cache.delete_command' => __DIR__.'/getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService.php',
            'console.command.public_alias.doctrine_cache.flush_command' => __DIR__.'/getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService.php',
            'console.command.public_alias.doctrine_cache.stats_command' => __DIR__.'/getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService.php',
            'console.command.public_alias.doctrine_migrations.diff_command' => __DIR__.'/getConsole_Command_PublicAlias_DoctrineMigrations_DiffCommandService.php',
            'console.command.public_alias.doctrine_migrations.execute_command' => __DIR__.'/getConsole_Command_PublicAlias_DoctrineMigrations_ExecuteCommandService.php',
            'console.command.public_alias.doctrine_migrations.generate_command' => __DIR__.'/getConsole_Command_PublicAlias_DoctrineMigrations_GenerateCommandService.php',
            'console.command.public_alias.doctrine_migrations.latest_command' => __DIR__.'/getConsole_Command_PublicAlias_DoctrineMigrations_LatestCommandService.php',
            'console.command.public_alias.doctrine_migrations.migrate_command' => __DIR__.'/getConsole_Command_PublicAlias_DoctrineMigrations_MigrateCommandService.php',
            'console.command.public_alias.doctrine_migrations.status_command' => __DIR__.'/getConsole_Command_PublicAlias_DoctrineMigrations_StatusCommandService.php',
            'console.command.public_alias.doctrine_migrations.version_command' => __DIR__.'/getConsole_Command_PublicAlias_DoctrineMigrations_VersionCommandService.php',
            'console.command_loader' => __DIR__.'/getConsole_CommandLoaderService.php',
            'doctrine.dbal.default_connection' => __DIR__.'/getDoctrine_Dbal_DefaultConnectionService.php',
            'doctrine.orm.default_entity_manager' => __DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php',
            'filesystem' => __DIR__.'/getFilesystemService.php',
            'form.factory' => __DIR__.'/getForm_FactoryService.php',
            'routing.loader' => __DIR__.'/getRouting_LoaderService.php',
            'security.authentication_utils' => __DIR__.'/getSecurity_AuthenticationUtilsService.php',
            'security.password_encoder' => __DIR__.'/getSecurity_PasswordEncoderService.php',
            'services_resetter' => __DIR__.'/getServicesResetterService.php',
            'session' => __DIR__.'/getSessionService.php',
            'twig.controller.exception' => __DIR__.'/getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => __DIR__.'/getTwig_Controller_PreviewErrorService.php',
            'vich_uploader.directory_namer_subdir' => __DIR__.'/getVichUploader_DirectoryNamerSubdirService.php',
            'vich_uploader.download_handler' => __DIR__.'/getVichUploader_DownloadHandlerService.php',
            'vich_uploader.form.type.file' => __DIR__.'/getVichUploader_Form_Type_FileService.php',
            'vich_uploader.form.type.image' => __DIR__.'/getVichUploader_Form_Type_ImageService.php',
            'vich_uploader.namer_base64' => __DIR__.'/getVichUploader_NamerBase64Service.php',
            'vich_uploader.namer_directory_property' => __DIR__.'/getVichUploader_NamerDirectoryPropertyService.php',
            'vich_uploader.namer_hash' => __DIR__.'/getVichUploader_NamerHashService.php',
            'vich_uploader.namer_origname' => __DIR__.'/getVichUploader_NamerOrignameService.php',
            'vich_uploader.namer_property' => __DIR__.'/getVichUploader_NamerPropertyService.php',
            'vich_uploader.namer_uniqid' => __DIR__.'/getVichUploader_NamerUniqidService.php',
            'vich_uploader.namer_uniqid.image' => __DIR__.'/getVichUploader_NamerUniqid_ImageService.php',
            'vich_uploader.upload_handler' => __DIR__.'/getVichUploader_UploadHandlerService.php',
            'web_profiler.controller.exception' => __DIR__.'/getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.profiler' => __DIR__.'/getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => __DIR__.'/getWebProfiler_Controller_RouterService.php',
        );
        $this->aliases = array(
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
        );

        include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
        include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/TraceableArgumentResolver.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpKernelInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/TerminableInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpKernel.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/RequestStack.php';
        include_once $this->targetDirs[3].'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
        include_once $this->targetDirs[3].'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/cache/ResettableInterface.php';
        include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/AbstractTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
        include_once $this->targetDirs[3].'/vendor/symfony/cache/PruneableInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
        include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/TraceableAdapter.php';
        include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceLocator.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/SaveSessionListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/translation/MessageSelector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/MessageFormatter.php';
        include_once $this->targetDirs[3].'/vendor/symfony/translation/TranslatorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/translation/TranslatorBagInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/translation/Translator.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Translation/Translator.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/TranslatorListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Profiler/FileProfilerStorage.php';
        include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerInterface.php';
        include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Logger.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Log/DebugLoggerInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Logger.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/DataCollectorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/DataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/LateDataCollectorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/MemoryDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/AjaxDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/EventDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/cache/DataCollector/CacheDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/DataCollector/SecurityDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/DataCollector/TwigDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/DataCollector/DoctrineDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/ConfigDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Profiler/Profiler.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ProfilerListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/RequestDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/DataCollector/RequestDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/DataCollector/RouterDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataExtractorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataExtractor.php';
        include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataCollectorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
        include_once $this->targetDirs[3].'/vendor/symfony/stopwatch/Stopwatch.php';
        include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Processor/DebugProcessor.php';
        include_once $this->targetDirs[3].'/vendor/symfony/routing/RequestContext.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/ConnectionRegistry.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/ManagerRegistry.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/AbstractManagerRegistry.php';
        include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
        include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/RegistryInterface.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Registry.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AuthorizationCheckerInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AuthorizationChecker.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Token/Storage/TokenStorageInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Token/Storage/TokenStorage.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationManagerInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationProviderManager.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationTrustResolverInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationTrustResolver.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Role/RoleHierarchyInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Role/RoleHierarchy.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Http/FirewallMapInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Security/FirewallMap.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Logout/LogoutUrlGenerator.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Http/RememberMe/ResponseListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AccessDecisionManagerInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AccessDecisionManager.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/TraceableAccessDecisionManager.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Debug/TraceableFirewallListener.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/LoaderInterface.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExistsLoaderInterface.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/SourceContextLoaderInterface.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Loader/Filesystem.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExtensionInterface.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/Profiler.php';
        include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/asset/VersionStrategy/EmptyVersionStrategy.php';
        include_once $this->targetDirs[3].'/vendor/symfony/asset/Context/ContextInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/asset/Context/RequestStackContext.php';
        include_once $this->targetDirs[3].'/vendor/symfony/asset/PackageInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/asset/Package.php';
        include_once $this->targetDirs[3].'/vendor/symfony/asset/PathPackage.php';
        include_once $this->targetDirs[3].'/vendor/symfony/asset/Packages.php';
        include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/Debug.php';
        include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/DataDumperInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Cloner/DumperInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/AbstractDumper.php';
        include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/CliDumper.php';
        include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/HtmlDumper.php';
        include_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php';
        include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Twig/Extension/UploaderExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/AppVariable.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/RuntimeLoaderInterface.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ContainerRuntimeLoader.php';
        include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Environment.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Profiler/Profile.php';
        include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';
        include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
        include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
        include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
        include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
        include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php';
        include_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Csp/NonceGenerator.php';
        include_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php';
        include_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/ControllerListener.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/ParamConverterInterface.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/DoctrineParamConverter.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/DateTimeParamConverter.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/ParamConverterManager.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/ParamConverterListener.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Templating/TemplateGuesser.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/TemplateListener.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/HttpCacheListener.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/SecurityListener.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/IsGrantedListener.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ArgumentNameConverter.php';
        include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Storage/StorageInterface.php';
        include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Storage/AbstractStorage.php';
        include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Storage/FileSystemStorage.php';
        include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/DriverInterface.php';
        include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/AdvancedDriverInterface.php';
        include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Metadata/Driver/AnnotationDriver.php';
        include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/FileLocatorInterface.php';
        include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/AdvancedFileLocatorInterface.php';
        include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/FileLocator.php';
        include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/AbstractFileDriver.php';
        include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Metadata/Driver/YamlDriver.php';
        include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Metadata/Driver/XmlDriver.php';
        include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/DriverChain.php';
        include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Cache/CacheInterface.php';
        include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Cache/FileCache.php';
        include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/MetadataFactoryInterface.php';
        include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/AdvancedMetadataFactoryInterface.php';
        include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/MetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Metadata/MetadataReader.php';
        include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Mapping/PropertyMappingFactory.php';
        include_once $this->targetDirs[3].'/vendor/symfony/templating/Helper/HelperInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/templating/Helper/Helper.php';
        include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Templating/Helper/UploaderHelper.php';
        include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/ProxyTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/PhpArrayTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/PhpArrayAdapter.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
        include_once $this->targetDirs[3].'/vendor/symfony/cache/DoctrineProvider.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        include_once $this->targetDirs[3].'/vendor/symfony/translation/LoggingTranslator.php';
        include_once $this->targetDirs[3].'/vendor/symfony/translation/DataCollectorTranslator.php';
        include_once $this->targetDirs[3].'/vendor/symfony/routing/RequestContextAwareInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/routing/RouterInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/routing/Router.php';
        include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceSubscriberInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/Router.php';
        include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventDispatcher.php';
        include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/NullHandler.php';
        include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcherInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcher.php';
        include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php';
    }

    public function reset()
    {
        $this->privates = array();
        parent::reset();
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require __DIR__.'/removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $file;
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('gaHjCOed2Z', 0, ($this->targetDirs[0].'/pools'));
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('zyrmcpzt3T', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('event');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()));
        $a->pushHandler(new \Monolog\Handler\NullHandler());

        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)), $a);

        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['data_collector.router'] ?? $this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['response_listener'] ?? $this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8'));
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['streamed_response_listener'] ?? $this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener());
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['validate_request_listener'] ?? $this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener());
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['resolve_controller_name_subscriber'] ?? $this->getResolveControllerNameSubscriberService());
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load(__DIR__.'/getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load(__DIR__.'/getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['session.save_listener'] ?? $this->privates['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener());
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'), -100);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'), -1024);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['data_collector.request'] ?? $this->privates['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['data_collector.request'] ?? $this->privates['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? $this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber());
        }, 1 => 'onConsoleError'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? $this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber());
        }, 1 => 'onConsoleTerminate'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? $this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load(__DIR__.'/getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('console.command', array(0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array()));
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array()));
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['web_profiler.debug_toolbar'] ?? $this->getWebProfiler_DebugToolbarService());
        }, 1 => 'onKernelResponse'), -128);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? $this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? $this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller_arguments', array(0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'), 0);
        $instance->addListener('kernel.controller_arguments', array(0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'), 0);

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        $a = ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true));

        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel')))), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService())), $a), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? $this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? $this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver());
            yield 1 => ($this->privates['argument_resolver.request'] ?? $this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver());
            yield 2 => ($this->privates['argument_resolver.session'] ?? $this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver());
            yield 3 => ($this->privates['security.user_value_resolver'] ?? $this->load(__DIR__.'/getSecurity_UserValueResolverService.php'));
            yield 4 => ($this->privates['argument_resolver.service'] ?? $this->load(__DIR__.'/getArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['argument_resolver.default'] ?? $this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver());
            yield 6 => ($this->privates['argument_resolver.variadic'] ?? $this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver());
        }, 7)), $a));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = ($this->privates['debug.log_processor'] ?? $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor());
        $b = ($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array()));
        $c = ($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService());

        $d = new \Symfony\Bridge\Monolog\Logger('profiler');
        $d->pushProcessor($a);
        $d->pushHandler($b);
        $d->pushHandler($c);

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDirs[0].'/profiler')), $d, true);

        $e = ($this->services['kernel'] ?? $this->get('kernel'));

        $f = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $f->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $f->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $f->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $f->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $f->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));

        $g = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()));
        $g->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? $this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()));

        $h = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $h->setKernel($e);
        }

        $instance->add(($this->privates['data_collector.request'] ?? $this->privates['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($e, ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($d, ($this->targetDirs[0].'/srcDevDebugProjectContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService())));
        $instance->add(($this->privates['data_collector.router'] ?? $this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        $instance->add($f);
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService())));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? $this->privates['twig.profile'] = new \Twig\Profiler\Profile()), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add($g);
        $instance->add($h);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, 'kernel:loadRoutes', array('cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'srcDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'srcDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'service'), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()));

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('translation');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator(($this->privates['translator.default'] ?? $this->getTranslator_DefaultService()), $a));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Twig\Loader\FilesystemLoader(array(), $this->targetDirs[3]);
        $a->addPath(($this->targetDirs[3].'/templates'));
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Resources/views'), 'Maker');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Resources/views'), '!Maker');
        $a->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Resources/views'), 'WebProfiler');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Resources/views'), '!WebProfiler');
        $a->addPath(($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/views'), 'VichUploader');
        $a->addPath(($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/views'), '!VichUploader');
        $a->addPath(($this->targetDirs[3].'/templates'));
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, array('paths' => array(($this->targetDirs[3].'/templates') => NULL), 'debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'default_path' => ($this->targetDirs[3].'/templates'), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $b = ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true));
        $c = ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack());
        $d = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());

        $e = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $e->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $d));

        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()));
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($c);
        }

        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? $this->privates['twig.profile'] = new \Twig\Profiler\Profile()), $b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext($c, '', false)), array())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($d, ($this->targetDirs[3].'/src'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService())));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($e));
        $instance->addExtension(new \Vich\UploaderBundle\Twig\Extension\UploaderExtension(($this->services['vich_uploader.templating.helper.uploader_helper'] ?? $this->getVichUploader_Templating_Helper_UploaderHelperService())));
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ($this->privates['twig.runtime.httpkernel'] ?? $this->load(__DIR__.'/getTwig_Runtime_HttpkernelService.php'));
        }, 'Symfony\\Component\\Form\\FormRenderer' => function () {
            return ($this->privates['twig.form.renderer'] ?? $this->load(__DIR__.'/getTwig_Form_RendererService.php'));
        }))));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'vich_uploader.templating.helper.uploader_helper' shared service.
     *
     * @return \Vich\UploaderBundle\Templating\Helper\UploaderHelper
     */
    protected function getVichUploader_Templating_Helper_UploaderHelperService()
    {
        return $this->services['vich_uploader.templating.helper.uploader_helper'] = new \Vich\UploaderBundle\Templating\Helper\UploaderHelper(($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService()));
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDirs[0].'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()))), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('uUsR26fc91', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('3rRMkEVrMd', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('lAirdihZ6x', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? $this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? $this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker());
        }, 2));
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->privates['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor());
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, -1, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), $this->targetDirs[3], '/_profiler/open?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.access.authenticated_voter'] ?? $this->load(__DIR__.'/getSecurity_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['security.access.role_hierarchy_voter'] ?? $this->load(__DIR__.'/getSecurity_Access_RoleHierarchyVoterService.php'));
        }, 2), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? $this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()));
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/log/dev.log'), 100, true, NULL);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), NULL, false, false);
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->privates['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel')))));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), $this->targetDirs[3], true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.dao.secured_area'] ?? $this->load(__DIR__.'/getSecurity_Authentication_Provider_Dao_SecuredAreaService.php'));
            yield 1 => ($this->privates['security.authentication.provider.anonymous.secured_area'] ?? $this->privates['security.authentication.provider.anonymous.secured_area'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash')));
        }, 2), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.dev' => function () {
            return ($this->privates['security.firewall.map.context.dev'] ?? $this->load(__DIR__.'/getSecurity_Firewall_Map_Context_DevService.php'));
        }, 'security.firewall.map.context.secured_area' => function () {
            return ($this->privates['security.firewall.map.context.secured_area'] ?? $this->load(__DIR__.'/getSecurity_Firewall_Map_Context_SecuredAreaService.php'));
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['security.request_matcher.y.peOiW'] ?? $this->privates['security.request_matcher.y.peOiW'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt|error)|css|images|js)/'));
            yield 'security.firewall.map.context.secured_area' => ($this->privates['security.request_matcher.00qF1Z7'] ?? $this->privates['security.request_matcher.00qF1Z7'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/'));
        }, 2));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()));

        $instance->registerListener('secured_area', '/logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), NULL), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('app');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()));
        $a->useMicrosecondTimestamps(true);
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), NULL, ($this->privates['security.authentication.trust_resolver'] ?? $this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), $a);
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->privates['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel'))), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ($this->services['session'] ?? $this->load(__DIR__.'/getSessionService.php'));
        })));
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->privates['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(array('translation.loader.csv' => function () {
            return ($this->privates['translation.loader.csv'] ?? $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader());
        }, 'translation.loader.dat' => function () {
            return ($this->privates['translation.loader.dat'] ?? $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader());
        }, 'translation.loader.ini' => function () {
            return ($this->privates['translation.loader.ini'] ?? $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader());
        }, 'translation.loader.json' => function () {
            return ($this->privates['translation.loader.json'] ?? $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader());
        }, 'translation.loader.mo' => function () {
            return ($this->privates['translation.loader.mo'] ?? $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader());
        }, 'translation.loader.php' => function () {
            return ($this->privates['translation.loader.php'] ?? $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader());
        }, 'translation.loader.po' => function () {
            return ($this->privates['translation.loader.po'] ?? $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader());
        }, 'translation.loader.qt' => function () {
            return ($this->privates['translation.loader.qt'] ?? $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader());
        }, 'translation.loader.res' => function () {
            return ($this->privates['translation.loader.res'] ?? $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader());
        }, 'translation.loader.xliff' => function () {
            return ($this->privates['translation.loader.xliff'] ?? $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader());
        }, 'translation.loader.yml' => function () {
            return ($this->privates['translation.loader.yml'] ?? $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader());
        })), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'en', array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yaml', 1 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => array('ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.ar.yml')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.az.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.bg.xlf')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ca.xlf')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.cs.yml')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.da.xlf')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.de.yml')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.el.xlf')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.en.yml')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.es.yml')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.et.xlf')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.eu.xlf')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.fa.xlf')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fi.xlf')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.fr.yml')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.gl.xlf')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.he.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.hr.xlf')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.hu.yml')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.id.xlf')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.it.yml')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ja.xlf')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lb.xlf')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lt.xlf')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lv.xlf')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.mn.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.nl.xlf')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.no.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.pl.yml')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.pt.yml')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pt_BR.xlf')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ro.xlf')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.ru.yml')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sk.xlf')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.sl.yml')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sr_Latn.xlf')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sv.xlf')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.uk.yml')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.zh_CN.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pt_PT.xlf')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.th.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Resources/translations/VichUploaderBundle.tr.yml')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ua.xlf')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.vi.xlf')))));

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->privates['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
    }

    /**
     * Gets the private 'vich_uploader.metadata_reader' shared service.
     *
     * @return \Vich\UploaderBundle\Metadata\MetadataReader
     */
    protected function getVichUploader_MetadataReaderService()
    {
        $a = new \Metadata\Driver\FileLocator(array());

        $b = new \Metadata\MetadataFactory(new \Metadata\Driver\DriverChain(array(0 => new \Vich\UploaderBundle\Metadata\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService())), 1 => new \Vich\UploaderBundle\Metadata\Driver\YamlDriver($a), 2 => new \Vich\UploaderBundle\Metadata\Driver\XmlDriver($a))), 'Metadata\\ClassHierarchyMetadata', true);
        $b->setCache(new \Metadata\Cache\FileCache(($this->targetDirs[0].'/vich_uploader')));

        return $this->privates['vich_uploader.metadata_reader'] = new \Vich\UploaderBundle\Metadata\MetadataReader($b);
    }

    /**
     * Gets the private 'vich_uploader.property_mapping_factory' shared service.
     *
     * @return \Vich\UploaderBundle\Mapping\PropertyMappingFactory
     */
    protected function getVichUploader_PropertyMappingFactoryService()
    {
        return $this->privates['vich_uploader.property_mapping_factory'] = new \Vich\UploaderBundle\Mapping\PropertyMappingFactory($this, ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()), $this->getParameter('vich_uploader.mappings'), '_name');
    }

    /**
     * Gets the private 'vich_uploader.storage.file_system' shared service.
     *
     * @return \Vich\UploaderBundle\Storage\FileSystemStorage
     */
    protected function getVichUploader_Storage_FileSystemService()
    {
        return $this->privates['vich_uploader.storage.file_system'] = new \Vich\UploaderBundle\Storage\FileSystemStorage(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()));
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->privates['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(($this->services['twig'] ?? $this->getTwigService()), false, 2, ($this->services['router'] ?? $this->getRouterService()), '^/(app(_[\\w]+)?\\.php/)?_wdt', ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()));
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'translator.default_path' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'doctrine.orm.proxy_dir' => false,
        'doctrine_migrations.dir_name' => false,
        'twig.default_path' => false,
        'vich_uploader.mappings' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/src'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/log'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'WebServerBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/web-server-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ),
                'MakerBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/maker-bundle/src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ),
                'DoctrineCacheBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ),
                'DoctrineBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'DoctrineMigrationsBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ),
                'SecurityBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'WebProfilerBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/symfony/web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'VichUploaderBundle' => array(
                    'path' => ($this->targetDirs[3].'/vendor/vich/uploader-bundle'),
                    'namespace' => 'Vich\\UploaderBundle',
                ),
            ); break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDirs[0].'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/srcDevDebugProjectContainer.xml'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[3].'/src/Migrations'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'vich_uploader.mappings': $value = array(
                'image' => array(
                    'uri_prefix' => '/images/images',
                    'upload_destination' => ($this->targetDirs[3].'/public/images/images'),
                    'namer' => array(
                        'service' => 'vich_uploader.namer_uniqid.image',
                        'options' => array(

                        ),
                    ),
                    'directory_namer' => array(
                        'service' => NULL,
                        'options' => NULL,
                    ),
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ),
            ); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'VichUploaderBundle' => 'Vich\\UploaderBundle\\VichUploaderBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcDevDebugProjectContainer',
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => true,
            'env(DATABASE_URL)' => '',
            'locale' => 'en',
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => false,
            'validator.translation_domain' => 'validators',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'translator.logging' => true,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel:loadRoutes',
            'router.cache_class_prefix' => 'srcDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                ),
            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => '@VichUploader/Form/fields.html.twig',
                1 => 'form_div_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'vich_uploader.default_filename_attribute_suffix' => '_name',
            'vich_uploader.file_injector.class' => 'Vich\\UploaderBundle\\Injector\\FileInjector',
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.cache' => array(
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                0 => 'console.command.public_alias.doctrine_cache.contains_command',
                1 => 'console.command.public_alias.doctrine_cache.delete_command',
                2 => 'console.command.public_alias.doctrine_cache.flush_command',
                3 => 'console.command.public_alias.doctrine_cache.stats_command',
                4 => 'console.command.public_alias.doctrine_migrations.diff_command',
                5 => 'console.command.public_alias.doctrine_migrations.execute_command',
                6 => 'console.command.public_alias.doctrine_migrations.generate_command',
                7 => 'console.command.public_alias.doctrine_migrations.latest_command',
                8 => 'console.command.public_alias.doctrine_migrations.migrate_command',
                9 => 'console.command.public_alias.doctrine_migrations.status_command',
                10 => 'console.command.public_alias.doctrine_migrations.version_command',
            ),
        );
    }
}
