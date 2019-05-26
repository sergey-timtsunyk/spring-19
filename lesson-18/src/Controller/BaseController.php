<?php


namespace App\Controller;


class BaseController
{
    protected function render(string $viewName, array $params = [])
    {
        extract($params);
        $subView = sprintf('%s.html', $viewName);

        require_once sprintf('%s/../../view/main.html', __DIR__);
    }


    protected function getView(string $viewName, array $params = [])
    {
        extract($params);
        require_once sprintf('%s/../../view/%s.html', __DIR__, $viewName);
    }

    protected function redirect($url)
    {
        header('Location: ' . $url);
    }
}
