<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cache;

class UnlimitedRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        $key = 'requests:' . $ip;

        // Lấy số lượt truy cập từ cache nếu có
        $requestCount = Cache::get($key, 0);

        // Tăng số lượt truy cập của IP hiện tại
        $requestCount++;
        Cache::put($key, $requestCount, 60 * 60); // Sử dụng giá trị trực tiếp cho sessionLifetime

        // Kiểm tra số lượt truy cập hiện tại
        $maxRequests = 200; // Số lượt truy cập tối đa cho mỗi IP

        if ($requestCount > $maxRequests) {
            // Xử lý khi vượt quá số lượt truy cập tối đa
            return response()->json(['message' => 'Quá số lượt truy cập tối đa'], 429);
        }

        return $next($request);
    }
}
