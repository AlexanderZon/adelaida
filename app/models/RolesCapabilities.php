<?php

class RolesCapabilities extends \Eloquent {

	protected $table = 'role_capabilities';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    
}