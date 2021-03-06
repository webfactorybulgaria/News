<?php

namespace TypiCMS\Modules\News\Http\Controllers;

use TypiCMS\Modules\Core\Shells\Http\Controllers\BaseAdminController;
use TypiCMS\Modules\News\Shells\Http\Requests\FormRequest;
use TypiCMS\Modules\News\Shells\Models\News;
use TypiCMS\Modules\News\Shells\Repositories\NewsInterface;

class AdminController extends BaseAdminController
{
    public function __construct(NewsInterface $news)
    {
        parent::__construct($news);
    }

    /**
     * List models.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        return view('news::admin.index');
    }

    /**
     * Create form for a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = $this->repository->getModel();

        return view('news::admin.create')
            ->with(compact('model'));
    }

    /**
     * Edit form for the specified resource.
     *
     * @param \TypiCMS\Modules\News\Shells\Models\News $news
     *
     * @return \Illuminate\View\View
     */
    public function edit(News $news)
    {
        return view('news::admin.edit')
            ->with(['model' => $news]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \TypiCMS\Modules\News\Shells\Http\Requests\FormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FormRequest $request)
    {
        $model = $this->repository->create($request->all());

        return $this->redirect($request, $model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \TypiCMS\Modules\News\Shells\Models\News               $news
     * @param \TypiCMS\Modules\News\Shells\Http\Requests\FormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(News $news, FormRequest $request)
    {
        $this->repository->update($request->all());

        return $this->redirect($request, $news);
    }
}
