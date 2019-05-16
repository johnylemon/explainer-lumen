<?php


$router->get(config('explainer.docs_uri'), function () {

    return view('explainer::app')->with([
        'data' => @file_get_contents(config('explainer.json_path'))
    ]);

})->explain(config('explainer.explain_self') ? Lemon\Explainer\Explains\SelfExplain::class : NULL);


$router->get(config('explainer.json_uri'), function () {

    return new \Illuminate\Http\JsonResponse(json_decode(@file_get_contents(config('explainer.json_path'))));

});
