<?php
/**
 * @author Dmitry Gladyshev <deel@email.ru>
 * @date 03.05.17 7:46
 */

namespace Yandex\Direct\Service;

use Yandex\Direct\Exception\Exception;
use Yandex\Direct\Service;

final class KeywordsResearch extends Service
{
    /**
     * Для заданных ключевых фраз и регионов формирует предварительный прогноз наличия показов по этим фразам в
     * разбивке по типам устройств. Используется при подборе ключевых фраз.
     *
     * @param $SelectionCriteria
     * @param $FieldNames
     * @return array
     * @throws Exception
     *
     * @see https://tech.yandex.ru/direct/doc/ref-v5/keywordsresearch/hasSearchVolume-docpage/
     */
    public function hasSearchVolume($SelectionCriteria, $FieldNames)
    {
        return $this->request([
            'method' => 'hasSearchVolume',
            'params' => [
                'SelectionCriteria' => $SelectionCriteria,
                'FieldNames' => $FieldNames
            ]
        ]);
    }
}
