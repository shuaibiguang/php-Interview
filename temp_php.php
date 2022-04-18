// 控制器

// 直接请求接口形式
public funciton actionCreateCompany()
{
  $get = Yii::$app->request->get();
  $post = Yii::$atpp->request->post();

  $model = new Model(['get' => $get, 'post' => $post]);
  $model->createCompany();
}

public function actionOperacion（）
{
  $get = Yii::$app->request->get();
  $post = Yii::$atpp->request->post();

  $code = $get['code'];

  $model = new Model(['get' => $get, 'post' => $post]);
  $model->createCompany($get, $post);

  switch($code) {
    case 'create-company':
      $model->createCompany()
    break;
  }
}


// model
public $get
public $post

public function createCompany()
{
  // 处理逻辑
}
