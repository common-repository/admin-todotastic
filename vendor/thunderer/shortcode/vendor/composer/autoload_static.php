<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5175f9581e56c159648ff425e946ed60
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Thunder\\Shortcode\\Tests\\' => 24,
            'Thunder\\Shortcode\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Thunder\\Shortcode\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Thunder\\Shortcode\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Thunder\\Shortcode\\EventContainer\\EventContainer' => __DIR__ . '/../..' . '/src/EventContainer/EventContainer.php',
        'Thunder\\Shortcode\\EventContainer\\EventContainerInterface' => __DIR__ . '/../..' . '/src/EventContainer/EventContainerInterface.php',
        'Thunder\\Shortcode\\EventHandler\\FilterRawEventHandler' => __DIR__ . '/../..' . '/src/EventHandler/FilterRawEventHandler.php',
        'Thunder\\Shortcode\\EventHandler\\ReplaceJoinEventHandler' => __DIR__ . '/../..' . '/src/EventHandler/ReplaceJoinEventHandler.php',
        'Thunder\\Shortcode\\Event\\FilterShortcodesEvent' => __DIR__ . '/../..' . '/src/Event/FilterShortcodesEvent.php',
        'Thunder\\Shortcode\\Event\\ReplaceShortcodesEvent' => __DIR__ . '/../..' . '/src/Event/ReplaceShortcodesEvent.php',
        'Thunder\\Shortcode\\Events' => __DIR__ . '/../..' . '/src/Events.php',
        'Thunder\\Shortcode\\HandlerContainer\\HandlerContainer' => __DIR__ . '/../..' . '/src/HandlerContainer/HandlerContainer.php',
        'Thunder\\Shortcode\\HandlerContainer\\HandlerContainerInterface' => __DIR__ . '/../..' . '/src/HandlerContainer/HandlerContainerInterface.php',
        'Thunder\\Shortcode\\HandlerContainer\\ImmutableHandlerContainer' => __DIR__ . '/../..' . '/src/HandlerContainer/ImmutableHandlerContainer.php',
        'Thunder\\Shortcode\\Handler\\ContentHandler' => __DIR__ . '/../..' . '/src/Handler/ContentHandler.php',
        'Thunder\\Shortcode\\Handler\\DeclareHandler' => __DIR__ . '/../..' . '/src/Handler/DeclareHandler.php',
        'Thunder\\Shortcode\\Handler\\EmailHandler' => __DIR__ . '/../..' . '/src/Handler/EmailHandler.php',
        'Thunder\\Shortcode\\Handler\\NameHandler' => __DIR__ . '/../..' . '/src/Handler/NameHandler.php',
        'Thunder\\Shortcode\\Handler\\NullHandler' => __DIR__ . '/../..' . '/src/Handler/NullHandler.php',
        'Thunder\\Shortcode\\Handler\\PlaceholderHandler' => __DIR__ . '/../..' . '/src/Handler/PlaceholderHandler.php',
        'Thunder\\Shortcode\\Handler\\RawHandler' => __DIR__ . '/../..' . '/src/Handler/RawHandler.php',
        'Thunder\\Shortcode\\Handler\\SerializerHandler' => __DIR__ . '/../..' . '/src/Handler/SerializerHandler.php',
        'Thunder\\Shortcode\\Handler\\UrlHandler' => __DIR__ . '/../..' . '/src/Handler/UrlHandler.php',
        'Thunder\\Shortcode\\Handler\\WrapHandler' => __DIR__ . '/../..' . '/src/Handler/WrapHandler.php',
        'Thunder\\Shortcode\\Parser\\ParserInterface' => __DIR__ . '/../..' . '/src/Parser/ParserInterface.php',
        'Thunder\\Shortcode\\Parser\\RegexParser' => __DIR__ . '/../..' . '/src/Parser/RegexParser.php',
        'Thunder\\Shortcode\\Parser\\RegularParser' => __DIR__ . '/../..' . '/src/Parser/RegularParser.php',
        'Thunder\\Shortcode\\Parser\\WordpressParser' => __DIR__ . '/../..' . '/src/Parser/WordpressParser.php',
        'Thunder\\Shortcode\\Processor\\Processor' => __DIR__ . '/../..' . '/src/Processor/Processor.php',
        'Thunder\\Shortcode\\Processor\\ProcessorContext' => __DIR__ . '/../..' . '/src/Processor/ProcessorContext.php',
        'Thunder\\Shortcode\\Processor\\ProcessorInterface' => __DIR__ . '/../..' . '/src/Processor/ProcessorInterface.php',
        'Thunder\\Shortcode\\Serializer\\JsonSerializer' => __DIR__ . '/../..' . '/src/Serializer/JsonSerializer.php',
        'Thunder\\Shortcode\\Serializer\\SerializerInterface' => __DIR__ . '/../..' . '/src/Serializer/SerializerInterface.php',
        'Thunder\\Shortcode\\Serializer\\TextSerializer' => __DIR__ . '/../..' . '/src/Serializer/TextSerializer.php',
        'Thunder\\Shortcode\\Serializer\\XmlSerializer' => __DIR__ . '/../..' . '/src/Serializer/XmlSerializer.php',
        'Thunder\\Shortcode\\Serializer\\YamlSerializer' => __DIR__ . '/../..' . '/src/Serializer/YamlSerializer.php',
        'Thunder\\Shortcode\\ShortcodeFacade' => __DIR__ . '/../..' . '/src/ShortcodeFacade.php',
        'Thunder\\Shortcode\\Shortcode\\AbstractShortcode' => __DIR__ . '/../..' . '/src/Shortcode/AbstractShortcode.php',
        'Thunder\\Shortcode\\Shortcode\\ParsedShortcode' => __DIR__ . '/../..' . '/src/Shortcode/ParsedShortcode.php',
        'Thunder\\Shortcode\\Shortcode\\ParsedShortcodeInterface' => __DIR__ . '/../..' . '/src/Shortcode/ParsedShortcodeInterface.php',
        'Thunder\\Shortcode\\Shortcode\\ProcessedShortcode' => __DIR__ . '/../..' . '/src/Shortcode/ProcessedShortcode.php',
        'Thunder\\Shortcode\\Shortcode\\ReplacedShortcode' => __DIR__ . '/../..' . '/src/Shortcode/ReplacedShortcode.php',
        'Thunder\\Shortcode\\Shortcode\\Shortcode' => __DIR__ . '/../..' . '/src/Shortcode/Shortcode.php',
        'Thunder\\Shortcode\\Shortcode\\ShortcodeInterface' => __DIR__ . '/../..' . '/src/Shortcode/ShortcodeInterface.php',
        'Thunder\\Shortcode\\Syntax\\CommonSyntax' => __DIR__ . '/../..' . '/src/Syntax/CommonSyntax.php',
        'Thunder\\Shortcode\\Syntax\\Syntax' => __DIR__ . '/../..' . '/src/Syntax/Syntax.php',
        'Thunder\\Shortcode\\Syntax\\SyntaxBuilder' => __DIR__ . '/../..' . '/src/Syntax/SyntaxBuilder.php',
        'Thunder\\Shortcode\\Syntax\\SyntaxInterface' => __DIR__ . '/../..' . '/src/Syntax/SyntaxInterface.php',
        'Thunder\\Shortcode\\Tests\\AbstractTestCase' => __DIR__ . '/../..' . '/tests/AbstractTestCase.php',
        'Thunder\\Shortcode\\Tests\\EventsTest' => __DIR__ . '/../..' . '/tests/EventsTest.php',
        'Thunder\\Shortcode\\Tests\\FacadeTest' => __DIR__ . '/../..' . '/tests/FacadeTest.php',
        'Thunder\\Shortcode\\Tests\\Fake\\ReverseShortcode' => __DIR__ . '/../..' . '/tests/Fake/ReverseShortcode.php',
        'Thunder\\Shortcode\\Tests\\HandlerContainerTest' => __DIR__ . '/../..' . '/tests/HandlerContainerTest.php',
        'Thunder\\Shortcode\\Tests\\ParserTest' => __DIR__ . '/../..' . '/tests/ParserTest.php',
        'Thunder\\Shortcode\\Tests\\ProcessorTest' => __DIR__ . '/../..' . '/tests/ProcessorTest.php',
        'Thunder\\Shortcode\\Tests\\SerializerTest' => __DIR__ . '/../..' . '/tests/SerializerTest.php',
        'Thunder\\Shortcode\\Tests\\ShortcodeTest' => __DIR__ . '/../..' . '/tests/ShortcodeTest.php',
        'Thunder\\Shortcode\\Tests\\SyntaxTest' => __DIR__ . '/../..' . '/tests/SyntaxTest.php',
        'Thunder\\Shortcode\\Utility\\RegexBuilderUtility' => __DIR__ . '/../..' . '/src/Utility/RegexBuilderUtility.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5175f9581e56c159648ff425e946ed60::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5175f9581e56c159648ff425e946ed60::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5175f9581e56c159648ff425e946ed60::$classMap;

        }, null, ClassLoader::class);
    }
}
