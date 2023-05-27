<?php

namespace App\Providers;

use App\Repositories\BoardRepository;
use App\Repositories\CardRepository;
use App\Repositories\CommentRepository;
use App\Repositories\TableRepository;
use App\Repositories\WorkspaceRepository;
use App\RepositoriesImpl\BoardRepositoryImpl;
use App\RepositoriesImpl\CardRepositoryImpl;
use App\RepositoriesImpl\CommentRepositoryImpl;
use App\RepositoriesImpl\TableRepositoryImpl;
use App\RepositoriesImpl\WorkspaceRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BoardRepositoryImpl::class, BoardRepository::class);
        $this->app->bind(CardRepositoryImpl::class, CardRepository::class);
        $this->app->bind(TableRepositoryImpl::class, TableRepository::class);
        $this->app->bind(WorkspaceRepositoryImpl::class, WorkspaceRepository::class);
        $this->app->bind(CommentRepositoryImpl::class, CommentRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
