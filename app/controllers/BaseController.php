<?php

class BaseController extends Controller {

	protected $uploadFolder = 'uploads/';

	protected $breadcumbs = array(
		array(
			'name' => 'Escritorio',
			'route' => '/'
			),
		);

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function uploadImage($image){

		$info_image = getimagesize($image);
		$width=array("100","200","400",$info_image[0]);
		$filename = Crypt::encrypt($image->getClientOriginalName().date('Y-m-d H:i:s')).".".$image->getClientOriginalExtension();
		/*$nombres=["thumb_".$filename,"small_".$filename,"medium_".$filename, "large_".$filename];*/

		$names = array(
			"thumb_".$filename => '100',
			"small_".$filename => '200',
			"medium_".$filename => '300',
			"large_".$filename => $info_image[0],
			);

		foreach( $names as $name => $width ):
			$path = public_path($this->uploadFolder.$name);
			Image::make($image->getRealPath())->resize($width,null,function ($constraint) {$constraint->aspectRatio();})->save($path);
		endforeach;

		/*for ($i=0; $i <count($width) ; $i++):

			$path = public_path($this->uploadFolder.$nombres[$i]);
			Image::make($image->getRealPath())->resize($width[$i],null,function ($constraint) {$constraint->aspectRatio();})->save($path);
		
		endfor;*/

		return $filename;
		
	}

}
