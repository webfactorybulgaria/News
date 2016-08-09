<?php

namespace TypiCMS\Modules\News\Models;

use TypiCMS\Modules\Core\Shells\Models\BaseTranslation;

class NewsTranslation extends BaseTranslation
{
    /**
     * get the parent model.
     */
    public function owner()
    {
        return $this->belongsTo('TypiCMS\Modules\News\Shells\Models\News', 'news_id')->withoutGlobalScopes();
    }
}
