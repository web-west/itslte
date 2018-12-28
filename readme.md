## Инсталяция админ панели в стиле LTE

### Выполняем команды для развертывания и компиляции проекта
```
$ npm i
$ bower i
$ npm run watch или npm run watch-poll // для отслеживания изменений и перекомпиляции
$ npm run prod или npm run dev // для генерации скриптов и стилей
```

Копируем ```./webpack-example/webpack.mix.itslte.js``` в директорию родителя
```
$ cp ./webpack-laravel/webpack.mix.itslte.js ../
```
и добавляем в Laravel поддержку этого файла