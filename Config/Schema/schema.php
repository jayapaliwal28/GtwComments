<?php 
class GtwCommentSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}
	
	public $comments = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'model' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'ref_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'comment' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'status' => array('type'=>'boolean', 'null' => false, 'default' => '1'), // possible values: 0=>Pending, 1=>Approved, 2=>Disapprove, 3=>Spam
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'updated' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		)
	);

}
