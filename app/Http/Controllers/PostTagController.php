<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostTagRequest;
use App\Http\Requests\UpdatePostTagRequest;
use App\Repositories\PostTagRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PostTagController extends AppBaseController
{
    /** @var  PostTagRepository */
    private $postTagRepository;

    public function __construct(PostTagRepository $postTagRepo)
    {
        $this->postTagRepository = $postTagRepo;
    }

    /**
     * Display a listing of the PostTag.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $postTags = $this->postTagRepository->all();

        return view('post_tags.index')
            ->with('postTags', $postTags);
    }

    /**
     * Show the form for creating a new PostTag.
     *
     * @return Response
     */
    public function create()
    {
        return view('post_tags.create');
    }

    /**
     * Store a newly created PostTag in storage.
     *
     * @param CreatePostTagRequest $request
     *
     * @return Response
     */
    public function store(CreatePostTagRequest $request)
    {
        $input = $request->all();

        $postTag = $this->postTagRepository->create($input);

        Flash::success('Post Tag saved successfully.');

        return redirect(route('postTags.index'));
    }

    /**
     * Display the specified PostTag.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $postTag = $this->postTagRepository->find($id);

        if (empty($postTag)) {
            Flash::error('Post Tag not found');

            return redirect(route('postTags.index'));
        }

        return view('post_tags.show')->with('postTag', $postTag);
    }

    /**
     * Show the form for editing the specified PostTag.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $postTag = $this->postTagRepository->find($id);

        if (empty($postTag)) {
            Flash::error('Post Tag not found');

            return redirect(route('postTags.index'));
        }

        return view('post_tags.edit')->with('postTag', $postTag);
    }

    /**
     * Update the specified PostTag in storage.
     *
     * @param int $id
     * @param UpdatePostTagRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostTagRequest $request)
    {
        $postTag = $this->postTagRepository->find($id);

        if (empty($postTag)) {
            Flash::error('Post Tag not found');

            return redirect(route('postTags.index'));
        }

        $postTag = $this->postTagRepository->update($request->all(), $id);

        Flash::success('Post Tag updated successfully.');

        return redirect(route('postTags.index'));
    }

    /**
     * Remove the specified PostTag from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $postTag = $this->postTagRepository->find($id);

        if (empty($postTag)) {
            Flash::error('Post Tag not found');

            return redirect(route('postTags.index'));
        }

        $this->postTagRepository->delete($id);

        Flash::success('Post Tag deleted successfully.');

        return redirect(route('postTags.index'));
    }
}
