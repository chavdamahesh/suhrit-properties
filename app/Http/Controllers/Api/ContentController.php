<?php
/**
 * File PublicationController.php
 *
 * @author Tuan Duong <bacduong@gmail.com>
 * @package Laravue
 * @version 1.0
 */

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Laravue\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Validator;
use Str;

use App\Http\Models\Content;
use App\Http\Resources\PermissionResource;
use App\Http\Resources\ContentResource;
use App\Http\Resources\ContentCollection;


/**
 * Class PublicationController
 *
 * @package App\Http\Controllers\Api
 */
class ContentController extends BaseController
{
    const ITEM_PER_PAGE = 15;

    /**
     * Display a listing of the publication resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|ResourceCollection
     */
    public function index()
    {
        $contents = Content::with([]);

        return new ContentCollection($contents->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            array_merge(
                $this->getValidationRules(),
                [
                    //'title' => ['required', 'min:10']
                ]
            )
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 403);
        } else {
            $params = $request->all();
            $content = Content::create([
                'title' => $params['translations'][0]['title'],
                'content_key' => Str::slug($params['translations'][0]['title'])
                ]);

            $content->save();

            //translatables
            $content->setAttribute('title:en', $request->get('translations')[0]['title']);
            $content->setAttribute('title:fr', $request->get('translations')[1]['title']);

            $content->save();            

            return response(['success' => true, 'message' => 'Your content has been saved.', 'data' => new ContentResource($content)], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Publication $publication
     * @return PublicationResource|\Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        if ($id === null) {
            return response()->json(['success' => false, 'error' => 'Content not found'], 404);
        }
        $content = Content::firstOrFail()->where('id',$id)->get();
        return response(['success' => true, 'message' => 'Retrieved successfully', 'data' => new ContentResource($content)], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  Publication $publication
     * @return PublicationResource|\Illuminate\Http\JsonResponse
     */
    public function edit(Content $content)
    {
        if ($content === null) {
            return response()->json(['success' => false, 'error' => 'Content not found'], 404);
        }
        return response(['success' => true, 'message' => 'Retrieved successfully', 'data' => new PublicationResource($content)], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Publication    $publication
     * @return PublicationResource|\Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Content $content)
    {
        if ($content === null) {
            return response()->json(['error' => 'Content not found'], 404);
        }

        //translatables
        $content->setAttribute('title:en', $request->get('translations')[0]['title']);
        $content->setAttribute('title:fr', $request->get('translations')[1]['title']);


        $content->save();
        return response()->json(['success' => true, 'message' => 'Retrieved successfully', 'data' => new ContentResource($content)], 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  Publication $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        if ($content->isAdmin()) {
            return response()->json(['error' => 'Ehhh! Can not delete admin content'], 403);
        }

        try {
            $content->delete();
        } catch (\Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 403);
        }

        return response()->json(null, 204);
    }



    /**
     * @param bool $isNew
     * @return array
     */
    private function getValidationRules($isNew = true)
    {
        return [
            /*'title' => 'required',
            'content' => 'required'*/
        ];
    }
}
