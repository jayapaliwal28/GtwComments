<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */

 class Comment extends AppModel {
    
    public $belongsTo = 'User';
    
    public $status = array(
                        0 => 'Pending', 
                        1 => 'Approved', 
                        2 => 'Disapprove', 
                        3 => 'Spam'
                    );
}