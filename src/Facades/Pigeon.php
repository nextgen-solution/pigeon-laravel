<?php

namespace NextGenSolution\Pigeon\Laravel\Facades;

use Illuminate\Support\Facades\Facade;
use NextGenSolution\Pigeon\Pigeon as BasePigeon;

/**
 * @method static ?array sendMail(string $recipient, string $subject, string $content, ?string $driver = null)
 * @method static ?array sendMailByTemplate(string $recipient, string $template, array $params = [], ?string $driver = null)
 * @method static ?array sendBatchMail(array $requests)
 * @method static ?array sendText(string $recipient, string $content, ?string $driver = null)
 * @method static ?array sendTextByTemplate(string $recipient, string $template, array $params = [], ?string $driver = null)
 * @method static ?array sendBatchText(array $requests)
 * @method static ?array sendNotification(string $target, string $recipient, string $subject, string $content, array $options = [], ?string $driver = null)
 * @method static ?array sendNotificationByTemplate(string $target, string $recipient, string $template, array $params = [], array $options = [], ?string $driver = null)
 * @method static ?array sendBatchNotification(array $requests)
 * @method static ?array sendOTPViaMail(string $recipient, ?string $template = null, array $params = [], ?string $remark = null, ?string $driver = null)
 * @method static ?array sendOTPViaText(string $recipient, ?string $template = null, array $params = [], ?string $remark = null, ?string $driver = null)
 * @method static bool verifyOTP(string $recipient, string $otp, bool $strict = false, ?string $reference = null, ?string $remark = null)
 * @method static void setHttp(\GuzzleHttp\Client $http)
 * @method static \GuzzleHttp\Client getHttp()
 *
 * @see \NextGenSolution\Pigeon\Pigeon
 */
class Pigeon extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BasePigeon::class;
    }
}
