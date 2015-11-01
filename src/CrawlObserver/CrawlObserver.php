<?php

namespace Spatie\HttpStatusCheck\CrawlObserver;

use Spatie\HttpStatusCheck\Url;

interface CrawlObserver
{
    /**
     * Called when the crawl will crawl the url.
     *
     * @param Url $url
     * @return mixed
     */
    public function willCrawl(Url $url);

    /**
     * Called when the crawl will crawl has crawled the given url.
     *
     * @param Url $url
     * @return mixed
     */
    public function haveCrawled(Url $url, $response);

}