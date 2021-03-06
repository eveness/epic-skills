# Установка рабочего окружения для Windows

Краткое руководство для учащихся на курсе PHP в [Epic Skills](http://epixx.ru/).

[Версия без скриншотов тут >>>](https://github.com/eveness/epic-skills/blob/master/php/readme.md)

- Скачать и установить VirtualBox: https://www.virtualbox.org/wiki/Downloads
- Скачать и установить Vagrant: https://www.vagrantup.com/downloads.html
- Скачать и установить PhpStorm: https://www.jetbrains.com/phpstorm/download/#section=windows-version
- Скачать [архив с необходимыми файлами](https://github.com/eveness/epic-skills/blob/master/php/files/files.zip) и распаковать его в папку со своим будущим проектом. Лучше выбирать короткие пути, например **`C:/epixx`**, для быстрого доступа из командной строки и предотвращения проблем с русскими символами в названии папок.

## Запустить PhpStorm

- Выбрать пункт **`"Create New Project from Existing Files"`**:

![](https://github.com/eveness/epic-skills/blob/master/php/img/001.png)

- Далее самый последний пункт **`"Source files are in local directory, no Web server is yet configured."`**:

![](https://github.com/eveness/epic-skills/blob/master/php/img/002.png)

- Указать свою папку с проектом, нажать **`"Project Root"`** наверху списка и затем кнопку **`"Finish"`**:

![](https://github.com/eveness/epic-skills/blob/master/php/img/003.png)

- Запустить в меню: **`Tools`** -> **`Vagrant`** -> **`Up`**:

![](https://github.com/eveness/epic-skills/blob/master/php/img/004.png)

- Подождать пока все установится и поднимется, в первый раз это может занять довольно много времени. 
- Когда в нижнем окне появится строка **`"Process finished with exit code 0"`** -  значит всё готово:

![](https://github.com/eveness/epic-skills/blob/master/php/img/005.png)

## Проверить работоспособность

Зайти в браузер и перейти по адресу [192.168.100.220](http://192.168.100.220). Если на странице написано **`"Hello!"`**, значит у нас всё получилось.

## Если не работает :beetle:

Бить в набат, жечь тряпки, расчехлять бубны. Нас ждет увлекательнейшее путешествие в мир оконных багов. Обращайтесь к куратору, преподавателю, саппортам, вызывайте инквизицю, экзорцистов и запасайтесь святой водой.

## Рабочий процесс

Все рабочие файлы и папки помещать в подпапку проекта **`code`**, именно она синхронизируется с сервером на виртуальной машине.

Чтобы выключить виртуальную машину, нужно запустить в меню **`Tools`** -> **`Vagrant`** -> **`Halt`**:

![](https://github.com/eveness/epic-skills/blob/master/php/img/006.png)

Заходить на виртуальную машину через VirtualBox, пользователь **`vagrant`**, пароль **`vagrant`**. Такой же пароль и к базе данных для пользователя **`root`**. phpMyAdmin доступен по адресу [192.168.100.220/phpmyadmin](http://192.168.100.220/phpmyadmin).

## Виртуальная машина

- Ubuntu Trusty [64](https://github.com/eveness/epic-skills/blob/master/php/files/files.zip)/[32](https://github.com/eveness/epic-skills/blob/master/php/files/files32.zip)
- Nginx
- PHP (FPM)
- MySQL
- phpMyAdmin