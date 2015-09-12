<?php

namespace LaravelDoctrine\Services;

interface DocsRepository
{
    /**
     * @param $version
     * @param $package
     * @param $page
     *
     * @return array
     */
    public function findForVersion($version, $package, $page);

    /**
     * @param $version
     * @param $package
     *
     * @return array
     */
    public function getIndex($version, $package);

    /**
     * @return string
     */
    public function getLatestVersion();

    /**
     * @return array
     */
    public function getVersions();
}
