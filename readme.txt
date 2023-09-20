Необходимо для корректной работы добавить запись о доменном имене в /etc/hosts
127.0.0.1 nextcloud
127.0.0.1 onlyoffice

Также добавить запись о подключениях в /etc/postgresql/Версия/main/pg_hba.conf
host    all   oc_solanteq_user       all   md5

1. Поднятие инфраструктуры: docker-compose up -d
2. Переход на https://nextcloud/
3. Создание аккаунта администратора (Например: user=admin, pass=admin)
4. Пропуск (Нажатие на "Skip") и закрытие уведомления
5. Нажатие в правом верхнем углу по иконке администратора и выбор пункта "Apps"
6. Поиск при помощи иконки лупы в правом верхнем углу по слову: "Onlyoffice"
7. Нажатие кнопки "Download and enable"
8. Нажатие в правом верхнем углу по иконке администратора и выбор пункта "Administration settings"
9. В левом скролл-баре прокрутка вниз и нажатие на "ONLYOFFICE"
10. ONLYOFFICE Docs address = https://onlyoffice
    Secret key = xCMlaRYCsUvuTL8AB2KjDL8bvsnm5Ru0kz0JfC1VjVI=
    (Такой же как и в манифесте докер-компоуза)
    ONLYOFFICE Docs address for internal requests from the server = http://onlyoffice/
    Server address for internal requests from ONLYOFFICE Docs = http://nextcloud/
11. Нажатие кнопки "Save"
12. Нажатие в левом верхнем углу по иконке файлоа ("Files")
13. Нажатие в верху по иконке плюса
14. Нажатие по "New Document" и ввод названия
15. Переход в редактор Onlyoffice