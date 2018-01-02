<?php
function call($controller, $action){
	require_once('controllers/c_'.$controller.'.php');

	switch ($controller) {

		case 'home':
		$controller=new HomeController();
		require_once('models/m_home.php');
		require_once('models/m_admin.php');
		require_once('models/m_post.php');
		require_once('models/m_komen.php');
		require_once('models/m_nasabah.php');
		require_once('models/m_postAdmin.php');
		require_once('models/m_pegawai.php');
		break;

		case 'saldo':
		$controller=new SaldoController();
		require_once('models/m_saldo.php');
		break;

		case 'admin':
		$controller=new AdminController();
		require_once('models/m_admin.php');
		break;

		case 'login':
		require_once('models/m_login.php');
		$controller=new LoginController();
		break;

		case 'register':
		require_once('models/m_register.php');
		$controller=new RegisterController();
		break;

		case 'post' :
		require_once('models/m_post.php');
		require_once('models/m_komen.php');
		$controller=new PostController();
		break;

		case 'pegawai' :
		require_once('models/m_pegawai.php');
		$controller=new PegawaiController();
		break;

		case 'postAdmin' :
		require_once('models/m_postAdmin.php');
		$controller=new PostAdminController();
		break;

		case 'postPegawai' :
		require_once('models/m_postPegawai.php');
		$controller=new PostPegawaiController();
		break;

		case 'komentarAll' :
		require_once('models/m_komentarAll.php');
		$controller=new KomentarAllController();
		break;

		case 'postNasabah' :
		require_once('models/m_postNasabah.php');
		$controller=new PostNasabahController();
		break;

		case 'komentarNasabah' :
		require_once('models/m_komentarNasabah.php');
		$controller=new KomentarNasabahController();
		break;


		// case 'login':
		// $controller=new c_login();
		// require_once('models/m_login.php');
		// break;
    //
    //


	}
	$controller->{ $action }();
}

$controllers = array(
	'home'=>['home', 'awal', 'homePegawai','about','homeNasabah','error', 'post','postAdmin','komentar',],
	'saldo'=>['tampilAddSaldo','addDataSaldo','showAllSaldo',"editSaldo","editDataSaldo",
	"deleteSaldo"
	],
	'admin'=>['tampilAddPegawai','addPegawai','showAllPegawai',"editPegawai","editDataPegawai",
	"deletPegawai",
	],
	'login' => ['login', 'authentication', 'error'
	],
	'register' => [ 'register', 'addRegister',
		],
	'post'=>['order','Tanjing','anjing','addanjing','editanjing','editanjing2',
	],
	'pegawai'=>['tampilAddNasabah','addNasabah','showAllNasabah',"editNasabah","editDataNasabah",
	"deletNasabah", 'postPegawai',
	],
	'postAdmin'=>['setujuPost','tolakPost', 'hapusPost',
	],
	'postPegawai'=>['postPegawai', 'addPost', 'addDataPost'
	],
	'komentarAll'=>['komentarAll','tampilAddKomen', 'addKomenPegawai',],
	'postNasabah'=>['postNasabah','addPost', 'addDataPost',
	],
	'komentarNasabah'=>['komentarNasabah','tampilAddKomen'
	,],





	);


if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller,$action);
	} else {
		call($controller,'error');
	}

} else {
	call($controller,'error');
}

?>
