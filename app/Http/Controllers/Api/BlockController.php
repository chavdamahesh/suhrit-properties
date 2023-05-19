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

use App\Http\Models\Block;
use App\Http\Resources\PermissionResource;
use App\Http\Resources\BlockResource;
use App\Http\Resources\BlockCollection;


/**
 * Class PublicationController
 *
 * @package App\Http\Controllers\Api
 */
class BlockController extends BaseController
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
        $blocks = Block::with([]);

        $limit = request()->get('limit');

        return new BlockCollection($blocks->paginate($limit));
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
            $block = Block::create([
                'title' => $params['translations'][0]['title'],
                'content' => $params['translations'][0]['content'],
                'summary' => $params['translations'][0]['summary'],
                'block_key' => Str::slug($params['translations'][0]['title']),
                'is_published' => 1,
                ]);

            $block->save();

            //translatables
            $block->setAttribute('title:en', $request->get('translations')[0]['title']);
            $block->setAttribute('title:fr', $request->get('translations')[1]['title']);

            $block->setAttribute('summary:en', $request->get('translations')[0]['summary']);
            $block->setAttribute('summary:fr', $request->get('translations')[1]['summary']);

            $block->setAttribute('content:en', $request->get('translations')[0]['content']);
            $block->setAttribute('content:fr', $request->get('translations')[1]['content']);

            $block->save();            

            return response(['success' => true, 'message' => 'Your article has been saved.', 'data' => new BlockResource($block)], 200);
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
            return response()->json(['success' => false, 'error' => 'Block not found'], 404);
        }
        $block = Block::firstOrFail()->where('id',$id)->get();
        return response(['success' => true, 'message' => 'Retrieved successfully', 'data' => new BlockResource($block)], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  Publication $publication
     * @return PublicationResource|\Illuminate\Http\JsonResponse
     */
    public function edit(Block $block)
    {
        if ($block === null) {
            return response()->json(['success' => false, 'error' => 'Block not found'], 404);
        }
        return response(['success' => true, 'message' => 'Retrieved successfully', 'data' => new PublicationResource($block)], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Publication    $publication
     * @return PublicationResource|\Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Block $block)
    {
        if ($block === null) {
            return response()->json(['error' => 'Block not found'], 404);
        }

        //translatables
        $block->setAttribute('title:en', $request->get('translations')[0]['title']);
        $block->setAttribute('title:fr', $request->get('translations')[1]['title']);

        $block->setAttribute('summary:en', $request->get('translations')[0]['summary']);
        $block->setAttribute('summary:fr', $request->get('translations')[1]['summary']);

        $block->setAttribute('content:en', $request->get('translations')[0]['content']);
        $block->setAttribute('content:fr', $request->get('translations')[1]['content']);


        $block->save();
        return response()->json(['success' => true, 'message' => 'Retrieved successfully', 'data' => new BlockResource($block)], 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  Publication $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Block $block)
    {
        if ($block->isAdmin()) {
            return response()->json(['error' => 'Ehhh! Can not delete admin block'], 403);
        }

        try {
            $block->delete();
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
