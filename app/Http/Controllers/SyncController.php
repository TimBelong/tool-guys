<?php

namespace App\Http\Controllers;

use App\Services\SyncService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SyncController extends Controller
{
    private SyncService $syncService;

    public function __construct(SyncService $syncService)
    {
        $this->syncService = $syncService;
    }

    public function syncAll(Request $request)
    {
        $result = $this->syncService->syncAll();
        $resultData = json_decode($result->getContent(), true);

        // Если запрос пришел через AJAX, возвращаем JSON
        if ($request->expectsJson()) {
            return $result;
        }

        // Иначе сохраняем результаты в сессии и перенаправляем обратно
        $statusHtml = $this->formatSyncResultsForSession($resultData);
        return redirect()->back()->with('sync_status', $statusHtml);
    }

    /**
     * Форматирует результаты синхронизации для сохранения в сессии
     */
    private function formatSyncResultsForSession(array $data): string
    {
        $html = '<div class="mb-3">';

        if (isset($data['success']) && $data['success']) {
            $html .= '<h6>Синхронизация успешно завершена!</h6>';

            if (isset($data['details'])) {
                $html .= '<ul class="mb-0">';

                // Категории
                if (isset($data['details']['categories'])) {
                    $cats = $data['details']['categories'];
                    $html .= sprintf(
                        '<li>Категории: обработано %d, удалено %d</li>',
                        $cats['processed'] ?? 0,
                        $cats['deleted'] ?? 0
                    );
                }

                // Состояния
                if (isset($data['details']['states'])) {
                    $states = $data['details']['states'];
                    $html .= sprintf(
                        '<li>Состояния: обработано %d</li>',
                        $states['processed'] ?? 0
                    );
                }

                // Инвентарь
                if (isset($data['details']['inventory'])) {
                    $inv = $data['details']['inventory'];
                    $html .= sprintf(
                        '<li>Инвентарь: обработано %d, удалено %d</li>',
                        $inv['processed'] ?? 0,
                        $inv['deleted'] ?? 0
                    );
                }

                // Медиа
                if (isset($data['details']['media'])) {
                    $media = $data['details']['media'];
                    $html .= sprintf(
                        '<li>Медиа: обработано %d, удалено %d</li>',
                        $media['processed'] ?? 0,
                        $media['deleted'] ?? 0
                    );
                }

                // Опции
                if (isset($data['details']['options'])) {
                    $options = $data['details']['options'];
                    $html .= sprintf(
                        '<li>Опции: обработано %d, удалено %d</li>',
                        $options['processed'] ?? 0,
                        $options['deleted'] ?? 0
                    );
                }

                // Аренды
                if (isset($data['details']['rents'])) {
                    $rents = $data['details']['rents'];
                    $html .= sprintf(
                        '<li>Аренды: создано %d, пропущено %d</li>',
                        $rents['created'] ?? 0,
                        $rents['skipped'] ?? 0
                    );
                }

                // Продукты
                if (isset($data['details']['products'])) {
                    $products = $data['details']['products'];
                    $html .= sprintf(
                        '<li>Продукты: обработано %d, удалено %d</li>',
                        $products['processed'] ?? 0,
                        $products['deleted'] ?? 0
                    );
                }

                $html .= '</ul>';
            }
        } else {
            $html .= '<h6>Ошибка синхронизации</h6>';
            if (isset($data['error'])) {
                $html .= '<p>' . $data['error'] . '</p>';
            }
        }

        $html .= '</div>';

        return $html;
    }
}