
#210809

## 4



## 3

- getClass()が非推奨なのでgetTypeに変更を進めたが、
- typeが複数ある場合やmixedを考えると
- $this->resolveArgumentを改造したほうが良いような...
- その為には解決する引数がある場合、laravelのようにneeds()が必要では?

## 2

- ReflectionParameterで非推奨となったmethodの変更
 - getType()に変更必要

## 1

- class以外の引数の解決を検討
 - laravel ->makeWith($abstract, $arguments)
 - bind()に引数array $arguments 追加?
 - laravel　->needes('$neme_string') give($val)
 -synfony ->arg('$$neme_string'), $val)


