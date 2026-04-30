<?php
    #START : Проверка наличия активной сессии
    require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/session_start.php");
    #END

    $userWhichSignIn = null;
    if(isset($_SESSION['user']) && is_array($_SESSION['user']) && isset($_SESSION['user']['nickname'])){
        $userWhichSignIn = $_SESSION['user']['nickname'];
    }

    #START : AJAX : Session : true : user-menu->settings->personal information->upload avatar. Save image in folder
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_FILES['croppedImage'])) {
            // Укажите путь к папке, куда будут загружены изображения
            $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/src/du/avatar/"; 
            
            // Проверка наличия папки для загрузки
            if (!is_dir($uploadDir)) {
                echo "Ошибка: Папка для загрузки изображений не найдена.";
                exit;
            }

            // Проверка разрешений на запись для папки
            if (!is_writable($uploadDir)) {
                echo "Ошибка: Недостаточно прав для записи в папку загрузки изображений.";
                exit;
            }

            // Проверка наличия загруженного файла
            if ($_FILES['croppedImage']['error'] !== UPLOAD_ERR_OK) {
                echo "Ошибка при загрузке изображения: ";
                switch ($_FILES['croppedImage']['error']) {
                    case UPLOAD_ERR_INI_SIZE:
                        echo "Размер загруженного файла превысил директиву upload_max_filesize в php.ini.";
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        echo "Размер загруженного файла превысил значение MAX_FILE_SIZE, указанное в HTML-форме.";
                        break;
                    case UPLOAD_ERR_PARTIAL:
                        echo "Файл был загружен только частично.";
                        break;
                    case UPLOAD_ERR_NO_FILE:
                        echo "Файл не был загружен.";
                        break;
                    case UPLOAD_ERR_NO_TMP_DIR:
                        echo "Отсутствует временная папка для загрузки.";
                        break;
                    case UPLOAD_ERR_CANT_WRITE:
                        echo "Не удалось записать файл на диск.";
                        break;
                    case UPLOAD_ERR_EXTENSION:
                        echo "PHP-расширение остановило загрузку файла.";
                        break;
                    default:
                        echo "Неизвестная ошибка.";
                        break;
                }
                exit;
            }

            // Получение имени файла на основе имени пользователя и текущей даты и времени
            $username = $userWhichSignIn; // Замените "username" на фактическое имя пользователя
            $timestamp = date("dmYHis"); // Получение текущей даты и времени
            $avatar_username_timestamp_png = "avatar_" . $username . "_" . $timestamp . ".png";
            $uploadFile = $uploadDir . $avatar_username_timestamp_png;

            // Перемещаем изображение из временной директории в нужное место на сервере
            if (move_uploaded_file($_FILES['croppedImage']['tmp_name'], $uploadFile)) {
                // Установка прав доступа к файлу
                chmod($uploadFile, 0644);
                
                echo "Изображение успешно загружено.";

                //START : Save image_name.png to bd : users->avatar
                /*Connect to bd->*/require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/connectDB.php");
                /*Query->*/$query_delete_stb = mysqli_query($connect, "UPDATE `users` SET `avatar` = '$avatar_username_timestamp_png' WHERE `users`.`nickname` = '$userWhichSignIn';");
                #Check if query was successful
                if($query_delete_stb){
                    echo "Изображение успешно сохранено в базе данных.";
                } else {
                    echo "Ошибка при сохранении изображения в базе данных: " . mysqli_error($connect);
                }
                //END
            } else {
                echo "Ошибка при перемещении изображения в папку назначения.";
            }
        } else {
            echo "Изображение не было передано.";
        }
    }
    #END
?>
