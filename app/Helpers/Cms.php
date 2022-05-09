<?php


namespace App\Helpers;

use App\Traits\Cms\Slug;
use Illuminate\Support\Facades\Route;


/**
 * Хелперы для CMS
 */
class Cms
{

    /**
     * Создание массива всех роутов (кроме админских). Для использования в фильтрах, выпадающих списках и т.д.
     * Если параметр $keyBy = '' - возвращается ассоциативный массив route name => route uri,
     * если $keyBy = 'uri', то route uri => route uri
     */

    public static function getAllRoutes($keyBy = '')
    {

        $routes = [];

        foreach(Route::getRoutes()->getRoutesByName() as $name => $route){
            if (!in_array('GET', $route->methods) || stripos($route->uri, 'admin') !== false) {
                continue;
            }
            $key = (!empty($keyBy)) ? $route->$keyBy : $name;

            $routes[$key] = $route->uri;
        }

        return $routes;

    }

    /**
     * Создание массива всех роутов (кроме админских). Для использования в фильтрах, выпадающих списках и т.д. Только для раздела админки "Content fields"
     */
    public static function getAllRoutesForContentFields()
    {
        return array_merge(['header' => 'header', 'footer' => 'footer'], self::getAllRoutes());
    }

    /**
     * Преобразует значения env-настроек в массив (например DEFAULT_EMAIL нормализуется и преобразуется в массив для последующей передачи в фасад Mail).
     */
    public static function getFromEnvArray($env_var)
    {

        $returnArr = array_filter(explode(',', $env_var), function ($current) {
            return $current;
        });

        $returnArr = array_map('trim', $returnArr);

        return $returnArr;

    }

    /**
     * @param  null  $modelsDir
     * @param  null  $namespace
     * @return array
     */
    public static function getModelWithSlug($modelsDir = null)
    {
        $modelsDir = !empty($modelsDir) ? $modelsDir : app_path('Models');
        $modelsList = [];

        $results = scandir($modelsDir);

        foreach ($results as $result) {

            if ($result === '.' || $result === '..') {
                continue;
            }

            $item = $modelsDir . '/' . $result;

            if (is_dir($item)) {

                $modelsList = array_merge($modelsList, self::getModelWithSlug($item));

            }else{

                $appDirUcFirst = ucfirst(str_replace([base_path(), '/'], '', app_path()));

                $model = $appDirUcFirst . (str_replace([app_path(), "/", '.php'], ["", "\\", ""], $item));

                if (class_exists($model)) {

                    $entry = new $model;

                    if (in_array(Slug::class, class_uses($entry))) {
                        $modelsList[$model] = $model;
                    }
                }
            }

        }

        return $modelsList;
    }

    /**
     * Получить URL личного кабинета для текущего домена
     */
    public static function getPersonalAreaUrl($segment = null)
    {
        if (!empty(config('hosts.additional_site_domain')) && !empty(config('hosts.additional_pa_domain'))) {
            config()->set('hosts.relations', array_merge(config('hosts.relations'), [config('hosts.additional_site_domain') => config('hosts.additional_pa_domain')]));
        }

        return "//" . config('hosts.relations')[request()->server('SERVER_NAME')] . '/' . trim($segment, '/');
    }

    /**
     * Очистка кеша, вызывается по событиям, пока saved и deleted
     * !!!! Метод пока не используем !!!!
     *
     * @param $modelObj
     */
    public static function cacheClear($modelObj)
    {
        $cachePrefix = cache()->getPrefix();

        if (!empty(config('hosts.relations'))) {

            if (!empty(config('hosts.additional_site_domain')) && !empty(config('hosts.additional_pa_domain'))) {
                config()->set('hosts.relations', array_merge(config('hosts.relations'), [config('hosts.additional_site_domain') => config('hosts.additional_pa_domain')]));
            }

            foreach (config('hosts.relations') as $key => $value) {
                cache()->setPrefix($key);
                cache()->tags(['content', get_class(current($modelObj))])->flush();
            }

        } else if (!empty(config('app.url')) && config('app.url') != 'http://localhost') {

            cache()->setPrefix(config('app.url'));
            cache()->tags(['content', get_class(current($modelObj))])->flush();

        } else {
            cache()->flush();
        }

        cache()->setPrefix($cachePrefix);
    }

}
