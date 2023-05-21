<?php

namespace App\RepositoriesImpl\base;

use Illuminate\Http\Request;

interface CrudRepositoryImpl
{
    public function index();

    public function view(int $id);

    public function create(Request $request);

    public function update(Request $request, int $id);

    public function delete(int $id);
}
