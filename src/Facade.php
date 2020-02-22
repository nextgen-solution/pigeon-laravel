<?php

namespace NextGenSolution\Pigeon\Laravel;

use Illuminate\Support\Facades\Facade as BaseFacade;
use NextGenSolution\Pigeon\Pigeon;

/**
 * @method static ?array sendMail(string $recipient, string $subject, string $content, ?string $driver = null)
 * @method static ?array sendMailByTemplate(string $recipient, string $template, array $params = [], ?string $driver = null)
 * @method static ?array sendBatchMail(array $requests)
 * @method static ?array sendText(string $recipient, string $content, ?string $driver = null)
 * @method static ?array sendTextByTemplate(string $recipient, string $template, array $params = [], ?string $driver = null)
 * @method static ?array sendBatchText(array $requests)
 * @method static ?array sendNotification(string $target, string $recipient, string $subject, string $content, ?string $driver = null)
 * @method static ?array sendNotificationByTemplate(string $target, string $recipient, string $template, array $params = [], ?string $driver = null)
 * @method static ?array sendBatchNotification(array $requests)
 * @method static ?array sendOTPViaMail(string $recipient, string $template, array $params = [], ?string $remark = null, ?string $driver = null)
 * @method static ?array sendOTPViaText(string $recipient, string $template, array $params = [], ?string $remark = null, ?string $driver = null)
 * @method static bool verifyOTP(string $recipient, string $otp, bool $strict = false, ?string $reference = null, ?string $remark = null)
 * @method static void setHttp(\GuzzleHttp\Client $http)
 * @method static \GuzzleHttp\Client getHttp()
 *
 * @see \NextGenSolution\Pigeon\Pigeon
 */
class Facade extends BaseFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Pigeon::class;
    }
}
