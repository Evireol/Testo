# На своём компьютере
mkdir test-php-repo
cd test-php-repo
git init

# Создайте файл
echo "<?php
echo 'Hello from GitHub dynamic stats!';
// Пример Bitrix-стиля
if (class_exists('\Bitrix\Main\Application')) {
    echo 'Bitrix is here!';
}
" > index.php

# Закоммитьте
git add .
git commit -m "Add PHP code for language detection"

# Залейте на GitHub (создайте репозиторий на github.com/Evireol/test-php-repo)
git remote add origin https://github.com/Evireol/test-php-repo.git
git push -u origin main
