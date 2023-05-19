<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use App\Http\Models\Trans;
use App\Http\Models\PropertyTranslation;

class TranslationMigrator extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'i18n_migrate';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Migrate cake i18n to laravel translatable';


	public function __construct(
		Trans $trans,
		PropertyTranslation $propertyTranslation
		)
	{
        parent::__construct();
        $this->trans = $trans;
		$this->cbt = $propertyTranslation;

    }

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{

		// get all
		// get row 1
		// test for which model to inject it into
		// see if id exists
		// if not create new
		// if it does update with new value
		//
		$trans = $this->trans->where('model','=','Property')->get();
		//dd($trans->toArray());

		foreach($trans as $t){
			$row = [];

			if($t->content === '') continue;
			if($t->content === ' ') continue;

			$row['locale'] = $t->locale;
			$row['property_id'] = $t->foreign_key;

			//property fields
			//name			
			if($t->field === 'name'){
				$row['name'] = $t->content;
			} else {
				unset($row['name']);
			}
			//short_desc			
			if($t->field === 'desc'){
				$row['short_desc'] = $t->content;
			} else {
				unset($row['short_desc']);
			}
			//key_feature_1			
			if($t->field === 'key_feature_1'){
				$row['key_feature_1'] = $t->content;
			} else {
				unset($row['key_feature_1']);
			}
			//key_feature_2			
			if($t->field === 'key_feature_2'){
				$row['key_feature_2'] = $t->content;
			} else {
				unset($row['key_feature_2']);
			}
			//key_feature_3			
			if($t->field === 'key_feature_3'){
				$row['key_feature_3'] = $t->content;
			} else {
				unset($row['key_feature_3']);
			}

			$cbt = $this->cbt
					->where('property_id','=',$t->foreign_key)
					->where('locale','=',$t->locale)
					->first();


			if(isset($cbt['id'])){
				if($t->foreign_key === 48){
					$this->info($cbt['id']);
					$this->info(print_r($row));
				}
				$cbt->update($row);
			} else {
					$new =$this->cbt->create($row);
		            $new->save();

			}

		}

	}

}
