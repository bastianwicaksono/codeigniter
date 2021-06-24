<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_order;

class C_order extends BaseController
{
	public function index()
	{
		$model = new M_order();
		$data['OrderID'] = $model->getOrder();
		echo view('V_order',$data);
	}
}
?>