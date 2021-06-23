<?php

namespace Orm\Interfaces;

interface BaseInterface
{

    public function findOne();

    public function findAll();

    public function setFetchMode();

    public function setResultType();

}