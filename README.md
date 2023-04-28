# PaginatorYii2
Кастомный виджет пагинации для Yii2

Пример формирования экземпляра класса пагинации в контроллере (Действия по умолчанию):

```php
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => $perPage,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);

```

Использование виджета во вьюшке:

```php
echo \app\widgets\Paginator::widget(['pagination' => $pages]);
```

Результат:

![image](https://user-images.githubusercontent.com/10581774/235269165-5cf27715-4eb1-404a-aad0-4e391045fd38.png)
![image](https://user-images.githubusercontent.com/10581774/235269221-6c19fa91-27ca-4014-a345-db2a50e03958.png)

## Элементы
1) previous arrow - ```/views/Pagination/_partials/_previous.php```
2) next arrow - ```/views/Pagination/_partials/_next.php```
3) li elements - ```/views/Pagination/generator.php```
