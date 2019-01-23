<?php
namespace App\Repositories\Contracts;

interface CategoryrepositoryInterface
{
    public function list();

    public function show($id);

    public function edit($id);

}