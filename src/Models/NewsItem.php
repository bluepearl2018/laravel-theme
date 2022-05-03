<?php

namespace Eutranet\Theme\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Illuminate\Database\Eloquent\Collection;

class NewsItem extends Model implements Feedable
{
    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->summary)
            ->updated($this->updated_at)
            ->link($this->link)
            ->authorName($this->author)
            ->authorEmail($this->authorEmail);
    }

    // app/NewsItem.php
    public static function getFeedItems(): Collection
    {
        return NewsItem::all();
    }
}
