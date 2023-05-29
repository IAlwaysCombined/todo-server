<?php

namespace App\Repositories;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\RepositoriesImpl\CommentRepositoryImpl;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CommentRepository implements CommentRepositoryImpl
{
    private Comment $comment;

    /**
     * @param Comment $comment
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return Collection|array
     */
    public function index(): Collection|array
    {
        return $this->comment::query()->with('user')->get()->all();
    }

    /**
     * @param int $id
     * @return Model|Collection|Builder|Comment|array|null
     */
    public function view(int $id): Model|Collection|Builder|Comment|array|null
    {
        return $this->comment::query()->with('user')->findOrFail($id);
    }

    /**
     * @param CommentRequest|Request $request
     * @return Model|Builder|Comment
     */
    public function create(CommentRequest|Request $request): Model|Builder|Comment
    {
        return $this->comment::query()->create($request->all());
    }

    /**
     * @param CommentRequest|Request $request
     * @param int $id
     * @return Model|Collection|Builder|Comment|array|null
     */
    public function update(CommentRequest|Request $request, int $id): Model|Collection|Builder|Comment|array|null
    {
        $this->comment::query()->find($id)->update($request->all());
        return $this->comment::query()->find($id);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->comment::query()->find($id)->delete();
    }
}
