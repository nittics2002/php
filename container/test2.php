<?php


//bindParametersはclass method用のパラメータをbindする
//基本的にdomain中でbindParameterする
//isPrompty == false raw()と同じ
//isPrompty == true $container のpropertyに新規array作成
//get()にcallされたら 削除する処理を追加する




$container->bindParameters(
  ClassNamespace::class,
  parameters = [
    methodName1 => [
      parameterName11 => $value11,
      parameterName12 => $value12,
    ],
    methodName2 => [
      parameterName21 => $value11,
      parameterName22 => $value12,
    ],
  ]
  true,
);

  /*
   *  @param string $name
   *  @param array $parameters
   *  @param ?bool $isPromptly
   *  @return ContainerInterface
   */
  public function bindParameters(
    string $name,
    array $parameters,
    ?bool $isPromptly = true
  ):ContainerInterface {

    foreach($parameters as $parameter) {
      $
    }

  }














  public function bindParameters(
    string $name,
    array $parameters,
  ):ContainerInterface {


