<?php

namespace Squarecloudlabs\FolioMarkdown;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FolioMarkdownServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('folio-markdown');
    }
}
