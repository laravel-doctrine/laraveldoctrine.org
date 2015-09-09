<?php

namespace LaravelDoctrine\Services;

use Illuminate\Contracts\Cache\Repository;

class CacheDocs implements DocsRepository
{
    /**
     * @var DocsRepository
     */
    protected $repository;

    /**
     * @var Repository
     */
    protected $cache;

    /**
     * @param DocsRepository $repository
     * @param Repository     $cache
     */
    public function __construct(DocsRepository $repository, Repository $cache)
    {
        $this->repository = $repository;
        $this->cache      = $cache;
    }

    /**
     * @param $version
     * @param $package
     * @param $page
     *
     * @return array
     */
    public function findForVersion($version, $package, $page)
    {
        return $this->cache->remember($version . $package . $page, 60, function () use ($version, $package, $page) {
            return $this->repository->findForVersion($version, $package, $page);
        });
    }

    /**
     * @param $version
     * @param $package
     *
     * @return array
     */
    public function getIndex($version, $package)
    {
        return $this->cache->remember($version . $package . 'index', 60, function () use ($version, $package) {
            return $this->repository->getIndex($version, $package);
        });
    }
}
