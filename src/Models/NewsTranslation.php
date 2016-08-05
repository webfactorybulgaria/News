<?php

namespace TypiCMS\Modules\News\Models;

use TypiCMS\Modules\Core\Custom\Models\BaseTranslation;

class NewsTranslation extends BaseTranslation
{
    /**
     * get the parent model.
     */
    public function owner()
    {
        return $this->belongsTo('TypiCMS\Modules\News\Custom\Models\News', 'news_id')->withoutGlobalScopes();
    }
}
