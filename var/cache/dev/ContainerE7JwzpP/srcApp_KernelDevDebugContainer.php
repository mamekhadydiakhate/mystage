<?php

namespace ContainerE7JwzpP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class srcApp_KernelDevDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'App\\Controller\\ActiviteController' => 'getActiviteControllerService',
            'App\\Controller\\AutoriteController' => 'getAutoriteControllerService',
            'App\\Controller\\BaseController' => 'getBaseControllerService',
            'App\\Controller\\CommentaireController' => 'getCommentaireControllerService',
            'App\\Controller\\DifficulteController' => 'getDifficulteControllerService',
            'App\\Controller\\EvenementController' => 'getEvenementControllerService',
            'App\\Controller\\ExceptionController' => 'getExceptionControllerService',
            'App\\Controller\\ExtractionController' => 'getExtractionControllerService',
            'App\\Controller\\HistoriqueController' => 'getHistoriqueControllerService',
            'App\\Controller\\HistoriqueEvenementController' => 'getHistoriqueEvenementControllerService',
            'App\\Controller\\InterimController' => 'getInterimControllerService',
            'App\\Controller\\PeriodiciteController' => 'getPeriodiciteControllerService',
            'App\\Controller\\PointDeCoordinationController' => 'getPointDeCoordinationControllerService',
            'App\\Controller\\ProfilController' => 'getProfilControllerService',
            'App\\Controller\\ResetPasswordController' => 'getResetPasswordControllerService',
            'App\\Controller\\StructureController' => 'getStructureControllerService',
            'App\\Controller\\TrancheHoraireController' => 'getTrancheHoraireControllerService',
            'App\\Controller\\TypePeriodiciteController' => 'getTypePeriodiciteControllerService',
            'App\\Controller\\TypeServiceController' => 'getTypeServiceControllerService',
            'App\\Controller\\TypeStructureController' => 'getTypeStructureControllerService',
            'App\\Controller\\UserController' => 'getUserControllerService',
            'App\\Controller\\WorkflowController' => 'getWorkflowControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'api_platform.action.documentation' => 'getApiPlatform_Action_DocumentationService',
            'api_platform.action.entrypoint' => 'getApiPlatform_Action_EntrypointService',
            'api_platform.action.exception' => 'getApiPlatform_Action_ExceptionService',
            'api_platform.action.not_found' => 'getApiPlatform_Action_NotFoundService',
            'api_platform.action.placeholder' => 'getApiPlatform_Action_PlaceholderService',
            'api_platform.jsonld.action.context' => 'getApiPlatform_Jsonld_Action_ContextService',
            'api_platform.swagger.action.ui' => 'getApiPlatform_Swagger_Action_UiService',
            'api_platform.swagger_ui.action' => 'getApiPlatform_SwaggerUi_ActionService',
            'app.formatter' => 'getApp_FormatterService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.type.file' => 'getForm_Type_FileService',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService',
            'fos_user.change_password.controller' => 'getFosUser_ChangePassword_ControllerService',
            'fos_user.profile.controller' => 'getFosUser_Profile_ControllerService',
            'fos_user.registration.controller' => 'getFosUser_Registration_ControllerService',
            'fos_user.resetting.controller' => 'getFosUser_Resetting_ControllerService',
            'fos_user.security.controller' => 'getFosUser_Security_ControllerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'gdi_annotation_listener' => 'getGdiAnnotationListenerService',
            'http_kernel' => 'getHttpKernelService',
            'lexik_jwt_authentication.encoder' => 'getLexikJwtAuthentication_EncoderService',
            'lexik_jwt_authentication.generate_token_command' => 'getLexikJwtAuthentication_GenerateTokenCommandService',
            'lexik_jwt_authentication.jwt_manager' => 'getLexikJwtAuthentication_JwtManagerService',
            'lexik_jwt_authentication.key_loader' => 'getLexikJwtAuthentication_KeyLoaderService',
            'monolog.logger.trace' => 'getMonolog_Logger_TraceService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'serializer' => 'getSerializerService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'templating' => 'getTemplatingService',
            'templating.loader' => 'getTemplating_LoaderService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'validator' => 'getValidatorService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.exception_panel' => 'getWebProfiler_Controller_ExceptionPanelService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
        ];
        $this->aliases = [
            'ApiPlatform\\Core\\Action\\NotFoundAction' => 'api_platform.action.not_found',
            'FOS\\UserBundle\\Controller\\ChangePasswordController' => 'fos_user.change_password.controller',
            'FOS\\UserBundle\\Controller\\ProfileController' => 'fos_user.profile.controller',
            'FOS\\UserBundle\\Controller\\RegistrationController' => 'fos_user.registration.controller',
            'FOS\\UserBundle\\Controller\\ResettingController' => 'fos_user.resetting.controller',
            'FOS\\UserBundle\\Controller\\SecurityController' => 'fos_user.security.controller',
            'api_platform.action.delete_item' => 'api_platform.action.placeholder',
            'api_platform.action.get_collection' => 'api_platform.action.placeholder',
            'api_platform.action.get_item' => 'api_platform.action.placeholder',
            'api_platform.action.get_subresource' => 'api_platform.action.placeholder',
            'api_platform.action.patch_item' => 'api_platform.action.placeholder',
            'api_platform.action.post_collection' => 'api_platform.action.placeholder',
            'api_platform.action.put_item' => 'api_platform.action.placeholder',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/KernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/RebootableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Kernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).'/src/Kernel.php';
            include_once \dirname(__DIR__, 4).'/src/Listener/AnnotationListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DisallowRobotsIndexingListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ErrorListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/container/src/ContainerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/TraceableArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestStack.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/TraceableAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Packages.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PackageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Package.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PathPackage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/EmptyVersionStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/ContextInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/RequestStackContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/EventListener/MessageLoggerListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validation.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ObjectInitializerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Validator/Initializer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/AutoMappingTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/PropertyInfoLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/DoctrineLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Translator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Translation/Translator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/IdentityTranslator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Profiler/Profiler.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Profiler/FileProfilerStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Logger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Log/DebugLoggerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Logger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/DataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/DataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataCollector/RequestDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/LateDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/MemoryDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/DataCollector/ValidatorDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/AjaxDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/EventDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DataCollector/CacheDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/DataCollector/SecurityDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/DataCollector/TwigDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/DataCollector/DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/DataCollector/MessageDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/DataCollector/MessageDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/ConfigDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ProfilerListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/RequestDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/DataCollector/RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/FormDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/FormDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/FormDataExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/FormDataExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/stopwatch/Stopwatch.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Processor/DebugProcessor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ProxyTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/PhpArrayTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/PhpArrayAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ArrayTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/ArrayAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/EncoderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/ContextAwareEncoderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/DecoderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/ContextAwareDecoderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Serializer.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Serializer/Normalizer/FormErrorNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Swagger/Serializer/ApiGatewayNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/OpenApi/Serializer/OpenApiNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ObjectToPopulateTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/AbstractNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/AbstractObjectNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ObjectNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/JsonEncoder.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Swagger/Serializer/DocumentationNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/AbstractConstraintViolationListNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/ConstraintViolationListNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Problem/Serializer/ConstraintViolationListNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/DocumentationNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/EntrypointNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Problem/Serializer/ErrorNormalizerTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/ErrorNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Problem/Serializer/ErrorNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ProblemNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Util/ClassInfoTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/ContextTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/InputOutputMetadataTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/AbstractItemNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/Serializer/JsonLdContextTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/Serializer/ItemNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/ItemNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/JsonSerializableNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DataUriNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/CollectionFiltersNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/PartialCollectionViewNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/CollectionNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/Serializer/ObjectNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/ClassDiscriminatorResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/NormalizationAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/XmlEncoder.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/YamlEncoder.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/CsvEncoder.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/JsonEncoder.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/NameConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/AdvancedNameConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/MetadataAwareNameConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyDescriptionExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyListExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInfoExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInitializableExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInfoExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-link/EventListener/AddLinkHeaderListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypeGuesserInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypesInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypes.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/EventListener/BodyListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Decoder/DecoderProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Decoder/ContainerDecoderProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Environment.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Loader/FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CsrfExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/UrlHelper.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/WebLinkExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/DebugExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/DataDumperInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Cloner/DumperInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/AbstractDumper.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/CliDumper.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/HtmlDumper.php';
            include_once \dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Twig/PagerfantaExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/ViewFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/ViewFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/ViewInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/View.php';
            include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/TemplateView.php';
            include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/DefaultView.php';
            include_once \dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TranslatedView.php';
            include_once \dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/DefaultTranslatedView.php';
            include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/TwitterBootstrapView.php';
            include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/TwitterBootstrap3View.php';
            include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/TwitterBootstrap4View.php';
            include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/SemanticUiView.php';
            include_once \dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrapTranslatedView.php';
            include_once \dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap4TranslatedView.php';
            include_once \dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap3TranslatedView.php';
            include_once \dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/SemanticUiTranslatedView.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/AppVariable.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/RuntimeLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/ContainerRuntimeLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Profiler/Profile.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationCheckerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationChecker.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/UsageTrackingTokenStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Role/RoleHierarchyInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Role/RoleHierarchy.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/FirewallMapInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallMap.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutUrlGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/TraceableAccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Debug/TraceableFirewallListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ConnectionRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/AbstractManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Registry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Logger/DbalLogger.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/EventListener/CorsListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/Options/ResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/Options/Resolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/Options/ProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/Options/ConfigProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/EventListener/CacheableResponseVaryListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/ResourceClassResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/ResourceClassResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RouterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/IriConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/OperationDataProviderTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Util/ResourceClassInfoTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/IriConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouteNameResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Cache/CachedTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/CachedRouteNameResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouteNameResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/SerializerContextBuilderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/SerializerFilterContextBuilder.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/SerializerContextBuilder.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/Mapping/Factory/ClassMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassResolverTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/LoaderChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/AnnotationLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/PathResolver/OperationPathResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouterOperationPathResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/PathResolver/CustomOperationPathResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/PathResolver/OperationPathResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Operation/PathSegmentNameGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Operation/UnderscorePathSegmentNameGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/AddFormatListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/willdurand/negotiation/src/Negotiation/AbstractNegotiator.php';
            include_once \dirname(__DIR__, 4).'/vendor/willdurand/negotiation/src/Negotiation/Negotiator.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Util/CloneTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/ToggleableOperationAttributeTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/ReadListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/DeserializeListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/IdentifiersExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/CachedIdentifiersExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/IdentifiersExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Identifier/IdentifierConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Identifier/ContextAwareIdentifierConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Identifier/IdentifierConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Operation/Factory/SubresourceOperationFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Operation/Factory/CachedSubresourceOperationFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Operation/Factory/SubresourceOperationFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/ResourceNameCollectionFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/CachedResourceNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/ExtractorResourceNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/ResourceMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/CachedResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/FormatsResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/OperationResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Util/AnnotationFilterExtractorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceFilterMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/ShortNameResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/PhpDocResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/InputOutputResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/ExtractorResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/PropertyNameCollectionFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/CachedPropertyNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/ExtractorPropertyNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/PropertyInfo/Metadata/Property/PropertyInfoPropertyNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/PropertyMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/CachedPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Validator/Metadata/Property/ValidatorPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/ExtractorPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/AnnotationPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/AnnotationSubresourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/DefaultPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/SerializerPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Metadata/Property/DoctrineOrmPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/PropertyInfo/Metadata/Property/PropertyInfoPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Extractor/ExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Extractor/AbstractExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Extractor/XmlExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Extractor/YamlExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonSchema/TypeFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonSchema/TypeFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/EventListener/SwaggerUiListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/ContextBuilderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/AnonymousContextBuilderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/ContextBuilder.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Util/CorsTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/EventListener/AddLinkHeaderListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonSchema/SchemaFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/JsonSchema/SchemaFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonSchema/SchemaFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/HttpCache/EventListener/AddHeadersListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/QueryParameterValidateListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Filter/QueryParameterValidator.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/CollectionDataProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/ContextAwareCollectionDataProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataProvider/TraceableChainCollectionDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/ChainCollectionDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/ItemDataProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataProvider/TraceableChainItemDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/ChainItemDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/SubresourceDataProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataProvider/TraceableChainSubresourceDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/ChainSubresourceDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/DataPersisterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/ContextAwareDataPersisterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataPersister/TraceableChainDataPersister.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/ChainDataPersister.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Security/ResourceAccessCheckerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Security/ResourceAccessChecker.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Security/EventListener/DenyAccessListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/ExpressionFunctionProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Security/Core/Authorization/ExpressionLanguageProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/ControllerListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/ParamConverterListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DoctrineParamConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DateTimeParamConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/TemplateListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Templating/TemplateGuesser.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/HttpCacheListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/SecurityListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Security/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/IsGrantedListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ArgumentNameConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Csp/NonceGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/CanonicalFieldsUpdater.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/CanonicalizerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/Canonicalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/NullHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollectorTranslator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/DependencyInjection/CompatibilityServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validator/ValidatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validator/TraceableValidator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/PsrCachedReader.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function createProxy($class, \Closure $factory)
    {
        class_exists($class, false) || class_alias(__NAMESPACE__."\\$class", $class, false);

        return $factory();
    }

    /**
     * Gets the public 'App\Controller\ActiviteController' shared autowired service.
     *
     * @return \App\Controller\ActiviteController
     */
    protected function getActiviteControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ActiviteController.php';

        return $this->services['App\\Controller\\ActiviteController'] = new \App\Controller\ActiviteController(($this->privates['App\\Repository\\ActiviteRepository'] ?? $this->getActiviteRepositoryService()), ($this->privates['App\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()), ($this->privates['App\\Repository\\StructureRepository'] ?? $this->getStructureRepositoryService()), ($this->privates['App\\Repository\\TrancheHoraireRepository'] ?? $this->getTrancheHoraireRepositoryService()));
    }

    /**
     * Gets the public 'App\Controller\AutoriteController' shared autowired service.
     *
     * @return \App\Controller\AutoriteController
     */
    protected function getAutoriteControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AutoriteController.php';

        return $this->services['App\\Controller\\AutoriteController'] = new \App\Controller\AutoriteController(($this->privates['App\\Repository\\AutoriteRepository'] ?? $this->getAutoriteRepositoryService()));
    }

    /**
     * Gets the public 'App\Controller\BaseController' shared autowired service.
     *
     * @return \App\Controller\BaseController
     */
    protected function getBaseControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';

        return $this->services['App\\Controller\\BaseController'] = new \App\Controller\BaseController(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), ($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['api_platform.validator'] ?? $this->getApiPlatform_ValidatorService()));
    }

    /**
     * Gets the public 'App\Controller\CommentaireController' shared autowired service.
     *
     * @return \App\Controller\CommentaireController
     */
    protected function getCommentaireControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CommentaireController.php';

        return $this->services['App\\Controller\\CommentaireController'] = new \App\Controller\CommentaireController(($this->privates['App\\Repository\\CommentaireRepository'] ?? $this->getCommentaireRepositoryService()), ($this->privates['App\\Repository\\EvenementRepository'] ?? $this->getEvenementRepositoryService()));
    }

    /**
     * Gets the public 'App\Controller\DifficulteController' shared autowired service.
     *
     * @return \App\Controller\DifficulteController
     */
    protected function getDifficulteControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DifficulteController.php';

        return $this->services['App\\Controller\\DifficulteController'] = new \App\Controller\DifficulteController(($this->privates['App\\Repository\\DifficulteRepository'] ?? $this->getDifficulteRepositoryService()), ($this->privates['App\\Repository\\ActiviteRepository'] ?? $this->getActiviteRepositoryService()));
    }

    /**
     * Gets the public 'App\Controller\EvenementController' shared autowired service.
     *
     * @return \App\Controller\EvenementController
     */
    protected function getEvenementControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EvenementController.php';

        return $this->services['App\\Controller\\EvenementController'] = new \App\Controller\EvenementController(($this->privates['App\\Repository\\ActiviteRepository'] ?? $this->getActiviteRepositoryService()), ($this->privates['App\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()), ($this->privates['App\\Repository\\EvenementRepository'] ?? $this->getEvenementRepositoryService()), ($this->privates['App\\Repository\\PeriodiciteRepository'] ?? $this->getPeriodiciteRepositoryService()), ($this->privates['App\\Repository\\StructureRepository'] ?? $this->getStructureRepositoryService()), ($this->privates['App\\Repository\\TrancheHoraireRepository'] ?? $this->getTrancheHoraireRepositoryService()), ($this->privates['App\\Repository\\HistoriqueEvenementRepository'] ?? $this->getHistoriqueEvenementRepositoryService()));
    }

    /**
     * Gets the public 'App\Controller\ExceptionController' shared autowired service.
     *
     * @return \App\Controller\ExceptionController
     */
    protected function getExceptionControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Controller/ExceptionController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ExceptionController.php';

        return $this->services['App\\Controller\\ExceptionController'] = new \App\Controller\ExceptionController(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->services['twig'] ?? $this->getTwigService()), true, $this);
    }

    /**
     * Gets the public 'App\Controller\ExtractionController' shared autowired service.
     *
     * @return \App\Controller\ExtractionController
     */
    protected function getExtractionControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ExtractionController.php';

        return $this->services['App\\Controller\\ExtractionController'] = new \App\Controller\ExtractionController(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), ($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['api_platform.validator'] ?? $this->getApiPlatform_ValidatorService()));
    }

    /**
     * Gets the public 'App\Controller\HistoriqueController' shared autowired service.
     *
     * @return \App\Controller\HistoriqueController
     */
    protected function getHistoriqueControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/HistoriqueController.php';
        include_once \dirname(__DIR__, 4).'/src/Model/BaseManager.php';
        include_once \dirname(__DIR__, 4).'/src/Model/HistoriqueManager.php';
        include_once \dirname(__DIR__, 4).'/src/Mapping/BaseMapping.php';
        include_once \dirname(__DIR__, 4).'/src/Mapping/HistoriqueMapping.php';

        $a = ($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService());
        $b = ($this->privates['App\\Service\\BaseService'] ?? $this->getBaseServiceService());
        $c = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());
        $d = ($this->privates['api_platform.validator'] ?? $this->getApiPlatform_ValidatorService());
        $e = ($this->services['serializer'] ?? $this->getSerializerService());
        $f = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());

        return $this->services['App\\Controller\\HistoriqueController'] = new \App\Controller\HistoriqueController(new \App\Model\HistoriqueManager(new \App\Mapping\HistoriqueMapping($a, $b, $c, $d, $e, ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService())), $f, $b, $a, $e, ($this->services['validator'] ?? $this->getValidatorService()), $c), ($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), $a, $f, $c, $d);
    }

    /**
     * Gets the public 'App\Controller\HistoriqueEvenementController' shared autowired service.
     *
     * @return \App\Controller\HistoriqueEvenementController
     */
    protected function getHistoriqueEvenementControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/HistoriqueEvenementController.php';

        return $this->services['App\\Controller\\HistoriqueEvenementController'] = new \App\Controller\HistoriqueEvenementController(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), ($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['api_platform.validator'] ?? $this->getApiPlatform_ValidatorService()));
    }

    /**
     * Gets the public 'App\Controller\InterimController' shared autowired service.
     *
     * @return \App\Controller\InterimController
     */
    protected function getInterimControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/InterimController.php';

        return $this->services['App\\Controller\\InterimController'] = new \App\Controller\InterimController(($this->privates['App\\Repository\\InterimRepository'] ?? $this->getInterimRepositoryService()));
    }

    /**
     * Gets the public 'App\Controller\PeriodiciteController' shared autowired service.
     *
     * @return \App\Controller\PeriodiciteController
     */
    protected function getPeriodiciteControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PeriodiciteController.php';

        return $this->services['App\\Controller\\PeriodiciteController'] = new \App\Controller\PeriodiciteController(($this->privates['App\\Repository\\PeriodiciteRepository'] ?? $this->getPeriodiciteRepositoryService()));
    }

    /**
     * Gets the public 'App\Controller\PointDeCoordinationController' shared autowired service.
     *
     * @return \App\Controller\PointDeCoordinationController
     */
    protected function getPointDeCoordinationControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PointDeCoordinationController.php';

        return $this->services['App\\Controller\\PointDeCoordinationController'] = new \App\Controller\PointDeCoordinationController(($this->privates['App\\Repository\\PointDeCoordinationRepository'] ?? $this->getPointDeCoordinationRepositoryService()), ($this->privates['App\\Repository\\ActiviteRepository'] ?? $this->getActiviteRepositoryService()));
    }

    /**
     * Gets the public 'App\Controller\ProfilController' shared autowired service.
     *
     * @return \App\Controller\ProfilController
     */
    protected function getProfilControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProfilController.php';
        include_once \dirname(__DIR__, 4).'/src/Model/BaseManager.php';
        include_once \dirname(__DIR__, 4).'/src/Model/ProfilManager.php';
        include_once \dirname(__DIR__, 4).'/src/Mapping/BaseMapping.php';
        include_once \dirname(__DIR__, 4).'/src/Mapping/ProfilMapping.php';

        $a = ($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService());
        $b = ($this->privates['App\\Service\\BaseService'] ?? $this->getBaseServiceService());
        $c = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());
        $d = ($this->privates['api_platform.validator'] ?? $this->getApiPlatform_ValidatorService());
        $e = ($this->services['serializer'] ?? $this->getSerializerService());

        return $this->services['App\\Controller\\ProfilController'] = new \App\Controller\ProfilController(new \App\Model\ProfilManager(($this->privates['App\\Repository\\ProfilRepository'] ?? $this->getProfilRepositoryService()), new \App\Mapping\ProfilMapping($a, $b, $c, $d, $e, ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService())), $b, $a, $e, ($this->services['validator'] ?? $this->getValidatorService()), $c), ($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), $a, ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), $c, $d);
    }

    /**
     * Gets the public 'App\Controller\ResetPasswordController' shared autowired service.
     *
     * @return \App\Controller\ResetPasswordController
     */
    protected function getResetPasswordControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Controller/ResetPasswordControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ResetPasswordController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/ResetPasswordHelperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/ResetPasswordHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Generator/ResetPasswordTokenGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Generator/ResetPasswordRandomGenerator.php';

        $this->services['App\\Controller\\ResetPasswordController'] = $instance = new \App\Controller\ResetPasswordController(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), new \SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelper(new \SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordTokenGenerator($this->getEnv('APP_SECRET'), new \SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordRandomGenerator()), ($this->privates['symfonycasts.reset_password.cleaner'] ?? $this->getSymfonycasts_ResetPassword_CleanerService()), ($this->privates['App\\Repository\\ResetPasswordRequestRepository'] ?? $this->getResetPasswordRequestRepositoryService()), 3600, 3600), ($this->services['templating'] ?? $this->getTemplatingService()), ($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService()));

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\ResetPasswordController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\StructureController' shared autowired service.
     *
     * @return \App\Controller\StructureController
     */
    protected function getStructureControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/StructureController.php';

        return $this->services['App\\Controller\\StructureController'] = new \App\Controller\StructureController(($this->privates['App\\Repository\\StructureRepository'] ?? $this->getStructureRepositoryService()));
    }

    /**
     * Gets the public 'App\Controller\TrancheHoraireController' shared autowired service.
     *
     * @return \App\Controller\TrancheHoraireController
     */
    protected function getTrancheHoraireControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TrancheHoraireController.php';

        return $this->services['App\\Controller\\TrancheHoraireController'] = new \App\Controller\TrancheHoraireController(($this->privates['App\\Repository\\TrancheHoraireRepository'] ?? $this->getTrancheHoraireRepositoryService()));
    }

    /**
     * Gets the public 'App\Controller\TypePeriodiciteController' shared autowired service.
     *
     * @return \App\Controller\TypePeriodiciteController
     */
    protected function getTypePeriodiciteControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TypePeriodiciteController.php';

        return $this->services['App\\Controller\\TypePeriodiciteController'] = new \App\Controller\TypePeriodiciteController(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), ($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['api_platform.validator'] ?? $this->getApiPlatform_ValidatorService()));
    }

    /**
     * Gets the public 'App\Controller\TypeServiceController' shared autowired service.
     *
     * @return \App\Controller\TypeServiceController
     */
    protected function getTypeServiceControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TypeServiceController.php';

        $this->services['App\\Controller\\TypeServiceController'] = $instance = new \App\Controller\TypeServiceController(($this->privates['App\\Repository\\TypeServiceRepository'] ?? $this->getTypeServiceRepositoryService()), ($this->privates['App\\Repository\\StructureRepository'] ?? $this->getStructureRepositoryService()));

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\TypeServiceController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\TypeStructureController' shared autowired service.
     *
     * @return \App\Controller\TypeStructureController
     */
    protected function getTypeStructureControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TypeStructureController.php';

        return $this->services['App\\Controller\\TypeStructureController'] = new \App\Controller\TypeStructureController(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), ($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['api_platform.validator'] ?? $this->getApiPlatform_ValidatorService()));
    }

    /**
     * Gets the public 'App\Controller\UserController' shared autowired service.
     *
     * @return \App\Controller\UserController
     */
    protected function getUserControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/UserController.php';
        include_once \dirname(__DIR__, 4).'/src/Model/BaseManager.php';
        include_once \dirname(__DIR__, 4).'/src/Model/UserManager.php';
        include_once \dirname(__DIR__, 4).'/src/Mapping/BaseMapping.php';
        include_once \dirname(__DIR__, 4).'/src/Mapping/UserMapping.php';

        $a = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());
        $b = ($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService());
        $c = ($this->privates['App\\Service\\BaseService'] ?? $this->getBaseServiceService());
        $d = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());
        $e = ($this->privates['api_platform.validator'] ?? $this->getApiPlatform_ValidatorService());
        $f = ($this->services['serializer'] ?? $this->getSerializerService());

        return $this->services['App\\Controller\\UserController'] = new \App\Controller\UserController(($this->privates['App\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()), new \App\Model\UserManager($a, new \App\Mapping\UserMapping($b, $c, $d, $e, $f, ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService())), $c, $b, $f, ($this->services['validator'] ?? $this->getValidatorService()), $d), ($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), $b, $a, $d, $e);
    }

    /**
     * Gets the public 'App\Controller\WorkflowController' shared autowired service.
     *
     * @return \App\Controller\WorkflowController
     */
    protected function getWorkflowControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/FOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/ClassResourceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/WorkflowController.php';

        return $this->services['App\\Controller\\WorkflowController'] = new \App\Controller\WorkflowController(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), ($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['api_platform.validator'] ?? $this->getApiPlatform_ValidatorService()));
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/RedirectController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/TemplateController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($this->services['twig'] ?? $this->getTwigService()), ($this->services['templating'] ?? $this->getTemplatingService()));
    }

    /**
     * Gets the public 'api_platform.action.documentation' shared service.
     *
     * @return \ApiPlatform\Core\Documentation\Action\DocumentationAction
     */
    protected function getApiPlatform_Action_DocumentationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Documentation/Action/DocumentationAction.php';

        return $this->services['api_platform.action.documentation'] = new \ApiPlatform\Core\Documentation\Action\DocumentationAction(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), '', '', '0.0.0', NULL, $this->parameters['api_platform.swagger.versions'], ($this->privates['api_platform.openapi.factory'] ?? $this->getApiPlatform_Openapi_FactoryService()));
    }

    /**
     * Gets the public 'api_platform.action.entrypoint' shared service.
     *
     * @return \ApiPlatform\Core\Action\EntrypointAction
     */
    protected function getApiPlatform_Action_EntrypointService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Action/EntrypointAction.php';

        return $this->services['api_platform.action.entrypoint'] = new \ApiPlatform\Core\Action\EntrypointAction(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()));
    }

    /**
     * Gets the public 'api_platform.action.exception' shared service.
     *
     * @return \ApiPlatform\Core\Action\ExceptionAction
     */
    protected function getApiPlatform_Action_ExceptionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Action/ExceptionAction.php';

        return $this->services['api_platform.action.exception'] = new \ApiPlatform\Core\Action\ExceptionAction(($this->services['serializer'] ?? $this->getSerializerService()), $this->parameters['api_platform.error_formats'], $this->parameters['api_platform.exception_to_status']);
    }

    /**
     * Gets the public 'api_platform.action.not_found' shared service.
     *
     * @return \ApiPlatform\Core\Action\NotFoundAction
     */
    protected function getApiPlatform_Action_NotFoundService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Action/NotFoundAction.php';

        return $this->services['api_platform.action.not_found'] = new \ApiPlatform\Core\Action\NotFoundAction();
    }

    /**
     * Gets the public 'api_platform.action.placeholder' shared service.
     *
     * @return \ApiPlatform\Core\Action\PlaceholderAction
     */
    protected function getApiPlatform_Action_PlaceholderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Action/PlaceholderAction.php';

        return $this->services['api_platform.action.placeholder'] = new \ApiPlatform\Core\Action\PlaceholderAction();
    }

    /**
     * Gets the public 'api_platform.jsonld.action.context' shared service.
     *
     * @return \ApiPlatform\Core\JsonLd\Action\ContextAction
     */
    protected function getApiPlatform_Jsonld_Action_ContextService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/Action/ContextAction.php';

        return $this->services['api_platform.jsonld.action.context'] = new \ApiPlatform\Core\JsonLd\Action\ContextAction(($this->privates['api_platform.jsonld.context_builder'] ?? $this->getApiPlatform_Jsonld_ContextBuilderService()), ($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the public 'api_platform.swagger.action.ui' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\Action\SwaggerUiAction
     */
    protected function getApiPlatform_Swagger_Action_UiService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Action/SwaggerUiAction.php';

        return $this->services['api_platform.swagger.action.ui'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Action\SwaggerUiAction(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->services['serializer'] ?? $this->getSerializerService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()), '', '', '0.0.0', $this->parameters['api_platform.formats'], false, '', '', 'oauth2', 'application', '', '', [], true, true, true, false, false, false, $this->parameters['api_platform.swagger.versions'], ($this->services['api_platform.swagger_ui.action'] ?? $this->getApiPlatform_SwaggerUi_ActionService()), NULL);
    }

    /**
     * Gets the public 'api_platform.swagger_ui.action' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\SwaggerUi\SwaggerUiAction
     */
    protected function getApiPlatform_SwaggerUi_ActionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/SwaggerUi/SwaggerUiAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/SwaggerUi/SwaggerUiContext.php';

        return $this->services['api_platform.swagger_ui.action'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\SwaggerUi\SwaggerUiAction(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['serializer'] ?? $this->getSerializerService()), ($this->privates['api_platform.openapi.factory'] ?? $this->getApiPlatform_Openapi_FactoryService()), ($this->privates['api_platform.openapi.options'] ?? $this->getApiPlatform_Openapi_OptionsService()), new \ApiPlatform\Core\Bridge\Symfony\Bundle\SwaggerUi\SwaggerUiContext(true, true, true, false, false, false, NULL), $this->parameters['api_platform.formats'], '', '');
    }

    /**
     * Gets the public 'app.formatter' shared autowired service.
     *
     * @return \App\Service\Formatter
     */
    protected function getApp_FormatterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Formatter/FormatterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Service/Formatter.php';

        $a = ($this->services['monolog.logger.trace'] ?? $this->getMonolog_Logger_TraceService());

        if (isset($this->services['app.formatter'])) {
            return $this->services['app.formatter'];
        }

        return $this->services['app.formatter'] = new \App\Service\Formatter($a, ($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()));
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('miBKnzAok7', 0, ($this->targetDir.''.'/pools'), new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL));
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService())]);
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()), 'cache.doctrine.orm.default.metadata' => ($this->privates['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()), 'cache.doctrine.orm.default.result' => ($this->privates['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()), 'cache.doctrine.orm.default.query' => ($this->privates['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()), 'api_platform.cache.route_name_resolver' => ($this->privates['api_platform.cache.route_name_resolver'] ?? $this->getApiPlatform_Cache_RouteNameResolverService()), 'api_platform.cache.identifiers_extractor' => ($this->privates['api_platform.cache.identifiers_extractor'] ?? $this->getApiPlatform_Cache_IdentifiersExtractorService()), 'api_platform.cache.subresource_operation_factory' => ($this->privates['api_platform.cache.subresource_operation_factory'] ?? $this->getApiPlatform_Cache_SubresourceOperationFactoryService()), 'api_platform.cache.metadata.resource' => ($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()), 'api_platform.cache.metadata.property' => ($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService())]);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('wxnfiQ9SY6', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()), 'api_platform.cache.route_name_resolver' => ($this->privates['api_platform.cache.route_name_resolver'] ?? $this->getApiPlatform_Cache_RouteNameResolverService()), 'api_platform.cache.identifiers_extractor' => ($this->privates['api_platform.cache.identifiers_extractor'] ?? $this->getApiPlatform_Cache_IdentifiersExtractorService()), 'api_platform.cache.subresource_operation_factory' => ($this->privates['api_platform.cache.subresource_operation_factory'] ?? $this->getApiPlatform_Cache_SubresourceOperationFactoryService()), 'api_platform.cache.metadata.resource' => ($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()), 'api_platform.cache.metadata.property' => ($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService())]);
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/ChainCacheClearer.php';

        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerAggregate.php';

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.cache_warmer.cache_pool_clearer'] ?? $this->getApiPlatform_CacheWarmer_CachePoolClearerService());
            yield 1 => ($this->privates['templating.cache_warmer.template_paths'] ?? $this->getTemplating_CacheWarmer_TemplatePathsService());
            yield 2 => ($this->privates['validator.mapping.cache_warmer'] ?? $this->getValidator_Mapping_CacheWarmerService());
            yield 3 => ($this->privates['translation.warmer'] ?? $this->getTranslation_WarmerService());
            yield 4 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
            yield 5 => ($this->privates['annotations.cache_warmer'] ?? $this->getAnnotations_CacheWarmerService());
            yield 6 => ($this->privates['serializer.mapping.cache_warmer'] ?? $this->getSerializer_Mapping_CacheWarmerService());
            yield 7 => ($this->privates['twig.cache_warmer'] ?? $this->getTwig_CacheWarmerService());
            yield 8 => ($this->privates['twig.template_cache_warmer'] ?? $this->getTwig_TemplateCacheWarmerService());
            yield 9 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->getDoctrine_Orm_ProxyCacheWarmerService());
        }, 10), true, ($this->targetDir.''.'/srcApp_KernelDevDebugContainerDeprecations.log'));
    }

    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php';

        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => ['privates', 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'getRunSqlCommandService', false],
            'SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand' => ['privates', 'SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand', 'getResetPasswordRemoveExpiredCommandService', false],
            'api_platform.json_schema.json_schema_generate_command' => ['privates', 'api_platform.json_schema.json_schema_generate_command', 'getApiPlatform_JsonSchema_JsonSchemaGenerateCommandService', false],
            'api_platform.openapi.command' => ['privates', 'api_platform.openapi.command', 'getApiPlatform_Openapi_CommandService', false],
            'api_platform.swagger.command.swagger_command' => ['privates', 'api_platform.swagger.command.swagger_command', 'getApiPlatform_Swagger_Command_SwaggerCommandService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', false],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', false],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.fixtures_load_command' => ['privates', 'doctrine.fixtures_load_command', 'getDoctrine_FixturesLoadCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'doctrine_migrations.current_command' => ['privates', 'doctrine_migrations.current_command', 'getDoctrineMigrations_CurrentCommandService', false],
            'doctrine_migrations.diff_command' => ['privates', 'doctrine_migrations.diff_command', 'getDoctrineMigrations_DiffCommandService', false],
            'doctrine_migrations.dump_schema_command' => ['privates', 'doctrine_migrations.dump_schema_command', 'getDoctrineMigrations_DumpSchemaCommandService', false],
            'doctrine_migrations.execute_command' => ['privates', 'doctrine_migrations.execute_command', 'getDoctrineMigrations_ExecuteCommandService', false],
            'doctrine_migrations.generate_command' => ['privates', 'doctrine_migrations.generate_command', 'getDoctrineMigrations_GenerateCommandService', false],
            'doctrine_migrations.latest_command' => ['privates', 'doctrine_migrations.latest_command', 'getDoctrineMigrations_LatestCommandService', false],
            'doctrine_migrations.migrate_command' => ['privates', 'doctrine_migrations.migrate_command', 'getDoctrineMigrations_MigrateCommandService', false],
            'doctrine_migrations.rollup_command' => ['privates', 'doctrine_migrations.rollup_command', 'getDoctrineMigrations_RollupCommandService', false],
            'doctrine_migrations.status_command' => ['privates', 'doctrine_migrations.status_command', 'getDoctrineMigrations_StatusCommandService', false],
            'doctrine_migrations.sync_metadata_command' => ['privates', 'doctrine_migrations.sync_metadata_command', 'getDoctrineMigrations_SyncMetadataCommandService', false],
            'doctrine_migrations.up_to_date_command' => ['privates', 'doctrine_migrations.up_to_date_command', 'getDoctrineMigrations_UpToDateCommandService', false],
            'doctrine_migrations.version_command' => ['privates', 'doctrine_migrations.version_command', 'getDoctrineMigrations_VersionCommandService', false],
            'doctrine_migrations.versions_command' => ['privates', 'doctrine_migrations.versions_command', 'getDoctrineMigrations_VersionsCommandService', false],
            'fos_user.command.activate_user' => ['privates', 'fos_user.command.activate_user', 'getFosUser_Command_ActivateUserService', false],
            'fos_user.command.change_password' => ['privates', 'fos_user.command.change_password', 'getFosUser_Command_ChangePasswordService', false],
            'fos_user.command.create_user' => ['privates', 'fos_user.command.create_user', 'getFosUser_Command_CreateUserService', false],
            'fos_user.command.deactivate_user' => ['privates', 'fos_user.command.deactivate_user', 'getFosUser_Command_DeactivateUserService', false],
            'fos_user.command.demote_user' => ['privates', 'fos_user.command.demote_user', 'getFosUser_Command_DemoteUserService', false],
            'fos_user.command.promote_user' => ['privates', 'fos_user.command.promote_user', 'getFosUser_Command_PromoteUserService', false],
            'lexik_jwt_authentication.check_config_command' => ['privates', 'lexik_jwt_authentication.check_config_command', 'getLexikJwtAuthentication_CheckConfigCommandService', false],
            'lexik_jwt_authentication.generate_keypair_command' => ['privates', 'lexik_jwt_authentication.generate_keypair_command', 'getLexikJwtAuthentication_GenerateKeypairCommandService', false],
            'lexik_jwt_authentication.generate_token_command' => ['services', 'lexik_jwt_authentication.generate_token_command', 'getLexikJwtAuthentication_GenerateTokenCommandService', false],
            'maker.auto_command.make_auth' => ['privates', 'maker.auto_command.make_auth', 'getMaker_AutoCommand_MakeAuthService', false],
            'maker.auto_command.make_command' => ['privates', 'maker.auto_command.make_command', 'getMaker_AutoCommand_MakeCommandService', false],
            'maker.auto_command.make_controller' => ['privates', 'maker.auto_command.make_controller', 'getMaker_AutoCommand_MakeControllerService', false],
            'maker.auto_command.make_crud' => ['privates', 'maker.auto_command.make_crud', 'getMaker_AutoCommand_MakeCrudService', false],
            'maker.auto_command.make_docker_database' => ['privates', 'maker.auto_command.make_docker_database', 'getMaker_AutoCommand_MakeDockerDatabaseService', false],
            'maker.auto_command.make_entity' => ['privates', 'maker.auto_command.make_entity', 'getMaker_AutoCommand_MakeEntityService', false],
            'maker.auto_command.make_fixtures' => ['privates', 'maker.auto_command.make_fixtures', 'getMaker_AutoCommand_MakeFixturesService', false],
            'maker.auto_command.make_form' => ['privates', 'maker.auto_command.make_form', 'getMaker_AutoCommand_MakeFormService', false],
            'maker.auto_command.make_message' => ['privates', 'maker.auto_command.make_message', 'getMaker_AutoCommand_MakeMessageService', false],
            'maker.auto_command.make_messenger_middleware' => ['privates', 'maker.auto_command.make_messenger_middleware', 'getMaker_AutoCommand_MakeMessengerMiddlewareService', false],
            'maker.auto_command.make_migration' => ['privates', 'maker.auto_command.make_migration', 'getMaker_AutoCommand_MakeMigrationService', false],
            'maker.auto_command.make_registration_form' => ['privates', 'maker.auto_command.make_registration_form', 'getMaker_AutoCommand_MakeRegistrationFormService', false],
            'maker.auto_command.make_reset_password' => ['privates', 'maker.auto_command.make_reset_password', 'getMaker_AutoCommand_MakeResetPasswordService', false],
            'maker.auto_command.make_serializer_encoder' => ['privates', 'maker.auto_command.make_serializer_encoder', 'getMaker_AutoCommand_MakeSerializerEncoderService', false],
            'maker.auto_command.make_serializer_normalizer' => ['privates', 'maker.auto_command.make_serializer_normalizer', 'getMaker_AutoCommand_MakeSerializerNormalizerService', false],
            'maker.auto_command.make_subscriber' => ['privates', 'maker.auto_command.make_subscriber', 'getMaker_AutoCommand_MakeSubscriberService', false],
            'maker.auto_command.make_test' => ['privates', 'maker.auto_command.make_test', 'getMaker_AutoCommand_MakeTestService', false],
            'maker.auto_command.make_twig_extension' => ['privates', 'maker.auto_command.make_twig_extension', 'getMaker_AutoCommand_MakeTwigExtensionService', false],
            'maker.auto_command.make_user' => ['privates', 'maker.auto_command.make_user', 'getMaker_AutoCommand_MakeUserService', false],
            'maker.auto_command.make_validator' => ['privates', 'maker.auto_command.make_validator', 'getMaker_AutoCommand_MakeValidatorService', false],
            'maker.auto_command.make_voter' => ['privates', 'maker.auto_command.make_voter', 'getMaker_AutoCommand_MakeVoterService', false],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', false],
            'swiftmailer.command.debug' => ['privates', 'swiftmailer.command.debug', 'getSwiftmailer_Command_DebugService', false],
            'swiftmailer.command.new_email' => ['privates', 'swiftmailer.command.new_email', 'getSwiftmailer_Command_NewEmailService', false],
            'swiftmailer.command.send_email' => ['privates', 'swiftmailer.command.send_email', 'getSwiftmailer_Command_SendEmailService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
            'web_server.command.server_log' => ['privates', 'web_server.command.server_log', 'getWebServer_Command_ServerLogService', false],
            'web_server.command.server_run' => ['privates', 'web_server.command.server_run', 'getWebServer_Command_ServerRunService', false],
            'web_server.command.server_start' => ['privates', 'web_server.command.server_start', 'getWebServer_Command_ServerStartService', false],
            'web_server.command.server_status' => ['privates', 'web_server.command.server_status', 'getWebServer_Command_ServerStatusService', false],
            'web_server.command.server_stop' => ['privates', 'web_server.command.server_stop', 'getWebServer_Command_ServerStopService', false],
        ], [
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand',
            'SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand' => 'SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand',
            'api_platform.json_schema.json_schema_generate_command' => 'ApiPlatform\\Core\\JsonSchema\\Command\\JsonSchemaGenerateCommand',
            'api_platform.openapi.command' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle\\Command\\OpenApiCommand',
            'api_platform.swagger.command.swagger_command' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle\\Command\\SwaggerCommand',
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.form_debug' => 'Symfony\\Component\\Form\\Command\\DebugCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.translation_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand',
            'console.command.translation_update' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand',
            'console.command.xliff_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
            'doctrine.fixtures_load_command' => 'Doctrine\\Bundle\\FixturesBundle\\Command\\LoadDataFixturesDoctrineCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
            'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
            'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
            'doctrine_migrations.current_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\CurrentCommand',
            'doctrine_migrations.diff_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand',
            'doctrine_migrations.dump_schema_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\DumpSchemaCommand',
            'doctrine_migrations.execute_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\ExecuteCommand',
            'doctrine_migrations.generate_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\GenerateCommand',
            'doctrine_migrations.latest_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\LatestCommand',
            'doctrine_migrations.migrate_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\MigrateCommand',
            'doctrine_migrations.rollup_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand',
            'doctrine_migrations.status_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand',
            'doctrine_migrations.sync_metadata_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\SyncMetadataCommand',
            'doctrine_migrations.up_to_date_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\UpToDateCommand',
            'doctrine_migrations.version_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\VersionCommand',
            'doctrine_migrations.versions_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\ListCommand',
            'fos_user.command.activate_user' => 'FOS\\UserBundle\\Command\\ActivateUserCommand',
            'fos_user.command.change_password' => 'FOS\\UserBundle\\Command\\ChangePasswordCommand',
            'fos_user.command.create_user' => 'FOS\\UserBundle\\Command\\CreateUserCommand',
            'fos_user.command.deactivate_user' => 'FOS\\UserBundle\\Command\\DeactivateUserCommand',
            'fos_user.command.demote_user' => 'FOS\\UserBundle\\Command\\DemoteUserCommand',
            'fos_user.command.promote_user' => 'FOS\\UserBundle\\Command\\PromoteUserCommand',
            'lexik_jwt_authentication.check_config_command' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Command\\CheckConfigCommand',
            'lexik_jwt_authentication.generate_keypair_command' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Command\\GenerateKeyPairCommand',
            'lexik_jwt_authentication.generate_token_command' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Command\\GenerateTokenCommand',
            'maker.auto_command.make_auth' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_command' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_controller' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_crud' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_docker_database' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_entity' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_fixtures' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_form' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_message' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_messenger_middleware' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_migration' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_registration_form' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_reset_password' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_serializer_encoder' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_serializer_normalizer' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_subscriber' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_test' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_twig_extension' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_user' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_validator' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_voter' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'security.command.user_password_encoder' => 'Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand',
            'swiftmailer.command.debug' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\DebugCommand',
            'swiftmailer.command.new_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\NewEmailCommand',
            'swiftmailer.command.send_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\SendEmailCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
            'web_server.command.server_log' => 'Symfony\\Bundle\\WebServerBundle\\Command\\ServerLogCommand',
            'web_server.command.server_run' => 'Symfony\\Bundle\\WebServerBundle\\Command\\ServerRunCommand',
            'web_server.command.server_start' => 'Symfony\\Bundle\\WebServerBundle\\Command\\ServerStartCommand',
            'web_server.command.server_status' => 'Symfony\\Bundle\\WebServerBundle\\Command\\ServerStatusCommand',
            'web_server.command.server_stop' => 'Symfony\\Bundle\\WebServerBundle\\Command\\ServerStopCommand',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'security:encode-password' => 'security.command.user_password_encoder', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'dbal:run-sql' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'doctrine:migrations:diff' => 'doctrine_migrations.diff_command', 'doctrine:migrations:sync-metadata-storage' => 'doctrine_migrations.sync_metadata_command', 'doctrine:migrations:list' => 'doctrine_migrations.versions_command', 'doctrine:migrations:current' => 'doctrine_migrations.current_command', 'doctrine:migrations:dump-schema' => 'doctrine_migrations.dump_schema_command', 'doctrine:migrations:execute' => 'doctrine_migrations.execute_command', 'doctrine:migrations:generate' => 'doctrine_migrations.generate_command', 'doctrine:migrations:latest' => 'doctrine_migrations.latest_command', 'doctrine:migrations:migrate' => 'doctrine_migrations.migrate_command', 'doctrine:migrations:rollup' => 'doctrine_migrations.rollup_command', 'doctrine:migrations:status' => 'doctrine_migrations.status_command', 'doctrine:migrations:up-to-date' => 'doctrine_migrations.up_to_date_command', 'doctrine:migrations:version' => 'doctrine_migrations.version_command', 'api:json-schema:generate' => 'api_platform.json_schema.json_schema_generate_command', 'api:openapi:export' => 'api_platform.openapi.command', 'api:swagger:export' => 'api_platform.swagger.command.swagger_command', 'server:run' => 'web_server.command.server_run', 'server:start' => 'web_server.command.server_start', 'server:stop' => 'web_server.command.server_stop', 'server:status' => 'web_server.command.server_status', 'server:log' => 'web_server.command.server_log', 'lexik:jwt:check-config' => 'lexik_jwt_authentication.check_config_command', 'lexik:jwt:generate-token' => 'lexik_jwt_authentication.generate_token_command', 'lexik:jwt:generate-keypair' => 'lexik_jwt_authentication.generate_keypair_command', 'fos:user:activate' => 'fos_user.command.activate_user', 'fos:user:change-password' => 'fos_user.command.change_password', 'fos:user:create' => 'fos_user.command.create_user', 'fos:user:deactivate' => 'fos_user.command.deactivate_user', 'fos:user:demote' => 'fos_user.command.demote_user', 'fos:user:promote' => 'fos_user.command.promote_user', 'reset-password:remove-expired' => 'SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand', 'debug:swiftmailer' => 'swiftmailer.command.debug', 'swiftmailer:email:send' => 'swiftmailer.command.new_email', 'swiftmailer:spool:send' => 'swiftmailer.command.send_email', 'doctrine:fixtures:load' => 'doctrine.fixtures_load_command', 'make:auth' => 'maker.auto_command.make_auth', 'make:command' => 'maker.auto_command.make_command', 'make:controller' => 'maker.auto_command.make_controller', 'make:crud' => 'maker.auto_command.make_crud', 'make:docker:database' => 'maker.auto_command.make_docker_database', 'make:entity' => 'maker.auto_command.make_entity', 'make:fixtures' => 'maker.auto_command.make_fixtures', 'make:form' => 'maker.auto_command.make_form', 'make:message' => 'maker.auto_command.make_message', 'make:messenger-middleware' => 'maker.auto_command.make_messenger_middleware', 'make:registration-form' => 'maker.auto_command.make_registration_form', 'make:reset-password' => 'maker.auto_command.make_reset_password', 'make:serializer:encoder' => 'maker.auto_command.make_serializer_encoder', 'make:serializer:normalizer' => 'maker.auto_command.make_serializer_normalizer', 'make:subscriber' => 'maker.auto_command.make_subscriber', 'make:twig-extension' => 'maker.auto_command.make_twig_extension', 'make:test' => 'maker.auto_command.make_test', 'make:unit-test' => 'maker.auto_command.make_test', 'make:functional-test' => 'maker.auto_command.make_test', 'make:validator' => 'maker.auto_command.make_validator', 'make:voter' => 'maker.auto_command.make_voter', 'make:user' => 'maker.auto_command.make_user', 'make:migration' => 'maker.auto_command.make_migration']);
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
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
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $b->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $b->pushHandler(($this->privates['monolog.handler.null_internal'] ?? ($this->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler())));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($b);

        $a->setSQLLogger(new \Doctrine\DBAL\Logging\LoggerChain([0 => new \Symfony\Bridge\Doctrine\Logger\DbalLogger($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))), 1 => ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()))]));
        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
            'fos_user.user_listener' => ['privates', 'fos_user.user_listener', 'getFosUser_UserListenerService', false],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'fos_user.user_listener' => '?',
        ]), [0 => 'fos_user.user_listener']);
        $c->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['connection_override_options' => [], 'url' => $this->getEnv('resolve:DATABASE_URL'), 'driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'defaultTableOptions' => []], $a, $c, []);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['doctrine.orm.default_entity_manager'] = $this->createProxy('EntityManager_9a5be93', function () {
                return \EntityManager_9a5be93::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_DefaultEntityManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DoctrineProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/XmlDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/SymfonyFileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';

        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver(($this->privates['doctrine.orm.default_annotation_metadata_driver'] ?? $this->getDoctrine_Orm_DefaultAnnotationMetadataDriverService()), 'App\\Entity');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping') => 'FOS\\UserBundle\\Model'], '.orm.xml')), 'FOS\\UserBundle\\Model');

        $a->setEntityNamespaces(['App' => 'App\\Entity']);
        $a->setMetadataCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService())));
        $a->setQueryCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService())));
        $a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService())));
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Repository\\ActiviteRepository' => ['privates', 'App\\Repository\\ActiviteRepository', 'getActiviteRepositoryService', false],
            'App\\Repository\\AutoriteRepository' => ['privates', 'App\\Repository\\AutoriteRepository', 'getAutoriteRepositoryService', false],
            'App\\Repository\\CommentaireRepository' => ['privates', 'App\\Repository\\CommentaireRepository', 'getCommentaireRepositoryService', false],
            'App\\Repository\\DifficulteRepository' => ['privates', 'App\\Repository\\DifficulteRepository', 'getDifficulteRepositoryService', false],
            'App\\Repository\\EvenementRepository' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', false],
            'App\\Repository\\ExtractionRepository' => ['privates', 'App\\Repository\\ExtractionRepository', 'getExtractionRepositoryService', false],
            'App\\Repository\\HistoriqueEvenementRepository' => ['privates', 'App\\Repository\\HistoriqueEvenementRepository', 'getHistoriqueEvenementRepositoryService', false],
            'App\\Repository\\HistoriqueRepository' => ['privates', 'App\\Repository\\HistoriqueRepository', 'getHistoriqueRepositoryService', false],
            'App\\Repository\\InterimRepository' => ['privates', 'App\\Repository\\InterimRepository', 'getInterimRepositoryService', false],
            'App\\Repository\\PeriodiciteRepository' => ['privates', 'App\\Repository\\PeriodiciteRepository', 'getPeriodiciteRepositoryService', false],
            'App\\Repository\\PersonneRepository' => ['privates', 'App\\Repository\\PersonneRepository', 'getPersonneRepositoryService', false],
            'App\\Repository\\PointDeCoordinationRepository' => ['privates', 'App\\Repository\\PointDeCoordinationRepository', 'getPointDeCoordinationRepositoryService', false],
            'App\\Repository\\ProfilRepository' => ['privates', 'App\\Repository\\ProfilRepository', 'getProfilRepositoryService', false],
            'App\\Repository\\ResetPasswordRequestRepository' => ['privates', 'App\\Repository\\ResetPasswordRequestRepository', 'getResetPasswordRequestRepositoryService', false],
            'App\\Repository\\StructureRepository' => ['privates', 'App\\Repository\\StructureRepository', 'getStructureRepositoryService', false],
            'App\\Repository\\TrancheHoraireRepository' => ['privates', 'App\\Repository\\TrancheHoraireRepository', 'getTrancheHoraireRepositoryService', false],
            'App\\Repository\\TypePeriodiciteRepository' => ['privates', 'App\\Repository\\TypePeriodiciteRepository', 'getTypePeriodiciteRepositoryService', false],
            'App\\Repository\\TypeServiceRepository' => ['privates', 'App\\Repository\\TypeServiceRepository', 'getTypeServiceRepositoryService', false],
            'App\\Repository\\TypeStructureRepository' => ['privates', 'App\\Repository\\TypeStructureRepository', 'getTypeStructureRepositoryService', false],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', false],
            'App\\Repository\\WorkflowRepository' => ['privates', 'App\\Repository\\WorkflowRepository', 'getWorkflowRepositoryService', false],
        ], [
            'App\\Repository\\ActiviteRepository' => '?',
            'App\\Repository\\AutoriteRepository' => '?',
            'App\\Repository\\CommentaireRepository' => '?',
            'App\\Repository\\DifficulteRepository' => '?',
            'App\\Repository\\EvenementRepository' => '?',
            'App\\Repository\\ExtractionRepository' => '?',
            'App\\Repository\\HistoriqueEvenementRepository' => '?',
            'App\\Repository\\HistoriqueRepository' => '?',
            'App\\Repository\\InterimRepository' => '?',
            'App\\Repository\\PeriodiciteRepository' => '?',
            'App\\Repository\\PersonneRepository' => '?',
            'App\\Repository\\PointDeCoordinationRepository' => '?',
            'App\\Repository\\ProfilRepository' => '?',
            'App\\Repository\\ResetPasswordRequestRepository' => '?',
            'App\\Repository\\StructureRepository' => '?',
            'App\\Repository\\TrancheHoraireRepository' => '?',
            'App\\Repository\\TypePeriodiciteRepository' => '?',
            'App\\Repository\\TypeServiceRepository' => '?',
            'App\\Repository\\TypeStructureRepository' => '?',
            'App\\Repository\\UserRepository' => '?',
            'App\\Repository\\WorkflowRepository' => '?',
        ])));

        $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ErrorController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/SerializerErrorRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/ErrorRenderer/TwigErrorRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', new \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer(($this->services['serializer'] ?? $this->getSerializerService()), \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer::getPreferredFormat($a), new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug($a, true)), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true)));
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('event');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.null_internal'] ?? ($this->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler())));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), $a, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['App\\Listener\\ExceptionListener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->services['gdi_annotation_listener'] ?? ($this->services['gdi_annotation_listener'] = new \App\Listener\AnnotationListener($this)));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->services['gdi_annotation_listener'] ?? ($this->services['gdi_annotation_listener'] = new \App\Listener\AnnotationListener($this)));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('lexik_jwt_authentication.on_authentication_success', [0 => function () {
            return ($this->privates['guedia_main.event.authentication_success_listener'] ?? $this->getGuediaMain_Event_AuthenticationSuccessListenerService());
        }, 1 => 'onAuthenticationSuccessResponse'], 0);
        $instance->addListener('lexik_jwt_authentication.on_authentication_failure', [0 => function () {
            return ($this->privates['guedia_main.event.authentication_failure_listener'] ?? $this->getGuediaMain_Event_AuthenticationFailureListenerService());
        }, 1 => 'onAuthenticationFailureResponse'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['fos_rest.body_listener'] ?? $this->getFosRest_BodyListenerService());
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService());
        }, 1 => 'onKernelRequest'], 250);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_cors.cacheable_response_vary_listener'] ?? ($this->privates['nelmio_cors.cacheable_response_vary_listener'] = new \Nelmio\CorsBundle\EventListener\CacheableResponseVaryListener()));
        }, 1 => 'onResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.listener.request.add_format'] ?? $this->getApiPlatform_Listener_Request_AddFormatService());
        }, 1 => 'onKernelRequest'], 7);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.listener.request.read'] ?? $this->getApiPlatform_Listener_Request_ReadService());
        }, 1 => 'onKernelRequest'], 4);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['api_platform.listener.view.write'] ?? $this->getApiPlatform_Listener_View_WriteService());
        }, 1 => 'onKernelView'], 32);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.listener.request.deserialize'] ?? $this->getApiPlatform_Listener_Request_DeserializeService());
        }, 1 => 'onKernelRequest'], 2);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['api_platform.listener.view.serialize'] ?? $this->getApiPlatform_Listener_View_SerializeService());
        }, 1 => 'onKernelView'], 16);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['api_platform.listener.view.respond'] ?? $this->getApiPlatform_Listener_View_RespondService());
        }, 1 => 'onKernelView'], 8);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['api_platform.listener.exception.validation'] ?? $this->getApiPlatform_Listener_Exception_ValidationService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['api_platform.listener.exception'] ?? $this->getApiPlatform_Listener_ExceptionService());
        }, 1 => 'onKernelException'], -96);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.swagger.listener.ui'] ?? ($this->privates['api_platform.swagger.listener.ui'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\EventListener\SwaggerUiListener()));
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['api_platform.hydra.listener.response.add_link_header'] ?? $this->getApiPlatform_Hydra_Listener_Response_AddLinkHeaderService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['api_platform.fos_user.event_listener'] ?? $this->getApiPlatform_FosUser_EventListenerService());
        }, 1 => 'onKernelView'], 24);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['api_platform.http_cache.listener.response.configure'] ?? $this->getApiPlatform_HttpCache_Listener_Response_ConfigureService());
        }, 1 => 'onKernelResponse'], -1);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['api_platform.listener.view.validate'] ?? $this->getApiPlatform_Listener_View_ValidateService());
        }, 1 => 'onKernelView'], 64);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.listener.view.validate_query_parameters'] ?? $this->getApiPlatform_Listener_View_ValidateQueryParametersService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.security.listener.request.deny_access'] ?? $this->getApiPlatform_Security_Listener_Request_DenyAccessService());
        }, 1 => 'onSecurity'], 3);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.security.listener.request.deny_access'] ?? $this->getApiPlatform_Security_Listener_Request_DenyAccessService());
        }, 1 => 'onSecurityPostDenormalize'], 1);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['disallow_search_engine_index_response_listener'] ?? ($this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener()));
        }, 1 => 'onResponse'], -255);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.envelope_listener'] ?? ($this->privates['mailer.envelope_listener'] = new \Symfony\Component\Mailer\EventListener\EnvelopeListener(NULL, NULL)));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener()));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_link.add_link_header_listener'] ?? ($this->privates['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleTerminate'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['twig.mailer.message_listener'] ?? $this->getTwig_Mailer_MessageListenerService());
        }, 1 => 'onMessage'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('debug.security.authorization.vote', [0 => function () {
            return ($this->privates['debug.security.voter.vote_listener'] ?? $this->getDebug_Security_Voter_VoteListenerService());
        }, 1 => 'onVoterVote'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_profiler.debug_toolbar'] ?? $this->getWebProfiler_DebugToolbarService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('fos_user.security.implicit_login', [0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->getFosUser_Security_InteractiveLoginListenerService());
        }, 1 => 'onImplicitLogin'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->getFosUser_Security_InteractiveLoginListenerService());
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->getFosUser_Listener_AuthenticationService());
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.registration.confirmed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->getFosUser_Listener_AuthenticationService());
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->getFosUser_Listener_AuthenticationService());
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.change_password.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.create.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.delete.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.profile.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.initialize', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->getFosUser_Listener_ResettingService());
        }, 1 => 'onResettingResetInitialize'], 0);
        $instance->addListener('fos_user.resetting.reset.success', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->getFosUser_Listener_ResettingService());
        }, 1 => 'onResettingResetSuccess'], 0);
        $instance->addListener('fos_user.resetting.reset.request', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->getFosUser_Listener_ResettingService());
        }, 1 => 'onResettingResetRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] ?? ($this->privates['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener()));
        }, 1 => 'onException'], 512);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] ?? ($this->privates['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener()));
        }, 1 => 'onException'], 512);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onTerminate'], 0);

        return $instance;
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormFactory.php';

        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(($this->privates['form.registry'] ?? $this->getForm_RegistryService()));
    }

    /**
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php';

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'fos_rest.view_handler' shared service.
     *
     * @return \FOS\RestBundle\View\ViewHandler
     */
    protected function getFosRest_ViewHandlerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/View/ViewHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/View/ConfigurableViewHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/View/ViewHandler.php';

        return $this->services['fos_rest.view_handler'] = new \FOS\RestBundle\View\ViewHandler(($this->services['router'] ?? $this->getRouterService()), ($this->privates['fos_rest.serializer.symfony'] ?? $this->getFosRest_Serializer_SymfonyService()), ($this->services['templating'] ?? $this->getTemplatingService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ['json' => false, 'xml' => false, 'html' => true], 400, 204, false, ['html' => 302], 'twig', ['serializeNullStrategy' => false], false);
    }

    /**
     * Gets the public 'fos_user.change_password.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ChangePasswordController
     */
    protected function getFosUser_ChangePassword_ControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Controller/ChangePasswordController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FormFactory.php';

        $this->services['fos_user.change_password.controller'] = $instance = new \FOS\UserBundle\Controller\ChangePasswordController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_change_password_form', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', $this->parameters['fos_user.change_password.form.validation_groups']), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.profile.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ProfileController
     */
    protected function getFosUser_Profile_ControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Controller/ProfileController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FormFactory.php';

        $this->services['fos_user.profile.controller'] = $instance = new \FOS\UserBundle\Controller\ProfileController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_profile_form', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', $this->parameters['fos_user.profile.form.validation_groups']), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.registration.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\RegistrationController
     */
    protected function getFosUser_Registration_ControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Controller/RegistrationController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FormFactory.php';

        $this->services['fos_user.registration.controller'] = $instance = new \FOS\UserBundle\Controller\RegistrationController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_registration_form', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', $this->parameters['fos_user.registration.form.validation_groups']), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.resetting.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ResettingController
     */
    protected function getFosUser_Resetting_ControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Controller/ResettingController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FormFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/TokenGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Mailer/Mailer.php';

        $this->services['fos_user.resetting.controller'] = $instance = new \FOS\UserBundle\Controller\ResettingController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_resetting_form', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', $this->parameters['fos_user.resetting.form.validation_groups']), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()), new \FOS\UserBundle\Util\TokenGenerator(), new \FOS\UserBundle\Mailer\Mailer(($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['templating'] ?? $this->getTemplatingService()), ['confirmation.template' => '@FOSUser/Registration/email.txt.twig', 'resetting.template' => '@FOSUser/Resetting/email.txt.twig', 'from_email' => ['confirmation' => $this->parameters['fos_user.registration.confirmation.from_email'], 'resetting' => $this->parameters['fos_user.resetting.email.from_email']]]), 7200);

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.security.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\SecurityController
     */
    protected function getFosUser_Security_ControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Controller/SecurityController.php';

        $this->services['fos_user.security.controller'] = $instance = new \FOS\UserBundle\Controller\SecurityController(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.user_manager' shared service.
     *
     * @return \FOS\UserBundle\Doctrine\UserManager
     */
    protected function getFosUser_UserManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Model/UserManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Model/UserManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Doctrine/UserManager.php';

        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager(($this->privates['fos_user.util.password_updater'] ?? $this->getFosUser_Util_PasswordUpdaterService()), ($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService()), ($this->services['doctrine'] ?? $this->getDoctrineService())->getManager(NULL), 'App\\Entity\\User');
    }

    /**
     * Gets the public 'gdi_annotation_listener' shared autowired service.
     *
     * @return \App\Listener\AnnotationListener
     */
    protected function getGdiAnnotationListenerService()
    {
        return $this->services['gdi_annotation_listener'] = new \App\Listener\AnnotationListener($this);
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        $a = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));

        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false)))), $a), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->getDebug_ArgumentResolver_RequestAttributeService());
            yield 1 => ($this->privates['debug.argument_resolver.request'] ?? $this->getDebug_ArgumentResolver_RequestService());
            yield 2 => ($this->privates['debug.argument_resolver.session'] ?? $this->getDebug_ArgumentResolver_SessionService());
            yield 3 => ($this->privates['debug.security.user_value_resolver'] ?? $this->getDebug_Security_UserValueResolverService());
            yield 4 => ($this->privates['debug.argument_resolver.service'] ?? $this->getDebug_ArgumentResolver_ServiceService());
            yield 5 => ($this->privates['debug.argument_resolver.default'] ?? $this->getDebug_ArgumentResolver_DefaultService());
            yield 6 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->getDebug_ArgumentResolver_VariadicService());
            yield 7 => ($this->privates['debug.argument_resolver.not_tagged_controller'] ?? $this->getDebug_ArgumentResolver_NotTaggedControllerService());
        }, 8)), $a));
    }

    /**
     * Gets the public 'lexik_jwt_authentication.encoder' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder
     */
    protected function getLexikJwtAuthentication_EncoderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Encoder/JWTEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Encoder/HeaderAwareJWTEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Encoder/LcobucciJWTEncoder.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/JWSProvider/JWSProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/JWSProvider/LcobucciJWSProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/AbstractKeyLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/RawKeyLoader.php';

        return $this->services['lexik_jwt_authentication.encoder'] = new \Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder(new \Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider(($this->services['lexik_jwt_authentication.key_loader'] ?? ($this->services['lexik_jwt_authentication.key_loader'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader($this->getEnv('resolve:JWT_SECRET_KEY'), $this->getEnv('resolve:JWT_PUBLIC_KEY'), 'diarra'))), 'openssl', 'RS256', 3600, 0));
    }

    /**
     * Gets the public 'lexik_jwt_authentication.generate_token_command' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateTokenCommand
     */
    protected function getLexikJwtAuthentication_GenerateTokenCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Command/GenerateTokenCommand.php';

        $this->services['lexik_jwt_authentication.generate_token_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateTokenCommand(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.user.provider.concrete.chain_provider'] ?? $this->getSecurity_User_Provider_Concrete_ChainProviderService());
            yield 1 => ($this->privates['fos_user.user_provider.username_email'] ?? $this->getFosUser_UserProvider_UsernameEmailService());
            yield 2 => ($this->privates['security.user.provider.concrete.my_ldap'] ?? $this->getSecurity_User_Provider_Concrete_MyLdapService());
        }, 3));

        $instance->setName('lexik:jwt:generate-token');

        return $instance;
    }

    /**
     * Gets the public 'lexik_jwt_authentication.jwt_manager' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager
     */
    protected function getLexikJwtAuthentication_JwtManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/JWTManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/JWTTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/JWTManager.php';

        $this->services['lexik_jwt_authentication.jwt_manager'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager(($this->services['lexik_jwt_authentication.encoder'] ?? $this->getLexikJwtAuthentication_EncoderService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), 'username');

        $instance->setUserIdentityField('username');

        return $instance;
    }

    /**
     * Gets the public 'lexik_jwt_authentication.key_loader' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader
     */
    protected function getLexikJwtAuthentication_KeyLoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/AbstractKeyLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/RawKeyLoader.php';

        return $this->services['lexik_jwt_authentication.key_loader'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader($this->getEnv('resolve:JWT_SECRET_KEY'), $this->getEnv('resolve:JWT_PUBLIC_KEY'), 'diarra');
    }

    /**
     * Gets the public 'monolog.logger.trace' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TraceService()
    {
        $this->services['monolog.logger.trace'] = $instance = new \Symfony\Bridge\Monolog\Logger('trace');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.trace'] ?? $this->getMonolog_Handler_TraceService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('profiler');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.null_internal'] ?? ($this->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler())));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDir.''.'/profiler')), $a, true);

        $b = ($this->services['kernel'] ?? $this->get('kernel'));
        $c = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $d = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $d->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $d->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $d->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $d->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $d->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
        $d->addInstance('cache.property_info', ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()));
        $d->addInstance('cache.security_expression_language', ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));
        $d->addInstance('cache.doctrine.orm.default.metadata', ($this->privates['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()));
        $d->addInstance('cache.doctrine.orm.default.result', ($this->privates['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()));
        $d->addInstance('cache.doctrine.orm.default.query', ($this->privates['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()));
        $d->addInstance('api_platform.cache.route_name_resolver', ($this->privates['api_platform.cache.route_name_resolver'] ?? $this->getApiPlatform_Cache_RouteNameResolverService()));
        $d->addInstance('api_platform.cache.identifiers_extractor', ($this->privates['api_platform.cache.identifiers_extractor'] ?? $this->getApiPlatform_Cache_IdentifiersExtractorService()));
        $d->addInstance('api_platform.cache.subresource_operation_factory', ($this->privates['api_platform.cache.subresource_operation_factory'] ?? $this->getApiPlatform_Cache_SubresourceOperationFactoryService()));
        $d->addInstance('api_platform.cache.metadata.resource', ($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()));
        $d->addInstance('api_platform.cache.metadata.property', ($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService()));
        $e = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()), true);
        $e->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));
        $f = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $f->setKernel($b);
        }

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector())));
        $instance->add(new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataCollector\RequestDataCollector(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), ($this->privates['debug.api_platform.collection_data_provider'] ?? $this->getDebug_ApiPlatform_CollectionDataProviderService()), ($this->privates['debug.api_platform.item_data_provider'] ?? $this->getDebug_ApiPlatform_ItemDataProviderService()), ($this->privates['debug.api_platform.subresource_data_provider'] ?? $this->getDebug_ApiPlatform_SubresourceDataProviderService()), ($this->privates['debug.api_platform.data_persister'] ?? $this->getDebug_ApiPlatform_DataPersisterService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDir.''.'/srcApp_KernelDevDebugContainer'), $c));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), $c));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add($d);
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService())));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add($e);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(new \Symfony\Component\Mailer\DataCollector\MessageDataCollector(($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener()))));
        $instance->add($f);

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
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.null_internal'] ?? ($this->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler())));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), $a, 'en');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/XmlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/GlobFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/DirectoryLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ObjectLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ContainerLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/LegacyRouteLoaderContainer.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/ApiLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationClassLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php';

        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = ($this->privates['file_locator'] ?? $this->getFileLocatorService());
        $c = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer($this, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ]))));
        $a->addLoader($this->getFosRest_Routing_Loader_DirectoryService());
        $a->addLoader($this->getFosRest_Routing_Loader_ControllerService());
        $a->addLoader($this->getFosRest_Routing_Loader_YamlCollectionService());
        $a->addLoader($this->getFosRest_Routing_Loader_XmlCollectionService());
        $a->addLoader(new \ApiPlatform\Core\Bridge\Symfony\Routing\ApiLoader(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.operation_path_resolver.custom'] ?? $this->getApiPlatform_OperationPathResolver_CustomService()), $this, $this->parameters['api_platform.formats'], $this->parameters['api_platform.resource_class_directories'], ($this->privates['api_platform.subresource_operation_factory.cached'] ?? $this->getApiPlatform_SubresourceOperationFactory_CachedService()), false, true, true, false, false, ($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService())));
        $a->addLoader($c);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $c));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, [], ['utf8' => true]);
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationUtils.php';

        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/CsrfTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/CsrfTokenManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenGenerator/TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenGenerator/UriSafeTokenGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenStorage/TokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenStorage/ClearableTokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenStorage/SessionTokenStorage.php';

        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService())), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/UserPasswordEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/UserPasswordEncoder.php';

        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /**
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        $a = ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService());
        $b = ($this->privates['property_info'] ?? $this->getPropertyInfoService());
        $c = new \Symfony\Component\Serializer\Encoder\JsonEncoder();

        $d = new \ApiPlatform\Core\OpenApi\Serializer\OpenApiNormalizer(new \Symfony\Component\Serializer\Serializer([0 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer(NULL, NULL, $a, $b)], [0 => $c]));

        $e = new \ApiPlatform\Core\Swagger\Serializer\ApiGatewayNormalizer($d);
        $f = ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());
        $g = ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService());
        $h = ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService());
        $i = ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], [])));
        $j = ($this->privates['api_platform.subresource_operation_factory.cached'] ?? $this->getApiPlatform_SubresourceOperationFactory_CachedService());

        $k = new \ApiPlatform\Core\Swagger\Serializer\ApiGatewayNormalizer(new \ApiPlatform\Core\Swagger\Serializer\DocumentationNormalizer($f, $g, $h, ($this->privates['api_platform.hydra.json_schema.schema_factory'] ?? $this->getApiPlatform_Hydra_JsonSchema_SchemaFactoryService()), ($this->privates['api_platform.json_schema.type_factory'] ?? $this->getApiPlatform_JsonSchema_TypeFactoryService()), ($this->privates['api_platform.operation_path_resolver.router'] ?? $this->getApiPlatform_OperationPathResolver_RouterService()), NULL, $i, NULL, false, 'oauth2', 'application', '', '', [], [], $j, true, 'page', false, 'itemsPerPage', $this->parameters['api_platform.formats'], false, 'pagination', [], $this->parameters['api_platform.swagger.versions'], ($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService()), $d));
        $l = ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService());
        $m = ($this->privates['serializer.name_converter.metadata_aware'] ?? $this->getSerializer_NameConverter_MetadataAwareService());
        $n = ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService());
        $o = ($this->privates['api_platform.iri_converter'] ?? $this->getApiPlatform_IriConverterService());
        $p = ($this->privates['api_platform.jsonld.context_builder'] ?? $this->getApiPlatform_Jsonld_ContextBuilderService());
        $q = ($this->privates['api_platform.serializer.mapping.class_metadata_factory'] ?? $this->getApiPlatform_Serializer_Mapping_ClassMetadataFactoryService());
        $r = ($this->privates['api_platform.security.resource_access_checker'] ?? $this->getApiPlatform_Security_ResourceAccessCheckerService());
        $s = new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($q, $m, $a, $b, new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($q), NULL, []);

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \FOS\RestBundle\Serializer\Normalizer\FormErrorNormalizer(), 1 => $e, 2 => $k, 3 => new \ApiPlatform\Core\Hydra\Serializer\ConstraintViolationListNormalizer($l, [], $m), 4 => new \ApiPlatform\Core\Problem\Serializer\ConstraintViolationListNormalizer([], $m), 5 => $k, 6 => $e, 7 => new \ApiPlatform\Core\Hydra\Serializer\DocumentationNormalizer($f, $g, $h, $n, NULL, $l, $j, $m), 8 => new \ApiPlatform\Core\Hydra\Serializer\EntrypointNormalizer($f, $o, $l), 9 => new \ApiPlatform\Core\Hydra\Serializer\ErrorNormalizer($l, true), 10 => new \ApiPlatform\Core\Problem\Serializer\ErrorNormalizer(true), 11 => new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true), 12 => new \ApiPlatform\Core\JsonLd\Serializer\ItemNormalizer($f, $g, $h, $o, $n, $p, $a, $m, $q, [], new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), $r), 13 => new \ApiPlatform\Core\Serializer\ItemNormalizer($g, $h, $o, $n, $a, $m, $q, ($this->privates['debug.api_platform.item_data_provider'] ?? $this->getDebug_ApiPlatform_ItemDataProviderService()), false, NULL, new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), $f, $r), 14 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 15 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 16 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], $m), 17 => new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer(), 18 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 19 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($this->privates['mime_types'] ?? $this->getMimeTypesService())), 20 => new \ApiPlatform\Core\Hydra\Serializer\CollectionFiltersNormalizer(new \ApiPlatform\Core\Hydra\Serializer\PartialCollectionViewNormalizer(new \ApiPlatform\Core\Hydra\Serializer\CollectionNormalizer($p, $n, $o), 'page', 'pagination', $f, $a), $f, $n, $i), 21 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 22 => new \ApiPlatform\Core\JsonLd\Serializer\ObjectNormalizer($s, $o, $p), 23 => $s], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => $c, 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder(), 4 => new \ApiPlatform\Core\Serializer\JsonEncoder('jsonld'), 5 => new \ApiPlatform\Core\Serializer\JsonEncoder('jsonproblem')]);
    }

    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (isset($this->privates['cache.validator'])) {
                yield 'cache.validator' => ($this->privates['cache.validator'] ?? null);
            }
            if (isset($this->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? null);
            }
            if (isset($this->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
            }
            if (isset($this->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? null);
            }
            if (isset($this->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($this->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (isset($this->privates['mailer.logger_message_listener'])) {
                yield 'mailer.logger_message_listener' => ($this->privates['mailer.logger_message_listener'] ?? null);
            }
            if (isset($this->services['profiler'])) {
                yield 'profiler' => ($this->services['profiler'] ?? null);
            }
            if (isset($this->services['validator'])) {
                yield 'debug.validator' => ($this->services['validator'] ?? null);
            }
            if (isset($this->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
            }
            if (isset($this->services['event_dispatcher'])) {
                yield 'debug.event_dispatcher' => ($this->services['event_dispatcher'] ?? null);
            }
            if (isset($this->services['fos_rest.view_handler'])) {
                yield 'fos_rest.view_handler.default' => ($this->services['fos_rest.view_handler'] ?? null);
            }
            if (isset($this->services['security.token_storage'])) {
                yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
            }
            if (isset($this->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? null);
            }
            if (isset($this->services['doctrine'])) {
                yield 'doctrine' => ($this->services['doctrine'] ?? null);
            }
            if (isset($this->privates['form.type.entity'])) {
                yield 'form.type.entity' => ($this->privates['form.type.entity'] ?? null);
            }
            if (isset($this->privates['api_platform.cache.route_name_resolver'])) {
                yield 'api_platform.cache.route_name_resolver' => ($this->privates['api_platform.cache.route_name_resolver'] ?? null);
            }
            if (isset($this->privates['api_platform.cache.identifiers_extractor'])) {
                yield 'api_platform.cache.identifiers_extractor' => ($this->privates['api_platform.cache.identifiers_extractor'] ?? null);
            }
            if (isset($this->privates['api_platform.cache.subresource_operation_factory'])) {
                yield 'api_platform.cache.subresource_operation_factory' => ($this->privates['api_platform.cache.subresource_operation_factory'] ?? null);
            }
            if (isset($this->privates['api_platform.cache.metadata.resource'])) {
                yield 'api_platform.cache.metadata.resource' => ($this->privates['api_platform.cache.metadata.resource'] ?? null);
            }
            if (isset($this->privates['api_platform.cache.metadata.property'])) {
                yield 'api_platform.cache.metadata.property' => ($this->privates['api_platform.cache.metadata.property'] ?? null);
            }
            if (isset($this->privates['monolog.handler.trace'])) {
                yield 'monolog.handler.trace' => ($this->privates['monolog.handler.trace'] ?? null);
            }
            if (isset($this->privates['swiftmailer.email_sender.listener'])) {
                yield 'swiftmailer.email_sender.listener' => ($this->privates['swiftmailer.email_sender.listener'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (isset($this->privates['cache.validator'])) + (int) (isset($this->privates['cache.serializer'])) + (int) (isset($this->privates['cache.annotations'])) + (int) (isset($this->privates['cache.property_info'])) + (int) (isset($this->privates['form.choice_list_factory.cached'])) + (int) (isset($this->privates['mailer.logger_message_listener'])) + (int) (isset($this->services['profiler'])) + (int) (isset($this->services['validator'])) + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->services['event_dispatcher'])) + (int) (isset($this->services['fos_rest.view_handler'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->privates['cache.security_expression_language'])) + (int) (isset($this->services['doctrine'])) + (int) (isset($this->privates['form.type.entity'])) + (int) (isset($this->privates['api_platform.cache.route_name_resolver'])) + (int) (isset($this->privates['api_platform.cache.identifiers_extractor'])) + (int) (isset($this->privates['api_platform.cache.subresource_operation_factory'])) + (int) (isset($this->privates['api_platform.cache.metadata.resource'])) + (int) (isset($this->privates['api_platform.cache.metadata.property'])) + (int) (isset($this->privates['monolog.handler.trace'])) + (int) (isset($this->privates['swiftmailer.email_sender.listener']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'form.choice_list_factory.cached' => [0 => 'reset'], 'mailer.logger_message_listener' => [0 => 'reset'], 'profiler' => [0 => 'reset'], 'debug.validator' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'debug.event_dispatcher' => [0 => 'reset'], 'fos_rest.view_handler.default' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'form.type.entity' => [0 => 'reset'], 'api_platform.cache.route_name_resolver' => [0 => 'reset'], 'api_platform.cache.identifiers_extractor' => [0 => 'reset'], 'api_platform.cache.subresource_operation_factory' => [0 => 'reset'], 'api_platform.cache.metadata.resource' => [0 => 'reset'], 'api_platform.cache.metadata.property' => [0 => 'reset'], 'monolog.handler.trace' => [0 => 'reset'], 'swiftmailer.email_sender.listener' => [0 => 'reset']]);
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Session.php';

        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.native'] ?? $this->getSession_Storage_NativeService()));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer.php';

        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer(($this->services['swiftmailer.mailer.default.transport'] ?? $this->getSwiftmailer_Mailer_Default_TransportService()));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.plugin.messagelogger' shared service.
     *
     * @return \Swift_Plugins_MessageLogger
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php';

        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport' shared service.
     *
     * @return \Swift_Transport_EsmtpTransport
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/SmtpAgent.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpTransport.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/InputByteStream.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Filterable.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/AbstractFilterableInputStream.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/OutputByteStream.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/IoBuffer.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/ReplacementFilterFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilterFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/AuthHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Authenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/CramMd5Authenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/LoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/PlainAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/NTLMAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/DependencyInjection/SmtpTransportConfigurator.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php';

        $a = new \Swift_Transport_Esmtp_AuthHandler([0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator(), 3 => new \Swift_Transport_Esmtp_Auth_NTLMAuthenticator()]);
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), [0 => $a], new \Swift_Events_SimpleEventDispatcher());

        $instance->setHost('localhost');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        $instance->registerPlugin(($this->services['swiftmailer.mailer.default.plugin.messagelogger'] ?? ($this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger())));
        (new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService())))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine
     *
     * @deprecated The "templating" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplatingService()
    {
        @trigger_error('The "templating" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        $this->services['templating'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine($this, []);

        $instance->addEngine($this->getTemplating_Engine_TwigService());
        $instance->addEngine(($this->privates['templating.engine.php'] ?? $this->getTemplating_Engine_PhpService()));

        return $instance;
    }

    /**
     * Gets the public 'templating.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
     *
     * @deprecated The "templating.loader" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_LoaderService()
    {
        @trigger_error('The "templating.loader" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()));
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(($this->privates['translator.default'] ?? $this->getTranslator_DefaultService()));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()), ($this->privates['templating.name_parser'] ?? $this->getTemplating_NameParserService()), \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Resources/views'), 'DoctrineMigrations');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Resources/views'), '!DoctrineMigrations');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views'), 'ApiPlatform');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views'), '!ApiPlatform');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Resources/views'), 'WebProfiler');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Resources/views'), '!WebProfiler');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/views'), 'FOSUser');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/views'), '!FOSUser');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).'/templates'));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['debug' => true, 'strict_variables' => true, 'autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $b = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
        $c = ($this->services['translator'] ?? $this->getTranslatorService());
        $d = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());
        $e = ($this->services['router'] ?? $this->getRouterService());
        $f = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $g = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $g->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => $d]);
        $h = new \Pagerfanta\View\ViewFactory();

        $i = new \Pagerfanta\View\DefaultView();
        $j = new \Pagerfanta\View\TwitterBootstrapView();
        $k = new \Pagerfanta\View\TwitterBootstrap3View();
        $l = new \Pagerfanta\View\TwitterBootstrap4View();
        $m = new \Pagerfanta\View\SemanticUiView();

        $h->add(['default' => $i, 'default_translated' => new \WhiteOctober\PagerfantaBundle\View\DefaultTranslatedView($i, $c), 'twitter_bootstrap' => $j, 'twitter_bootstrap3' => $k, 'twitter_bootstrap4' => $l, 'semantic_ui' => $m, 'twitter_bootstrap4_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap4TranslatedView($l, $c), 'twitter_bootstrap3_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap3TranslatedView($k, $c), 'twitter_bootstrap_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrapTranslatedView($j, $c), 'semantic_ui_translated' => new \WhiteOctober\PagerfantaBundle\View\SemanticUiTranslatedView($m, $c)]);
        $n = new \Symfony\Bridge\Twig\AppVariable();
        $n->setEnvironment('dev');
        $n->setDebug(true);
        if ($this->has('security.token_storage')) {
            $n->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $n->setRequestStack($f);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), $b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(($this->privates['assets.packages'] ?? $this->getAssets_PackagesService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($d, \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($e));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($f, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($f));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($g));
        $instance->addExtension(new \WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension('default', $h, $e, $f));
        $instance->addGlobal('app', $n);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', false],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', false],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     *
     * @deprecated The "twig.controller.exception" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        @trigger_error('The "twig.controller.exception" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(($this->services['twig'] ?? $this->getTwigService()), true);
    }

    /**
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     *
     * @deprecated The "twig.controller.preview_error" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        @trigger_error('The "twig.controller.preview_error" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), NULL);
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator());
    }

    /**
     * Gets the public 'web_profiler.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController
     *
     * @deprecated The "web_profiler.controller.exception" service is deprecated since Symfony 4.4, use the "web_profiler.controller.exception_panel" service instead.
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        @trigger_error('The "web_profiler.controller.exception" service is deprecated since Symfony 4.4, use the "web_profiler.controller.exception_panel" service instead.', E_USER_DEPRECATED);

        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()));
    }

    /**
     * Gets the public 'web_profiler.controller.exception_panel' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController
     */
    protected function getWebProfiler_Controller_ExceptionPanelService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Controller/ExceptionPanelController.php';

        return $this->services['web_profiler.controller.exception_panel'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController(($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), ($this->services['profiler'] ?? $this->getProfilerService()));
    }

    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Controller/ProfilerController.php';

        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(($this->services['router'] ?? $this->getRouterService()), ($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), $this->parameters['data_collector.templates'], ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()), \dirname(__DIR__, 4));
    }

    /**
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Controller/RouterController.php';

        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()), NULL, new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0));
    }

    /**
     * Gets the private '.errored..service_locator.NJg9zp6.Symfony\Component\Debug\Exception\FlattenException' shared service.
     *
     * @return \Symfony\Component\Debug\Exception\FlattenException
     */
    protected function getFlattenExceptionService()
    {
        $this->throw('Cannot autowire service ".service_locator.NJg9zp6": it references class "Symfony\\Component\\Debug\\Exception\\FlattenException" but no such service exists.');
    }

    /**
     * Gets the private '.errored..service_locator.kAC5Tn3.Symfony\Component\Debug\Exception\FlattenException' shared service.
     *
     * @return \Symfony\Component\Debug\Exception\FlattenException
     */
    protected function getFlattenException2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.kAC5Tn3": it references class "Symfony\\Component\\Debug\\Exception\\FlattenException" but no such service exists.');
    }

    /**
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /**
     * Gets the private '.service_locator.BuqDmxr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_BuqDmxrService()
    {
        return $this->privates['.service_locator.BuqDmxr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
        ], [
            'serializer' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.JXu6UWV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_JXu6UWVService()
    {
        return $this->privates['.service_locator.JXu6UWV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'container' => ['services', 'service_container', 'getServiceContainerService', false],
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'validator' => ['services', 'validator', 'getValidatorService', false],
        ], [
            'container' => '?',
            'passwordEncoder' => '?',
            'serializer' => '?',
            'validator' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.NJg9zp6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_NJg9zp6Service()
    {
        return $this->privates['.service_locator.NJg9zp6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'exception' => ['privates', '.errored..service_locator.NJg9zp6.Symfony\\Component\\Debug\\Exception\\FlattenException', NULL, 'Cannot autowire service ".service_locator.NJg9zp6": it references class "Symfony\\Component\\Debug\\Exception\\FlattenException" but no such service exists.'],
        ], [
            'exception' => 'Symfony\\Component\\Debug\\Exception\\FlattenException',
        ]);
    }

    /**
     * Gets the private '.service_locator.RGIiAl4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_RGIiAl4Service()
    {
        return $this->privates['.service_locator.RGIiAl4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'viewhandler' => ['services', 'fos_rest.view_handler', 'getFosRest_ViewHandlerService', false],
        ], [
            'viewhandler' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.iP8eVIx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_IP8eVIxService()
    {
        return $this->privates['.service_locator.iP8eVIx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', false],
        ], [
            'mailer' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.kAC5Tn3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_KAC5Tn3Service()
    {
        return $this->privates['.service_locator.kAC5Tn3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'exception' => ['privates', '.errored..service_locator.kAC5Tn3.Symfony\\Component\\Debug\\Exception\\FlattenException', NULL, 'Cannot autowire service ".service_locator.kAC5Tn3": it references class "Symfony\\Component\\Debug\\Exception\\FlattenException" but no such service exists.'],
            'mailer' => ['services', 'swiftmailer.mailer.default', 'getSwiftmailer_Mailer_DefaultService', false],
            'params' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'exception' => 'Symfony\\Component\\Debug\\Exception\\FlattenException',
            'mailer' => '?',
            'params' => '?',
            'router' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.l3CkAjY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_L3CkAjYService()
    {
        return $this->privates['.service_locator.l3CkAjY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'validator' => ['services', 'validator', 'getValidatorService', false],
        ], [
            'passwordEncoder' => '?',
            'serializer' => '?',
            'validator' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.o9nGMXB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_O9nGMXBService()
    {
        return $this->privates['.service_locator.o9nGMXB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]);
    }

    /**
     * Gets the private '.service_locator.vdmMuyE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_VdmMuyEService()
    {
        return $this->privates['.service_locator.vdmMuyE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'templating' => ['services', 'templating', 'getTemplatingService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'templating' => '?',
            'twig' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.vw9IAYH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Vw9IAYHService()
    {
        return $this->privates['.service_locator.vw9IAYH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Controller\\ActiviteController::addActivite' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\ActiviteController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\AutoriteController::addAutorite' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\AutoriteController::modifiAutorite' => ['privates', '.service_locator.BuqDmxr', 'get_ServiceLocator_BuqDmxrService', false],
            'App\\Controller\\AutoriteController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\BaseController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\CommentaireController::addCommentaire' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\CommentaireController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\DifficulteController::addDifficulte' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\DifficulteController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\EvenementController::addEvenement' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\EvenementController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\ExceptionController::show' => ['privates', '.service_locator.kAC5Tn3', 'get_ServiceLocator_KAC5Tn3Service', false],
            'App\\Controller\\ExceptionController::showAction' => ['privates', '.service_locator.NJg9zp6', 'get_ServiceLocator_NJg9zp6Service', false],
            'App\\Controller\\ExtractionController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\HistoriqueController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\HistoriqueEvenementController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\InterimController::addInterim' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\InterimController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\PeriodiciteController::addPeriodicite' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\PeriodiciteController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\PointDeCoordinationController::addPointDeCoordination' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\PointDeCoordinationController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\ProfilController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.iP8eVIx', 'get_ServiceLocator_IP8eVIxService', false],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.l3CkAjY', 'get_ServiceLocator_L3CkAjYService', false],
            'App\\Controller\\StructureController::addStructure' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\StructureController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\TrancheHoraireController::addTrancheHoraire' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\TrancheHoraireController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\TypePeriodiciteController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\TypeServiceController::addTypeService' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\TypeStructureController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\UserController::passwordChange' => ['privates', '.service_locator.JXu6UWV', 'get_ServiceLocator_JXu6UWVService', false],
            'App\\Controller\\UserController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\WorkflowController::sendworkflow' => ['privates', '.service_locator.iP8eVIx', 'get_ServiceLocator_IP8eVIxService', false],
            'App\\Controller\\WorkflowController::setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\ActiviteController:addActivite' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\ActiviteController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\AutoriteController:addAutorite' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\AutoriteController:modifiAutorite' => ['privates', '.service_locator.BuqDmxr', 'get_ServiceLocator_BuqDmxrService', false],
            'App\\Controller\\AutoriteController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\BaseController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\CommentaireController:addCommentaire' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\CommentaireController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\DifficulteController:addDifficulte' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\DifficulteController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\EvenementController:addEvenement' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\EvenementController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\ExceptionController:show' => ['privates', '.service_locator.kAC5Tn3', 'get_ServiceLocator_KAC5Tn3Service', false],
            'App\\Controller\\ExceptionController:showAction' => ['privates', '.service_locator.NJg9zp6', 'get_ServiceLocator_NJg9zp6Service', false],
            'App\\Controller\\ExtractionController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\HistoriqueController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\HistoriqueEvenementController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\InterimController:addInterim' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\InterimController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\PeriodiciteController:addPeriodicite' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\PeriodiciteController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\PointDeCoordinationController:addPointDeCoordination' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\PointDeCoordinationController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\ProfilController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.iP8eVIx', 'get_ServiceLocator_IP8eVIxService', false],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.l3CkAjY', 'get_ServiceLocator_L3CkAjYService', false],
            'App\\Controller\\StructureController:addStructure' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\StructureController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\TrancheHoraireController:addTrancheHoraire' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\TrancheHoraireController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\TypePeriodiciteController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\TypeServiceController:addTypeService' => ['privates', '.service_locator.xnfyvpp', 'get_ServiceLocator_XnfyvppService', false],
            'App\\Controller\\TypeStructureController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\UserController:passwordChange' => ['privates', '.service_locator.JXu6UWV', 'get_ServiceLocator_JXu6UWVService', false],
            'App\\Controller\\UserController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
            'App\\Controller\\WorkflowController:sendworkflow' => ['privates', '.service_locator.iP8eVIx', 'get_ServiceLocator_IP8eVIxService', false],
            'App\\Controller\\WorkflowController:setViewHandler' => ['privates', '.service_locator.RGIiAl4', 'get_ServiceLocator_RGIiAl4Service', false],
        ], [
            'App\\Controller\\ActiviteController::addActivite' => '?',
            'App\\Controller\\ActiviteController::setViewHandler' => '?',
            'App\\Controller\\AutoriteController::addAutorite' => '?',
            'App\\Controller\\AutoriteController::modifiAutorite' => '?',
            'App\\Controller\\AutoriteController::setViewHandler' => '?',
            'App\\Controller\\BaseController::setViewHandler' => '?',
            'App\\Controller\\CommentaireController::addCommentaire' => '?',
            'App\\Controller\\CommentaireController::setViewHandler' => '?',
            'App\\Controller\\DifficulteController::addDifficulte' => '?',
            'App\\Controller\\DifficulteController::setViewHandler' => '?',
            'App\\Controller\\EvenementController::addEvenement' => '?',
            'App\\Controller\\EvenementController::setViewHandler' => '?',
            'App\\Controller\\ExceptionController::show' => '?',
            'App\\Controller\\ExceptionController::showAction' => '?',
            'App\\Controller\\ExtractionController::setViewHandler' => '?',
            'App\\Controller\\HistoriqueController::setViewHandler' => '?',
            'App\\Controller\\HistoriqueEvenementController::setViewHandler' => '?',
            'App\\Controller\\InterimController::addInterim' => '?',
            'App\\Controller\\InterimController::setViewHandler' => '?',
            'App\\Controller\\PeriodiciteController::addPeriodicite' => '?',
            'App\\Controller\\PeriodiciteController::setViewHandler' => '?',
            'App\\Controller\\PointDeCoordinationController::addPointDeCoordination' => '?',
            'App\\Controller\\PointDeCoordinationController::setViewHandler' => '?',
            'App\\Controller\\ProfilController::setViewHandler' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\StructureController::addStructure' => '?',
            'App\\Controller\\StructureController::setViewHandler' => '?',
            'App\\Controller\\TrancheHoraireController::addTrancheHoraire' => '?',
            'App\\Controller\\TrancheHoraireController::setViewHandler' => '?',
            'App\\Controller\\TypePeriodiciteController::setViewHandler' => '?',
            'App\\Controller\\TypeServiceController::addTypeService' => '?',
            'App\\Controller\\TypeStructureController::setViewHandler' => '?',
            'App\\Controller\\UserController::passwordChange' => '?',
            'App\\Controller\\UserController::setViewHandler' => '?',
            'App\\Controller\\WorkflowController::sendworkflow' => '?',
            'App\\Controller\\WorkflowController::setViewHandler' => '?',
            'App\\Controller\\ActiviteController:addActivite' => '?',
            'App\\Controller\\ActiviteController:setViewHandler' => '?',
            'App\\Controller\\AutoriteController:addAutorite' => '?',
            'App\\Controller\\AutoriteController:modifiAutorite' => '?',
            'App\\Controller\\AutoriteController:setViewHandler' => '?',
            'App\\Controller\\BaseController:setViewHandler' => '?',
            'App\\Controller\\CommentaireController:addCommentaire' => '?',
            'App\\Controller\\CommentaireController:setViewHandler' => '?',
            'App\\Controller\\DifficulteController:addDifficulte' => '?',
            'App\\Controller\\DifficulteController:setViewHandler' => '?',
            'App\\Controller\\EvenementController:addEvenement' => '?',
            'App\\Controller\\EvenementController:setViewHandler' => '?',
            'App\\Controller\\ExceptionController:show' => '?',
            'App\\Controller\\ExceptionController:showAction' => '?',
            'App\\Controller\\ExtractionController:setViewHandler' => '?',
            'App\\Controller\\HistoriqueController:setViewHandler' => '?',
            'App\\Controller\\HistoriqueEvenementController:setViewHandler' => '?',
            'App\\Controller\\InterimController:addInterim' => '?',
            'App\\Controller\\InterimController:setViewHandler' => '?',
            'App\\Controller\\PeriodiciteController:addPeriodicite' => '?',
            'App\\Controller\\PeriodiciteController:setViewHandler' => '?',
            'App\\Controller\\PointDeCoordinationController:addPointDeCoordination' => '?',
            'App\\Controller\\PointDeCoordinationController:setViewHandler' => '?',
            'App\\Controller\\ProfilController:setViewHandler' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\StructureController:addStructure' => '?',
            'App\\Controller\\StructureController:setViewHandler' => '?',
            'App\\Controller\\TrancheHoraireController:addTrancheHoraire' => '?',
            'App\\Controller\\TrancheHoraireController:setViewHandler' => '?',
            'App\\Controller\\TypePeriodiciteController:setViewHandler' => '?',
            'App\\Controller\\TypeServiceController:addTypeService' => '?',
            'App\\Controller\\TypeStructureController:setViewHandler' => '?',
            'App\\Controller\\UserController:passwordChange' => '?',
            'App\\Controller\\UserController:setViewHandler' => '?',
            'App\\Controller\\WorkflowController:sendworkflow' => '?',
            'App\\Controller\\WorkflowController:setViewHandler' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.xnfyvpp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_XnfyvppService()
    {
        return $this->privates['.service_locator.xnfyvpp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'validator' => ['services', 'validator', 'getValidatorService', false],
        ], [
            'serializer' => '?',
            'validator' => '?',
        ]);
    }

    /**
     * Gets the private 'App\Form\ActiviteType' shared autowired service.
     *
     * @return \App\Form\ActiviteType
     */
    protected function getActiviteTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ActiviteType.php';

        return $this->privates['App\\Form\\ActiviteType'] = new \App\Form\ActiviteType();
    }

    /**
     * Gets the private 'App\Form\AutoriteType' shared autowired service.
     *
     * @return \App\Form\AutoriteType
     */
    protected function getAutoriteTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/AutoriteType.php';

        return $this->privates['App\\Form\\AutoriteType'] = new \App\Form\AutoriteType();
    }

    /**
     * Gets the private 'App\Form\ChangePasswordFormType' shared autowired service.
     *
     * @return \App\Form\ChangePasswordFormType
     */
    protected function getChangePasswordFormTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ChangePasswordFormType.php';

        return $this->privates['App\\Form\\ChangePasswordFormType'] = new \App\Form\ChangePasswordFormType();
    }

    /**
     * Gets the private 'App\Form\CommentaireType' shared autowired service.
     *
     * @return \App\Form\CommentaireType
     */
    protected function getCommentaireTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CommentaireType.php';

        return $this->privates['App\\Form\\CommentaireType'] = new \App\Form\CommentaireType();
    }

    /**
     * Gets the private 'App\Form\DifficulteType' shared autowired service.
     *
     * @return \App\Form\DifficulteType
     */
    protected function getDifficulteTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/DifficulteType.php';

        return $this->privates['App\\Form\\DifficulteType'] = new \App\Form\DifficulteType();
    }

    /**
     * Gets the private 'App\Form\EvenementType' shared autowired service.
     *
     * @return \App\Form\EvenementType
     */
    protected function getEvenementTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/EvenementType.php';

        return $this->privates['App\\Form\\EvenementType'] = new \App\Form\EvenementType();
    }

    /**
     * Gets the private 'App\Form\PeriodiciteType' shared autowired service.
     *
     * @return \App\Form\PeriodiciteType
     */
    protected function getPeriodiciteTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/PeriodiciteType.php';

        return $this->privates['App\\Form\\PeriodiciteType'] = new \App\Form\PeriodiciteType();
    }

    /**
     * Gets the private 'App\Form\PointDeCoordinationType' shared autowired service.
     *
     * @return \App\Form\PointDeCoordinationType
     */
    protected function getPointDeCoordinationTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/PointDeCoordinationType.php';

        return $this->privates['App\\Form\\PointDeCoordinationType'] = new \App\Form\PointDeCoordinationType();
    }

    /**
     * Gets the private 'App\Form\ResetPasswordRequestFormType' shared autowired service.
     *
     * @return \App\Form\ResetPasswordRequestFormType
     */
    protected function getResetPasswordRequestFormTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ResetPasswordRequestFormType.php';

        return $this->privates['App\\Form\\ResetPasswordRequestFormType'] = new \App\Form\ResetPasswordRequestFormType();
    }

    /**
     * Gets the private 'App\Form\UserType' shared autowired service.
     *
     * @return \App\Form\UserType
     */
    protected function getUserTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/UserType.php';

        return $this->privates['App\\Form\\UserType'] = new \App\Form\UserType();
    }

    /**
     * Gets the private 'App\Listener\ExceptionListener' shared autowired service.
     *
     * @return \App\Listener\ExceptionListener
     */
    protected function getExceptionListenerService()
    {
        include_once \dirname(__DIR__, 4).'/src/Listener/ExceptionListener.php';

        return $this->privates['App\\Listener\\ExceptionListener'] = new \App\Listener\ExceptionListener('dev', true, ($this->services['monolog.logger.trace'] ?? $this->getMonolog_Logger_TraceService()));
    }

    /**
     * Gets the private 'App\Repository\ActiviteRepository' shared autowired service.
     *
     * @return \App\Repository\ActiviteRepository
     */
    protected function getActiviteRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/ActiviteRepository.php';

        return $this->privates['App\\Repository\\ActiviteRepository'] = new \App\Repository\ActiviteRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\AutoriteRepository' shared autowired service.
     *
     * @return \App\Repository\AutoriteRepository
     */
    protected function getAutoriteRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/AutoriteRepository.php';

        return $this->privates['App\\Repository\\AutoriteRepository'] = new \App\Repository\AutoriteRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\CommentaireRepository' shared autowired service.
     *
     * @return \App\Repository\CommentaireRepository
     */
    protected function getCommentaireRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/CommentaireRepository.php';

        return $this->privates['App\\Repository\\CommentaireRepository'] = new \App\Repository\CommentaireRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\DifficulteRepository' shared autowired service.
     *
     * @return \App\Repository\DifficulteRepository
     */
    protected function getDifficulteRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/DifficulteRepository.php';

        return $this->privates['App\\Repository\\DifficulteRepository'] = new \App\Repository\DifficulteRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\EvenementRepository' shared autowired service.
     *
     * @return \App\Repository\EvenementRepository
     */
    protected function getEvenementRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/EvenementRepository.php';

        return $this->privates['App\\Repository\\EvenementRepository'] = new \App\Repository\EvenementRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\ExtractionRepository' shared autowired service.
     *
     * @return \App\Repository\ExtractionRepository
     */
    protected function getExtractionRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/ExtractionRepository.php';

        return $this->privates['App\\Repository\\ExtractionRepository'] = new \App\Repository\ExtractionRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\HistoriqueEvenementRepository' shared autowired service.
     *
     * @return \App\Repository\HistoriqueEvenementRepository
     */
    protected function getHistoriqueEvenementRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/HistoriqueEvenementRepository.php';

        return $this->privates['App\\Repository\\HistoriqueEvenementRepository'] = new \App\Repository\HistoriqueEvenementRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\HistoriqueRepository' shared autowired service.
     *
     * @return \App\Repository\HistoriqueRepository
     */
    protected function getHistoriqueRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/HistoriqueRepository.php';

        return $this->privates['App\\Repository\\HistoriqueRepository'] = new \App\Repository\HistoriqueRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\InterimRepository' shared autowired service.
     *
     * @return \App\Repository\InterimRepository
     */
    protected function getInterimRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/InterimRepository.php';

        return $this->privates['App\\Repository\\InterimRepository'] = new \App\Repository\InterimRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\PeriodiciteRepository' shared autowired service.
     *
     * @return \App\Repository\PeriodiciteRepository
     */
    protected function getPeriodiciteRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/PeriodiciteRepository.php';

        return $this->privates['App\\Repository\\PeriodiciteRepository'] = new \App\Repository\PeriodiciteRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\PersonneRepository' shared autowired service.
     *
     * @return \App\Repository\PersonneRepository
     */
    protected function getPersonneRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/PersonneRepository.php';

        return $this->privates['App\\Repository\\PersonneRepository'] = new \App\Repository\PersonneRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\PointDeCoordinationRepository' shared autowired service.
     *
     * @return \App\Repository\PointDeCoordinationRepository
     */
    protected function getPointDeCoordinationRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/PointDeCoordinationRepository.php';

        return $this->privates['App\\Repository\\PointDeCoordinationRepository'] = new \App\Repository\PointDeCoordinationRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\ProfilRepository' shared autowired service.
     *
     * @return \App\Repository\ProfilRepository
     */
    protected function getProfilRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/ProfilRepository.php';

        return $this->privates['App\\Repository\\ProfilRepository'] = new \App\Repository\ProfilRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\ResetPasswordRequestRepository' shared autowired service.
     *
     * @return \App\Repository\ResetPasswordRequestRepository
     */
    protected function getResetPasswordRequestRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Persistence/ResetPasswordRequestRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Persistence/Repository/ResetPasswordRequestRepositoryTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/ResetPasswordRequestRepository.php';

        return $this->privates['App\\Repository\\ResetPasswordRequestRepository'] = new \App\Repository\ResetPasswordRequestRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\StructureRepository' shared autowired service.
     *
     * @return \App\Repository\StructureRepository
     */
    protected function getStructureRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/StructureRepository.php';

        return $this->privates['App\\Repository\\StructureRepository'] = new \App\Repository\StructureRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\TrancheHoraireRepository' shared autowired service.
     *
     * @return \App\Repository\TrancheHoraireRepository
     */
    protected function getTrancheHoraireRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/TrancheHoraireRepository.php';

        return $this->privates['App\\Repository\\TrancheHoraireRepository'] = new \App\Repository\TrancheHoraireRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\TypePeriodiciteRepository' shared autowired service.
     *
     * @return \App\Repository\TypePeriodiciteRepository
     */
    protected function getTypePeriodiciteRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/TypePeriodiciteRepository.php';

        return $this->privates['App\\Repository\\TypePeriodiciteRepository'] = new \App\Repository\TypePeriodiciteRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\TypeServiceRepository' shared autowired service.
     *
     * @return \App\Repository\TypeServiceRepository
     */
    protected function getTypeServiceRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/TypeServiceRepository.php';

        return $this->privates['App\\Repository\\TypeServiceRepository'] = new \App\Repository\TypeServiceRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\TypeStructureRepository' shared autowired service.
     *
     * @return \App\Repository\TypeStructureRepository
     */
    protected function getTypeStructureRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/TypeStructureRepository.php';

        return $this->privates['App\\Repository\\TypeStructureRepository'] = new \App\Repository\TypeStructureRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\UserRepository' shared autowired service.
     *
     * @return \App\Repository\UserRepository
     */
    protected function getUserRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/UserRepository.php';

        return $this->privates['App\\Repository\\UserRepository'] = new \App\Repository\UserRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\WorkflowRepository' shared autowired service.
     *
     * @return \App\Repository\WorkflowRepository
     */
    protected function getWorkflowRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/WorkflowRepository.php';

        return $this->privates['App\\Repository\\WorkflowRepository'] = new \App\Repository\WorkflowRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Service\BaseService' shared autowired service.
     *
     * @return \App\Service\BaseService
     */
    protected function getBaseServiceService()
    {
        include_once \dirname(__DIR__, 4).'/src/Service/BaseService.php';

        return $this->privates['App\\Service\\BaseService'] = new \App\Service\BaseService(($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /**
     * Gets the private 'Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider
     */
    protected function getManagerRegistryAwareConnectionProviderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/ConnectionProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Dbal/ManagerRegistryAwareConnectionProvider.php';

        return $this->privates['Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider'] = new \Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider(new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default'));
    }

    /**
     * Gets the private 'Doctrine\DBAL\Tools\Console\Command\RunSqlCommand' shared service.
     *
     * @return \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand
     */
    protected function getRunSqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php';

        $this->privates['Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand'] = $instance = new \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand(($this->privates['Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider'] ?? $this->getManagerRegistryAwareConnectionProviderService()));

        $instance->setName('dbal:run-sql');

        return $instance;
    }

    /**
     * Gets the private 'SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand' shared service.
     *
     * @return \SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand
     */
    protected function getResetPasswordRemoveExpiredCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Command/ResetPasswordRemoveExpiredCommand.php';

        $this->privates['SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand'] = $instance = new \SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand(($this->privates['symfonycasts.reset_password.cleaner'] ?? $this->getSymfonycasts_ResetPassword_CleanerService()));

        $instance->setName('reset-password:remove-expired');

        return $instance;
    }

    /**
     * Gets the private 'annotations.cache_adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\PhpArrayAdapter
     */
    protected function getAnnotations_CacheAdapterService()
    {
        return \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
    }

    /**
     * Gets the private 'annotations.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
     */
    protected function getAnnotations_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php';

        return $this->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->targetDir.''.'/annotations.php'), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller$))#', true);
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\PsrCachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\PsrCachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->getAnnotations_CacheAdapterService(), true);
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
     * Gets the private 'api_platform.cache.identifiers_extractor' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_IdentifiersExtractorService()
    {
        return $this->privates['api_platform.cache.identifiers_extractor'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('I-F0gD4CDu', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'api_platform.cache.metadata.property' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_Metadata_PropertyService()
    {
        return $this->privates['api_platform.cache.metadata.property'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('Jofref8ePx', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'api_platform.cache.metadata.resource' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_Metadata_ResourceService()
    {
        return $this->privates['api_platform.cache.metadata.resource'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('jLpr2QwLSi', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'api_platform.cache.route_name_resolver' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_RouteNameResolverService()
    {
        return $this->privates['api_platform.cache.route_name_resolver'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('dngn06h-Ff', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'api_platform.cache.subresource_operation_factory' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_SubresourceOperationFactoryService()
    {
        return $this->privates['api_platform.cache.subresource_operation_factory'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('-WCqQxihdL', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'api_platform.cache_warmer.cache_pool_clearer' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\CacheWarmer\CachePoolClearerCacheWarmer
     */
    protected function getApiPlatform_CacheWarmer_CachePoolClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/CacheWarmer/CachePoolClearerCacheWarmer.php';

        return $this->privates['api_platform.cache_warmer.cache_pool_clearer'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\CacheWarmer\CachePoolClearerCacheWarmer(($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService()), [0 => 'api_platform.cache.metadata.property', 1 => 'api_platform.cache.metadata.resource', 2 => 'api_platform.cache.route_name_resolver', 3 => 'api_platform.cache.identifiers_extractor', 4 => 'api_platform.cache.subresource_operation_factory', 5 => 'api_platform.elasticsearch.cache.metadata.document']);
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.data_persister' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Common\DataPersister
     */
    protected function getApiPlatform_Doctrine_Orm_DataPersisterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Common/DataPersister.php';

        return $this->privates['api_platform.doctrine.orm.data_persister'] = new \ApiPlatform\Core\Bridge\Doctrine\Common\DataPersister(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.default.collection_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\CollectionDataProvider
     */
    protected function getApiPlatform_Doctrine_Orm_Default_CollectionDataProviderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/CollectionDataProvider.php';

        return $this->privates['api_platform.doctrine.orm.default.collection_data_provider'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\CollectionDataProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.query_extension.filter'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_FilterService());
            yield 1 => ($this->privates['api_platform.doctrine.orm.query_extension.filter_eager_loading'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_FilterEagerLoadingService());
            yield 2 => ($this->privates['api_platform.doctrine.orm.query_extension.eager_loading'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService());
            yield 3 => ($this->privates['api_platform.doctrine.orm.query_extension.order'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_OrderService());
            yield 4 => ($this->privates['api_platform.doctrine.orm.query_extension.pagination'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService());
        }, 5));
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.default.item_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\ItemDataProvider
     */
    protected function getApiPlatform_Doctrine_Orm_Default_ItemDataProviderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/DenormalizedIdentifiersAwareItemDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Common/Util/IdentifierManagerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/ItemDataProvider.php';

        return $this->privates['api_platform.doctrine.orm.default.item_data_provider'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\ItemDataProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.query_extension.eager_loading'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService());
        }, 1));
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.default.subresource_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\SubresourceDataProvider
     */
    protected function getApiPlatform_Doctrine_Orm_Default_SubresourceDataProviderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Common/Util/IdentifierManagerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/SubresourceDataProvider.php';

        return $this->privates['api_platform.doctrine.orm.default.subresource_data_provider'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\SubresourceDataProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.query_extension.filter'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_FilterService());
            yield 1 => ($this->privates['api_platform.doctrine.orm.query_extension.filter_eager_loading'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_FilterEagerLoadingService());
            yield 2 => ($this->privates['api_platform.doctrine.orm.query_extension.eager_loading'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService());
            yield 3 => ($this->privates['api_platform.doctrine.orm.query_extension.order'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_OrderService());
            yield 4 => ($this->privates['api_platform.doctrine.orm.query_extension.pagination'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService());
        }, 5), new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.query_extension.eager_loading'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService());
        }, 1));
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.query_extension.eager_loading' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension
     */
    protected function getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/ContextAwareQueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryItemExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Util/EagerLoadingTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/EagerLoadingExtension.php';

        return $this->privates['api_platform.doctrine.orm.query_extension.eager_loading'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension(($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), 30, true, NULL, NULL, false, ($this->privates['api_platform.serializer.mapping.class_metadata_factory'] ?? $this->getApiPlatform_Serializer_Mapping_ClassMetadataFactoryService()));
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.query_extension.filter' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension
     */
    protected function getApiPlatform_Doctrine_Orm_QueryExtension_FilterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/ContextAwareQueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/FilterExtension.php';

        return $this->privates['api_platform.doctrine.orm.query_extension.filter'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))));
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.query_extension.filter_eager_loading' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension
     */
    protected function getApiPlatform_Doctrine_Orm_QueryExtension_FilterEagerLoadingService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/ContextAwareQueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Util/EagerLoadingTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/FilterEagerLoadingExtension.php';

        return $this->privates['api_platform.doctrine.orm.query_extension.filter_eager_loading'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), true, ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService()));
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.query_extension.order' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension
     */
    protected function getApiPlatform_Doctrine_Orm_QueryExtension_OrderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/ContextAwareQueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/OrderExtension.php';

        return $this->privates['api_platform.doctrine.orm.query_extension.order'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension('ASC', ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.query_extension.pagination' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension
     */
    protected function getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryResultCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/ContextAwareQueryResultCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/PaginationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/Pagination.php';

        $a = ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());

        return $this->privates['api_platform.doctrine.orm.query_extension.pagination'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension(($this->services['doctrine'] ?? $this->getDoctrineService()), $a, new \ApiPlatform\Core\DataProvider\Pagination($a, $this->parameters['api_platform.collection.pagination'], $this->parameters['api_platform.graphql.collection.pagination']));
    }

    /**
     * Gets the private 'api_platform.fos_user.event_listener' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\FosUser\EventListener
     */
    protected function getApiPlatform_FosUser_EventListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/FosUser/EventListener.php';

        return $this->privates['api_platform.fos_user.event_listener'] = new \ApiPlatform\Core\Bridge\FosUser\EventListener(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));
    }

    /**
     * Gets the private 'api_platform.http_cache.listener.response.configure' shared service.
     *
     * @return \ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener
     */
    protected function getApiPlatform_HttpCache_Listener_Response_ConfigureService()
    {
        return $this->privates['api_platform.http_cache.listener.response.configure'] = new \ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener(true, NULL, NULL, $this->parameters['api_platform.http_cache.vary'], NULL, ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.hydra.json_schema.schema_factory' shared service.
     *
     * @return \ApiPlatform\Core\Hydra\JsonSchema\SchemaFactory
     */
    protected function getApiPlatform_Hydra_JsonSchema_SchemaFactoryService()
    {
        $a = ($this->privates['api_platform.json_schema.type_factory'] ?? $this->getApiPlatform_JsonSchema_TypeFactoryService());

        if (isset($this->privates['api_platform.hydra.json_schema.schema_factory'])) {
            return $this->privates['api_platform.hydra.json_schema.schema_factory'];
        }

        return $this->privates['api_platform.hydra.json_schema.schema_factory'] = new \ApiPlatform\Core\Hydra\JsonSchema\SchemaFactory(new \ApiPlatform\Core\JsonSchema\SchemaFactory($a, ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['serializer.name_converter.metadata_aware'] ?? $this->getSerializer_NameConverter_MetadataAwareService()), ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService())));
    }

    /**
     * Gets the private 'api_platform.hydra.listener.response.add_link_header' shared service.
     *
     * @return \ApiPlatform\Core\Hydra\EventListener\AddLinkHeaderListener
     */
    protected function getApiPlatform_Hydra_Listener_Response_AddLinkHeaderService()
    {
        return $this->privates['api_platform.hydra.listener.response.add_link_header'] = new \ApiPlatform\Core\Hydra\EventListener\AddLinkHeaderListener(($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService()));
    }

    /**
     * Gets the private 'api_platform.identifier.converter' shared service.
     *
     * @return \ApiPlatform\Core\Identifier\IdentifierConverter
     */
    protected function getApiPlatform_Identifier_ConverterService()
    {
        return $this->privates['api_platform.identifier.converter'] = new \ApiPlatform\Core\Identifier\IdentifierConverter(($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.identifier.integer'] ?? ($this->privates['api_platform.identifier.integer'] = new \ApiPlatform\Core\Identifier\Normalizer\IntegerDenormalizer()));
            yield 1 => ($this->privates['api_platform.identifier.date_normalizer'] ?? ($this->privates['api_platform.identifier.date_normalizer'] = new \ApiPlatform\Core\Identifier\Normalizer\DateTimeIdentifierDenormalizer()));
        }, 2));
    }

    /**
     * Gets the private 'api_platform.identifiers_extractor.cached' shared service.
     *
     * @return \ApiPlatform\Core\Api\CachedIdentifiersExtractor
     */
    protected function getApiPlatform_IdentifiersExtractor_CachedService()
    {
        $a = ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService());
        $b = ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService());

        return $this->privates['api_platform.identifiers_extractor.cached'] = new \ApiPlatform\Core\Api\CachedIdentifiersExtractor(($this->privates['api_platform.cache.identifiers_extractor'] ?? $this->getApiPlatform_Cache_IdentifiersExtractorService()), new \ApiPlatform\Core\Api\IdentifiersExtractor(($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), $a, $b), $a, $b);
    }

    /**
     * Gets the private 'api_platform.iri_converter' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter
     */
    protected function getApiPlatform_IriConverterService()
    {
        $a = ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService());

        return $this->privates['api_platform.iri_converter'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter(($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['debug.api_platform.item_data_provider'] ?? $this->getDebug_ApiPlatform_ItemDataProviderService()), new \ApiPlatform\Core\Bridge\Symfony\Routing\CachedRouteNameResolver(($this->privates['api_platform.cache.route_name_resolver'] ?? $this->getApiPlatform_Cache_RouteNameResolverService()), new \ApiPlatform\Core\Bridge\Symfony\Routing\RouteNameResolver($a)), $a, ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), ($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService()), ($this->privates['debug.api_platform.subresource_data_provider'] ?? $this->getDebug_ApiPlatform_SubresourceDataProviderService()), ($this->privates['api_platform.identifier.converter'] ?? $this->getApiPlatform_Identifier_ConverterService()), ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.json_schema.json_schema_generate_command' shared service.
     *
     * @return \ApiPlatform\Core\JsonSchema\Command\JsonSchemaGenerateCommand
     */
    protected function getApiPlatform_JsonSchema_JsonSchemaGenerateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonSchema/Command/JsonSchemaGenerateCommand.php';

        $this->privates['api_platform.json_schema.json_schema_generate_command'] = $instance = new \ApiPlatform\Core\JsonSchema\Command\JsonSchemaGenerateCommand(($this->privates['api_platform.hydra.json_schema.schema_factory'] ?? $this->getApiPlatform_Hydra_JsonSchema_SchemaFactoryService()), $this->parameters['api_platform.formats']);

        $instance->setName('api:json-schema:generate');

        return $instance;
    }

    /**
     * Gets the private 'api_platform.json_schema.type_factory' shared service.
     *
     * @return \ApiPlatform\Core\JsonSchema\TypeFactory
     */
    protected function getApiPlatform_JsonSchema_TypeFactoryService()
    {
        $this->privates['api_platform.json_schema.type_factory'] = $instance = new \ApiPlatform\Core\JsonSchema\TypeFactory(($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService()));

        $instance->setSchemaFactory(($this->privates['api_platform.hydra.json_schema.schema_factory'] ?? $this->getApiPlatform_Hydra_JsonSchema_SchemaFactoryService()));

        return $instance;
    }

    /**
     * Gets the private 'api_platform.jsonld.context_builder' shared service.
     *
     * @return \ApiPlatform\Core\JsonLd\ContextBuilder
     */
    protected function getApiPlatform_Jsonld_ContextBuilderService()
    {
        return $this->privates['api_platform.jsonld.context_builder'] = new \ApiPlatform\Core\JsonLd\ContextBuilder(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService()));
    }

    /**
     * Gets the private 'api_platform.listener.exception' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\ExceptionListener
     */
    protected function getApiPlatform_Listener_ExceptionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/ExceptionListener.php';

        return $this->privates['api_platform.listener.exception'] = new \ApiPlatform\Core\EventListener\ExceptionListener('api_platform.action.exception', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), false, ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service()));
    }

    /**
     * Gets the private 'api_platform.listener.exception.validation' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Validator\EventListener\ValidationExceptionListener
     */
    protected function getApiPlatform_Listener_Exception_ValidationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Validator/EventListener/ValidationExceptionListener.php';

        return $this->privates['api_platform.listener.exception.validation'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\EventListener\ValidationExceptionListener(($this->services['serializer'] ?? $this->getSerializerService()), $this->parameters['api_platform.error_formats'], $this->parameters['api_platform.exception_to_status']);
    }

    /**
     * Gets the private 'api_platform.listener.request.add_format' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\AddFormatListener
     */
    protected function getApiPlatform_Listener_Request_AddFormatService()
    {
        return $this->privates['api_platform.listener.request.add_format'] = new \ApiPlatform\Core\EventListener\AddFormatListener(new \Negotiation\Negotiator(), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), $this->parameters['api_platform.formats']);
    }

    /**
     * Gets the private 'api_platform.listener.request.deserialize' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\DeserializeListener
     */
    protected function getApiPlatform_Listener_Request_DeserializeService()
    {
        return $this->privates['api_platform.listener.request.deserialize'] = new \ApiPlatform\Core\EventListener\DeserializeListener(($this->services['serializer'] ?? $this->getSerializerService()), ($this->privates['api_platform.serializer.context_builder.filter'] ?? $this->getApiPlatform_Serializer_ContextBuilder_FilterService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.listener.request.read' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\ReadListener
     */
    protected function getApiPlatform_Listener_Request_ReadService()
    {
        return $this->privates['api_platform.listener.request.read'] = new \ApiPlatform\Core\EventListener\ReadListener(($this->privates['debug.api_platform.collection_data_provider'] ?? $this->getDebug_ApiPlatform_CollectionDataProviderService()), ($this->privates['debug.api_platform.item_data_provider'] ?? $this->getDebug_ApiPlatform_ItemDataProviderService()), ($this->privates['debug.api_platform.subresource_data_provider'] ?? $this->getDebug_ApiPlatform_SubresourceDataProviderService()), ($this->privates['api_platform.serializer.context_builder.filter'] ?? $this->getApiPlatform_Serializer_ContextBuilder_FilterService()), ($this->privates['api_platform.identifier.converter'] ?? $this->getApiPlatform_Identifier_ConverterService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.listener.view.respond' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\RespondListener
     */
    protected function getApiPlatform_Listener_View_RespondService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/RespondListener.php';

        return $this->privates['api_platform.listener.view.respond'] = new \ApiPlatform\Core\EventListener\RespondListener(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.listener.view.serialize' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\SerializeListener
     */
    protected function getApiPlatform_Listener_View_SerializeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/SerializeListener.php';

        return $this->privates['api_platform.listener.view.serialize'] = new \ApiPlatform\Core\EventListener\SerializeListener(($this->services['serializer'] ?? $this->getSerializerService()), ($this->privates['api_platform.serializer.context_builder.filter'] ?? $this->getApiPlatform_Serializer_ContextBuilder_FilterService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.listener.view.validate' shared service.
     *
     * @return \ApiPlatform\Core\Validator\EventListener\ValidateListener
     */
    protected function getApiPlatform_Listener_View_ValidateService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Validator/EventListener/ValidateListener.php';

        return $this->privates['api_platform.listener.view.validate'] = new \ApiPlatform\Core\Validator\EventListener\ValidateListener(($this->privates['api_platform.validator'] ?? $this->getApiPlatform_ValidatorService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.listener.view.validate_query_parameters' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\QueryParameterValidateListener
     */
    protected function getApiPlatform_Listener_View_ValidateQueryParametersService()
    {
        return $this->privates['api_platform.listener.view.validate_query_parameters'] = new \ApiPlatform\Core\EventListener\QueryParameterValidateListener(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), new \ApiPlatform\Core\Filter\QueryParameterValidator(($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], [])))));
    }

    /**
     * Gets the private 'api_platform.listener.view.write' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\WriteListener
     */
    protected function getApiPlatform_Listener_View_WriteService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/WriteListener.php';

        return $this->privates['api_platform.listener.view.write'] = new \ApiPlatform\Core\EventListener\WriteListener(($this->privates['debug.api_platform.data_persister'] ?? $this->getDebug_ApiPlatform_DataPersisterService()), ($this->privates['api_platform.iri_converter'] ?? $this->getApiPlatform_IriConverterService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService()));
    }

    /**
     * Gets the private 'api_platform.metadata.property.metadata_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory
     */
    protected function getApiPlatform_Metadata_Property_MetadataFactory_CachedService()
    {
        $a = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        return $this->privates['api_platform.metadata.property.metadata_factory.cached'] = new \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory(($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService()), new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\ValidatorPropertyMetadataFactory(($this->services['validator'] ?? $this->getValidatorService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor([], $this))), new \ApiPlatform\Core\Metadata\Property\Factory\AnnotationPropertyMetadataFactory($a, new \ApiPlatform\Core\Metadata\Property\Factory\AnnotationSubresourceMetadataFactory($a, new \ApiPlatform\Core\Metadata\Property\Factory\DefaultPropertyMetadataFactory(new \ApiPlatform\Core\Metadata\Property\Factory\SerializerPropertyMetadataFactory(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.serializer.mapping.class_metadata_factory'] ?? $this->getApiPlatform_Serializer_Mapping_ClassMetadataFactoryService()), new \ApiPlatform\Core\Bridge\Doctrine\Orm\Metadata\Property\DoctrineOrmPropertyMetadataFactory(($this->services['doctrine'] ?? $this->getDoctrineService()), new \ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyMetadataFactory(($this->privates['property_info'] ?? $this->getPropertyInfoService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor([], $this)))))), ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService())))))), new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.metadata.property_schema.length_restriction'] ?? ($this->privates['api_platform.metadata.property_schema.length_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaLengthRestriction()));
            yield 1 => ($this->privates['api_platform.metadata.property_schema.one_of_restriction'] ?? $this->getApiPlatform_Metadata_PropertySchema_OneOfRestrictionService());
            yield 2 => ($this->privates['api_platform.metadata.property_schema.regex_restriction'] ?? ($this->privates['api_platform.metadata.property_schema.regex_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaRegexRestriction()));
            yield 3 => ($this->privates['api_platform.metadata.property_schema.format_restriction'] ?? ($this->privates['api_platform.metadata.property_schema.format_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaFormat()));
        }, 4)));
    }

    /**
     * Gets the private 'api_platform.metadata.property.name_collection_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory
     */
    protected function getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()
    {
        return $this->privates['api_platform.metadata.property.name_collection_factory.cached'] = new \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory(($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor([], $this))), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor([], $this))), new \ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyNameCollectionFactory(($this->privates['property_info'] ?? $this->getPropertyInfoService())))));
    }

    /**
     * Gets the private 'api_platform.metadata.property_schema.one_of_restriction' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaOneOfRestriction
     */
    protected function getApiPlatform_Metadata_PropertySchema_OneOfRestrictionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Validator/Metadata/Property/Restriction/PropertySchemaRestrictionMetadataInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Validator/Metadata/Property/Restriction/PropertySchemaOneOfRestriction.php';

        return $this->privates['api_platform.metadata.property_schema.one_of_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaOneOfRestriction(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.metadata.property_schema.length_restriction'] ?? ($this->privates['api_platform.metadata.property_schema.length_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaLengthRestriction()));
            yield 1 => ($this->privates['api_platform.metadata.property_schema.one_of_restriction'] ?? $this->getApiPlatform_Metadata_PropertySchema_OneOfRestrictionService());
            yield 2 => ($this->privates['api_platform.metadata.property_schema.regex_restriction'] ?? ($this->privates['api_platform.metadata.property_schema.regex_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaRegexRestriction()));
            yield 3 => ($this->privates['api_platform.metadata.property_schema.format_restriction'] ?? ($this->privates['api_platform.metadata.property_schema.format_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaFormat()));
        }, 4));
    }

    /**
     * Gets the private 'api_platform.metadata.resource.metadata_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory
     */
    protected function getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()
    {
        $a = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        return $this->privates['api_platform.metadata.resource.metadata_factory.cached'] = new \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory(($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()), new \ApiPlatform\Core\Metadata\Resource\Factory\FormatsResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\OperationResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceFilterMetadataFactory($a, new \ApiPlatform\Core\Metadata\Resource\Factory\ShortNameResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\PhpDocResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\InputOutputResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor([], $this))), new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceMetadataFactory($a, new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor([], $this)))), $this->parameters['api_platform.defaults']), $this->parameters['api_platform.defaults']))))), $this->parameters['api_platform.patch_formats']), $this->parameters['api_platform.formats'], $this->parameters['api_platform.patch_formats']));
    }

    /**
     * Gets the private 'api_platform.metadata.resource.name_collection_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory
     */
    protected function getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()
    {
        return $this->privates['api_platform.metadata.resource.name_collection_factory.cached'] = new \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory(($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()), new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor([], $this))), new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceNameCollectionFactory(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), $this->parameters['api_platform.resource_class_directories'], new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor([], $this)))))));
    }

    /**
     * Gets the private 'api_platform.openapi.command' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\OpenApiCommand
     */
    protected function getApiPlatform_Openapi_CommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Command/OpenApiCommand.php';

        $this->privates['api_platform.openapi.command'] = $instance = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\OpenApiCommand(($this->privates['api_platform.openapi.factory'] ?? $this->getApiPlatform_Openapi_FactoryService()), ($this->services['serializer'] ?? $this->getSerializerService()));

        $instance->setName('api:openapi:export');

        return $instance;
    }

    /**
     * Gets the private 'api_platform.openapi.factory' shared service.
     *
     * @return \ApiPlatform\Core\OpenApi\Factory\OpenApiFactory
     */
    protected function getApiPlatform_Openapi_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/OpenApi/Factory/OpenApiFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/OpenApi/Factory/OpenApiFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/PaginationOptions.php';

        return $this->privates['api_platform.openapi.factory'] = new \ApiPlatform\Core\OpenApi\Factory\OpenApiFactory(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.hydra.json_schema.schema_factory'] ?? $this->getApiPlatform_Hydra_JsonSchema_SchemaFactoryService()), ($this->privates['api_platform.json_schema.type_factory'] ?? $this->getApiPlatform_JsonSchema_TypeFactoryService()), ($this->privates['api_platform.operation_path_resolver.router'] ?? $this->getApiPlatform_OperationPathResolver_RouterService()), ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), ($this->privates['api_platform.subresource_operation_factory.cached'] ?? $this->getApiPlatform_SubresourceOperationFactory_CachedService()), ($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService()), $this->parameters['api_platform.formats'], ($this->privates['api_platform.openapi.options'] ?? $this->getApiPlatform_Openapi_OptionsService()), new \ApiPlatform\Core\DataProvider\PaginationOptions(true, 'page', false, 'itemsPerPage', false, 'pagination'));
    }

    /**
     * Gets the private 'api_platform.openapi.options' shared service.
     *
     * @return \ApiPlatform\Core\OpenApi\Options
     */
    protected function getApiPlatform_Openapi_OptionsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/OpenApi/Options.php';

        return $this->privates['api_platform.openapi.options'] = new \ApiPlatform\Core\OpenApi\Options('', '', '0.0.0', false, 'oauth2', 'application', '', '', '', [], [], NULL, NULL, NULL, NULL, NULL, NULL);
    }

    /**
     * Gets the private 'api_platform.operation_path_resolver.custom' shared service.
     *
     * @return \ApiPlatform\Core\PathResolver\CustomOperationPathResolver
     */
    protected function getApiPlatform_OperationPathResolver_CustomService()
    {
        return $this->privates['api_platform.operation_path_resolver.custom'] = new \ApiPlatform\Core\PathResolver\CustomOperationPathResolver(new \ApiPlatform\Core\PathResolver\OperationPathResolver(($this->privates['api_platform.path_segment_name_generator.underscore'] ?? ($this->privates['api_platform.path_segment_name_generator.underscore'] = new \ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator()))));
    }

    /**
     * Gets the private 'api_platform.operation_path_resolver.router' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\RouterOperationPathResolver
     */
    protected function getApiPlatform_OperationPathResolver_RouterService()
    {
        return $this->privates['api_platform.operation_path_resolver.router'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\RouterOperationPathResolver(($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService()), ($this->privates['api_platform.operation_path_resolver.custom'] ?? $this->getApiPlatform_OperationPathResolver_CustomService()), ($this->privates['api_platform.subresource_operation_factory.cached'] ?? $this->getApiPlatform_SubresourceOperationFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.resource_class_resolver' shared service.
     *
     * @return \ApiPlatform\Core\Api\ResourceClassResolver
     */
    protected function getApiPlatform_ResourceClassResolverService()
    {
        return $this->privates['api_platform.resource_class_resolver'] = new \ApiPlatform\Core\Api\ResourceClassResolver(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.router' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\Router
     */
    protected function getApiPlatform_RouterService()
    {
        return $this->privates['api_platform.router'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\Router(($this->services['router'] ?? $this->getRouterService()), 1);
    }

    /**
     * Gets the private 'api_platform.security.listener.request.deny_access' shared service.
     *
     * @return \ApiPlatform\Core\Security\EventListener\DenyAccessListener
     */
    protected function getApiPlatform_Security_Listener_Request_DenyAccessService()
    {
        return $this->privates['api_platform.security.listener.request.deny_access'] = new \ApiPlatform\Core\Security\EventListener\DenyAccessListener(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.security.resource_access_checker'] ?? $this->getApiPlatform_Security_ResourceAccessCheckerService()));
    }

    /**
     * Gets the private 'api_platform.security.resource_access_checker' shared service.
     *
     * @return \ApiPlatform\Core\Security\ResourceAccessChecker
     */
    protected function getApiPlatform_Security_ResourceAccessCheckerService()
    {
        return $this->privates['api_platform.security.resource_access_checker'] = new \ApiPlatform\Core\Security\ResourceAccessChecker(($this->privates['security.expression_language'] ?? $this->getSecurity_ExpressionLanguageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'api_platform.serializer.context_builder.filter' shared service.
     *
     * @return \ApiPlatform\Core\Serializer\SerializerFilterContextBuilder
     */
    protected function getApiPlatform_Serializer_ContextBuilder_FilterService()
    {
        $a = ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());

        return $this->privates['api_platform.serializer.context_builder.filter'] = new \ApiPlatform\Core\Serializer\SerializerFilterContextBuilder($a, ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), new \ApiPlatform\Core\Serializer\SerializerContextBuilder($a));
    }

    /**
     * Gets the private 'api_platform.serializer.mapping.class_metadata_factory' shared service.
     *
     * @return \ApiPlatform\Core\Serializer\Mapping\Factory\ClassMetadataFactory
     */
    protected function getApiPlatform_Serializer_Mapping_ClassMetadataFactoryService()
    {
        return $this->privates['api_platform.serializer.mapping.class_metadata_factory'] = new \ApiPlatform\Core\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))])));
    }

    /**
     * Gets the private 'api_platform.subresource_operation_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory
     */
    protected function getApiPlatform_SubresourceOperationFactory_CachedService()
    {
        return $this->privates['api_platform.subresource_operation_factory.cached'] = new \ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory(($this->privates['api_platform.cache.subresource_operation_factory'] ?? $this->getApiPlatform_Cache_SubresourceOperationFactoryService()), new \ApiPlatform\Core\Operation\Factory\SubresourceOperationFactory(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.path_segment_name_generator.underscore'] ?? ($this->privates['api_platform.path_segment_name_generator.underscore'] = new \ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator())), ($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService())));
    }

    /**
     * Gets the private 'api_platform.swagger.command.swagger_command' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\SwaggerCommand
     */
    protected function getApiPlatform_Swagger_Command_SwaggerCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Command/SwaggerCommand.php';

        $this->privates['api_platform.swagger.command.swagger_command'] = $instance = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\SwaggerCommand(($this->services['serializer'] ?? $this->getSerializerService()), ($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), '', '', '0.0.0', NULL, $this->parameters['api_platform.swagger.versions']);

        $instance->setName('api:swagger:export');

        return $instance;
    }

    /**
     * Gets the private 'api_platform.validator' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Validator\Validator
     */
    protected function getApiPlatform_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Validator/ValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Validator/Validator.php';

        return $this->privates['api_platform.validator'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Validator(($this->services['validator'] ?? $this->getValidatorService()), $this);
    }

    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), '', false)), []);
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('TuQYnCZyD7', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->privates['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_QueryService()
    {
        return $this->privates['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_ResultService()
    {
        return $this->privates['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the private 'cache.property_info' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_PropertyInfoService()
    {
        return $this->privates['cache.property_info'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('JmbVXrRg+u', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('98HSIQmqmc', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('ZYIX2A9APY', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('+HULa-7ZQi', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AboutCommand.php';

        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /**
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AssetsInstallCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CacheClearCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolClearCommand.php';

        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php';

        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolListCommand.php';

        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.security_expression_language', 7 => 'cache.doctrine.orm.default.metadata', 8 => 'cache.doctrine.orm.default.result', 9 => 'cache.doctrine.orm.default.query', 10 => 'api_platform.cache.route_name_resolver', 11 => 'api_platform.cache.identifiers_extractor', 12 => 'api_platform.cache.subresource_operation_factory', 13 => 'api_platform.cache.metadata.resource', 14 => 'api_platform.cache.metadata.property']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php';

        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
            yield 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService());
            yield 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService());
            yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService());
            yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService());
            yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService());
            yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService());
            yield 'cache.doctrine.orm.default.metadata' => ($this->privates['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService());
            yield 'cache.doctrine.orm.default.result' => ($this->privates['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService());
            yield 'cache.doctrine.orm.default.query' => ($this->privates['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService());
            yield 'api_platform.cache.route_name_resolver' => ($this->privates['api_platform.cache.route_name_resolver'] ?? $this->getApiPlatform_Cache_RouteNameResolverService());
            yield 'api_platform.cache.identifiers_extractor' => ($this->privates['api_platform.cache.identifiers_extractor'] ?? $this->getApiPlatform_Cache_IdentifiersExtractorService());
            yield 'api_platform.cache.subresource_operation_factory' => ($this->privates['api_platform.cache.subresource_operation_factory'] ?? $this->getApiPlatform_Cache_SubresourceOperationFactoryService());
            yield 'api_platform.cache.metadata.resource' => ($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService());
            yield 'api_platform.cache.metadata.property' => ($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService());
        }, 15));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CacheWarmupCommand.php';

        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ConfigDebugCommand.php';

        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ConfigDumpReferenceCommand.php';

        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';

        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerLintCommand.php';

        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/DebugAutowiringCommand.php';

        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /**
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/EventDispatcherDebugCommand.php';

        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    protected function getConsole_Command_FormDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Command/DebugCommand.php';

        $this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->getForm_RegistryService()), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'FOS\\UserBundle\\Form\\Type'], [0 => 'App\\Form\\ActiviteType', 1 => 'App\\Form\\AutoriteType', 2 => 'App\\Form\\ChangePasswordFormType', 3 => 'App\\Form\\CommentaireType', 4 => 'App\\Form\\DifficulteType', 5 => 'App\\Form\\EvenementType', 6 => 'App\\Form\\PeriodiciteType', 7 => 'App\\Form\\PointDeCoordinationType', 8 => 'App\\Form\\ResetPasswordRequestFormType', 9 => 'App\\Form\\UserType', 10 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 11 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 12 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 13 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 14 => 'FOS\\UserBundle\\Form\\Type\\UsernameFormType', 15 => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 16 => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', 17 => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 18 => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/RouterDebugCommand.php';

        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:router');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/RouterMatchCommand.php';

        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsDecryptToLocalCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsEncryptFromLocalCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsGenerateKeysCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsListCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsRemoveCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsSetCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    protected function getConsole_Command_TranslationDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php';

        $this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Templating/Helper/TranslatorHelper.php'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorTrait.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 11 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 12 => (\dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 13 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 14 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/DefaultTranslatedView.php'), 15 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap4TranslatedView.php'), 16 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap3TranslatedView.php'), 17 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrapTranslatedView.php'), 18 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/SemanticUiTranslatedView.php'), 19 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/EventListener/FlashListener.php')]);

        $instance->setName('debug:translation');

        return $instance;
    }

    /**
     * Gets the private 'console.command.translation_update' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    protected function getConsole_Command_TranslationUpdateService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationUpdateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Writer/TranslationWriterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Writer/TranslationWriter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/PhpFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/XliffFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/PoFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/MoFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/YamlFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/QtFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/CsvFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/IniFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/JsonFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/IcuResFileDumper.php';

        $a = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $a->addDumper('php', new \Symfony\Component\Translation\Dumper\PhpFileDumper());
        $a->addDumper('xlf', new \Symfony\Component\Translation\Dumper\XliffFileDumper());
        $a->addDumper('po', new \Symfony\Component\Translation\Dumper\PoFileDumper());
        $a->addDumper('mo', new \Symfony\Component\Translation\Dumper\MoFileDumper());
        $a->addDumper('yml', new \Symfony\Component\Translation\Dumper\YamlFileDumper());
        $a->addDumper('yaml', new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'));
        $a->addDumper('ts', new \Symfony\Component\Translation\Dumper\QtFileDumper());
        $a->addDumper('csv', new \Symfony\Component\Translation\Dumper\CsvFileDumper());
        $a->addDumper('ini', new \Symfony\Component\Translation\Dumper\IniFileDumper());
        $a->addDumper('json', new \Symfony\Component\Translation\Dumper\JsonFileDumper());
        $a->addDumper('res', new \Symfony\Component\Translation\Dumper\IcuResFileDumper());

        $this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand($a, ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), 'en', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Templating/Helper/TranslatorHelper.php'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorTrait.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 11 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 12 => (\dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 13 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 14 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/DefaultTranslatedView.php'), 15 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap4TranslatedView.php'), 16 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap3TranslatedView.php'), 17 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrapTranslatedView.php'), 18 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/SemanticUiTranslatedView.php'), 19 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/EventListener/FlashListener.php')]);

        $instance->setName('translation:update');

        return $instance;
    }

    /**
     * Gets the private 'console.command.xliff_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand
     */
    protected function getConsole_Command_XliffLintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Command/XliffLintCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/XliffLintCommand.php';

        $this->privates['console.command.xliff_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand();

        $instance->setName('lint:xliff');

        return $instance;
    }

    /**
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/yaml/Command/LintCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/YamlLintCommand.php';

        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/EventListener/ErrorListener.php';

        $a = new \Symfony\Bridge\Monolog\Logger('console');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.null_internal'] ?? ($this->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler())));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener($a);
    }

    /**
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarProcessor.php';

        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
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
     * Gets the private 'debug.api_platform.collection_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainCollectionDataProvider
     */
    protected function getDebug_ApiPlatform_CollectionDataProviderService()
    {
        return $this->privates['debug.api_platform.collection_data_provider'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainCollectionDataProvider(new \ApiPlatform\Core\DataProvider\ChainCollectionDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.default.collection_data_provider'] ?? $this->getApiPlatform_Doctrine_Orm_Default_CollectionDataProviderService());
        }, 1)));
    }

    /**
     * Gets the private 'debug.api_platform.data_persister' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\DataPersister\TraceableChainDataPersister
     */
    protected function getDebug_ApiPlatform_DataPersisterService()
    {
        return $this->privates['debug.api_platform.data_persister'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataPersister\TraceableChainDataPersister(new \ApiPlatform\Core\DataPersister\ChainDataPersister(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.data_persister'] ?? $this->getApiPlatform_Doctrine_Orm_DataPersisterService());
        }, 1)));
    }

    /**
     * Gets the private 'debug.api_platform.item_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainItemDataProvider
     */
    protected function getDebug_ApiPlatform_ItemDataProviderService()
    {
        return $this->privates['debug.api_platform.item_data_provider'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainItemDataProvider(new \ApiPlatform\Core\DataProvider\ChainItemDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.default.item_data_provider'] ?? $this->getApiPlatform_Doctrine_Orm_Default_ItemDataProviderService());
        }, 1)));
    }

    /**
     * Gets the private 'debug.api_platform.subresource_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainSubresourceDataProvider
     */
    protected function getDebug_ApiPlatform_SubresourceDataProviderService()
    {
        return $this->privates['debug.api_platform.subresource_data_provider'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainSubresourceDataProvider(new \ApiPlatform\Core\DataProvider\ChainSubresourceDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.default.subresource_data_provider'] ?? $this->getApiPlatform_Doctrine_Orm_Default_SubresourceDataProviderService());
        }, 1)));
    }

    /**
     * Gets the private 'debug.argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/DefaultValueResolver.php';

        return $this->privates['debug.argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.not_tagged_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_NotTaggedControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/NotTaggedControllerValueResolver.php';

        return $this->privates['debug.argument_resolver.not_tagged_controller'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver(($this->privates['.service_locator.vw9IAYH'] ?? $this->get_ServiceLocator_Vw9IAYHService())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/RequestValueResolver.php';

        return $this->privates['debug.argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.request_attribute' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestAttributeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/RequestAttributeValueResolver.php';

        return $this->privates['debug.argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_ServiceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

        return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(($this->privates['.service_locator.vw9IAYH'] ?? $this->get_ServiceLocator_Vw9IAYHService())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.session' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_SessionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/SessionValueResolver.php';

        return $this->privates['debug.argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.variadic' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_VariadicService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/VariadicValueResolver.php';

        return $this->privates['debug.argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.null_internal'] ?? ($this->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler())));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), \dirname(__DIR__, 4), function () {
            return ($this->privates['debug.file_link_formatter.url_format'] ?? $this->getDebug_FileLinkFormatter_UrlFormatService());
        });
    }

    /**
     * Gets the private 'debug.file_link_formatter.url_format' shared service.
     *
     * @return \string
     */
    protected function getDebug_FileLinkFormatter_UrlFormatService()
    {
        return $this->privates['debug.file_link_formatter.url_format'] = \Symfony\Component\HttpKernel\Debug\FileLinkFormatter::generateUrlFormat(($this->services['router'] ?? $this->getRouterService()), '_profiler_open_file', '?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.security.voter.security.access.authenticated_voter'] ?? $this->getDebug_Security_Voter_Security_Access_AuthenticatedVoterService());
            yield 1 => ($this->privates['debug.security.voter.security.access.role_hierarchy_voter'] ?? $this->getDebug_Security_Voter_Security_Access_RoleHierarchyVoterService());
            yield 2 => ($this->privates['debug.security.voter.security.access.expression_voter'] ?? $this->getDebug_Security_Voter_Security_Access_ExpressionVoterService());
        }, 3), 'affirmative', false, true));
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
     * Gets the private 'debug.security.user_value_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_Security_UserValueResolverService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Controller/UserValueResolver.php';

        return $this->privates['debug.security.user_value_resolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\Security\Http\Controller\UserValueResolver(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_AuthenticatedVoterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/AuthenticatedVoter.php';

        return $this->privates['debug.security.voter.security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL)))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_ExpressionVoterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/ExpressionVoter.php';

        return $this->privates['debug.security.voter.security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(($this->privates['security.expression_language'] ?? $this->getSecurity_ExpressionLanguageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.role_hierarchy_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_RoleHierarchyVoterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/RoleVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/RoleHierarchyVoter.php';

        return $this->privates['debug.security.voter.security.access.role_hierarchy_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.vote_listener' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\VoteListener
     */
    protected function getDebug_Security_Voter_VoteListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/EventListener/VoteListener.php';

        return $this->privates['debug.security.voter.vote_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\VoteListener(($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()));
    }

    /**
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/MetadataCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearMetadataCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_metadata_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-metadata');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/QueryCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearQueryCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_query_cache_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/ResultCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearResultCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_result_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-result');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/CollectionRegionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/CollectionRegionDoctrineCommand.php';

        $this->privates['doctrine.cache_collection_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();

        $instance->setName('doctrine:cache:clear-collection-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/EntityRegionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/EntityRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_entity_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-entity-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/QueryRegionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/QueryRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_query_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/CreateDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:create');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DropDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:drop');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/ImportCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ImportDoctrineCommand.php';

        $this->privates['doctrine.database_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();

        $instance->setName('doctrine:database:import');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/EnsureProductionSettingsCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/EnsureProductionSettingsDoctrineCommand.php';

        $this->privates['doctrine.ensure_production_settings_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();

        $instance->setName('doctrine:ensure-production-settings');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.fixtures_load_command' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand
     */
    protected function getDoctrine_FixturesLoadCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Command/LoadDataFixturesDoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/DataFixtures/ContainerAwareLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Loader/SymfonyFixturesLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/SharedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/ORMFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Fixture.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/AppFixtures.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Purger/PurgerFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Purger/ORMPurgerFactory.php';

        $a = new \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader($this);
        $a->addFixtures([0 => ['fixture' => new \App\DataFixtures\AppFixtures(($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService())), 'groups' => []]]);

        $this->privates['doctrine.fixtures_load_command'] = $instance = new \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand($a, ($this->services['doctrine'] ?? $this->getDoctrineService()), ['default' => new \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory()]);

        $instance->setName('doctrine:fixtures:load');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ConvertMappingCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ConvertMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_convert_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();

        $instance->setName('doctrine:mapping:convert');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/ImportMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()), $this->parameters['kernel.bundles']);

        $instance->setName('doctrine:mapping:import');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/InfoCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/InfoDoctrineCommand.php';

        $this->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();

        $instance->setName('doctrine:mapping:info');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.migrations.container_aware_migrations_factory' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\MigrationsFactory\ContainerAwareMigrationFactory
     */
    protected function getDoctrine_Migrations_ContainerAwareMigrationsFactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/MigrationFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/MigrationsFactory/ContainerAwareMigrationFactory.php';

        return $this->privates['doctrine.migrations.container_aware_migrations_factory'] = new \Doctrine\Bundle\MigrationsBundle\MigrationsFactory\ContainerAwareMigrationFactory(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService())->getMigrationFactory(), $this);
    }

    /**
     * Gets the private 'doctrine.migrations.dependency_factory' shared service.
     *
     * @return \Doctrine\Migrations\DependencyFactory
     */
    protected function getDoctrine_Migrations_DependencyFactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/DependencyFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Migration/ConfigurationLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Migration/ExistingConfiguration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Metadata/Storage/MetadataStorageConfiguration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Metadata/Storage/TableMetadataStorageConfiguration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/EntityManager/EntityManagerLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/EntityManager/ManagerRegistryEntityManager.php';

        $a = new \Doctrine\Migrations\Configuration\Configuration();
        $a->addMigrationsDirectory('DoctrineMigrations', (\dirname(__DIR__, 4).'/migrations'));
        $a->setAllOrNothing(false);
        $a->setCheckDatabasePlatform(true);
        $a->setMetadataStorageConfiguration(new \Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration());

        $this->privates['doctrine.migrations.dependency_factory'] = $instance = \Doctrine\Migrations\DependencyFactory::fromEntityManager(new \Doctrine\Migrations\Configuration\Migration\ExistingConfiguration($a), \Doctrine\Migrations\Configuration\EntityManager\ManagerRegistryEntityManager::withSimpleDefault(($this->services['doctrine'] ?? $this->getDoctrineService())), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

        $instance->setDefinition('Doctrine\\Migrations\\Version\\MigrationFactory', function () {
            return ($this->privates['doctrine.migrations.container_aware_migrations_factory'] ?? $this->getDoctrine_Migrations_ContainerAwareMigrationsFactoryService());
        });

        return $instance;
    }

    /**
     * Gets the private 'doctrine.orm.default_annotation_metadata_driver' shared service.
     *
     * @return \Doctrine\ORM\Mapping\Driver\AnnotationDriver
     */
    protected function getDoctrine_Orm_DefaultAnnotationMetadataDriverService()
    {
        return $this->privates['doctrine.orm.default_annotation_metadata_driver'] = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), $this->parameters['api_platform.resource_class_directories']);
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/PropertyInfo/DoctrineExtractor.php';

        return $this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php';

        return $this->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the private 'doctrine.orm.proxy_cache_warmer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer
     */
    protected function getDoctrine_Orm_ProxyCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/CacheWarmer/ProxyCacheWarmer.php';

        return $this->privates['doctrine.orm.proxy_cache_warmer'] = new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/Constraints/UniqueEntityValidator.php';

        return $this->privates['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/RunDqlCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/RunDqlDoctrineCommand.php';

        $this->privates['doctrine.query_dql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();

        $instance->setName('doctrine:query:dql');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/RunSqlDoctrineCommand.php';

        $this->privates['doctrine.query_sql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand(($this->privates['Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider'] ?? $this->getManagerRegistryAwareConnectionProviderService()));

        $instance->setName('doctrine:query:sql');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/CreateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/CreateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:create');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/DropCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/DropSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:drop');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/UpdateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/UpdateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_update_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:update');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ValidateSchemaCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ValidateSchemaCommand.php';

        $this->privates['doctrine.schema_validate_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();

        $instance->setName('doctrine:schema:validate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.current_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\CurrentCommand
     */
    protected function getDoctrineMigrations_CurrentCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/CurrentCommand.php';

        $this->privates['doctrine_migrations.current_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\CurrentCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:current');

        $instance->setName('doctrine:migrations:current');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.diff_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\DiffCommand
     */
    protected function getDoctrineMigrations_DiffCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DiffCommand.php';

        $this->privates['doctrine_migrations.diff_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\DiffCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:diff');

        $instance->setName('doctrine:migrations:diff');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.dump_schema_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand
     */
    protected function getDoctrineMigrations_DumpSchemaCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DumpSchemaCommand.php';

        $this->privates['doctrine_migrations.dump_schema_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:dump-schema');

        $instance->setName('doctrine:migrations:dump-schema');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.execute_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\ExecuteCommand
     */
    protected function getDoctrineMigrations_ExecuteCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/ExecuteCommand.php';

        $this->privates['doctrine_migrations.execute_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\ExecuteCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:execute');

        $instance->setName('doctrine:migrations:execute');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.generate_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\GenerateCommand
     */
    protected function getDoctrineMigrations_GenerateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/GenerateCommand.php';

        $this->privates['doctrine_migrations.generate_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\GenerateCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:generate');

        $instance->setName('doctrine:migrations:generate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.latest_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\LatestCommand
     */
    protected function getDoctrineMigrations_LatestCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/LatestCommand.php';

        $this->privates['doctrine_migrations.latest_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\LatestCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:latest');

        $instance->setName('doctrine:migrations:latest');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.migrate_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\MigrateCommand
     */
    protected function getDoctrineMigrations_MigrateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/MigrateCommand.php';

        $this->privates['doctrine_migrations.migrate_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\MigrateCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:migrate');

        $instance->setName('doctrine:migrations:migrate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.rollup_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\RollupCommand
     */
    protected function getDoctrineMigrations_RollupCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/RollupCommand.php';

        $this->privates['doctrine_migrations.rollup_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\RollupCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:rollup');

        $instance->setName('doctrine:migrations:rollup');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.status_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\StatusCommand
     */
    protected function getDoctrineMigrations_StatusCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/StatusCommand.php';

        $this->privates['doctrine_migrations.status_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\StatusCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:status');

        $instance->setName('doctrine:migrations:status');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.sync_metadata_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand
     */
    protected function getDoctrineMigrations_SyncMetadataCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/SyncMetadataCommand.php';

        $this->privates['doctrine_migrations.sync_metadata_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:sync-metadata-storage');

        $instance->setName('doctrine:migrations:sync-metadata-storage');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.up_to_date_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\UpToDateCommand
     */
    protected function getDoctrineMigrations_UpToDateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/UpToDateCommand.php';

        $this->privates['doctrine_migrations.up_to_date_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\UpToDateCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:up-to-date');

        $instance->setName('doctrine:migrations:up-to-date');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.version_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\VersionCommand
     */
    protected function getDoctrineMigrations_VersionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/VersionCommand.php';

        $this->privates['doctrine_migrations.version_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\VersionCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:version');

        $instance->setName('doctrine:migrations:version');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.versions_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\ListCommand
     */
    protected function getDoctrineMigrations_VersionsCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/ListCommand.php';

        $this->privates['doctrine_migrations.versions_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\ListCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:versions');

        $instance->setName('doctrine:migrations:list');

        return $instance;
    }

    /**
     * Gets the private 'error_handler.error_renderer.html' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer
     */
    protected function getErrorHandler_ErrorRenderer_HtmlService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->privates['error_handler.error_renderer.html'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListener2Service()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), true);
    }

    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';

        return $this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'/src/Resources'), [0 => (\dirname(__DIR__, 4).'/src')], false);
    }

    /**
     * Gets the private 'form.choice_list_factory.cached' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator
     */
    protected function getForm_ChoiceListFactory_CachedService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/ChoiceListFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/CachingFactoryDecorator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/PropertyAccessDecorator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/DefaultChoiceListFactory.php';

        return $this->privates['form.choice_list_factory.cached'] = new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService())));
    }

    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactory.php';

        return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Form\\ActiviteType' => ['privates', 'App\\Form\\ActiviteType', 'getActiviteTypeService', false],
            'App\\Form\\AutoriteType' => ['privates', 'App\\Form\\AutoriteType', 'getAutoriteTypeService', false],
            'App\\Form\\ChangePasswordFormType' => ['privates', 'App\\Form\\ChangePasswordFormType', 'getChangePasswordFormTypeService', false],
            'App\\Form\\CommentaireType' => ['privates', 'App\\Form\\CommentaireType', 'getCommentaireTypeService', false],
            'App\\Form\\DifficulteType' => ['privates', 'App\\Form\\DifficulteType', 'getDifficulteTypeService', false],
            'App\\Form\\EvenementType' => ['privates', 'App\\Form\\EvenementType', 'getEvenementTypeService', false],
            'App\\Form\\PeriodiciteType' => ['privates', 'App\\Form\\PeriodiciteType', 'getPeriodiciteTypeService', false],
            'App\\Form\\PointDeCoordinationType' => ['privates', 'App\\Form\\PointDeCoordinationType', 'getPointDeCoordinationTypeService', false],
            'App\\Form\\ResetPasswordRequestFormType' => ['privates', 'App\\Form\\ResetPasswordRequestFormType', 'getResetPasswordRequestFormTypeService', false],
            'App\\Form\\UserType' => ['privates', 'App\\Form\\UserType', 'getUserTypeService', false],
            'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => ['privates', 'fos_user.change_password.form.type', 'getFosUser_ChangePassword_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => ['privates', 'fos_user.profile.form.type', 'getFosUser_Profile_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => ['privates', 'fos_user.registration.form.type', 'getFosUser_Registration_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => ['privates', 'fos_user.resetting.form.type', 'getFosUser_Resetting_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => ['privates', 'fos_user.username_form_type', 'getFosUser_UsernameFormTypeService', false],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', false],
        ], [
            'App\\Form\\ActiviteType' => '?',
            'App\\Form\\AutoriteType' => '?',
            'App\\Form\\ChangePasswordFormType' => '?',
            'App\\Form\\CommentaireType' => '?',
            'App\\Form\\DifficulteType' => '?',
            'App\\Form\\EvenementType' => '?',
            'App\\Form\\PeriodiciteType' => '?',
            'App\\Form\\PointDeCoordinationType' => '?',
            'App\\Form\\ResetPasswordRequestFormType' => '?',
            'App\\Form\\UserType' => '?',
            'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->getForm_TypeExtension_Form_TransformationFailureHandlingService());
            yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->getForm_TypeExtension_Form_HttpFoundationService());
            yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->getForm_TypeExtension_Form_ValidatorService());
            yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->getForm_TypeExtension_Upload_ValidatorService());
            yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->getForm_TypeExtension_CsrfService());
            yield 5 => ($this->privates['form.type_extension.form.data_collector'] ?? $this->getForm_TypeExtension_Form_DataCollectorService());
        }, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->getForm_TypeGuesser_ValidatorService());
            yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->getForm_TypeGuesser_DoctrineService());
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService())));
    }

    /**
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Util/ServerParams.php';

        return $this->privates['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php';

        return $this->privates['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(($this->privates['form.choice_list_factory.cached'] ?? $this->getForm_ChoiceListFactory_CachedService()), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Form/Type/DoctrineType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Form/Type/EntityType.php';

        return $this->privates['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/BaseType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FormType.php';

        return $this->privates['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /**
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php';

        return $this->privates['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), true, '_token', ($this->services['translator'] ?? $this->getTranslatorService()), 'validators', ($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService()));
    }

    /**
     * Gets the private 'form.type_extension.form.data_collector' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/Type/DataCollectorTypeExtension.php';

        return $this->privates['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
    }

    /**
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/HttpFoundation/Type/FormTypeHttpFoundationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/RequestHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/HttpFoundation/HttpFoundationRequestHandler.php';

        return $this->privates['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService())));
    }

    /**
     * Gets the private 'form.type_extension.form.transformation_failure_handling' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension
     */
    protected function getForm_TypeExtension_Form_TransformationFailureHandlingService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php';

        return $this->privates['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/BaseValidatorExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php';

        return $this->privates['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the private 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php';

        return $this->privates['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(($this->services['translator'] ?? $this->getTranslatorService()), 'validators');
    }

    /**
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Form/DoctrineOrmTypeGuesser.php';

        return $this->privates['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/ValidatorTypeGuesser.php';

        return $this->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the private 'fos_rest.body_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->privates['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener(new \FOS\RestBundle\Decoder\ContainerDecoderProvider(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'fos_rest.decoder.json' => ['privates', 'fos_rest.decoder.json', 'getFosRest_Decoder_JsonService', false],
            'fos_rest.decoder.xml' => ['privates', 'fos_rest.decoder.xml', 'getFosRest_Decoder_XmlService', false],
        ], [
            'fos_rest.decoder.json' => '?',
            'fos_rest.decoder.xml' => '?',
        ]), ['json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml']), false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /**
     * Gets the private 'fos_rest.decoder.json' shared service.
     *
     * @return \FOS\RestBundle\Decoder\JsonDecoder
     */
    protected function getFosRest_Decoder_JsonService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Decoder/DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Decoder/JsonDecoder.php';

        return $this->privates['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder();
    }

    /**
     * Gets the private 'fos_rest.decoder.xml' shared service.
     *
     * @return \FOS\RestBundle\Decoder\XmlDecoder
     */
    protected function getFosRest_Decoder_XmlService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Decoder/DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Decoder/XmlDecoder.php';

        return $this->privates['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
    }

    /**
     * Gets the private 'fos_rest.inflector.doctrine' shared service.
     *
     * @return \FOS\RestBundle\Inflector\DoctrineInflector
     *
     * @deprecated The fos_rest.inflector.doctrine service is deprecated since FOSRestBundle 2.8.
     */
    protected function getFosRest_Inflector_DoctrineService()
    {
        @trigger_error('The fos_rest.inflector.doctrine service is deprecated since FOSRestBundle 2.8.', E_USER_DEPRECATED);

        return new \FOS\RestBundle\Inflector\DoctrineInflector();
    }

    /**
     * Gets the private 'fos_rest.routing.loader.controller' shared service.
     *
     * @return \FOS\RestBundle\Routing\Loader\RestRouteLoader
     *
     * @deprecated The fos_rest.routing.loader.controller service is deprecated since FOSRestBundle 2.8. You can disable it by setting the config `fos_rest.routing_loader.enabled` to `false`.
     */
    protected function getFosRest_Routing_Loader_ControllerService()
    {
        @trigger_error('The fos_rest.routing.loader.controller service is deprecated since FOSRestBundle 2.8. You can disable it by setting the config `fos_rest.routing_loader.enabled` to `false`.', E_USER_DEPRECATED);

        return new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, ($this->privates['file_locator'] ?? $this->getFileLocatorService()), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), $this->getFosRest_Routing_Loader_Reader_ControllerService(), NULL);
    }

    /**
     * Gets the private 'fos_rest.routing.loader.directory' shared service.
     *
     * @return \FOS\RestBundle\Routing\Loader\DirectoryRouteLoader
     *
     * @deprecated The fos_rest.routing.loader.directory service is deprecated since FOSRestBundle 2.8. You can disable it by setting the config `fos_rest.routing_loader.enabled` to `false`.
     */
    protected function getFosRest_Routing_Loader_DirectoryService()
    {
        @trigger_error('The fos_rest.routing.loader.directory service is deprecated since FOSRestBundle 2.8. You can disable it by setting the config `fos_rest.routing_loader.enabled` to `false`.', E_USER_DEPRECATED);

        return new \FOS\RestBundle\Routing\Loader\DirectoryRouteLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()), ($this->privates['fos_rest.routing.loader.processor'] ?? $this->getFosRest_Routing_Loader_ProcessorService()));
    }

    /**
     * Gets the private 'fos_rest.routing.loader.processor' shared service.
     *
     * @return \FOS\RestBundle\Routing\Loader\RestRouteProcessor
     *
     * @deprecated The fos_rest.routing.loader.processor service is deprecated since FOSRestBundle 2.8. You can disable it by setting the config `fos_rest.routing_loader.enabled` to `false`.
     */
    protected function getFosRest_Routing_Loader_ProcessorService()
    {
        @trigger_error('The fos_rest.routing.loader.processor service is deprecated since FOSRestBundle 2.8. You can disable it by setting the config `fos_rest.routing_loader.enabled` to `false`.', E_USER_DEPRECATED);

        return $this->privates['fos_rest.routing.loader.processor'] = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();
    }

    /**
     * Gets the private 'fos_rest.routing.loader.reader.action' shared service.
     *
     * @return \FOS\RestBundle\Routing\Loader\Reader\RestActionReader
     *
     * @deprecated The fos_rest.routing.loader.reader.action service is deprecated since FOSRestBundle 2.8. You can disable it by setting the config `fos_rest.routing_loader.enabled` to `false`.
     */
    protected function getFosRest_Routing_Loader_Reader_ActionService()
    {
        @trigger_error('The fos_rest.routing.loader.reader.action service is deprecated since FOSRestBundle 2.8. You can disable it by setting the config `fos_rest.routing_loader.enabled` to `false`.', E_USER_DEPRECATED);

        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Request/ParamReaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Request/ParamReader.php';

        $a = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        return new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($a, new \FOS\RestBundle\Request\ParamReader($a), $this->getFosRest_Inflector_DoctrineService(), true, ['json' => false, 'xml' => false, 'html' => true], true);
    }

    /**
     * Gets the private 'fos_rest.routing.loader.reader.controller' shared service.
     *
     * @return \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader
     *
     * @deprecated The fos_rest.routing.loader.reader.controller service is deprecated since FOSRestBundle 2.8.
     */
    protected function getFosRest_Routing_Loader_Reader_ControllerService()
    {
        @trigger_error('The fos_rest.routing.loader.reader.controller service is deprecated since FOSRestBundle 2.8.', E_USER_DEPRECATED);

        return new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader($this->getFosRest_Routing_Loader_Reader_ActionService(), ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'fos_rest.routing.loader.xml_collection' shared service.
     *
     * @return \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader
     *
     * @deprecated The fos_rest.routing.loader.xml_collection service is deprecated since FOSRestBundle 2.8. You can disable it by setting the config `fos_rest.routing_loader.enabled` to `false`.
     */
    protected function getFosRest_Routing_Loader_XmlCollectionService()
    {
        @trigger_error('The fos_rest.routing.loader.xml_collection service is deprecated since FOSRestBundle 2.8. You can disable it by setting the config `fos_rest.routing_loader.enabled` to `false`.', E_USER_DEPRECATED);

        return new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()), ($this->privates['fos_rest.routing.loader.processor'] ?? $this->getFosRest_Routing_Loader_ProcessorService()), true, ['json' => false, 'xml' => false, 'html' => true], NULL);
    }

    /**
     * Gets the private 'fos_rest.routing.loader.yaml_collection' shared service.
     *
     * @return \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader
     *
     * @deprecated The fos_rest.routing.loader.yaml_collection service is deprecated since FOSRestBundle 2.8. You can disable it by setting the config `fos_rest.routing_loader.enabled` to `false`.
     */
    protected function getFosRest_Routing_Loader_YamlCollectionService()
    {
        @trigger_error('The fos_rest.routing.loader.yaml_collection service is deprecated since FOSRestBundle 2.8. You can disable it by setting the config `fos_rest.routing_loader.enabled` to `false`.', E_USER_DEPRECATED);

        return new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()), ($this->privates['fos_rest.routing.loader.processor'] ?? $this->getFosRest_Routing_Loader_ProcessorService()), true, ['json' => false, 'xml' => false, 'html' => true], NULL);
    }

    /**
     * Gets the private 'fos_rest.serializer.symfony' shared service.
     *
     * @return \FOS\RestBundle\Serializer\SymfonySerializerAdapter
     */
    protected function getFosRest_Serializer_SymfonyService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['fos_rest.serializer.symfony'] = $this->createProxy('SymfonySerializerAdapter_0141a64', function () {
                return \SymfonySerializerAdapter_0141a64::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getFosRest_Serializer_SymfonyService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \FOS\RestBundle\Serializer\SymfonySerializerAdapter(($this->services['serializer'] ?? $this->getSerializerService()));
    }

    /**
     * Gets the private 'fos_user.change_password.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ChangePasswordFormType
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Type/ChangePasswordFormType.php';

        return $this->privates['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('App\\Entity\\User');
    }

    /**
     * Gets the private 'fos_user.command.activate_user' shared service.
     *
     * @return \FOS\UserBundle\Command\ActivateUserCommand
     */
    protected function getFosUser_Command_ActivateUserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Command/ActivateUserCommand.php';

        $this->privates['fos_user.command.activate_user'] = $instance = new \FOS\UserBundle\Command\ActivateUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:activate');

        return $instance;
    }

    /**
     * Gets the private 'fos_user.command.change_password' shared service.
     *
     * @return \FOS\UserBundle\Command\ChangePasswordCommand
     */
    protected function getFosUser_Command_ChangePasswordService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Command/ChangePasswordCommand.php';

        $this->privates['fos_user.command.change_password'] = $instance = new \FOS\UserBundle\Command\ChangePasswordCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:change-password');

        return $instance;
    }

    /**
     * Gets the private 'fos_user.command.create_user' shared service.
     *
     * @return \FOS\UserBundle\Command\CreateUserCommand
     */
    protected function getFosUser_Command_CreateUserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Command/CreateUserCommand.php';

        $this->privates['fos_user.command.create_user'] = $instance = new \FOS\UserBundle\Command\CreateUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:create');

        return $instance;
    }

    /**
     * Gets the private 'fos_user.command.deactivate_user' shared service.
     *
     * @return \FOS\UserBundle\Command\DeactivateUserCommand
     */
    protected function getFosUser_Command_DeactivateUserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Command/DeactivateUserCommand.php';

        $this->privates['fos_user.command.deactivate_user'] = $instance = new \FOS\UserBundle\Command\DeactivateUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:deactivate');

        return $instance;
    }

    /**
     * Gets the private 'fos_user.command.demote_user' shared service.
     *
     * @return \FOS\UserBundle\Command\DemoteUserCommand
     */
    protected function getFosUser_Command_DemoteUserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Command/RoleCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Command/DemoteUserCommand.php';

        $this->privates['fos_user.command.demote_user'] = $instance = new \FOS\UserBundle\Command\DemoteUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:demote');

        return $instance;
    }

    /**
     * Gets the private 'fos_user.command.promote_user' shared service.
     *
     * @return \FOS\UserBundle\Command\PromoteUserCommand
     */
    protected function getFosUser_Command_PromoteUserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Command/RoleCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Command/PromoteUserCommand.php';

        $this->privates['fos_user.command.promote_user'] = $instance = new \FOS\UserBundle\Command\PromoteUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:promote');

        return $instance;
    }

    /**
     * Gets the private 'fos_user.listener.authentication' shared service.
     *
     * @return \FOS\UserBundle\EventListener\AuthenticationListener
     */
    protected function getFosUser_Listener_AuthenticationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/EventListener/AuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Security/LoginManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Security/LoginManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserChecker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        return $this->privates['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener(new \FOS\UserBundle\Security\LoginManager(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL), 'main');
    }

    /**
     * Gets the private 'fos_user.listener.flash' shared service.
     *
     * @return \FOS\UserBundle\EventListener\FlashListener
     */
    protected function getFosUser_Listener_FlashService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/EventListener/FlashListener.php';

        return $this->privates['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener(($this->services['session'] ?? $this->getSessionService()), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'fos_user.listener.resetting' shared service.
     *
     * @return \FOS\UserBundle\EventListener\ResettingListener
     */
    protected function getFosUser_Listener_ResettingService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/EventListener/ResettingListener.php';

        return $this->privates['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener(($this->services['router'] ?? $this->getRouterService()), 86400);
    }

    /**
     * Gets the private 'fos_user.profile.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ProfileFormType
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Type/ProfileFormType.php';

        return $this->privates['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('App\\Entity\\User');
    }

    /**
     * Gets the private 'fos_user.registration.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\RegistrationFormType
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Type/RegistrationFormType.php';

        return $this->privates['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('App\\Entity\\User');
    }

    /**
     * Gets the private 'fos_user.resetting.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ResettingFormType
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Type/ResettingFormType.php';

        return $this->privates['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('App\\Entity\\User');
    }

    /**
     * Gets the private 'fos_user.security.interactive_login_listener' shared service.
     *
     * @return \FOS\UserBundle\EventListener\LastLoginListener
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/EventListener/LastLoginListener.php';

        return $this->privates['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));
    }

    /**
     * Gets the private 'fos_user.user_listener' shared service.
     *
     * @return \FOS\UserBundle\Doctrine\UserListener
     */
    protected function getFosUser_UserListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Doctrine/UserListener.php';

        return $this->privates['fos_user.user_listener'] = new \FOS\UserBundle\Doctrine\UserListener(($this->privates['fos_user.util.password_updater'] ?? $this->getFosUser_Util_PasswordUpdaterService()), ($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService()));
    }

    /**
     * Gets the private 'fos_user.user_provider.username_email' shared service.
     *
     * @return \FOS\UserBundle\Security\EmailUserProvider
     */
    protected function getFosUser_UserProvider_UsernameEmailService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Security/UserProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Security/EmailUserProvider.php';

        return $this->privates['fos_user.user_provider.username_email'] = new \FOS\UserBundle\Security\EmailUserProvider(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));
    }

    /**
     * Gets the private 'fos_user.username_form_type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\UsernameFormType
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Type/UsernameFormType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/DataTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/DataTransformer/UserToUsernameTransformer.php';

        return $this->privates['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService())));
    }

    /**
     * Gets the private 'fos_user.util.canonical_fields_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = new \FOS\UserBundle\Util\Canonicalizer();

        return $this->privates['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /**
     * Gets the private 'fos_user.util.password_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\PasswordUpdater
     */
    protected function getFosUser_Util_PasswordUpdaterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/PasswordUpdaterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/PasswordUpdater.php';

        return $this->privates['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the private 'fos_user.util.user_manipulator' shared service.
     *
     * @return \FOS\UserBundle\Util\UserManipulator
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/UserManipulator.php';

        return $this->privates['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php';

        return $this->privates['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
        ], [
            'inline' => '?',
        ]), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true);
    }

    /**
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/RoutableFragmentRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/InlineFragmentRenderer.php';

        $this->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
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
     * Gets the private 'guedia_main.event.authentication_failure_listener' shared autowired service.
     *
     * @return \App\Listener\AuthenticationFailureListener
     */
    protected function getGuediaMain_Event_AuthenticationFailureListenerService()
    {
        include_once \dirname(__DIR__, 4).'/src/Listener/AuthenticationFailureListener.php';

        return $this->privates['guedia_main.event.authentication_failure_listener'] = new \App\Listener\AuthenticationFailureListener(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), $this, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['lexik_jwt_authentication.encoder'] ?? $this->getLexikJwtAuthentication_EncoderService()), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /**
     * Gets the private 'guedia_main.event.authentication_success_listener' shared autowired service.
     *
     * @return \App\Listener\AuthenticationSuccessListener
     */
    protected function getGuediaMain_Event_AuthenticationSuccessListenerService()
    {
        include_once \dirname(__DIR__, 4).'/src/Listener/AuthenticationSuccessListener.php';

        return $this->privates['guedia_main.event.authentication_success_listener'] = new \App\Listener\AuthenticationSuccessListener(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), $this, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'lexik_jwt_authentication.check_config_command' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Command\CheckConfigCommand
     */
    protected function getLexikJwtAuthentication_CheckConfigCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Command/CheckConfigCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/AbstractKeyLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/RawKeyLoader.php';

        $this->privates['lexik_jwt_authentication.check_config_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\CheckConfigCommand(($this->services['lexik_jwt_authentication.key_loader'] ?? ($this->services['lexik_jwt_authentication.key_loader'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader($this->getEnv('resolve:JWT_SECRET_KEY'), $this->getEnv('resolve:JWT_PUBLIC_KEY'), 'diarra'))), 'RS256');

        $instance->setName('lexik:jwt:check-config');

        return $instance;
    }

    /**
     * Gets the private 'lexik_jwt_authentication.generate_keypair_command' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateKeyPairCommand
     */
    protected function getLexikJwtAuthentication_GenerateKeypairCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Command/GenerateKeyPairCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $this->privates['lexik_jwt_authentication.generate_keypair_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateKeyPairCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), $this->getEnv('resolve:JWT_SECRET_KEY'), $this->getEnv('resolve:JWT_PUBLIC_KEY'), 'diarra', 'RS256');

        $instance->setName('lexik:jwt:generate-keypair');

        return $instance;
    }

    /**
     * Gets the private 'lexik_jwt_authentication.security.authentication.entry_point.main' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\EntryPoint\JWTEntryPoint
     *
     * @deprecated The "lexik_jwt_authentication.security.authentication.entry_point.main" service is deprecated since LexikJWTAuthenticationBundle version 2.0 and will be removed in 3.0
     */
    protected function getLexikJwtAuthentication_Security_Authentication_EntryPoint_MainService()
    {
        @trigger_error('The "lexik_jwt_authentication.security.authentication.entry_point.main" service is deprecated since LexikJWTAuthenticationBundle version 2.0 and will be removed in 3.0', E_USER_DEPRECATED);

        return new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\EntryPoint\JWTEntryPoint();
    }

    /**
     * Gets the private 'lexik_jwt_authentication.security.guard.jwt_token_authenticator' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Security\Guard\JWTTokenAuthenticator
     */
    protected function getLexikJwtAuthentication_Security_Guard_JwtTokenAuthenticatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Guard/JWTTokenAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/TokenExtractor/TokenExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/TokenExtractor/ChainTokenExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/TokenExtractor/AuthorizationHeaderTokenExtractor.php';

        return $this->privates['lexik_jwt_authentication.security.guard.jwt_token_authenticator'] = new \Lexik\Bundle\JWTAuthenticationBundle\Security\Guard\JWTTokenAuthenticator(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor([0 => new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor('Bearer', 'Authorization')]), new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage());
    }

    /**
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->privates['translator.default'] ?? $this->getTranslator_DefaultService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'mailer.mailer' shared service.
     *
     * @return \Symfony\Component\Mailer\Mailer
     */
    protected function getMailer_MailerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Mailer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/Transports.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport.php';

        return $this->privates['mailer.mailer'] = new \Symfony\Component\Mailer\Mailer((new \Symfony\Component\Mailer\Transport(new RewindableGenerator(function () {
            yield 0 => $this->getMailer_TransportFactory_SendgridService();
            yield 1 => $this->getMailer_TransportFactory_NullService();
            yield 2 => $this->getMailer_TransportFactory_SendmailService();
            yield 3 => $this->getMailer_TransportFactory_SmtpService();
        }, 4)))->fromStrings(['main' => $this->getEnv('MAILER_URL')]), NULL, ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'mailer.transport_factory.null' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\NullTransportFactory
     */
    protected function getMailer_TransportFactory_NullService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/NullTransportFactory.php';

        return new \Symfony\Component\Mailer\Transport\NullTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'mailer.transport_factory.sendgrid' shared service.
     *
     * @return \Symfony\Component\Mailer\Bridge\Sendgrid\Transport\SendgridTransportFactory
     */
    protected function getMailer_TransportFactory_SendgridService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/sendgrid-mailer/Transport/SendgridTransportFactory.php';

        return new \Symfony\Component\Mailer\Bridge\Sendgrid\Transport\SendgridTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'mailer.transport_factory.sendmail' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\SendmailTransportFactory
     */
    protected function getMailer_TransportFactory_SendmailService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/SendmailTransportFactory.php';

        return new \Symfony\Component\Mailer\Transport\SendmailTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'mailer.transport_factory.smtp' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory
     */
    protected function getMailer_TransportFactory_SmtpService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/Smtp/EsmtpTransportFactory.php';

        return new \Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'maker.auto_command.make_auth' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeAuthService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());
        $b = ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService());

        $this->privates['maker.auto_command.make_auth'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeAuthenticator($a, ($this->privates['maker.security_config_updater'] ?? ($this->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater())), $b, ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService())), $a, $b);

        $instance->setDescription('Creates a Guard authenticator of different flavors');
        $instance->setName('make:auth');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_command' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeCommand.php';

        $this->privates['maker.auto_command.make_command'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeCommand(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new console command class');
        $instance->setName('make:command');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_controller' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeController.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_controller'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeController($a), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new controller class');
        $instance->setName('make:controller');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_crud' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeCrudService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeCrud.php';

        $this->privates['maker.auto_command.make_crud'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeCrud(($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService())), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates CRUD for Doctrine entity class');
        $instance->setName('make:crud');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_docker_database' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeDockerDatabaseService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeDockerDatabase.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_docker_database'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeDockerDatabase($a), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Adds a database container to your docker-compose.yaml file');
        $instance->setName('make:docker:database');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_entity' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeEntityService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/InputAwareMakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeEntity.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());
        $b = ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService());

        $this->privates['maker.auto_command.make_entity'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeEntity($a, ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), \dirname(__DIR__, 4), $b, ($this->privates['maker.entity_class_generator'] ?? $this->getMaker_EntityClassGeneratorService())), $a, $b);

        $instance->setDescription('Creates or updates a Doctrine entity class, and optionally an API Platform resource');
        $instance->setName('make:entity');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_fixtures' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFixturesService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeFixtures.php';

        $this->privates['maker.auto_command.make_fixtures'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeFixtures(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new class to load Doctrine fixtures');
        $instance->setName('make:fixtures');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_form' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFormService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeForm.php';

        $this->privates['maker.auto_command.make_form'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeForm(($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService())), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new form class');
        $instance->setName('make:form');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_message' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeMessageService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeMessage.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_message'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMessage($a), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new message and handler');
        $instance->setName('make:message');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_messenger_middleware' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeMessengerMiddlewareService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeMessengerMiddleware.php';

        $this->privates['maker.auto_command.make_messenger_middleware'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMessengerMiddleware(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new messenger middleware');
        $instance->setName('make:messenger-middleware');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_migration' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeMigrationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/ApplicationAwareMakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeMigration.php';

        $this->privates['maker.auto_command.make_migration'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMigration(\dirname(__DIR__, 4)), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new migration based on database changes');
        $instance->setName('make:migration');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_registration_form' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeRegistrationFormService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeRegistrationForm.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_registration_form'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeRegistrationForm($a, ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService()), ($this->services['router'] ?? $this->getRouterService()), ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService())), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new registration form system');
        $instance->setName('make:registration-form');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_reset_password' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeResetPasswordService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeResetPassword.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_reset_password'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeResetPassword($a, ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), ($this->privates['maker.entity_class_generator'] ?? $this->getMaker_EntityClassGeneratorService())), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Create controller, entity, and repositories for use with symfonycasts/reset-password-bundle');
        $instance->setName('make:reset-password');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_serializer_encoder' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSerializerEncoderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeSerializerEncoder.php';

        $this->privates['maker.auto_command.make_serializer_encoder'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSerializerEncoder(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new serializer encoder class');
        $instance->setName('make:serializer:encoder');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_serializer_normalizer' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSerializerNormalizerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeSerializerNormalizer.php';

        $this->privates['maker.auto_command.make_serializer_normalizer'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSerializerNormalizer(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new serializer normalizer class');
        $instance->setName('make:serializer:normalizer');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_subscriber' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSubscriberService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/EventRegistry.php';

        $this->privates['maker.auto_command.make_subscriber'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSubscriber(new \Symfony\Bundle\MakerBundle\EventRegistry(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()))), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new event subscriber class');
        $instance->setName('make:subscriber');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_test' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeTestService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/InputAwareMakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeTest.php';

        $this->privates['maker.auto_command.make_test'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeTest(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new test class');
        $instance->setName('make:test');
        $instance->setAliases([0 => 'make:unit-test', 1 => 'make:functional-test']);

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_twig_extension' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeTwigExtensionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeTwigExtension.php';

        $this->privates['maker.auto_command.make_twig_extension'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeTwigExtension(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new Twig extension class');
        $instance->setName('make:twig-extension');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_user' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeUserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeUser.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Security/UserClassBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_user'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeUser($a, new \Symfony\Bundle\MakerBundle\Security\UserClassBuilder(), ($this->privates['maker.security_config_updater'] ?? ($this->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater())), ($this->privates['maker.entity_class_generator'] ?? $this->getMaker_EntityClassGeneratorService()), ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService())), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new security user class');
        $instance->setName('make:user');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_validator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeValidator.php';

        $this->privates['maker.auto_command.make_validator'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeValidator(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new validator and constraint class');
        $instance->setName('make:validator');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_voter' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeVoterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeVoter.php';

        $this->privates['maker.auto_command.make_voter'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeVoter(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new security voter class');
        $instance->setName('make:voter');

        return $instance;
    }

    /**
     * Gets the private 'maker.doctrine_helper' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper
     */
    protected function getMaker_DoctrineHelperService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Doctrine/DoctrineHelper.php';

        return $this->privates['maker.doctrine_helper'] = new \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper('App\\Entity', ($this->privates['maker.php_compat_util'] ?? $this->getMaker_PhpCompatUtilService()), ($this->services['doctrine'] ?? $this->getDoctrineService()), false, ['default' => [0 => [0 => 'App\\Entity', 1 => ($this->privates['doctrine.orm.default_annotation_metadata_driver'] ?? $this->getDoctrine_Orm_DefaultAnnotationMetadataDriverService())]]]);
    }

    /**
     * Gets the private 'maker.entity_class_generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Doctrine\EntityClassGenerator
     */
    protected function getMaker_EntityClassGeneratorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Doctrine/EntityClassGenerator.php';

        $this->privates['maker.entity_class_generator'] = $instance = new \Symfony\Bundle\MakerBundle\Doctrine\EntityClassGenerator(($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()), ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()));

        $instance->setMangerRegistryClassName('Doctrine\\Persistence\\ManagerRegistry');

        return $instance;
    }

    /**
     * Gets the private 'maker.file_manager' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\FileManager
     */
    protected function getMaker_FileManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/FileManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Util/AutoloaderUtil.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Util/ComposerAutoloaderFinder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Util/MakerFileLinkFormatter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $this->privates['maker.file_manager'] = new \Symfony\Bundle\MakerBundle\FileManager(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), new \Symfony\Bundle\MakerBundle\Util\AutoloaderUtil(new \Symfony\Bundle\MakerBundle\Util\ComposerAutoloaderFinder('App')), new \Symfony\Bundle\MakerBundle\Util\MakerFileLinkFormatter(($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())), \dirname(__DIR__, 4), (\dirname(__DIR__, 4).'/templates'));
    }

    /**
     * Gets the private 'maker.generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Generator
     */
    protected function getMaker_GeneratorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Generator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Util/TemplateComponentGenerator.php';

        $a = ($this->privates['maker.php_compat_util'] ?? $this->getMaker_PhpCompatUtilService());

        return $this->privates['maker.generator'] = new \Symfony\Bundle\MakerBundle\Generator(($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), 'App', $a, new \Symfony\Bundle\MakerBundle\Util\TemplateComponentGenerator($a));
    }

    /**
     * Gets the private 'maker.php_compat_util' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Util\PhpCompatUtil
     */
    protected function getMaker_PhpCompatUtilService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Util/PhpCompatUtil.php';

        return $this->privates['maker.php_compat_util'] = new \Symfony\Bundle\MakerBundle\Util\PhpCompatUtil(($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()));
    }

    /**
     * Gets the private 'maker.renderer.form_type_renderer' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer
     */
    protected function getMaker_Renderer_FormTypeRendererService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Renderer/FormTypeRenderer.php';

        return $this->privates['maker.renderer.form_type_renderer'] = new \Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer(($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));
    }

    /**
     * Gets the private 'mime_types' shared service.
     *
     * @return \Symfony\Component\Mime\MimeTypes
     */
    protected function getMimeTypesService()
    {
        $this->privates['mime_types'] = $instance = new \Symfony\Component\Mime\MimeTypes();

        $instance->setDefault($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.trace' shared service.
     *
     * @return \Monolog\Handler\RotatingFileHandler
     */
    protected function getMonolog_Handler_TraceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php';

        $this->privates['monolog.handler.trace'] = $instance = new \Monolog\Handler\RotatingFileHandler((\dirname(__DIR__, 3).'/log/devtrace.log'), 100, 100, true, NULL, false);

        $instance->setFilenameFormat('{filename}-{date}', 'Y-m-d');
        $instance->setFormatter(($this->services['app.formatter'] ?? $this->getApp_FormatterService()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.null_internal'] ?? ($this->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler())));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

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

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.null_internal'] ?? ($this->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler())));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

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

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.null_internal'] ?? ($this->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler())));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->privates['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.null_internal'] ?? ($this->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler())));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'nelmio_cors.cors_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->privates['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener(new \Nelmio\CorsBundle\Options\Resolver([0 => new \Nelmio\CorsBundle\Options\ConfigProvider($this->parameters['nelmio_cors.map'], $this->getParameter('nelmio_cors.defaults'))]));
    }

    /**
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL, false, false);
    }

    /**
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false), true);
    }

    /**
     * Gets the private 'property_info' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoExtractor
     */
    protected function getPropertyInfoService()
    {
        return $this->privates['property_info'] = new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.serializer_extractor'] ?? $this->getPropertyInfo_SerializerExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
            yield 2 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
            yield 2 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 2), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1));
    }

    /**
     * Gets the private 'property_info.serializer_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor
     */
    protected function getPropertyInfo_SerializerExtractorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/Extractor/SerializerExtractor.php';

        return $this->privates['property_info.serializer_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor(($this->privates['api_platform.serializer.mapping.class_metadata_factory'] ?? $this->getApiPlatform_Serializer_Mapping_ClassMetadataFactoryService()));
    }

    /**
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/RouterCacheWarmer.php';

        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
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
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), true);
    }

    /**
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AccessListener.php';

        return $this->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMap.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcher.php';

        $this->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/addUser'), [0 => 'ROLE_PP'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/interim'), [0 => 'ROLE_PP'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/addInterim'), [0 => 'ROLE_PP'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/reinitialisationMotDePass'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/reset'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/check-email'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/test'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/'), [0 => 'IS_AUTHENTICATED_FULLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'), [0 => 'ROLE_PP'], NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.listener.anonymous.app_check_email' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_AppCheckEmailService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.app_check_email'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.authentication.listener.anonymous.app_reset_password' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_AppResetPasswordService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.app_reset_password'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.authentication.listener.anonymous.login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_LoginService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.login'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.authentication.listener.anonymous.reinitialisationMotDePass' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_ReinitialisationMotDePassService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.reinitialisationMotDePass'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.authentication.listener.anonymous.test' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_TestService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.test'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.authentication.listener.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Guard_MainService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Firewall/GuardAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/GuardAuthenticatorHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        $a = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), [0 => 'login', 1 => 'reinitialisationMotDePass', 2 => 'app_reset_password', 3 => 'app_check_email', 4 => 'test', 5 => 'main']);
        $a->setSessionAuthenticationStrategy(($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));

        return $this->privates['security.authentication.listener.guard.main'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener($a, ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), 'main', new RewindableGenerator(function () {
            yield 0 => ($this->privates['lexik_jwt_authentication.security.guard.jwt_token_authenticator'] ?? $this->getLexikJwtAuthentication_Security_Guard_JwtTokenAuthenticatorService());
        }, 1), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), true);
    }

    /**
     * Gets the private 'security.authentication.listener.json.login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\UsernamePasswordJsonAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Json_LoginService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/UsernamePasswordJsonAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Http/Authentication/AuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/CustomAuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Http/Authentication/AuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        $a = ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService());

        $this->privates['security.authentication.listener.json.login'] = $instance = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordJsonAuthenticationListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), 'login', new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), $a, []), [], 'login'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler(new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler($a), []), ['check_path' => 'fos_user_security_check', 'use_forward' => false, 'require_previous_session' => false, 'username_path' => 'username', 'password_path' => 'password'], ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), $a, ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));

        $instance->setSessionAuthenticationStrategy(new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('none'));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.listener.jwt.main' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Security\Firewall\JWTListener
     *
     * @deprecated The "security.authentication.listener.jwt.main" service is deprecated since LexikJWTAuthenticationBundle version 2.0 and will be removed in 3.0
     */
    protected function getSecurity_Authentication_Listener_Jwt_MainService()
    {
        @trigger_error('The "security.authentication.listener.jwt.main" service is deprecated since LexikJWTAuthenticationBundle version 2.0 and will be removed in 3.0', E_USER_DEPRECATED);

        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/TokenExtractor/TokenExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/TokenExtractor/AuthorizationHeaderTokenExtractor.php';

        $this->privates['security.authentication.listener.jwt.main'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Security\Firewall\JWTListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ['authorization_header' => ['enabled' => true, 'prefix' => 'Bearer', 'name' => 'Authorization'], 'cookie' => ['enabled' => false, 'name' => 'BEARER'], 'query_parameter' => ['enabled' => false, 'name' => 'bearer'], 'throw_exceptions' => false, 'create_entry_point' => true, 'authentication_provider' => 'lexik_jwt_authentication.security.authentication.provider', 'authentication_listener' => 'lexik_jwt_authentication.security.authentication.listener']);

        $instance->setDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
        $instance->addTokenExtractor(new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor('Bearer', 'Authorization'));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.dao.login'] ?? $this->getSecurity_Authentication_Provider_Dao_LoginService());
            yield 1 => ($this->privates['security.authentication.provider.anonymous.login'] ?? ($this->privates['security.authentication.provider.anonymous.login'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 2 => ($this->privates['security.authentication.provider.anonymous.reinitialisationMotDePass'] ?? ($this->privates['security.authentication.provider.anonymous.reinitialisationMotDePass'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 3 => ($this->privates['security.authentication.provider.anonymous.app_reset_password'] ?? ($this->privates['security.authentication.provider.anonymous.app_reset_password'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 4 => ($this->privates['security.authentication.provider.anonymous.app_check_email'] ?? ($this->privates['security.authentication.provider.anonymous.app_check_email'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 5 => ($this->privates['security.authentication.provider.anonymous.test'] ?? ($this->privates['security.authentication.provider.anonymous.test'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 6 => ($this->privates['security.authentication.provider.guard.main'] ?? $this->getSecurity_Authentication_Provider_Guard_MainService());
            yield 7 => ($this->privates['security.authentication.provider.jwt.main'] ?? $this->getSecurity_Authentication_Provider_Jwt_MainService());
        }, 8), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.provider.dao.login' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Dao_LoginService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/UserAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/DaoAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserChecker.php';

        return $this->privates['security.authentication.provider.dao.login'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($this->privates['security.user.provider.concrete.chain_provider'] ?? $this->getSecurity_User_Provider_Concrete_ChainProviderService()), ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), 'login', ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), true);
    }

    /**
     * Gets the private 'security.authentication.provider.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Guard_MainService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Provider/GuardAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserChecker.php';

        return $this->privates['security.authentication.provider.guard.main'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['lexik_jwt_authentication.security.guard.jwt_token_authenticator'] ?? $this->getLexikJwtAuthentication_Security_Guard_JwtTokenAuthenticatorService());
        }, 1), ($this->privates['security.user.provider.concrete.chain_provider'] ?? $this->getSecurity_User_Provider_Concrete_ChainProviderService()), 'main', ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /**
     * Gets the private 'security.authentication.provider.jwt.main' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Security\Authentication\Provider\JWTProvider
     *
     * @deprecated The "security.authentication.provider.jwt.main" service is deprecated since LexikJWTAuthenticationBundle version 2.0 and will be removed in 3.0
     */
    protected function getSecurity_Authentication_Provider_Jwt_MainService()
    {
        @trigger_error('The "security.authentication.provider.jwt.main" service is deprecated since LexikJWTAuthenticationBundle version 2.0 and will be removed in 3.0', E_USER_DEPRECATED);

        $this->privates['security.authentication.provider.jwt.main'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Security\Authentication\Provider\JWTProvider(($this->privates['security.user.provider.concrete.chain_provider'] ?? $this->getSecurity_User_Provider_Concrete_ChainProviderService()), ($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), 'username');

        $instance->setUserIdentityField('username');

        return $instance;
    }

    /**
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ChannelListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/RetryAuthenticationEntryPoint.php';

        return $this->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /**
     * Gets the private 'security.command.user_password_encoder' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getSecurity_Command_UserPasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Command/UserPasswordEncoderCommand.php';

        $this->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), [0 => 'FOS\\UserBundle\\Model\\UserInterface']);

        $instance->setName('security:encode-password');

        return $instance;
    }

    /**
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactory_GenericService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/EncoderFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/EncoderFactory.php';

        return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['FOS\\UserBundle\\Model\\UserInterface' => ['algorithm' => 'sha512', 'migrate_from' => [], 'hash_algorithm' => 'sha512', 'key_length' => 40, 'ignore_case' => false, 'encode_as_base64' => true, 'iterations' => 5000, 'cost' => NULL, 'memory_cost' => NULL, 'time_cost' => NULL, 'threads' => NULL]]);
    }

    /**
     * Gets the private 'security.expression_language' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\ExpressionLanguage
     */
    protected function getSecurity_ExpressionLanguageService()
    {
        $this->privates['security.expression_language'] = $instance = new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));

        $instance->registerProvider(($this->privates['api_platform.security.expression_language_provider'] ?? ($this->privates['api_platform.security.expression_language_provider'] = new \ApiPlatform\Core\Security\Core\Authorization\ExpressionLanguageProvider())));

        return $instance;
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.app_check_email' => ['privates', 'security.firewall.map.context.app_check_email', 'getSecurity_Firewall_Map_Context_AppCheckEmailService', false],
            'security.firewall.map.context.app_reset_password' => ['privates', 'security.firewall.map.context.app_reset_password', 'getSecurity_Firewall_Map_Context_AppResetPasswordService', false],
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService', false],
            'security.firewall.map.context.login' => ['privates', 'security.firewall.map.context.login', 'getSecurity_Firewall_Map_Context_LoginService', false],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService', false],
            'security.firewall.map.context.reinitialisationMotDePass' => ['privates', 'security.firewall.map.context.reinitialisationMotDePass', 'getSecurity_Firewall_Map_Context_ReinitialisationMotDePassService', false],
            'security.firewall.map.context.test' => ['privates', 'security.firewall.map.context.test', 'getSecurity_Firewall_Map_Context_TestService', false],
        ], [
            'security.firewall.map.context.app_check_email' => '?',
            'security.firewall.map.context.app_reset_password' => '?',
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.login' => '?',
            'security.firewall.map.context.main' => '?',
            'security.firewall.map.context.reinitialisationMotDePass' => '?',
            'security.firewall.map.context.test' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.login' => ($this->privates['.security.request_matcher.aOksG4F'] ?? ($this->privates['.security.request_matcher.aOksG4F'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/login')));
            yield 'security.firewall.map.context.reinitialisationMotDePass' => ($this->privates['.security.request_matcher.MdLxIOZ'] ?? ($this->privates['.security.request_matcher.MdLxIOZ'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/reinitialisationMotDePass')));
            yield 'security.firewall.map.context.app_reset_password' => ($this->privates['.security.request_matcher.HmxCZ0D'] ?? ($this->privates['.security.request_matcher.HmxCZ0D'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/reset')));
            yield 'security.firewall.map.context.app_check_email' => ($this->privates['.security.request_matcher.lQCKgn3'] ?? ($this->privates['.security.request_matcher.lQCKgn3'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/check-email')));
            yield 'security.firewall.map.context.test' => ($this->privates['.security.request_matcher.dyWhywe'] ?? ($this->privates['.security.request_matcher.dyWhywe'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/test')));
            yield 'security.firewall.map.context.main' => ($this->privates['.security.request_matcher.HS_okLf'] ?? ($this->privates['.security.request_matcher.HS_okLf'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/*')));
        }, 7));
    }

    /**
     * Gets the private 'security.firewall.map.context.app_check_email' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_AppCheckEmailService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        return $this->privates['security.firewall.map.context.app_check_email'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.authentication.listener.anonymous.app_check_email'] ?? $this->getSecurity_Authentication_Listener_Anonymous_AppCheckEmailService());
            yield 2 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 3), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), 'app_check_email', NULL, NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), true), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('app_check_email', 'security.user_checker', '.security.request_matcher.lQCKgn3', true, true, NULL, NULL, NULL, NULL, NULL, [0 => 'anonymous'], NULL));
    }

    /**
     * Gets the private 'security.firewall.map.context.app_reset_password' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_AppResetPasswordService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        return $this->privates['security.firewall.map.context.app_reset_password'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.authentication.listener.anonymous.app_reset_password'] ?? $this->getSecurity_Authentication_Listener_Anonymous_AppResetPasswordService());
            yield 2 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 3), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), 'app_reset_password', NULL, NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), true), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('app_reset_password', 'security.user_checker', '.security.request_matcher.HmxCZ0D', true, true, NULL, NULL, NULL, NULL, NULL, [0 => 'anonymous'], NULL));
    }

    /**
     * Gets the private 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        return $this->privates['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), NULL, NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', '.security.request_matcher.Iy.T22O', false, false, '', '', '', '', '', [], NULL));
    }

    /**
     * Gets the private 'security.firewall.map.context.login' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_LoginService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        return $this->privates['security.firewall.map.context.login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.authentication.listener.json.login'] ?? $this->getSecurity_Authentication_Listener_Json_LoginService());
            yield 2 => ($this->privates['security.authentication.listener.anonymous.login'] ?? $this->getSecurity_Authentication_Listener_Anonymous_LoginService());
            yield 3 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 4), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), 'login', NULL, NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), true), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('login', 'security.user_checker', '.security.request_matcher.aOksG4F', true, true, 'security.user.provider.concrete.chain_provider', NULL, NULL, NULL, NULL, [0 => 'json_login', 1 => 'anonymous'], NULL));
    }

    /**
     * Gets the private 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        return $this->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.authentication.listener.guard.main'] ?? $this->getSecurity_Authentication_Listener_Guard_MainService());
            yield 2 => ($this->privates['security.authentication.listener.jwt.main'] ?? $this->getSecurity_Authentication_Listener_Jwt_MainService());
            yield 3 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 4), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), 'main', $this->getLexikJwtAuthentication_Security_Authentication_EntryPoint_MainService(), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), true), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', '.security.request_matcher.HS_okLf', true, true, 'security.user.provider.concrete.chain_provider', NULL, 'lexik_jwt_authentication.security.authentication.entry_point.main', NULL, NULL, [0 => 'guard', 1 => 'lexik_jwt'], NULL));
    }

    /**
     * Gets the private 'security.firewall.map.context.reinitialisationMotDePass' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_ReinitialisationMotDePassService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        return $this->privates['security.firewall.map.context.reinitialisationMotDePass'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.authentication.listener.anonymous.reinitialisationMotDePass'] ?? $this->getSecurity_Authentication_Listener_Anonymous_ReinitialisationMotDePassService());
            yield 2 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 3), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), 'reinitialisationMotDePass', NULL, NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), true), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('reinitialisationMotDePass', 'security.user_checker', '.security.request_matcher.MdLxIOZ', true, true, 'fos_user.user_provider.username_email', NULL, NULL, NULL, NULL, [0 => 'anonymous'], NULL));
    }

    /**
     * Gets the private 'security.firewall.map.context.test' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_TestService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        return $this->privates['security.firewall.map.context.test'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.authentication.listener.anonymous.test'] ?? $this->getSecurity_Authentication_Listener_Anonymous_TestService());
            yield 2 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 3), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), 'test', NULL, NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), true), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('test', 'security.user_checker', '.security.request_matcher.dyWhywe', true, true, NULL, NULL, NULL, NULL, NULL, [0 => 'anonymous'], NULL));
    }

    /**
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/HttpUtils.php';

        $a = ($this->services['router'] ?? $this->getRouterService());

        return $this->privates['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i', '{^https://%s$}i');
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->privates['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
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
     * Gets the private 'security.user.provider.concrete.chain_provider' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\ChainUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_ChainProviderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/ChainUserProvider.php';

        return $this->privates['security.user.provider.concrete.chain_provider'] = new \Symfony\Component\Security\Core\User\ChainUserProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['fos_user.user_provider.username_email'] ?? $this->getFosUser_UserProvider_UsernameEmailService());
            yield 1 => ($this->privates['security.user.provider.concrete.my_ldap'] ?? $this->getSecurity_User_Provider_Concrete_MyLdapService());
        }, 2));
    }

    /**
     * Gets the private 'security.user.provider.concrete.my_ldap' shared service.
     *
     * @return \Symfony\Component\Ldap\Security\LdapUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_MyLdapService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ldap/Security/LdapUserProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ldap/LdapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ldap/Ldap.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ldap/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ldap/Adapter/ExtLdap/Adapter.php';

        return $this->privates['security.user.provider.concrete.my_ldap'] = new \Symfony\Component\Ldap\Security\LdapUserProvider(new \Symfony\Component\Ldap\Ldap(new \Symfony\Component\Ldap\Adapter\ExtLdap\Adapter(['host' => '10.100.55.80', 'port' => 389, 'encryption' => 'tls', 'options' => ['protocol_version' => 3, 'referrals' => false]])), 'dc=orange-sonatel,dc=com', 'cn=read-only-admin,dc=orange-sonatel,dc=com', 'password', [0 => 'ROLE_USER'], 'sAMAccountName', '({uid_key}={username})', NULL, [0 => 'email']);
    }

    /**
     * Gets the private 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Validator/Constraints/UserPasswordValidator.php';

        return $this->privates['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
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
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
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
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage();
        $a->registerProvider(($this->privates['api_platform.security.expression_language_provider'] ?? ($this->privates['api_platform.security.expression_language_provider'] = new \ApiPlatform\Core\Security\Core\Authorization\ExpressionLanguageProvider())));

        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), $a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        $this->privates['sensio_framework_extra.view.listener'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('sensio_framework_extra.view.listener', $this));

        return $instance;
    }

    /**
     * Gets the private 'serializer.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer
     */
    protected function getSerializer_Mapping_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/SerializerCacheWarmer.php';

        return $this->privates['serializer.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))], ($this->targetDir.''.'/serialization.php'));
    }

    /**
     * Gets the private 'serializer.name_converter.metadata_aware' shared service.
     *
     * @return \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter
     */
    protected function getSerializer_NameConverter_MetadataAwareService()
    {
        return $this->privates['serializer.name_converter.metadata_aware'] = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter(($this->privates['api_platform.serializer.mapping.class_metadata_factory'] ?? $this->getApiPlatform_Serializer_Mapping_ClassMetadataFactoryService()));
    }

    /**
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/NativeSessionStorage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php';

        return $this->privates['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /**
     * Gets the private 'swiftmailer.command.debug' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\DebugCommand
     */
    protected function getSwiftmailer_Command_DebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Command/AbstractSwiftMailerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Command/DebugCommand.php';

        $this->privates['swiftmailer.command.debug'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\DebugCommand();

        $instance->setName('debug:swiftmailer');

        return $instance;
    }

    /**
     * Gets the private 'swiftmailer.command.new_email' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand
     */
    protected function getSwiftmailer_Command_NewEmailService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Command/AbstractSwiftMailerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Command/NewEmailCommand.php';

        $this->privates['swiftmailer.command.new_email'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand();

        $instance->setName('swiftmailer:email:send');

        return $instance;
    }

    /**
     * Gets the private 'swiftmailer.command.send_email' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\SendEmailCommand
     */
    protected function getSwiftmailer_Command_SendEmailService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Command/AbstractSwiftMailerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Command/SendEmailCommand.php';

        $this->privates['swiftmailer.command.send_email'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\SendEmailCommand();

        $instance->setName('swiftmailer:spool:send');

        return $instance;
    }

    /**
     * Gets the private 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/EventListener/EmailSenderListener.php';

        return $this->privates['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'symfonycasts.reset_password.cleaner' shared service.
     *
     * @return \SymfonyCasts\Bundle\ResetPassword\Util\ResetPasswordCleaner
     */
    protected function getSymfonycasts_ResetPassword_CleanerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Util/ResetPasswordCleaner.php';

        return $this->privates['symfonycasts.reset_password.cleaner'] = new \SymfonyCasts\Bundle\ResetPassword\Util\ResetPasswordCleaner(($this->privates['App\\Repository\\ResetPasswordRequestRepository'] ?? $this->getResetPasswordRequestRepositoryService()), true);
    }

    /**
     * Gets the private 'templating.cache_warmer.template_paths' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer
     *
     * @deprecated The "templating.cache_warmer.template_paths" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_CacheWarmer_TemplatePathsService()
    {
        @trigger_error('The "templating.cache_warmer.template_paths" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.cache_warmer.template_paths'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer(($this->privates['templating.finder'] ?? $this->getTemplating_FinderService()), ($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()));
    }

    /**
     * Gets the private 'templating.engine.php' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine
     *
     * @deprecated The "templating.engine.php" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Engine_PhpService()
    {
        @trigger_error('The "templating.engine.php" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        $this->privates['templating.engine.php'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine(($this->privates['templating.name_parser'] ?? $this->getTemplating_NameParserService()), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'templating.helper.actions' => ['privates', 'templating.helper.actions', 'getTemplating_Helper_ActionsService', false],
            'templating.helper.assets' => ['privates', 'templating.helper.assets', 'getTemplating_Helper_AssetsService', false],
            'templating.helper.code' => ['privates', 'templating.helper.code', 'getTemplating_Helper_CodeService', false],
            'templating.helper.form' => ['privates', 'templating.helper.form', 'getTemplating_Helper_FormService', false],
            'templating.helper.logout_url' => ['privates', 'templating.helper.logout_url', 'getTemplating_Helper_LogoutUrlService', false],
            'templating.helper.request' => ['privates', 'templating.helper.request', 'getTemplating_Helper_RequestService', false],
            'templating.helper.router' => ['privates', 'templating.helper.router', 'getTemplating_Helper_RouterService', false],
            'templating.helper.security' => ['privates', 'templating.helper.security', 'getTemplating_Helper_SecurityService', false],
            'templating.helper.session' => ['privates', 'templating.helper.session', 'getTemplating_Helper_SessionService', false],
            'templating.helper.slots' => ['privates', 'templating.helper.slots', 'getTemplating_Helper_SlotsService', false],
            'templating.helper.stopwatch' => ['privates', 'templating.helper.stopwatch', 'getTemplating_Helper_StopwatchService', false],
            'templating.helper.translator' => ['privates', 'templating.helper.translator', 'getTemplating_Helper_TranslatorService', false],
        ], [
            'templating.helper.actions' => '?',
            'templating.helper.assets' => '?',
            'templating.helper.code' => '?',
            'templating.helper.form' => '?',
            'templating.helper.logout_url' => '?',
            'templating.helper.request' => '?',
            'templating.helper.router' => '?',
            'templating.helper.security' => '?',
            'templating.helper.session' => '?',
            'templating.helper.slots' => '?',
            'templating.helper.stopwatch' => '?',
            'templating.helper.translator' => '?',
        ]), ($this->services['templating.loader'] ?? $this->getTemplating_LoaderService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), $this->getTemplating_GlobalsService());

        $instance->setCharset('UTF-8');
        $instance->setHelpers(['slots' => 'templating.helper.slots', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'assets' => 'templating.helper.assets', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'stopwatch' => 'templating.helper.stopwatch', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security']);

        return $instance;
    }

    /**
     * Gets the private 'templating.engine.twig' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     *
     * @deprecated The "templating.engine.twig" service is deprecated since Symfony 4.4 and will be removed in 5.0.
     */
    protected function getTemplating_Engine_TwigService()
    {
        @trigger_error('The "templating.engine.twig" service is deprecated since Symfony 4.4 and will be removed in 5.0.', E_USER_DEPRECATED);

        return new \Symfony\Bundle\TwigBundle\TwigEngine(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['templating.name_parser'] ?? $this->getTemplating_NameParserService()), ($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()));
    }

    /**
     * Gets the private 'templating.finder' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder
     *
     * @deprecated The "templating.finder" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_FinderService()
    {
        @trigger_error('The "templating.finder" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        include_once \dirname(__DIR__, 4).'/vendor/symfony/templating/TemplateNameParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Templating/TemplateFilenameParser.php';

        return $this->privates['templating.finder'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder(($this->services['kernel'] ?? $this->get('kernel', 1)), new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser(), (\dirname(__DIR__, 4).'/src/Resources'));
    }

    /**
     * Gets the private 'templating.form.engine' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine
     *
     * @deprecated The "templating.form.engine" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Form_EngineService()
    {
        @trigger_error('The "templating.form.engine" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine(($this->privates['templating.engine.php'] ?? $this->getTemplating_Engine_PhpService()), $this->parameters['templating.helper.form.resources']);
    }

    /**
     * Gets the private 'templating.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     *
     * @deprecated The "templating.form.renderer" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Form_RendererService()
    {
        @trigger_error('The "templating.form.renderer" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return new \Symfony\Component\Form\FormRenderer($this->getTemplating_Form_EngineService(), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /**
     * Gets the private 'templating.globals' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables
     *
     * @deprecated The "templating.globals" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_GlobalsService()
    {
        @trigger_error('The "templating.globals" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }

    /**
     * Gets the private 'templating.helper.actions' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper
     *
     * @deprecated The "templating.helper.actions" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_ActionsService()
    {
        @trigger_error('The "templating.helper.actions" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper(($this->privates['fragment.handler'] ?? $this->getFragment_HandlerService()));
    }

    /**
     * Gets the private 'templating.helper.assets' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper
     *
     * @deprecated The "templating.helper.assets" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_AssetsService()
    {
        @trigger_error('The "templating.helper.assets" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper(($this->privates['assets.packages'] ?? $this->getAssets_PackagesService()));
    }

    /**
     * Gets the private 'templating.helper.code' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper
     *
     * @deprecated The "templating.helper.code" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_CodeService()
    {
        @trigger_error('The "templating.helper.code" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), \dirname(__DIR__, 4), 'UTF-8');
    }

    /**
     * Gets the private 'templating.helper.form' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper
     *
     * @deprecated The "templating.helper.form" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_FormService()
    {
        @trigger_error('The "templating.helper.form" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper($this->getTemplating_Form_RendererService());
    }

    /**
     * Gets the private 'templating.helper.logout_url' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper
     *
     * @deprecated The "templating.helper.logout_url" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        @trigger_error('The "templating.helper.logout_url" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'templating.helper.request' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper
     *
     * @deprecated The "templating.helper.request" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_RequestService()
    {
        @trigger_error('The "templating.helper.request" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'templating.helper.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper
     *
     * @deprecated The "templating.helper.router" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_RouterService()
    {
        @trigger_error('The "templating.helper.router" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper(($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'templating.helper.security' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper
     *
     * @deprecated The "templating.helper.security" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_SecurityService()
    {
        @trigger_error('The "templating.helper.security" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'templating.helper.session' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper
     *
     * @deprecated The "templating.helper.session" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_SessionService()
    {
        @trigger_error('The "templating.helper.session" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'templating.helper.slots' shared service.
     *
     * @return \Symfony\Component\Templating\Helper\SlotsHelper
     *
     * @deprecated The "templating.helper.slots" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_SlotsService()
    {
        @trigger_error('The "templating.helper.slots" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }

    /**
     * Gets the private 'templating.helper.stopwatch' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper
     *
     * @deprecated The "templating.helper.stopwatch" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_StopwatchService()
    {
        @trigger_error('The "templating.helper.stopwatch" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.stopwatch'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'templating.helper.translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper
     *
     * @deprecated The "templating.helper.translator" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_TranslatorService()
    {
        @trigger_error('The "templating.helper.translator" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     *
     * @deprecated The "templating.locator" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_LocatorService()
    {
        @trigger_error('The "templating.locator" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(($this->privates['file_locator'] ?? $this->getFileLocatorService()), $this->targetDir.'');
    }

    /**
     * Gets the private 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     *
     * @deprecated The "templating.name_parser" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_NameParserService()
    {
        @trigger_error('The "templating.name_parser" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)));
    }

    /**
     * Gets the private 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/ExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/ChainExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/AbstractFileExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/PhpExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Translation/TwigExtractor.php';

        $this->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', new \Symfony\Component\Translation\Extractor\PhpExtractor());
        $instance->addExtractor('twig', new \Symfony\Bridge\Twig\Translation\TwigExtractor(($this->services['twig'] ?? $this->getTwigService())));

        return $instance;
    }

    /**
     * Gets the private 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/CsvFileLoader.php';

        return $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the private 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuDatFileLoader.php';

        return $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the private 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IniFileLoader.php';

        return $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the private 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/JsonFileLoader.php';

        return $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/MoFileLoader.php';

        return $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the private 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PhpFileLoader.php';

        return $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the private 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PoFileLoader.php';

        return $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the private 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/QtFileLoader.php';

        return $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the private 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';

        return $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the private 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/XliffFileLoader.php';

        return $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the private 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/YamlFileLoader.php';

        return $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the private 'translation.reader' shared service.
     *
     * @return \Symfony\Component\Translation\Reader\TranslationReader
     */
    protected function getTranslation_ReaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Reader/TranslationReaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Reader/TranslationReader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/XliffFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PoFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/MoFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/QtFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/CsvFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuDatFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IniFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/JsonFileLoader.php';

        $this->privates['translation.reader'] = $instance = new \Symfony\Component\Translation\Reader\TranslationReader();

        $a = ($this->privates['translation.loader.yml'] ?? ($this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()));
        $b = ($this->privates['translation.loader.xliff'] ?? ($this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()));

        $instance->addLoader('php', ($this->privates['translation.loader.php'] ?? ($this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())));
        $instance->addLoader('yaml', $a);
        $instance->addLoader('yml', $a);
        $instance->addLoader('xlf', $b);
        $instance->addLoader('xliff', $b);
        $instance->addLoader('po', ($this->privates['translation.loader.po'] ?? ($this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())));
        $instance->addLoader('mo', ($this->privates['translation.loader.mo'] ?? ($this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())));
        $instance->addLoader('ts', ($this->privates['translation.loader.qt'] ?? ($this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())));
        $instance->addLoader('csv', ($this->privates['translation.loader.csv'] ?? ($this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())));
        $instance->addLoader('res', ($this->privates['translation.loader.res'] ?? ($this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())));
        $instance->addLoader('dat', ($this->privates['translation.loader.dat'] ?? ($this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())));
        $instance->addLoader('ini', ($this->privates['translation.loader.ini'] ?? ($this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())));
        $instance->addLoader('json', ($this->privates['translation.loader.json'] ?? ($this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())));

        return $instance;
    }

    /**
     * Gets the private 'translation.warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer
     */
    protected function getTranslation_WarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php';

        return $this->privates['translation.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'translator' => '?',
        ]))->withContext('translation.warmer', $this));
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->privates['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', false],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', false],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', false],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', false],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', false],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', false],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', false],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', false],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', false],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', false],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', false],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.af.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.af.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.af.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml')], 'ar' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ar.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.ar.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ar.xliff')], 'az' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.az.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.az.xliff')], 'be' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.be.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.be.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.bg.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml')], 'bs' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bs.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bs.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.bs.xlf')], 'ca' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ca.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ca.xliff')], 'cs' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.cs.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.cs.xliff')], 'cy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.da.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.da.xliff')], 'de' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.de.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.de.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.de.xliff')], 'el' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.el.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml')], 'en' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.en.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.en.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.en.xliff')], 'es' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.es.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.es.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.es.xliff')], 'et' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.et.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.et.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml')], 'eu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.eu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml')], 'fa' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fa.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fa.xliff')], 'fi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fi.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.fi.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fi.xliff')], 'fr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.fr.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fr.xliff')], 'gl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.gl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.gl.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.gl.xliff')], 'he' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.he.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml')], 'hr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.hr.xliff')], 'hu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml')], 'hy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hy.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.id.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml')], 'it' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.it.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.it.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.it.xliff')], 'ja' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ja.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml')], 'lb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lb.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lb.yml')], 'lt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lt.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml')], 'lv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lv.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml')], 'mn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.mn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.mn.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.mn.yml')], 'my' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.my.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.my.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.my.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nb.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml')], 'nl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.nl.xliff')], 'nn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.no.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.no.xliff')], 'pl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.pl.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pl.xliff')], 'pt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.pt.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pt.xliff')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt_BR.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml')], 'ro' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ro.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ro.xliff')], 'ru' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ru.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.ru.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ru.xliff')], 'sk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sk.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sk.xliff')], 'sl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sl.xliff')], 'sq' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sq.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sq.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Cyrl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Cyrl.xliff')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Latn.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Latn.xliff')], 'sv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sv.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sv.xliff')], 'th' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.th.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.th.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.th.xliff')], 'tl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.tr.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.tr.xliff')], 'uk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.uk.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.uk.xlf'), 6 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.uk.xliff')], 'uz' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uz.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uz.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.uz.xlf')], 'vi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.vi.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.zh_CN.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.zh_CN.xliff')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_TW.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.zh_TW.xlf')], 'bn' => [0 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn.yml'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn.yml')], 'bn_BD' => [0 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn_BD.yml'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn_BD.yml')], 'eo' => [0 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eo.yml'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eo.yml')], 'ky' => [0 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml')], 'sr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.sr.xlf')], 'oc' => [0 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.oc.xliff')], 'sw' => [0 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sw.xliff')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations'), 4 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations'), 5 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations'), 6 => (\dirname(__DIR__, 4).'/translations'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/translations'), 8 => (\dirname(__DIR__, 4).'/src/Resources/FrameworkBundle/translations'), 9 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/translations'), 10 => (\dirname(__DIR__, 4).'/src/Resources/FOSRestBundle/translations'), 11 => (\dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/translations'), 12 => (\dirname(__DIR__, 4).'/src/Resources/MakerBundle/translations'), 13 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/translations'), 14 => (\dirname(__DIR__, 4).'/src/Resources/TwigBundle/translations'), 15 => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/translations'), 16 => (\dirname(__DIR__, 4).'/src/Resources/SecurityBundle/translations'), 17 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/translations'), 18 => (\dirname(__DIR__, 4).'/src/Resources/DoctrineBundle/translations'), 19 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/translations'), 20 => (\dirname(__DIR__, 4).'/src/Resources/DoctrineMigrationsBundle/translations'), 21 => (\dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/translations'), 22 => (\dirname(__DIR__, 4).'/src/Resources/NelmioCorsBundle/translations'), 23 => (\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/translations'), 24 => (\dirname(__DIR__, 4).'/src/Resources/ApiPlatformBundle/translations'), 25 => (\dirname(__DIR__, 4).'/vendor/symfony/web-server-bundle/translations'), 26 => (\dirname(__DIR__, 4).'/src/Resources/WebServerBundle/translations'), 27 => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/translations'), 28 => (\dirname(__DIR__, 4).'/src/Resources/SensioFrameworkExtraBundle/translations'), 29 => (\dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/translations'), 30 => (\dirname(__DIR__, 4).'/src/Resources/LexikJWTAuthenticationBundle/translations'), 31 => (\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/translations'), 32 => (\dirname(__DIR__, 4).'/src/Resources/WebProfilerBundle/translations'), 33 => (\dirname(__DIR__, 4).'/src/Resources/FOSUserBundle/translations'), 34 => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle/translations'), 35 => (\dirname(__DIR__, 4).'/src/Resources/MonologBundle/translations'), 36 => (\dirname(__DIR__, 4).'/src/Resources/SymfonyCastsResetPasswordBundle/translations'), 37 => (\dirname(__DIR__, 4).'/src/Resources/WhiteOctoberPagerfantaBundle/translations'), 38 => (\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/translations'), 39 => (\dirname(__DIR__, 4).'/src/Resources/SwiftmailerBundle/translations'), 40 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/translations'), 41 => (\dirname(__DIR__, 4).'/src/Resources/DoctrineFixturesBundle/translations'), 42 => (\dirname(__DIR__, 4).'/src/Resources/translations')], 'cache_vary' => ['scanned_directories' => [0 => 'vendor/symfony/validator/Resources/translations', 1 => 'vendor/symfony/form/Resources/translations', 2 => 'vendor/symfony/security-core/Resources/translations', 3 => 'vendor/friendsofsymfony/user-bundle/Resources/translations', 4 => 'vendor/symfonycasts/reset-password-bundle/src/Resources/translations', 5 => 'vendor/white-october/pagerfanta-bundle/Resources/translations', 6 => 'translations', 7 => 'vendor/symfony/framework-bundle/translations', 8 => 'src/Resources/FrameworkBundle/translations', 9 => 'vendor/friendsofsymfony/rest-bundle/translations', 10 => 'src/Resources/FOSRestBundle/translations', 11 => 'vendor/symfony/maker-bundle/src/translations', 12 => 'src/Resources/MakerBundle/translations', 13 => 'vendor/symfony/twig-bundle/translations', 14 => 'src/Resources/TwigBundle/translations', 15 => 'vendor/symfony/security-bundle/translations', 16 => 'src/Resources/SecurityBundle/translations', 17 => 'vendor/doctrine/doctrine-bundle/translations', 18 => 'src/Resources/DoctrineBundle/translations', 19 => 'vendor/doctrine/doctrine-migrations-bundle/translations', 20 => 'src/Resources/DoctrineMigrationsBundle/translations', 21 => 'vendor/nelmio/cors-bundle/translations', 22 => 'src/Resources/NelmioCorsBundle/translations', 23 => 'vendor/api-platform/core/src/Bridge/Symfony/Bundle/translations', 24 => 'src/Resources/ApiPlatformBundle/translations', 25 => 'vendor/symfony/web-server-bundle/translations', 26 => 'src/Resources/WebServerBundle/translations', 27 => 'vendor/sensio/framework-extra-bundle/src/translations', 28 => 'src/Resources/SensioFrameworkExtraBundle/translations', 29 => 'vendor/lexik/jwt-authentication-bundle/translations', 30 => 'src/Resources/LexikJWTAuthenticationBundle/translations', 31 => 'vendor/symfony/web-profiler-bundle/translations', 32 => 'src/Resources/WebProfilerBundle/translations', 33 => 'src/Resources/FOSUserBundle/translations', 34 => 'vendor/symfony/monolog-bundle/translations', 35 => 'src/Resources/MonologBundle/translations', 36 => 'src/Resources/SymfonyCastsResetPasswordBundle/translations', 37 => 'src/Resources/WhiteOctoberPagerfantaBundle/translations', 38 => 'vendor/symfony/swiftmailer-bundle/translations', 39 => 'src/Resources/SwiftmailerBundle/translations', 40 => 'vendor/doctrine/doctrine-fixtures-bundle/translations', 41 => 'src/Resources/DoctrineFixturesBundle/translations', 42 => 'src/Resources/translations']]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }

    /**
     * Gets the private 'twig.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer
     *
     * @deprecated The "twig.cache_warmer" service is deprecated since Symfony 4.4 and will be removed in 5.0.
     */
    protected function getTwig_CacheWarmerService()
    {
        @trigger_error('The "twig.cache_warmer" service is deprecated since Symfony 4.4 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['twig.cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(($this->privates['.service_locator.o9nGMXB'] ?? $this->get_ServiceLocator_O9nGMXBService())->withContext('twig.cache_warmer', $this), ($this->privates['templating.finder'] ?? $this->getTemplating_FinderService()), [(\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form') => NULL]);
    }

    /**
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    protected function getTwig_Command_DebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Command/DebugCommand.php';

        $this->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($this->services['twig'] ?? $this->getTwigService()), \dirname(__DIR__, 4), $this->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 4).'/templates'), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), (\dirname(__DIR__, 4).'/src'));

        $instance->setName('debug:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.command.lint' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Command\LintCommand
     */
    protected function getTwig_Command_LintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Command/LintCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Command/LintCommand.php';

        $this->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($this->services['twig'] ?? $this->getTwigService()));

        $instance->setName('lint:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRendererEngineInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractRendererEngine.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Form/TwigRendererEngine.php';

        return $this->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine($this->parameters['twig.form.resources'], ($this->services['twig'] ?? $this->getTwigService())), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /**
     * Gets the private 'twig.mailer.message_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessageListener
     */
    protected function getTwig_Mailer_MessageListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/EventListener/MessageListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/BodyRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Mime/BodyRenderer.php';

        return $this->privates['twig.mailer.message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageListener(NULL, new \Symfony\Bridge\Twig\Mime\BodyRenderer(($this->services['twig'] ?? $this->getTwigService())));
    }

    /**
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php';

        return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(($this->privates['fragment.handler'] ?? $this->getFragment_HandlerService()));
    }

    /**
     * Gets the private 'twig.runtime.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfRuntime
     */
    protected function getTwig_Runtime_SecurityCsrfService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CsrfRuntime.php';

        return $this->privates['twig.runtime.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfRuntime(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /**
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    protected function getTwig_TemplateCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/DependencyInjection/CompatibilityServiceSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/TemplateIterator.php';

        return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer(($this->privates['.service_locator.o9nGMXB'] ?? $this->get_ServiceLocator_O9nGMXBService())->withContext('twig.template_cache_warmer', $this), new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'/src'), [(\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates')));
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $a = ($this->privates['property_info'] ?? $this->getPropertyInfoService());

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService', false],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', false],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
        ], [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'validator.expression' => '?',
        ])));
        $instance->setTranslator(new \Symfony\Component\Validator\Util\LegacyTranslatorProxy(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/config/validation.xml'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService())), 1 => new \FOS\UserBundle\Validator\Initializer(($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService()))]);
        $instance->addLoader(new \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader($a, $a, $a, NULL));
        $instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL));
        $instance->addXmlMapping((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /**
     * Gets the private 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Constraints/EmailValidator.php';

        return $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('html5');
    }

    /**
     * Gets the private 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Constraints/ExpressionValidator.php';

        return $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the private 'validator.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer
     */
    protected function getValidator_Mapping_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/ValidatorCacheWarmer.php';

        return $this->privates['validator.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService()), ($this->targetDir.''.'/validation.php'));
    }

    /**
     * Gets the private 'validator.not_compromised_password' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator
     */
    protected function getValidator_NotCompromisedPasswordService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Constraints/NotCompromisedPasswordValidator.php';

        return $this->privates['validator.not_compromised_password'] = new \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator(NULL, 'UTF-8', true, NULL);
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
        return $this->privates['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(($this->services['twig'] ?? $this->getTwigService()), false, 2, ($this->services['router'] ?? $this->getRouterService()), '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()));
    }

    /**
     * Gets the private 'web_server.command.server_log' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerLogCommand
     */
    protected function getWebServer_Command_ServerLogService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-server-bundle/Command/ServerLogCommand.php';

        $this->privates['web_server.command.server_log'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerLogCommand();

        $instance->setName('server:log');

        return $instance;
    }

    /**
     * Gets the private 'web_server.command.server_run' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand
     */
    protected function getWebServer_Command_ServerRunService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-server-bundle/Command/ServerRunCommand.php';

        $this->privates['web_server.command.server_run'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand((\dirname(__DIR__, 4).'/public'), 'dev', \dirname(__DIR__, 4));

        $instance->setName('server:run');

        return $instance;
    }

    /**
     * Gets the private 'web_server.command.server_start' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStartCommand
     */
    protected function getWebServer_Command_ServerStartService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-server-bundle/Command/ServerStartCommand.php';

        $this->privates['web_server.command.server_start'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerStartCommand((\dirname(__DIR__, 4).'/public'), 'dev', \dirname(__DIR__, 4));

        $instance->setName('server:start');

        return $instance;
    }

    /**
     * Gets the private 'web_server.command.server_status' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand
     */
    protected function getWebServer_Command_ServerStatusService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-server-bundle/Command/ServerStatusCommand.php';

        $this->privates['web_server.command.server_status'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand(\dirname(__DIR__, 4));

        $instance->setName('server:status');

        return $instance;
    }

    /**
     * Gets the private 'web_server.command.server_stop' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStopCommand
     */
    protected function getWebServer_Command_ServerStopService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-server-bundle/Command/ServerStopCommand.php';

        $this->privates['web_server.command.server_stop'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerStopCommand(\dirname(__DIR__, 4));

        $instance->setName('server:stop');

        return $instance;
    }

    /**
     * @return array|bool|float|int|string|null
     */
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

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
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

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
        'nelmio_cors.defaults' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDir.''.'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDir.''.'/srcApp_KernelDevDebugContainer.xml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDir.''.'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            case 'nelmio_cors.defaults': $value = [
                'allow_origin' => [
                    0 => $this->getEnv('CORS_ALLOW_ORIGIN'),
                ],
                'allow_credentials' => false,
                'allow_headers' => [
                    0 => 'content-type',
                    1 => 'authorization',
                ],
                'expose_headers' => [
                    0 => 'Link',
                ],
                'allow_methods' => [
                    0 => 'GET',
                    1 => 'OPTIONS',
                    2 => 'POST',
                    3 => 'PUT',
                    4 => 'PATCH',
                    5 => 'DELETE',
                ],
                'max_age' => 3600,
                'hosts' => [

                ],
                'origin_regex' => true,
                'forced_allow_origin_value' => NULL,
            ]; break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).'/src'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'ApiPlatformBundle' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle\\ApiPlatformBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'LexikJWTAuthenticationBundle' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\LexikJWTAuthenticationBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SymfonyCastsResetPasswordBundle' => 'SymfonyCasts\\Bundle\\ResetPassword\\SymfonyCastsResetPasswordBundle',
                'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'FOSRestBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle'),
                    'namespace' => 'FOS\\RestBundle',
                ],
                'MakerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'NelmioCorsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle'),
                    'namespace' => 'Nelmio\\CorsBundle',
                ],
                'ApiPlatformBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle'),
                    'namespace' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle',
                ],
                'WebServerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/web-server-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'LexikJWTAuthenticationBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle'),
                    'namespace' => 'Lexik\\Bundle\\JWTAuthenticationBundle',
                ],
                'WebProfilerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'FOSUserBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'SymfonyCastsResetPasswordBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src'),
                    'namespace' => 'SymfonyCasts\\Bundle\\ResetPassword',
                ],
                'WhiteOctoberPagerfantaBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle'),
                    'namespace' => 'WhiteOctober\\PagerfantaBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'DoctrineFixturesBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelDevDebugContainer',
            'container.dumper.inline_class_loader' => true,
            'container.dumper.inline_factories' => true,
            'images_directory' => (\dirname(__DIR__, 4).'/public/uploads/images'),
            'document_directory' => (\dirname(__DIR__, 4).'/public/uploads/documents'),
            'event_dispatcher.event_aliases' => [
                'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => 'console.command',
                'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => 'console.error',
                'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => 'console.terminate',
                'Symfony\\Component\\Form\\Event\\PreSubmitEvent' => 'form.pre_submit',
                'Symfony\\Component\\Form\\Event\\SubmitEvent' => 'form.submit',
                'Symfony\\Component\\Form\\Event\\PostSubmitEvent' => 'form.post_submit',
                'Symfony\\Component\\Form\\Event\\PreSetDataEvent' => 'form.pre_set_data',
                'Symfony\\Component\\Form\\Event\\PostSetDataEvent' => 'form.post_set_data',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent' => 'kernel.controller_arguments',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent' => 'kernel.controller',
                'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent' => 'kernel.response',
                'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent' => 'kernel.finish_request',
                'Symfony\\Component\\HttpKernel\\Event\\RequestEvent' => 'kernel.request',
                'Symfony\\Component\\HttpKernel\\Event\\ViewEvent' => 'kernel.view',
                'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent' => 'kernel.exception',
                'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent' => 'kernel.terminate',
                'Symfony\\Component\\Workflow\\Event\\GuardEvent' => 'workflow.guard',
                'Symfony\\Component\\Workflow\\Event\\LeaveEvent' => 'workflow.leave',
                'Symfony\\Component\\Workflow\\Event\\TransitionEvent' => 'workflow.transition',
                'Symfony\\Component\\Workflow\\Event\\EnterEvent' => 'workflow.enter',
                'Symfony\\Component\\Workflow\\Event\\EnteredEvent' => 'workflow.entered',
                'Symfony\\Component\\Workflow\\Event\\CompletedEvent' => 'workflow.completed',
                'Symfony\\Component\\Workflow\\Event\\AnnounceEvent' => 'workflow.announce',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationSuccessEvent' => 'security.authentication.success',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent' => 'security.authentication.failure',
                'Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent' => 'security.interactive_login',
                'Symfony\\Component\\Security\\Http\\Event\\SwitchUserEvent' => 'security.switch_user',
            ],
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => [
                0 => 'twig',
                1 => 'php',
            ],
            'templating.helper.form.resources' => [
                0 => 'FrameworkBundle:Form',
            ],
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelDevDebugContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'twig.exception_listener.controller' => NULL,
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [
                'ROLE_ADMIN' => [
                    0 => 'ROLE_USER',
                ],
                'ROLE_SUPER_ADMIN' => [
                    0 => 'ROLE_PP',
                ],
            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
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
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
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
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
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
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine.migrations.preferred_em' => NULL,
            'doctrine.migrations.preferred_connection' => NULL,
            'nelmio_cors.map' => [
                '^/' => [

                ],
            ],
            'nelmio_cors.cors_listener.class' => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class' => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class' => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'api_platform.enable_entrypoint' => true,
            'api_platform.enable_docs' => true,
            'api_platform.title' => '',
            'api_platform.description' => '',
            'api_platform.version' => '0.0.0',
            'api_platform.show_webby' => true,
            'api_platform.url_generation_strategy' => 1,
            'api_platform.exception_to_status' => [
                'Symfony\\Component\\Serializer\\Exception\\ExceptionInterface' => 400,
                'ApiPlatform\\Core\\Exception\\InvalidArgumentException' => 400,
                'ApiPlatform\\Core\\Exception\\FilterValidationException' => 400,
                'Doctrine\\ORM\\OptimisticLockException' => 409,
            ],
            'api_platform.formats' => [
                'jsonld' => [
                    0 => 'application/ld+json',
                ],
                'json' => [
                    0 => 'application/json',
                ],
                'html' => [
                    0 => 'text/html',
                ],
            ],
            'api_platform.patch_formats' => [
                'json' => [
                    0 => 'application/merge-patch+json',
                ],
            ],
            'api_platform.error_formats' => [
                'jsonproblem' => [
                    0 => 'application/problem+json',
                ],
                'jsonld' => [
                    0 => 'application/ld+json',
                ],
            ],
            'api_platform.allow_plain_identifiers' => false,
            'api_platform.eager_loading.enabled' => true,
            'api_platform.eager_loading.max_joins' => 30,
            'api_platform.eager_loading.fetch_partial' => false,
            'api_platform.eager_loading.force_eager' => true,
            'api_platform.collection.exists_parameter_name' => 'exists',
            'api_platform.collection.order' => 'ASC',
            'api_platform.collection.order_parameter_name' => 'order',
            'api_platform.collection.pagination.enabled' => true,
            'api_platform.collection.pagination.partial' => false,
            'api_platform.collection.pagination.client_enabled' => false,
            'api_platform.collection.pagination.client_items_per_page' => false,
            'api_platform.collection.pagination.client_partial' => false,
            'api_platform.collection.pagination.items_per_page' => 30,
            'api_platform.collection.pagination.maximum_items_per_page' => NULL,
            'api_platform.collection.pagination.page_parameter_name' => 'page',
            'api_platform.collection.pagination.enabled_parameter_name' => 'pagination',
            'api_platform.collection.pagination.items_per_page_parameter_name' => 'itemsPerPage',
            'api_platform.collection.pagination.partial_parameter_name' => 'partial',
            'api_platform.collection.pagination' => [
                'enabled' => true,
                'partial' => false,
                'client_enabled' => false,
                'client_items_per_page' => false,
                'client_partial' => false,
                'items_per_page' => 30,
                'maximum_items_per_page' => NULL,
                'page_parameter_name' => 'page',
                'enabled_parameter_name' => 'pagination',
                'items_per_page_parameter_name' => 'itemsPerPage',
                'partial_parameter_name' => 'partial',
            ],
            'api_platform.http_cache.etag' => true,
            'api_platform.http_cache.max_age' => NULL,
            'api_platform.http_cache.shared_max_age' => NULL,
            'api_platform.http_cache.vary' => [
                0 => 'Accept',
            ],
            'api_platform.http_cache.public' => NULL,
            'api_platform.http_cache.invalidation.max_header_length' => 7500,
            'api_platform.asset_package' => NULL,
            'api_platform.defaults' => [
                'attributes' => [

                ],
            ],
            'api_platform.resource_class_directories' => [
                0 => (\dirname(__DIR__, 4).'/src/Entity'),
            ],
            'api_platform.oauth.enabled' => false,
            'api_platform.oauth.clientId' => '',
            'api_platform.oauth.clientSecret' => '',
            'api_platform.oauth.type' => 'oauth2',
            'api_platform.oauth.flow' => 'application',
            'api_platform.oauth.tokenUrl' => '',
            'api_platform.oauth.authorizationUrl' => '',
            'api_platform.oauth.refreshUrl' => '',
            'api_platform.oauth.scopes' => [

            ],
            'api_platform.openapi.termsOfService' => NULL,
            'api_platform.openapi.contact.name' => NULL,
            'api_platform.openapi.contact.url' => NULL,
            'api_platform.openapi.contact.email' => NULL,
            'api_platform.openapi.license.name' => NULL,
            'api_platform.openapi.license.url' => NULL,
            'api_platform.swagger.versions' => [
                0 => 3,
            ],
            'api_platform.enable_swagger_ui' => true,
            'api_platform.enable_re_doc' => true,
            'api_platform.swagger.api_keys' => [

            ],
            'api_platform.graphql.enabled' => false,
            'api_platform.graphql.graphiql.enabled' => false,
            'api_platform.graphql.graphql_playground.enabled' => false,
            'api_platform.graphql.collection.pagination' => [
                'enabled' => true,
            ],
            'api_platform.validator.serialize_payload_fields' => [

            ],
            'api_platform.elasticsearch.enabled' => false,
            'lexik_jwt_authentication.pass_phrase' => 'diarra',
            'lexik_jwt_authentication.token_ttl' => 3600,
            'lexik_jwt_authentication.clock_skew' => 0,
            'lexik_jwt_authentication.user_identity_field' => 'username',
            'lexik_jwt_authentication.user_id_claim' => 'username',
            'lexik_jwt_authentication.encoder.signature_algorithm' => 'RS256',
            'lexik_jwt_authentication.encoder.crypto_engine' => 'openssl',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.registration.confirmation.from_email' => [
                'ddiatou1@gmail.com' => 'ddiatou1@gmail.com',
            ],
            'fos_user.resetting.email.from_email' => [
                'ddiatou1@gmail.com' => 'ddiatou1@gmail.com',
            ],
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'App\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => [
                0 => 'Profile',
                1 => 'Default',
            ],
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => [
                0 => 'Registration',
                1 => 'Default',
            ],
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => [
                0 => 'ChangePassword',
                1 => 'Default',
            ],
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => [
                0 => 'ResetPassword',
                1 => 'Default',
            ],
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.trace' => [
                    'type' => 'inclusive',
                    'elements' => [
                        0 => 'trace',
                    ],
                ],
            ],
            'white_october_pagerfanta.default_view' => 'default',
            'white_october_pagerfanta.view_factory.class' => 'Pagerfanta\\View\\ViewFactory',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => 'localhost',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.default.transport.smtp.stream_options' => [

            ],
            'swiftmailer.mailer.default.spool.enabled' => false,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'maker.compatible_check.doctrine.supports_attributes' => false,
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'api_platform.data_collector.request' => [
                    0 => 'api_platform.data_collector.request',
                    1 => '@ApiPlatform/DataCollector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'swiftmailer.data_collector' => [
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ],
                'mailer.data_collector' => [
                    0 => 'mailer',
                    1 => '@WebProfiler/Collector/mailer.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'console.command.ids' => [

            ],
        ];
    }

    protected function throw($message)
    {
        throw new RuntimeException($message);
    }
}
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera1fd8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere3996 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7ed0d = [
        
    ];

    public function getConnection()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'getConnection', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'getMetadataFactory', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'getExpressionBuilder', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'beginTransaction', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'getCache', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->getCache();
    }

    public function transactional($func)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'transactional', array('func' => $func), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->transactional($func);
    }

    public function commit()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'commit', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->commit();
    }

    public function rollback()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'rollback', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'getClassMetadata', array('className' => $className), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'createQuery', array('dql' => $dql), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'createNamedQuery', array('name' => $name), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'createQueryBuilder', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'flush', array('entity' => $entity), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'clear', array('entityName' => $entityName), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->clear($entityName);
    }

    public function close()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'close', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->close();
    }

    public function persist($entity)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'persist', array('entity' => $entity), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'remove', array('entity' => $entity), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'refresh', array('entity' => $entity), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'detach', array('entity' => $entity), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'merge', array('entity' => $entity), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'getRepository', array('entityName' => $entityName), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'contains', array('entity' => $entity), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'getEventManager', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'getConfiguration', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'isOpen', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'getUnitOfWork', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'getProxyFactory', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'initializeObject', array('obj' => $obj), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'getFilters', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'isFiltersStateClean', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'hasFilters', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->hasFilters();
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

        $instance->initializere3996 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera1fd8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera1fd8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera1fd8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, '__get', ['name' => $name], $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        if (isset(self::$publicProperties7ed0d[$name])) {
            return $this->valueHoldera1fd8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1fd8;

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

        $targetObject = $this->valueHoldera1fd8;
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
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1fd8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera1fd8;
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
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, '__isset', array('name' => $name), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1fd8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera1fd8;
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
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, '__unset', array('name' => $name), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1fd8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera1fd8;
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
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, '__clone', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        $this->valueHoldera1fd8 = clone $this->valueHoldera1fd8;
    }

    public function __sleep()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, '__sleep', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return array('valueHoldera1fd8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere3996 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere3996;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'initializeProxy', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera1fd8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera1fd8;
    }
}
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Serializer/Serializer.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Serializer/SymfonySerializerAdapter.php';

class SymfonySerializerAdapter_0141a64 extends \FOS\RestBundle\Serializer\SymfonySerializerAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \FOS\RestBundle\Serializer\SymfonySerializerAdapter|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera1fd8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere3996 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7ed0d = [
        
    ];

    public function serialize($data, $format, \FOS\RestBundle\Context\Context $context)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'serialize', array('data' => $data, 'format' => $format, 'context' => $context), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->serialize($data, $format, $context);
    }

    public function deserialize($data, $type, $format, \FOS\RestBundle\Context\Context $context)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'deserialize', array('data' => $data, 'type' => $type, 'format' => $format, 'context' => $context), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return $this->valueHoldera1fd8->deserialize($data, $type, $format, $context);
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

        \Closure::bind(function (\FOS\RestBundle\Serializer\SymfonySerializerAdapter $instance) {
            unset($instance->serializer);
        }, $instance, 'FOS\\RestBundle\\Serializer\\SymfonySerializerAdapter')->__invoke($instance);

        $instance->initializere3996 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        static $reflection;

        if (! $this->valueHoldera1fd8) {
            $reflection = $reflection ?? new \ReflectionClass('FOS\\RestBundle\\Serializer\\SymfonySerializerAdapter');
            $this->valueHoldera1fd8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\FOS\RestBundle\Serializer\SymfonySerializerAdapter $instance) {
            unset($instance->serializer);
        }, $this, 'FOS\\RestBundle\\Serializer\\SymfonySerializerAdapter')->__invoke($this);

        }

        $this->valueHoldera1fd8->__construct($serializer);
    }

    public function & __get($name)
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, '__get', ['name' => $name], $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        if (isset(self::$publicProperties7ed0d[$name])) {
            return $this->valueHoldera1fd8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('FOS\\RestBundle\\Serializer\\SymfonySerializerAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1fd8;

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

        $targetObject = $this->valueHoldera1fd8;
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
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        $realInstanceReflection = new \ReflectionClass('FOS\\RestBundle\\Serializer\\SymfonySerializerAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1fd8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera1fd8;
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
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, '__isset', array('name' => $name), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        $realInstanceReflection = new \ReflectionClass('FOS\\RestBundle\\Serializer\\SymfonySerializerAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1fd8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera1fd8;
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
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, '__unset', array('name' => $name), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        $realInstanceReflection = new \ReflectionClass('FOS\\RestBundle\\Serializer\\SymfonySerializerAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1fd8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera1fd8;
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
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, '__clone', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        $this->valueHoldera1fd8 = clone $this->valueHoldera1fd8;
    }

    public function __sleep()
    {
        $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, '__sleep', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;

        return array('valueHoldera1fd8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\FOS\RestBundle\Serializer\SymfonySerializerAdapter $instance) {
            unset($instance->serializer);
        }, $this, 'FOS\\RestBundle\\Serializer\\SymfonySerializerAdapter')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere3996 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere3996;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere3996 && ($this->initializere3996->__invoke($valueHoldera1fd8, $this, 'initializeProxy', array(), $this->initializere3996) || 1) && $this->valueHoldera1fd8 = $valueHoldera1fd8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera1fd8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera1fd8;
    }
}
