<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Symfony\\Component\\Translation\\Catalogue\\AbstractOperation' => $baseDir . '/Catalogue/AbstractOperation.php',
    'Symfony\\Component\\Translation\\Catalogue\\MergeOperation' => $baseDir . '/Catalogue/MergeOperation.php',
    'Symfony\\Component\\Translation\\Catalogue\\OperationInterface' => $baseDir . '/Catalogue/OperationInterface.php',
    'Symfony\\Component\\Translation\\Catalogue\\TargetOperation' => $baseDir . '/Catalogue/TargetOperation.php',
    'Symfony\\Component\\Translation\\Command\\TranslationPullCommand' => $baseDir . '/Command/TranslationPullCommand.php',
    'Symfony\\Component\\Translation\\Command\\TranslationPushCommand' => $baseDir . '/Command/TranslationPushCommand.php',
    'Symfony\\Component\\Translation\\Command\\TranslationTrait' => $baseDir . '/Command/TranslationTrait.php',
    'Symfony\\Component\\Translation\\Command\\XliffLintCommand' => $baseDir . '/Command/XliffLintCommand.php',
    'Symfony\\Component\\Translation\\DataCollectorTranslator' => $baseDir . '/DataCollectorTranslator.php',
    'Symfony\\Component\\Translation\\DataCollector\\TranslationDataCollector' => $baseDir . '/DataCollector/TranslationDataCollector.php',
    'Symfony\\Component\\Translation\\DependencyInjection\\TranslationDumperPass' => $baseDir . '/DependencyInjection/TranslationDumperPass.php',
    'Symfony\\Component\\Translation\\DependencyInjection\\TranslationExtractorPass' => $baseDir . '/DependencyInjection/TranslationExtractorPass.php',
    'Symfony\\Component\\Translation\\DependencyInjection\\TranslatorPass' => $baseDir . '/DependencyInjection/TranslatorPass.php',
    'Symfony\\Component\\Translation\\DependencyInjection\\TranslatorPathsPass' => $baseDir . '/DependencyInjection/TranslatorPathsPass.php',
    'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper' => $baseDir . '/Dumper/CsvFileDumper.php',
    'Symfony\\Component\\Translation\\Dumper\\DumperInterface' => $baseDir . '/Dumper/DumperInterface.php',
    'Symfony\\Component\\Translation\\Dumper\\FileDumper' => $baseDir . '/Dumper/FileDumper.php',
    'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper' => $baseDir . '/Dumper/IcuResFileDumper.php',
    'Symfony\\Component\\Translation\\Dumper\\IniFileDumper' => $baseDir . '/Dumper/IniFileDumper.php',
    'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper' => $baseDir . '/Dumper/JsonFileDumper.php',
    'Symfony\\Component\\Translation\\Dumper\\MoFileDumper' => $baseDir . '/Dumper/MoFileDumper.php',
    'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper' => $baseDir . '/Dumper/PhpFileDumper.php',
    'Symfony\\Component\\Translation\\Dumper\\PoFileDumper' => $baseDir . '/Dumper/PoFileDumper.php',
    'Symfony\\Component\\Translation\\Dumper\\QtFileDumper' => $baseDir . '/Dumper/QtFileDumper.php',
    'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper' => $baseDir . '/Dumper/XliffFileDumper.php',
    'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper' => $baseDir . '/Dumper/YamlFileDumper.php',
    'Symfony\\Component\\Translation\\Exception\\ExceptionInterface' => $baseDir . '/Exception/ExceptionInterface.php',
    'Symfony\\Component\\Translation\\Exception\\IncompleteDsnException' => $baseDir . '/Exception/IncompleteDsnException.php',
    'Symfony\\Component\\Translation\\Exception\\InvalidArgumentException' => $baseDir . '/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\Translation\\Exception\\InvalidResourceException' => $baseDir . '/Exception/InvalidResourceException.php',
    'Symfony\\Component\\Translation\\Exception\\LogicException' => $baseDir . '/Exception/LogicException.php',
    'Symfony\\Component\\Translation\\Exception\\MissingRequiredOptionException' => $baseDir . '/Exception/MissingRequiredOptionException.php',
    'Symfony\\Component\\Translation\\Exception\\NotFoundResourceException' => $baseDir . '/Exception/NotFoundResourceException.php',
    'Symfony\\Component\\Translation\\Exception\\ProviderException' => $baseDir . '/Exception/ProviderException.php',
    'Symfony\\Component\\Translation\\Exception\\ProviderExceptionInterface' => $baseDir . '/Exception/ProviderExceptionInterface.php',
    'Symfony\\Component\\Translation\\Exception\\RuntimeException' => $baseDir . '/Exception/RuntimeException.php',
    'Symfony\\Component\\Translation\\Exception\\UnsupportedSchemeException' => $baseDir . '/Exception/UnsupportedSchemeException.php',
    'Symfony\\Component\\Translation\\Extractor\\AbstractFileExtractor' => $baseDir . '/Extractor/AbstractFileExtractor.php',
    'Symfony\\Component\\Translation\\Extractor\\ChainExtractor' => $baseDir . '/Extractor/ChainExtractor.php',
    'Symfony\\Component\\Translation\\Extractor\\ExtractorInterface' => $baseDir . '/Extractor/ExtractorInterface.php',
    'Symfony\\Component\\Translation\\Extractor\\PhpExtractor' => $baseDir . '/Extractor/PhpExtractor.php',
    'Symfony\\Component\\Translation\\Extractor\\PhpStringTokenParser' => $baseDir . '/Extractor/PhpStringTokenParser.php',
    'Symfony\\Component\\Translation\\Formatter\\IntlFormatter' => $baseDir . '/Formatter/IntlFormatter.php',
    'Symfony\\Component\\Translation\\Formatter\\IntlFormatterInterface' => $baseDir . '/Formatter/IntlFormatterInterface.php',
    'Symfony\\Component\\Translation\\Formatter\\MessageFormatter' => $baseDir . '/Formatter/MessageFormatter.php',
    'Symfony\\Component\\Translation\\Formatter\\MessageFormatterInterface' => $baseDir . '/Formatter/MessageFormatterInterface.php',
    'Symfony\\Component\\Translation\\IdentityTranslator' => $baseDir . '/IdentityTranslator.php',
    'Symfony\\Component\\Translation\\Loader\\ArrayLoader' => $baseDir . '/Loader/ArrayLoader.php',
    'Symfony\\Component\\Translation\\Loader\\CsvFileLoader' => $baseDir . '/Loader/CsvFileLoader.php',
    'Symfony\\Component\\Translation\\Loader\\FileLoader' => $baseDir . '/Loader/FileLoader.php',
    'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader' => $baseDir . '/Loader/IcuDatFileLoader.php',
    'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader' => $baseDir . '/Loader/IcuResFileLoader.php',
    'Symfony\\Component\\Translation\\Loader\\IniFileLoader' => $baseDir . '/Loader/IniFileLoader.php',
    'Symfony\\Component\\Translation\\Loader\\JsonFileLoader' => $baseDir . '/Loader/JsonFileLoader.php',
    'Symfony\\Component\\Translation\\Loader\\LoaderInterface' => $baseDir . '/Loader/LoaderInterface.php',
    'Symfony\\Component\\Translation\\Loader\\MoFileLoader' => $baseDir . '/Loader/MoFileLoader.php',
    'Symfony\\Component\\Translation\\Loader\\PhpFileLoader' => $baseDir . '/Loader/PhpFileLoader.php',
    'Symfony\\Component\\Translation\\Loader\\PoFileLoader' => $baseDir . '/Loader/PoFileLoader.php',
    'Symfony\\Component\\Translation\\Loader\\QtFileLoader' => $baseDir . '/Loader/QtFileLoader.php',
    'Symfony\\Component\\Translation\\Loader\\XliffFileLoader' => $baseDir . '/Loader/XliffFileLoader.php',
    'Symfony\\Component\\Translation\\Loader\\YamlFileLoader' => $baseDir . '/Loader/YamlFileLoader.php',
    'Symfony\\Component\\Translation\\LoggingTranslator' => $baseDir . '/LoggingTranslator.php',
    'Symfony\\Component\\Translation\\MessageCatalogue' => $baseDir . '/MessageCatalogue.php',
    'Symfony\\Component\\Translation\\MessageCatalogueInterface' => $baseDir . '/MessageCatalogueInterface.php',
    'Symfony\\Component\\Translation\\MetadataAwareInterface' => $baseDir . '/MetadataAwareInterface.php',
    'Symfony\\Component\\Translation\\Provider\\AbstractProviderFactory' => $baseDir . '/Provider/AbstractProviderFactory.php',
    'Symfony\\Component\\Translation\\Provider\\Dsn' => $baseDir . '/Provider/Dsn.php',
    'Symfony\\Component\\Translation\\Provider\\FilteringProvider' => $baseDir . '/Provider/FilteringProvider.php',
    'Symfony\\Component\\Translation\\Provider\\NullProvider' => $baseDir . '/Provider/NullProvider.php',
    'Symfony\\Component\\Translation\\Provider\\NullProviderFactory' => $baseDir . '/Provider/NullProviderFactory.php',
    'Symfony\\Component\\Translation\\Provider\\ProviderFactoryInterface' => $baseDir . '/Provider/ProviderFactoryInterface.php',
    'Symfony\\Component\\Translation\\Provider\\ProviderInterface' => $baseDir . '/Provider/ProviderInterface.php',
    'Symfony\\Component\\Translation\\Provider\\TranslationProviderCollection' => $baseDir . '/Provider/TranslationProviderCollection.php',
    'Symfony\\Component\\Translation\\Provider\\TranslationProviderCollectionFactory' => $baseDir . '/Provider/TranslationProviderCollectionFactory.php',
    'Symfony\\Component\\Translation\\PseudoLocalizationTranslator' => $baseDir . '/PseudoLocalizationTranslator.php',
    'Symfony\\Component\\Translation\\Reader\\TranslationReader' => $baseDir . '/Reader/TranslationReader.php',
    'Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface' => $baseDir . '/Reader/TranslationReaderInterface.php',
    'Symfony\\Component\\Translation\\Test\\ProviderFactoryTestCase' => $baseDir . '/Test/ProviderFactoryTestCase.php',
    'Symfony\\Component\\Translation\\Test\\ProviderTestCase' => $baseDir . '/Test/ProviderTestCase.php',
    'Symfony\\Component\\Translation\\TranslatableMessage' => $baseDir . '/TranslatableMessage.php',
    'Symfony\\Component\\Translation\\Translator' => $baseDir . '/Translator.php',
    'Symfony\\Component\\Translation\\TranslatorBag' => $baseDir . '/TranslatorBag.php',
    'Symfony\\Component\\Translation\\TranslatorBagInterface' => $baseDir . '/TranslatorBagInterface.php',
    'Symfony\\Component\\Translation\\Util\\ArrayConverter' => $baseDir . '/Util/ArrayConverter.php',
    'Symfony\\Component\\Translation\\Util\\XliffUtils' => $baseDir . '/Util/XliffUtils.php',
    'Symfony\\Component\\Translation\\Writer\\TranslationWriter' => $baseDir . '/Writer/TranslationWriter.php',
    'Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface' => $baseDir . '/Writer/TranslationWriterInterface.php',
);