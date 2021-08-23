<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostMetaRequest;
use App\Http\Requests\UpdatePostMetaRequest;
use App\Repositories\PostMetaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PostMetaController extends AppBaseController
{
    /** @var  PostMetaRepository */
    private $postMetaRepository;

    public function __construct(PostMetaRepository $postMetaRepo)
    {
        $this->postMetaRepository = $postMetaRepo;
    }

    /**
     * Display a listing of the PostMeta.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $postMetas = $this->postMetaRepository->all();

        return view('post_metas.index')
            ->with('postMetas', $postMetas);
    }

    /**
     * Show the form for creating a new PostMeta.
     *
     * @return Response
     */
    public function create()
    {
        return view('post_metas.create');
    }

    /**
     * Store a newly created PostMeta in storage.
     *
     * @param CreatePostMetaRequest $request
     *
     * @return Response
     */
    public function store(CreatePostMetaRequest $request)
    {
        $input = $request->all();

        $postMeta = $this->postMetaRepository->create($input);

        Flash::success('Post Meta saved successfully.');

        return redirect(route('postMetas.index'));
    }

    /**
     * Display the specified PostMeta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $postMeta = $this->postMetaRepository->find($id);

        if (empty($postMeta)) {
            Flash::error('Post Meta not found');

            return redirect(route('postMetas.index'));
        }

        return view('post_metas.show')->with('postMeta', $postMeta);
    }

    /**
     * Show the form for editing the specified PostMeta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $postMeta = $this->postMetaRepository->find($id);

        if (empty($postMeta)) {
            Flash::error('Post Meta not found');

            return redirect(route('postMetas.index'));
        }

        return view('post_metas.edit')->with('postMeta', $postMeta);
    }

    /**
     * Update the specified PostMeta in storage.
     *
     * @param int $id
     * @param UpdatePostMetaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostMetaRequest $request)
    {
        $postMeta = $this->postMetaRepository->find($id);

        if (empty($postMeta)) {
            Flash::error('Post Meta not found');

            return redirect(route('postMetas.index'));
        }

        $postMeta = $this->postMetaRepository->update($request->all(), $id);

        Flash::success('Post Meta updated successfully.');

        return redirect(route('postMetas.index'));
    }

    /**
     * Remove the specified PostMeta from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $postMeta = $this->postMetaRepository->find($id);

        if (empty($postMeta)) {
            Flash::error('Post Meta not found');

            return redirect(route('postMetas.index'));
        }

        $this->postMetaRepository->delete($id);

        Flash::success('Post Meta deleted successfully.');

        return redirect(route('postMetas.index'));
    }
}
