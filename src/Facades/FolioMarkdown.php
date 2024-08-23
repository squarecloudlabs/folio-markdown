<?php

namespace Squarecloudlabs\FolioMarkdown\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Squarecloudlabs\FolioMarkdown\FolioMarkdown
 */
class FolioMarkdown extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Squarecloudlabs\FolioMarkdown\FolioMarkdown::class;
    }
}
