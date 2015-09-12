<?php

namespace LaravelDoctrine\Services;

class VersionReplacer implements DocsRepository
{
    /**
     * @var DocsRepository
     */
    protected $repository;

    /**
     * @param DocsRepository $repository
     */
    public function __construct(DocsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return string
     */
    public function getLatestVersion()
    {
        return $this->repository->getLatestVersion();
    }

    /**
     * @return array
     */
    public function getVersions()
    {
        return $this->repository->getVersions();
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
        $content = $this->repository->findForVersion($version, $package, $page);

        return $this->replace($version, $content);
    }

    /**
     * @param $version
     * @param $package
     *
     * @return array
     */
    public function getIndex($version, $package)
    {
        $content = $this->repository->getIndex($version, $package);

        return $this->replace($version, $content);
    }

    /**
     * @param $version
     * @param $content
     *
     * @return mixed
     */
    public function replace($version, $content)
    {
        return str_replace('{{version}}', $version, $content);
    }
}
