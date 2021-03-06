<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf8bea447e73722b3c32f4c01c4fc1146
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'PdfCrowd' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'PdfcrowdException' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\ConnectionHelper' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\Error' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\HtmlToImageClient' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\HtmlToPdfClient' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\ImageToImageClient' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\ImageToPdfClient' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\PdfToPdfClient' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf8bea447e73722b3c32f4c01c4fc1146::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf8bea447e73722b3c32f4c01c4fc1146::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf8bea447e73722b3c32f4c01c4fc1146::$classMap;

        }, null, ClassLoader::class);
    }
}
