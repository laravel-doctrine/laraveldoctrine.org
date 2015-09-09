<?php

namespace LaravelDoctrine\Services;

use ParsedownExtra;

class ConvertMarkdown implements DocsRepository
{
    /**
     * @var DocsRepository
     */
    protected $repository;

    /**
     * @var ParsedownExtra
     */
    protected $converter;

    /**
     * @param DocsRepository $repository
     * @param ParsedownExtra $converter
     */
    public function __construct(DocsRepository $repository, ParsedownExtra $converter)
    {
        $this->repository = $repository;
        $this->converter  = $converter;
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

        return $this->converter->text(
            $content
        );
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

        return $this->converter->text(
            $content
        );
    }
}
