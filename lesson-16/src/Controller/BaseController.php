<?php


namespace App\Controller;


class BaseController
{
    public function render(string $viewName, array $params = [])
    {
        extract($params);

        require_once sprintf('%s/../../view/%s.html', __DIR__, $viewName);
    }
}