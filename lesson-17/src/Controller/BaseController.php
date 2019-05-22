<?php


namespace App\Controller;


class BaseController
{
    public function render(string $viewName, array $params = [])
    {
        extract($params);
        $subView = sprintf('%s.html', $viewName);

        require_once sprintf('%s/../../view/main.html', __DIR__);
    }

    protected function redirect($url)
    {
        header('Location: ' . $url);
    }
}
