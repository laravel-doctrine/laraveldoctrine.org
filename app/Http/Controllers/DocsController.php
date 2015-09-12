<?php

namespace LaravelDoctrine\Http\Controllers;

use LaravelDoctrine\Services\DocsRepository;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DocsController extends Controller
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
     * @param $version
     * @param $package
     *
     * @return \Illuminate\View\View
     */
    public function index($version, $package)
    {
        return $this->show($version, $package, 'introduction');
    }

    /**
     * @param $version
     * @param $package
     * @param $page
     *
     * @return \Illuminate\View\View
     */
    public function show($version, $package, $page)
    {
        if ($version === 'current') {
            $version = $this->repository->getLatestVersion();
        }

        $content = $this->repository->findForVersion(
            $version,
            $package,
            $page
        );

        if (!$content) {
            throw new NotFoundHttpException;
        }

        $title = $this->getPageTitle($content);
        $index = $this->repository->getIndex($version, $package);

        return view('docs', [
            'version' => $version,
            'package' => $package,
            'page'    => $page,
            'title'   => $title,
            'content' => $content,
            'index'   => $index
        ]);
    }

    /**
     * @param $content
     *
     * @return null|string|Crawler
     */
    protected function getPageTitle($content)
    {
        $title = (new Crawler($content))->filterXPath('//h1');
        $title = count($title) ? $title->text() : null;

        return $title;
    }
}
