<?php
/**
 * File PropertyController.php
 *
 * @author Tuan Duong <bacduong@gmail.com>
 * @package Laravue
 * @version 1.0
 */

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Laravue\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Arr;
use App\Http\Models\Property;
use App\Http\Models\PropertyTranslation;
use App\Http\Resources\PermissionResource;
use App\Http\Resources\PropertyResource;
use App\Http\Resources\PropertyEditResource;
use App\Http\Resources\PropertyCollection;
use App\Http\Traits\MediaTrait;

use Validator;
use DB;

/**
 * Class PropertyController
 *
 * @package App\Http\Controllers\Api
 */
class PropertyController extends BaseController
{
    use MediaTrait;
    const ITEM_PER_PAGE = 15;

    /**
     * Display a listing of the publication resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|ResourceCollection
     */
    public function index(Request $request)
    {
        $searchParams = $request->all();

        $propertyQuery = Property::query();

        $limit = $request->get('limit') !== null ? $request->get('limit') : '20';

        $name = Arr::get($searchParams, 'property_name', '');

        if(!empty($name)){
            $propertyQuery->where('property_name', 'LIKE', '%' . $name . '%');
        }

        $propertyQuery->orderBy("property_name", "asc")->with(['images']);
        
        /*$prop = $properties->toArray();
        //print_r($prop['data']);
        //die();
        foreach($prop['data'] as $p){
          $pp = Property::where('id', $p['id'])->first();
          if(empty($p['translations'])) {
            print_r($p);
            die();
            $n = [
                'locale' => 'en',
                'name' => $pp->name,
                'property_id' => $p['id']
              ];

            //DB::insert('insert into property_translations (locale, name, property_id) values (?, ?, ?)', $n);
            //DB::table('block_translations')->
            PropertyTranslation::create($n);
          }
          //$pp->translateOrNew($pp);
        }*/
        $properties = $propertyQuery->paginate($limit);
        // print_r($properties->toArray()); exit;
        return new PropertyCollection($properties);
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
                    //'name' => ['required']
                ]
            )
        );
    

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 403);
        } else {
            $params = $request->all();
            $property = new Property;
            $property->property_name = $request->get('name_eng');
            $property->contract = $params['contract'];
            $property->type = $params['type'];
            $property->location_id = $params['location_id'];
            //$property->short_desc = $params['short_desc'];
            $property->price = $params['price'];
            $property->floor = $params['floor'];
            $property->total_area_int = $params['total_area_int'];
            $property->total_area_ext = $params['total_area_ext'];
            $property->year_built = $params['year_built'];
            $property->garage_no = $params['garage_no'];
            $property->no_bath = $params['no_bath'];
            $property->no_bedrooms = $params['no_bedrooms'];
            $property->year_reno = $params['year_reno'];
            $property->no_outdoor_parking_spots = $params['no_outdoor_parking_spots'];
            $property->kitchen_type = $params['kitchen_type'];
            $property->orientation = $params['orientation'];
            $property->lift = $params['lift'];
            $property->security_door = $params['security_door'];
            $property->double_glazing = $params['double_glazing'];
            $property->garage = $params['garage'];
            $property->garden = $params['garden'];
            $property->parking = $params['parking'];
            $property->terrase = $params['terrase'];
            $property->garden_terrace_orientation = $params['garden_terrace_orientation'];
            $property->charges = $params['charges'];
            $property->energy_efficiency = $params['energy_efficiency'];
            /*$property->key_feature_1 = $params['key_feature_1'];
            $property->key_feature_2 = $params['key_feature_2'];
            $property->key_feature_3 = $params['key_feature_3'];*/

            //translatables
            $property->setAttribute('property_name:en', $request->get('name_eng'));
            $property->setAttribute('property_name:fr', $request->get('name_fre'));

            $property->setAttribute('short_desc:en', $request->get('shortdesceng'));
            $property->setAttribute('short_desc:fr', $request->get('shortdescfre'));

            $property->setAttribute('key_feature_1:en', $request->get('keyfeature1eng'));
            $property->setAttribute('key_feature_1:fr', $request->get('keyfeature1fre'));

            $property->setAttribute('key_feature_2:en', $request->get('keyfeature2eng'));
            $property->setAttribute('key_feature_2:fr', $request->get('keyfeature2fre'));

            $property->setAttribute('key_feature_3:en', $request->get('keyfeature3eng'));
            $property->setAttribute('key_feature_3:fr', $request->get('keyfeature3fre'));

            $property->save();
            $this->saveImages($property);

            return response(['success' => true, 'message' => 'Your property has been saved.', 'data' => new PropertyResource($property)], 200);
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  Property $property
     * @return PropertyResource|\Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        if ($id === null) {
            return response()->json(['success' => false, 'error' => 'Property not found'], 404);
        }
        $property = Property::firstOrFail()->where('id', $id)->get();
        if(!empty($property[0]->translations->toArray())){
            $property[0]->name_eng = $property[0]->translations[0]['name'];
            $property[0]->shortdesceng = $property[0]->translations[0]['short_desc'];
            $property[0]->keyfeature1eng = $property[0]->translations[0]['key_feature_1'];
            $property[0]->keyfeature2eng = $property[0]->translations[0]['key_feature_2'];
            $property[0]->keyfeature3eng = $property[0]->translations[0]['key_feature_3'];

            $property[0]->name_fre = $property[0]->translations[1]['name'];
            $property[0]->shortdescfre = $property[0]->translations[1]['short_desc'];
            $property[0]->keyfeature1fre = $property[0]->translations[1]['key_feature_1'];
            $property[0]->keyfeature2fre = $property[0]->translations[1]['key_feature_2'];
            $property[0]->keyfeature3fre = $property[0]->translations[1]['key_feature_3'];
        }

        return response(['success' => true, 'message' => 'Retrieved successfully', 'data' => new PropertyResource($property)], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  Property $property
     * @return PropertyResource|\Illuminate\Http\JsonResponse
     */
    public function edit(Property $property)
    {
        if ($property === null) {
            return response()->json(['success' => false, 'error' => 'Property not found'], 404);
        }

        if(!empty($property->translations->toArray())){
            // print_r($property->translations->toArray()); exit;
            $property->name_eng = isset($property->translations[0]['property_name']) ? $property->translations[0]['property_name'] : '' ;
            $property->shortdesceng = isset($property->translations[0]['short_desc']) ? $property->translations[0]['short_desc'] : '' ;
            $property->keyfeature1eng = isset($property->translations[0]['key_feature_1']) ? $property->translations[0]['key_feature_1'] : '' ;
            $property->keyfeature2eng = isset($property->translations[0]['key_feature_2']) ? $property->translations[0]['key_feature_2'] : '' ;
            $property->keyfeature3eng = isset($property->translations[0]['key_feature_3']) ? $property->translations[0]['key_feature_3'] : '' ;

            $property->name_fre = isset($property->translations[1]['property_name']) ? $property->translations[1]['property_name'] : '' ;
            $property->shortdescfre = isset($property->translations[1]['short_desc']) ? $property->translations[1]['short_desc'] : '' ;
            $property->keyfeature1fre = isset($property->translations[1]['key_feature_1']) ? $property->translations[1]['key_feature_1'] : '' ;
            $property->keyfeature2fre = isset($property->translations[1]['key_feature_2']) ? $property->translations[1]['key_feature_2'] : '' ;
            $property->keyfeature3fre = isset($property->translations[1]['key_feature_3']) ? $property->translations[1]['key_feature_3'] : '' ;
        }

        $property->media = $property
        ->getMedia('properties')->sortBy('order_column');

        foreach($property->media as $media){
            $files[] = [
                'id' => $media->id,
                'alttext' => $media->hasCustomProperty('alt_text')?$media->getCustomProperty('alt_text'):'',
                'credit' => $media->hasCustomProperty('credit')?$media->getCustomProperty('credit'):'',
                'path' => $media->getFullUrl()
            ];
        }

        if(!empty($files)){
            $property->images = $files;
        }

        return response(['success' => true, 'message' => 'Retrieved successfully', 'data' => new PropertyResource($property)], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Property    $property
     * @return PropertyResource|\Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Property $property)
    {
        if ($property === null) {
            return response()->json(['error' => 'Property not found'], 404);
        }

        $validator = Validator::make($request->all(), $this->getValidationRules(false));
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 403);
        }
        else {
            $params = $request->all();
            $property->property_id = $request->get('property_id');
            $property->property_name = $request->get('name_eng');
            $property->active = $request->get('active');
            $property->featured = $request->get('featured');
            $property->contract = $request->get('contract');
            $property->type = $request->get('type');
            $property->location_id = $request->get('location_id');
            //$property->short_desc = $request->get('short_desc');
            $property->price = $request->get('price');
            $property->floor = $request->get('floor');
            $property->total_area_int = $request->get('total_area_int');
            $property->total_area_ext = $request->get('total_area_ext');
            $property->year_built = $request->get('year_built');
            $property->garage_no = $request->get('garage_no');
            $property->no_bath = $request->get('no_bath');
            $property->no_bedrooms = $request->get('no_bedrooms');
            $property->year_reno = $request->get('year_reno');
            $property->no_outdoor_parking_spots = $request->get('no_outdoor_parking_spots');
            $property->kitchen_type = $request->get('kitchen_type');
            $property->orientation = $request->get('orientation');
            $property->lift = $request->get('lift');
            $property->security_door = $request->get('security_door');
            $property->double_glazing = $request->get('double_glazing');
            $property->garage = $request->get('garage');
            $property->garden = $request->get('garden');
            $property->parking = $request->get('parking');
            $property->terrase = $request->get('terrase');
            $property->garden_terrace_orientation = $params['garden_terrace_orientation'];
            $property->charges = $params['charges'];
            $property->energy_efficiency = $params['energy_efficiency'];

            if($request->get('mapCenter')){
                $property->lat = $request->get('mapCenter')['lat'];
                $property->lng = $request->get('mapCenter')['lng'];
            }
            //$property->key_feature_3 = $request->get('key_feature_3');

            //translatables
            $property->setAttribute('property_name:en', $request->get('name_eng'));
            $property->setAttribute('property_name:fr', $request->get('name_fre'));

            $property->setAttribute('short_desc:en', $request->get('shortdesceng'));
            $property->setAttribute('short_desc:fr', $request->get('shortdescfre'));

            $property->setAttribute('key_feature_1:en', $request->get('keyfeature1eng'));
            $property->setAttribute('key_feature_1:fr', $request->get('keyfeature1fre'));

            $property->setAttribute('key_feature_2:en', $request->get('keyfeature2eng'));
            $property->setAttribute('key_feature_2:fr', $request->get('keyfeature2fre'));

            $property->setAttribute('key_feature_3:en', $request->get('keyfeature3eng'));
            $property->setAttribute('key_feature_3:fr', $request->get('keyfeature3fre'));

            $property->update();
            $this->saveImages($property);

            return response()->json(['success' => true, 'message' => 'Retrieved successfully', 'data' => new PropertyResource($property)], 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Property    $property
     * @return PropertyResource|\Illuminate\Http\JsonResponse
     */
    public function updateStatus(Request $request, Property $property)
    {
        if ($property === null) {
            return response()->json(['error' => 'Property not found'], 404);
        }

        $params = $request->all();
        $property->active = $request->get('active');
        $property->featured = $request->get('featured');
        $property->sold = $request->get('sold');
        $property->save();

        return response()->json(['success' => true, 'message' => 'Retrieved successfully', 'data' => new PropertyResource($property)], 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  Publication $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        if ($publication->isAdmin()) {
            return response()->json(['error' => 'Ehhh! Can not delete admin publication'], 403);
        }

        try {
            $publication->delete();
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
            //'name' => 'required'
        ];
    }
}
