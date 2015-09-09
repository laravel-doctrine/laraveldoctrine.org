<?php

namespace LaravelDoctrine\Services;

class GithubDocsRepository implements DocsRepository
{
    /**
     * @var string
     */
    public $location = 'https://raw.githubusercontent.com/laravel-doctrine/docs';

    /**
     * @param $version
     * @param $package
     * @param $page
     *
     * @return array
     */
    public function findForVersion($version, $package, $page)
    {
        return $this->makeRequest($version, $package, $page);
    }

    /**
     * @param $version
     * @param $package
     *
     * @return array
     */
    public function getIndex($version, $package)
    {
        return $this->makeRequest($version, $package, 'index');
    }

    /**
     * @param $version
     * @param $package
     * @param $page
     *
     * @return string
     */
    protected function getUrl($version, $package, $page)
    {
        return $this->location . '/' . $version . '/' . $package . '/' . $page . '.md';
    }

    /**
     * @param $version
     * @param $package
     * @param $page
     *
     * @return string
     */
    protected function makeRequest($version, $package, $page)
    {
        $url = $this->getUrl($version, $package, $page);

        return (string) @file_get_contents($url);
    }
}