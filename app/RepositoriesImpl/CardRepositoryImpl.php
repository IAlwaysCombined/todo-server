<?php

namespace App\RepositoriesImpl;

use App\RepositoriesImpl\base\CrudRepositoryImpl;
use Illuminate\Http\Request;

interface CardRepositoryImpl extends CrudRepositoryImpl
{
    public function addMember(Request $request);
}
