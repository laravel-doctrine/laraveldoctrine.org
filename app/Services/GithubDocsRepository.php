<?php

namespace LaravelDoctrine\Services;

class GithubDocsRepository implements DocsRepository
{
    /**
     * @var string
     */
    protected $location = 'https://raw.githubusercontent.com/laravel-doctrine/docs';

    /**
     * @return string
     */
    public function getLatestVersion()
    {
        return '1.2';
    }

    /**
     * @return array
     */
    public function getVersions()
    {
        return [
            '1.2',
            '1.1',
            '1.0'
        ];
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
        return $this->getLocation() . '/' . $version . '/' . $package . '/' . $page . '.md';
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

    /**
     * Prepend http:// to a  string if the string does not already contain it
     *
     * @param $url
     * @return string
     */
    protected function addhttp($url)
    {
        if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
            $url = "http://" . $url;
        }

        return $url;
    }

    /**
     * @return mixed
     */
    protected function getLocation()
    {
        return $this->addHttp(env('DOCS_LOCATION', $this->location));
    }
}
