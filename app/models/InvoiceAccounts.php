<?php

class InvoiceAccounts extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'invoice_accounts';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	protected $fillable = [];

	public function invoices(){

		return $this->hasMany('Invoices', 'id_invoice_account', 'id');
		
	}
	
}