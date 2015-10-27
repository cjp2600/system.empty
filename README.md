#System empty#

Пустой компонент (CMS Bitrix).

#Установка через Composer##

В своем Bitrix проекте в файле composer.json необходимо прописать:

```json
{
  "extra": {
    "installer-paths": {
      "local/components/{$vendor}/{$name}/": [
        "type:bitrix-component"
      ]
    }
  },
  "require": {
    "cjp2600/system.empty": ">=0.0.1"
  }
}
```

Указать путь к папке компонентов, и ссылку на репозиторий 