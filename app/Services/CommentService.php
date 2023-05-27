<?php

namespace App\Services;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\RepositoriesImpl\CommentRepositoryImpl;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CommentService
{
    private CommentRepositoryImpl $commentRepositoryImpl;

    /**
     * @param CommentRepositoryImpl $commentRepositoryImpl
     */
    public function __construct(CommentRepositoryImpl $commentRepositoryImpl)
    {
        $this->commentRepositoryImpl = $commentRepositoryImpl;
    }

    /**
     * @return Collection|array
     */
    public function index(): Collection|array
    {
        return $this->commentRepositoryImpl->index();
    }

    /**
     * @param int $id
     * @return array|Builder|Collection|Model
     */
    public function view(int $id): array|Builder|Collection|Model
    {
        return $this->commentRepositoryImpl->view($id);
    }

    /**
     * @param CommentRequest $request
     * @return Comment
     */
    public function create(CommentRequest $request): Comment
    {
        return $this->commentRepositoryImpl->create($request);
    }

    /**
     * @param CommentRequest $request
     * @param int $id
     * @return Comment
     */
    public function update(CommentRequest $request, int $id): Comment
    {
        return $this->commentRepositoryImpl->update($request, $id);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->commentRepositoryImpl->delete($id);
    }
}
