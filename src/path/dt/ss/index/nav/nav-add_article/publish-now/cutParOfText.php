<?php
function truncateHtml($html, $limit) {
    $dom = new DOMDocument();
    // Загружаем HTML, игнорируя ошибки
    @$dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
    
    $words = 0;
    $truncated = '';
    $nodeStack = [];
    $insideWord = false;

    // Рекурсивная функция для обхода DOM-дерева
    $truncate = function ($node) use (&$words, &$truncated, &$nodeStack, &$insideWord, &$limit, &$truncate) {
        if ($words >= $limit) {
            return;
        }

        // Если это текстовый узел
        if ($node->nodeType === XML_TEXT_NODE) {
            $text = $node->wholeText;
            $wordCount = str_word_count($text, 0, 'ĂÂÎȘȚăâîșț');
            
            if ($words + $wordCount > $limit) {
                $wordsNeeded = $limit - $words;
                $textWords = preg_split('/\s+/', $text);
                $truncated .= implode(' ', array_slice($textWords, 0, $wordsNeeded));
                $words = $limit;
                return;
            } else {
                $truncated .= $text;
                $words += $wordCount;
            }
        } else if ($node->nodeType === XML_ELEMENT_NODE) {
            $nodeStack[] = $node->nodeName;
            $truncated .= '<' . $node->nodeName;

            // Копируем атрибуты узла
            foreach ($node->attributes as $attribute) {
                $truncated .= ' ' . $attribute->name . '="' . $attribute->value . '"';
            }

            $truncated .= '>';

            foreach ($node->childNodes as $child) {
                $truncate($child);
                if ($words >= $limit) {
                    break;
                }
            }

            // Закрываем теги
            $lastNode = array_pop($nodeStack);
            $truncated .= '</' . $lastNode . '>';
        }
    };

    // Запуск рекурсивного обхода с корневого элемента
    foreach ($dom->getElementsByTagName('body')->item(0)->childNodes as $node) {
        $truncate($node);
        if ($words >= $limit) {
            break;
        }
    }

    return $truncated;
}




?>
