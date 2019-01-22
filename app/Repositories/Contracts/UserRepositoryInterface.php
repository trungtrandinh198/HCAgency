<?php
namespace App\Repositories\Contracts;

interface UserepositoryInterface
{
    public function list();

    public function show($id);

    public function edit($id);

}