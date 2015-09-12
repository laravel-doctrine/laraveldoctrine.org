<?php

namespace LaravelDoctrine\UserInterface;

use LaravelDoctrine\Services\GithubDocsRepository;

class ShareVersionNumber
{
    /**
     * @var GithubDocsRepository
     */
    protected $repository;

    /**
     * @param GithubDocsRepository $repository
     */
    public function __construct(GithubDocsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $view
     */
    public function compose($view)
    {
        $view->version  = $view->version ?: $this->repository->getLatestVersion();
        $view->versions = $this->repository->getVersions();
    }
}
